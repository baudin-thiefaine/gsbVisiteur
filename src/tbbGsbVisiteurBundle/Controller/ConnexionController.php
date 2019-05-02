<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tbbGsbVisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;



/**
/**
 * Description of connexionController
 *
 * @author developpeur
 */
class ConnexionController extends Controller {
    
    // ACTIONS
    
   
    public function indexAction(){
        return $this->render('@tbbGsbVisiteur/Connexion/pageAccueil.html.twig');
    }
    
    /**
     * @name connexionAction
     * route : /visiteur
     * affiche une page permettant de se connecter et vérifie la connexion. Cette 
     * action crée une session contenant les informations du visiteur connecté 
     * lorsque la connexion est réussie
     * @param Request $request
     */
    public function connexionAction(Request $request){
        $form = $this->createFormBuilder()
	            ->add('NomDUtilisateur', TextType::class)
                    ->add('MotDePasse', PasswordType::class)
                    ->add('valider', SubmitType::class)
                    ->add('annuler', ResetType::class)
                    ->getForm();
				
	$form->handleRequest($request);
	if($form->isSubmitted()){
            $data = $form->getData();
            $login = $data["NomDUtilisateur"];
            $mdpVisiteur = $data["MotDePasse"];
            $route = $this->verifConnexion($login, $mdpVisiteur);
            return ($this->render($route));
	}
        
        return $this->render('@tbbGsbVisiteur/Connexion/connexion.html.twig',
                            array('form'=>$form->createView()));
        
    }

    /**
     * @name deconnexionAction
     * route : /deconnexion
     * Supprime la session de l'utilisateur, et renvoie sur la page de connexion
     */
    public function deconnexionAction(){
        $session = $this->get('session');
        $session->clear();
        return $this->redirectToRoute('tbb_gsb_visiteur_homepage');
    }
    
    
    
    
    
    // FONCTIONS
    
    /**
     * 
     * @name verifConnexion
     * permet de vérifier si les informations de connexions correspondent à un visiteur
     * 
     * @param String $nomCo login du visiteur
     * @param String $mdp mot de passe du visiteur
     * @return String la route vers la vue à afficher
     */
    public function verifConnexion($nomCo, $mdp){
        $password = sha1($mdp);
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:Visiteur');
        $leVisiteur = $repository->findOneBy(["login" => $nomCo]);
        if($leVisiteur == NULL){
            return ('@tbbGsbVisiteur/Connexion/connexionErreur.html.twig');
        }
        else{
            if($leVisiteur->getMdp() == $password){
                $idVisi = $leVisiteur->getId();
                $session = $this->get('session');
                $session->clear();
                $session->set('idVisiConnecte', $idVisi);
                
                return ('@tbbGsbVisiteur/Connexion/pageAccueil.html.twig');
            }
            else{
                return ('@tbbGsbVisiteur/Connexion/connexionErreur.html.twig');
            }
        }
    }
}
