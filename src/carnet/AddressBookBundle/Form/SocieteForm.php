<?php

namespace carnet\AddressBookBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class SocieteForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        parent::buildForm($builder, $options);
        $builder->add("nom")
                ->add("adresse")
                ->add("ville")
                ->add("cp")
                ->add("societe_id_societe")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "SocieteForm";
    }
}
