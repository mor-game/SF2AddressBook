<?php

namespace carnet\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller {

    public function listerAction() {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Contact');

        $listeContacts = $repo->findAll();

        return $this->render('carnetAddressBookBundle:Contact:lister.html.twig', array(
                    "listeContacts" => $listeContacts
        ));
    }

    public function ajouterAction(Request $request) {
        
        $contact = $this->get("carnet_addressbook.contact");
        
        $form = $this->createForm("ContactForm", $contact);
        
        $form->handleRequest($request);       
 

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            
            $this->get("session")->getFlashBag()->add("success", "L'annonce a bien été publiée");

            return $this->redirect($this->generateUrl("carnet_addressBook_contact_lister"));
        }

        return $this->render('carnetAddressBookBundle:Contact:ajouter.html.twig', array(
            "form" => createView()
        ));
    }

}
