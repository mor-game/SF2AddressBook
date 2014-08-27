<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocieteController extends Controller
{
    public function listerAction()
    {
        return $this->render('carnetAddressBookBundle:Societe:lister.html.twig', array(
                // ...
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Societe:ajouter.html.twig', array(
                // ...
            ));    }

}
