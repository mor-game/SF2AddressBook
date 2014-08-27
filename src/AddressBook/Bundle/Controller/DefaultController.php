<?php

namespace AddressBook\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AddressBookBundle:Default:index.html.twig', array('name' => $name));
    }
}
