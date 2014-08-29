<?php

namespace carnet\AddressBookBundle\Form;

class ContactForm extends \Symfony\Component\Form\AbstractType{
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("prenom")
                ->add("nom")
                ->add("email")
                ->add("tel")
                ->add("adresse")
                ->add("cp")
                ->add("ville")
                ->add("societe")
                ->add("groupes")
                ->add("save", "submit");
                
    }
    
    public function getName() {
        return "ContactForm";
    }
}

