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

    
    public function deconnexionAction(){
        $session = $this->get('session');
        $session->clear();
        return $this->redirectToRoute('tbb_gsb_visiteur_homepage');
    }
    
    
    
    
    
    // FONCTIONS
    
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
