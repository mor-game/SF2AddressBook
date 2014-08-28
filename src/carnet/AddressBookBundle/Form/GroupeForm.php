<?php

namespace carnet\AddressBookBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class GroupeForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        parent::buildForm($builder, $options);
        $builder->add("nom")
                ->add("description")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "GroupeForm";
    }
}
