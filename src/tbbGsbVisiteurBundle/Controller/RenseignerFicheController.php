<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tbbGsbVisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;
use tbbGsbVisiteurBundle\Entity\Fichefrais;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \tbbGsbVisiteurBundle\Entity\Fraisforfait;
use \tbbGsbVisiteurBundle\Entity\Lignefraisforfait;
use \tbbGsbVisiteurBundle\Entity\Lignefraishorsforfait;


/**
 * Description of RenseignerFicheController
 *
 * @author developpeur
 */
class RenseignerFicheController extends Controller {
    
    //AJOUTER LES LIGNES + BOUTONS POUR AJOUTER
    public function renseignerFicheAction(){
        $moisEnCours = $this->getMoisEnCours();
        $annee = date('Y');
        //on récupere la fiche concernant le mois en cours
        $laFiche = $this->getFicheARenseigner($moisEnCours, $annee);
        //on récupere les lignes de frais qui concernent cette fiche
        $lesLignesFraisForfait = $this->getLesLignesFraisForfait($laFiche);
        $lesLignesFraisHorsForfait = $this->getLesLignesFraisHorsForfait($laFiche);
        
        $formFraisForfait = $this->formAjouterFrais($laFiche);
        
        $formFraisForfait->initialize();
        //////////////////////////////////////////////////////////
        
        $request = Request::createFromGlobals();
        dump ("form Forfait");
        dump($formFraisForfait->isSubmitted());
        
        $vueformForfait = $formFraisForfait->createView();
        $formFraisForfait->handleRequest($request);
	if( $formFraisForfait->isSubmitted()){
            
            $data = $formFraisForfait->getData();
            $idFrais = $data["LibelleDuFrais"];
            $qte = $data["Quantite"];
            
            $this->ajouterFraisForfait($idFrais, $qte, $laFiche);
            return $this->redirectToRoute('tbb_gsb_visiteur_renseignerFiche');
	}
	 
        
        ///////////////////////////////////////////////////////////
        
        return $this->render('@tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig', 
                array('fiche' => $laFiche , 
                      'fraisForfait' =>$lesLignesFraisForfait ,
                      'fraisHorsForfait' => $lesLignesFraisHorsForfait,
                      'formFraisForfait' => $vueformForfait
                ));
    }
    
    
    public function renseignerFraisHorsForfaitAction(){
        $moisEnCours = $this->getMoisEnCours();
        $annee = date('Y');
        //on récupere la fiche concernant le mois en cours
        $laFiche = $this->getFicheARenseigner($moisEnCours, $annee);
        //on récupere les lignes de frais qui concernent cette fiche
        $lesLignesFraisForfait = $this->getLesLignesFraisForfait($laFiche);
        $lesLignesFraisHorsForfait = $this->getLesLignesFraisHorsForfait($laFiche);
        
        $formFraisHorsForfait = $this->formAjouterFraisHorsForfait($laFiche); //on récup le formulaire d'ajout
        
        $formFraisHorsForfait->initialize();
        
        
        $vueformHorsForfait = $formFraisHorsForfait->createView();
        $request = Request::createFromGlobals();
        $formFraisHorsForfait->handleRequest($request);
        
        
        dump ("form FraisHorsForfait");
        dump($formFraisHorsForfait->isSubmitted());
	if($formFraisHorsForfait->isSubmitted()){
            
            $data2 = $formFraisHorsForfait->getData();
            $libelle = $data2["Libelle"];
            $montant = $data2["Montant"];
            $date = $data2["Date"];
            $this->ajouterFraisHorsForfait($libelle, $montant,$date, $laFiche);
            return $this->redirectToRoute('tbb_gsb_visiteur_renseignerFiche');
            
        }     
        
        return $this->render('@tbbGsbVisiteur/RenseignerFiche/pageAjoutFraisHorsForfait.html.twig', 
                array('fiche' => $laFiche , 
                      'fraisForfait' =>$lesLignesFraisForfait ,
                      'fraisHorsForfait' => $lesLignesFraisHorsForfait,
                      'formFraisHorsForfait' => $vueformHorsForfait
                ));
    }
    
    
    
    public function formAjouterFraisHorsForfait($laFiche){
        //$request2 = Request::createFromGlobals();
        $form2 = $this->createFormBuilder()
                      ->add('Libelle',TextType::class)
                      ->add('Montant', MoneyType::class)
                      ->add ('Date', DateType::class )
                      ->add('valider', SubmitType::class)
                      ->add('annuler', ResetType::class)
                      ->getForm();
				
	/*
        $form2->handleRequest($request2);
	if($form2->isSubmitted()){
            
            $data2 = $form2->getData();
            $libelle = $data2["Libelle"];
            $montant = $data2["Montant"];
            $date = $data2["Date"];
            $this->ajouterFraisHorsForfait($libelle, $montant,$date, $laFiche);
            
	}
        */
        
        
        return $form2;
        
    }
    
    public function ajouterFraisHorsForfait($libelle, $montant,$date, $laFiche){
        $em = $this->getDoctrine()->getManager();
        
        $ligneHorsForfait = new Lignefraishorsforfait();
        $ligneHorsForfait->setLibelle($libelle);
        $ligneHorsForfait->setDate($date);
        $ligneHorsForfait->setMontant($montant);
        $ligneHorsForfait->setIdfichefrais($laFiche);
        
        
        
        $em->persist($ligneHorsForfait);
        $em->flush();
        
        //return $this->redirectToRoute('tbb_gsb_visiteur_renseignerFiche');
        
    }
    
    
    
    public function formAjouterFrais($laFiche){
        //$request = Request::createFromGlobals();
        $lesFrais = $this->getLesLibellesFrais();
        $form = $this->createFormBuilder()
                    ->add('LibelleDuFrais', EntityType::class, array(
                        'class' => Fraisforfait::class,
                        'choice_label' => function($ficheFrais){
                        return $ficheFrais->__toString();
                        }
                    ))
                
                    ->add('Quantite', NumberType::class)
                    ->add('valider', SubmitType::class)
                    ->add('annuler', ResetType::class)
                    
                    ->getForm();
				
	/*
        $form->handleRequest($request);
	if($form->isSubmitted()){
            
            $data = $form->getData();
            $idFrais = $data["LibelleDuFrais"];
            $qte = $data["Quantite"];
            $this->ajouterFraisForfait($idFrais, $qte, $laFiche);
            
	}
        
        */
        
        return $form ;//->createView();
        
    }
    
    public function getLesLibellesFrais(){
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:FraisForfait');
        $lesLibelles = $repository->findAll();
        
        return $lesLibelles;
    }
    
    
    public function ajouterFraisForfait($idFrais, $qte, $laFiche){
        $em = $this->getDoctrine()->getManager();
        
        $ligne = $this->getLaLigne($laFiche, $idFrais);
        dump($ligne);
        if($ligne !=null){
            $qteInitiale = $ligne->getQuantite();
            $ligne->setQuantite($qte+$qteInitiale);
        }
        
        else{
            $ligne = new Lignefraisforfait();
            $ligne->setIdFraisForfait($idFrais);
            $ligne->setQuantite($qte);
            $ligne->setIdfichefrais($laFiche);
        }
        
        
        $em->persist($ligne);
        $em->flush();
        
        //return $this->redirectToRoute('tbb_gsb_visiteur_renseignerFiche');
        
    }
    
    
    public function getLaLigne($idFiche, $idFrais){
         $em = $this->getDoctrine()->getManager();
         $repository= $em->getRepository('tbbGsbVisiteurBundle:Lignefraisforfait');
         $laLigne = $repository->findOneBy(array("idfichefrais"=>$idFiche,"idFraisForfait"=>$idFrais ));
         return $laLigne;
    }
    

    
    public function getLesLignesFraisForfait($uneFiche){
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:Lignefraisforfait');
        $lesFraisForfait = $repository->findBy(array("idfichefrais" => $uneFiche));
        return $lesFraisForfait;
    }
    
    public function getLesLignesFraisHorsForfait($uneFiche){
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:Lignefraishorsforfait');
        $lesFraisForfait = $repository->findBy(array("idfichefrais" => $uneFiche));
        return $lesFraisForfait;
    }
    
    
    public function getMoisEnCours(){
        $lesDatesFr = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre","novembre",  "décembre");
        $numeroMois= date('n')-1;
        $dateFiche = $lesDatesFr[$numeroMois];
        return $dateFiche;
    }
    
    public function getMoisPrecedent(){
        $lesMois = array("decembre","janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre","novembre",  "décembre");
        
        $numeroMoisPreced = date('n')-1;
        
        
        $moisPreced = $lesMois[$numeroMoisPreced];
        return $moisPreced;
    }
    
    public function getFicheARenseigner($mois, $annee){
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:Fichefrais');
        $session = $this->get('session');
        $idVisi = $session->get('idVisiConnecte');
        $laFiche = $repository->findOneBy(array("idvisiteur" => $idVisi,
                                                "mois" => $mois,
                                                "annee" => $annee
                                                ));
        
        if(!$laFiche){
            //on cloture l'ancienne fiche
            $moisPrecedent = $this->getMoisPrecedent();
            $anneePrecedente = $annee;
            if ($moisPrecedent == 'decembre'){
                $anneePrecedente--;
            }
            
            
            
            
            $this->cloreFiche($moisPrecedent, $anneePrecedente);
            
            //on crée la nvelle fiche
            $laFiche = $this->creerFiche($mois, $annee);

        }
        
        
        return $laFiche;
        
    }
    
    public function cloreFiche($moisPrecedent, $anneePrecedente){
        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();
        $repository_etat= $em->getRepository('tbbGsbVisiteurBundle:Etat');
        $repository_fiche= $em->getRepository('tbbGsbVisiteurBundle:Fichefrais');
        
        $etat = $repository_etat->findOneBy(array("id" => 'CL'));
        $laFiche = $repository_fiche->findOneBy(array("idvisiteur" => $session->get('idVisiConnecte'),
                                                "mois" => $moisPrecedent,
                                                "annee" => $anneePrecedente
                                                ));
        
        if($laFiche != NULL){
            $laFiche->setIdEtat($etat);
            $em->persist($laFiche);
            $em->flush();
        }
    }
    
    public function creerFiche($mois, $annee){
        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();
        $repository_etat= $em->getRepository('tbbGsbVisiteurBundle:Etat');
        $repository_visi= $em->getRepository('tbbGsbVisiteurBundle:Visiteur');
        
        $etat = $repository_etat->findOneBy(array("id" => 'CR'));
        $visiEnCours = $repository_visi->findOneBy(array("id" => $session->get('idVisiConnecte')));
        $date = new DateTime('now');
        
        
        //on crée l'objet que l'on va ensuite persitster dans la BDD
        $ficheACreer = new Fichefrais();
        $ficheACreer->setAnnee($annee);
        $ficheACreer->setMois($mois);
        $ficheACreer->setMontantvalide(NULL);
        $ficheACreer->setIdetat($etat);
        $ficheACreer->setIdvisiteur($visiEnCours);
        $ficheACreer->setDatemodif($date);
        $ficheACreer->setNbjustificatifs(0);
        
        //on persiste l'objet
        
        $em->persist($ficheACreer);
        $em->flush();
        
        
        return $ficheACreer;
        
    }
    
    
    
}
