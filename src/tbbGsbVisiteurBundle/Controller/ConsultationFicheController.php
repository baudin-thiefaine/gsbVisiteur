<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tbbGsbVisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

/**
 * Description of ConsultationFicheController
 *
 * @author developpeur
 */
class ConsultationFicheController extends Controller {
    public function voirFicheAction(){
        
    }
    public function getMoisFicheValiderAction(){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('tbbGsbVisiteurBundle:Fichefrais');
        $session = $this->get('session');
        $idVisi = $session->get('idVisiConnecte');
        $lesFiches = $repository->findBy(array("idvisiteur" => $idVisi,
                                                "idetat" => "VA"));
        return $this->render('@tbbGsbVisiteur/ConsultationFiche/ConsultationFiche.html.twig',
                                array('lesFiches'=>$lesFiches));
    }
    public function getMoisFicheAValiderAction(Request $request){
        $lesFiches = $this->genererMoisItems();
        
        $form = $this->createFormBuilder()
                ->add('fiche', ChoiceType::class, array('choices'=>$lesFiches,'label'=>'mois à selectionner','choice_label'=>'MoisAnnee'))
                ->add('valider', SubmitType::class)
                ->add('annuler', ResetType::class)
                ->getForm();
				
	$form->handleRequest($request);
        if($form->isSubmitted()){
            $laFiche= $form->getData();
            
            
            $lesLignesFraisForfait = $this->getLesLignesFraisForfait($laFiche);
        
            $lesLignesFraisHorsForfait = $this->getLesLignesFraisHorsForfait($laFiche);
            
            
            
            
            
            
            
            return $this->render('@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig', 
                        array('fiche' => $laFiche , 
                                'fraisForfait' =>$lesLignesFraisForfait ,
                                'fraisHorsForfait' => $lesLignesFraisHorsForfait));
        }
        return $this->render('@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheMois.html.twig',
                            array('form'=>$form->createView()));

    }
     
    public function genererMoisItems(){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('tbbGsbVisiteurBundle:Fichefrais');
        $session = $this->get('session');
        $idVisi = $session->get('idVisiConnecte');
        $lesFiches = $repository->findBy(array("idvisiteur" => $idVisi,
                                                "idetat" => "VA"));
        
        
       
    
        return $lesFiches;
        
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
    
}
