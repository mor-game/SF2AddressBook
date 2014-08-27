<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{

    public function listerAction()
    {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Contact');
        
        $listeContacts = $repo->findAll();
        
        return $this->render('carnetAddressBookBundle:Contact:lister.html.twig', array(
                "listeContacts" => $listeContacts
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Contact:ajouter.html.twig', array(
                // ...
            ));    }

}
