<?php

namespace Hopjob\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('dateNaissance', DateType::class, array(
            'widget' => 'single_text',
        ));        
        $builder->add('adresse', EntityType::class, array(
            'class' => 'FrontBundle:Adresse',
            'choice_label' => 'libelle',
        ));
        $builder->add('description');
        $builder->add('typeUtilisateur', EntityType::class, array(
            'class' => 'FrontBundle:TypeUtilisateur',
            'choice_label' => 'libelle',
        ));
        $builder->add('domaines', EntityType::class, array(
            'class' => 'FrontBundle:Domaine',
            'choice_label' => 'libelle',
        ));  
        $builder->add('metier');
        $builder->add('ville', EntityType::class, array(
            'class' => 'FrontBundle:Ville',
            'choice_label' => 'nom',
        ));    
        $builder->add('civilite', EntityType::class, array(
            'class' => 'FrontBundle:Civilite',
            'choice_label' => 'libelle',
            'multiple' => false,
            'expanded' => true
        ));   
        $builder->add('moyenneNotation', HiddenType::class, array(
            'data' => 0,
        ));
        $builder->add('username', HiddenType::class, array(
            'data' => mt_rand(),
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