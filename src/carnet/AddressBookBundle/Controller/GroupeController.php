<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupeController extends Controller
{
    public function listerAction()
    {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Groupe');
        
        $listeGroupes = $repo->findAll();
        
        return $this->render('carnetAddressBookBundle:Groupe:lister.html.twig', array(
                'listeGroupes' => $listeGroupes
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Groupe:ajouter.html.twig', array(
                // ...
            ));    }

}
