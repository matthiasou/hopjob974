<?php

namespace Hopjob\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('dateNaissance');
        $builder->add('adresse');
        $builder->add('ville');
        $builder->add('description');
        $builder->add('civilite');
    
        $builder->add('domaine', EntityType::class, array(
            'class' => 'FrontBundle:Domaine',
            'choice_label' => 'libelle',
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getNom()
    {
        return $this->getBlockPrefix();
    }

    public function getPrenom()
    {
        return $this->getBlockPrefix();
    }

    public function getDateNaissance()
    {
        return $this->getBlockPrefix();
    }

    public function getAdresse()
    {
        return $this->getBlockPrefix();
    }

    public function getVille()
    {
        return $this->getBlockPrefix();
    }

    public function getDescription()
    {
        return $this->getBlockPrefix();
    }

    public function getCivilite()
    {
        return $this->getBlockPrefix();
    }

    public function getDomaine()
    {
        return $this->getBlockPrefix();
    }
}