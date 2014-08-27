<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function ContactAction()
    {
        return $this->render('carnetAddressBookBundle:Contact:Contact.html.twig', array(
                // ...
            ));    }

    public function listerAction()
    {
        return $this->render('carnetAddressBookBundle:Contact:lister.html.twig', array(
                // ...
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Contact:ajouter.html.twig', array(
                // ...
            ));    }

}
