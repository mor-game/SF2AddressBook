<?php

namespace carnet\AddressBookBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocieteController extends Controller
{
    public function listerAction()
    {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Societe');
        
        $listeSocietes = $repo->findAll();
        
        return $this->render('carnetAddressBookBundle:Societe:lister.html.twig', array(
                "listeSocietes" => $listeSocietes
            ));    }

    public function ajouterAction()
    {
        return $this->render('carnetAddressBookBundle:Societe:ajouter.html.twig', array(
                // ...
            ));    }

}
