<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use carnet\AddressBookBundle\Entity\Societe;
use carnet\AddressBookBundle\Form\SocieteForm;
use Symfony\Component\HttpFoundation\Request;

class SocieteController extends Controller
{
    public function listerAction()
    {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Societe');
        
        $listeSocietes = $repo->findAll();
        
        return $this->render('carnetAddressBookBundle:Societe:lister.html.twig', array(
                "listeSocietes" => $listeSocietes
            ));    }
            
            

    public function ajouterAction(Request $request){
        $societe = new Societe();
        $form = $this->createForm(new SocieteForm(), $societe);
        
        $form->handleRequest($request);
             
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($societe);
            $em->flush();
            
            $this->get("session")->getFlashBag()->add("success", "La société a bien été publiée");
            
            return $this->redirect($this->generateUrl("next_jobs_societe_lister"));
            
        }
        
        return $this->render('carnetAddressBookBundle:Societe:ajouter.html.twig', array(
                "form" => $form->createView()
            ));    }

}
