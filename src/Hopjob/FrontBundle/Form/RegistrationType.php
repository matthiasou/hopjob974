<?php

namespace Hopjob\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Hopjob\FrontBundle\Form\AdresseType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('description');
        $builder->add('dateNaissance', DateType::class, array(
            'widget' => 'single_text',
        ));        
        $builder->add('adresse', AdresseType::class);

        $builder->add('civilite', EntityType::class, array(
            'class' => 'FrontBundle:Civilite',
            'choice_label' => 'libelle',
        ));   

        $builder->remove('username');

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