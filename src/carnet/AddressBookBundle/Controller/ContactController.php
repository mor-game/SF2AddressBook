<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{

    public function listerAction()
    {
        $repo = $this->getDoctrine()->getRepository('NextJobsBundle:Annonce');
        
        $listeContactes = $repo->findAll();
        
        return $this->render('AddressBookBundle:Contact:lister.html.twig', array(
                "listeContactes" => $listeContactes
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Contact:ajouter.html.twig', array(
                // ...
            ));    }

}
