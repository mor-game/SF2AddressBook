<?php

namespace carnet\AddressBookBundle\Controller;

use carnet\AddressBookBundle\Entity\Contact;
use carnet\AddressBookBundle\Form\ContactForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller {

    public function listerAction() {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Contact');

        $listeContacts = $repo->findAll();

        return $this->render('carnetAddressBookBundle:Contact:lister.html.twig', array(
                    "listeContacts" => $listeContacts
        ));
    }
    
    public function detailsAction(\carnet\AddressBookBundle\Entity\Contact $contact)
    {
        
        return $this->render('carnetAddressBookBundle:Contact:details.html.twig', array(
                'contact' => $contact
            ));    }

    public function ajouterAction(Request $request) {

        $contact = new Contact();

//        $annonce = $this->get("carnet_addressbook.contact");

        $form = $this->createForm(new ContactForm(), $contact);

        $form->handleRequest($request);


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $this->get("session")->getFlashBag()->add("success", "Contact enregistré");

            return $this->redirect($this->generateUrl("carnet_addressBook_contact_lister"));
        }

        return $this->render('carnetAddressBookBundle:Contact:ajouter.html.twig', array(
                    "form" =>$form->createView()
        ));
    }

}
