<?php

namespace carnet\AddressBookBundle\Controller;

use carnet\AddressBookBundle\Entity\Groupe;
use carnet\AddressBookBundle\Form\GroupeForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GroupeController extends Controller {

    public function listerAction() {
        $repo = $this->getDoctrine()->getRepository('carnetAddressBookBundle:Groupe');

        $listeGroupes = $repo->findAll();

        return $this->render('carnetAddressBookBundle:Groupe:lister.html.twig', array(
                    'listeGroupes' => $listeGroupes
        ));
    }

    public function ajouterAction(Request $request) {
        $groupe = new Groupe();
        $form = $this->createForm(new GroupeForm(), $groupe);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->flush();

            $this->get("session")->getFlashBag()->add("success", "groupe bien ajouté");

            return $this->redirect($this->generateUrl("carnet_addressBook_groupe_lister"));
        }

        return $this->render('carnetAddressBookBundle:Groupe:ajouter.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    public function detailsAction(\carnet\AddressBookBundle\Entity\Groupe $groupe) {

        return $this->render('carnetAddressBookBundle:Groupe:details.html.twig', array(
                    "groupe" => $groupe
        ));
    }

}
