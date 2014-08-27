<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupeController extends Controller
{
    public function listerAction()
    {
        return $this->render('carnetAddressBookBundle:Groupe:lister.html.twig', array(
                // ...
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Groupe:ajouter.html.twig', array(
                // ...
            ));    }

}
