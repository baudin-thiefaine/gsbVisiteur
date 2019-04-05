<?php

namespace tbbGsbVisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tbbGsbVisiteurBundle\Entity\Lignefraisforfait;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function testAjoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository= $em->getRepository('tbbGsbVisiteurBundle:Lignefraisforfait');
        $repFiche= $em->getRepository('tbbGsbVisiteurBundle:Fichefrais');
        $repFrais= $em->getRepository('tbbGsbVisiteurBundle:fraisforfait');
        
        $fiche = $repFiche->find(1);
        $frais = $repFrais->find('KM');
        
        $ligne = new Lignefraisforfait();
        $ligne->setQuantite(6663);
        $ligne->setIdFraisForfait($frais);
        $ligne->setIdfichefrais($fiche);
        
        $em->persist($ligne);
        $em->flush();
        
        return new Response('hello');
    }
}
