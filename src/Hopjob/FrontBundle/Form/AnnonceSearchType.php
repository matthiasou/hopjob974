<?php

namespace Hopjob\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Hopjob\FrontBundle\Entity\Horaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class AnnonceSearchType extends AbstractType

{

public function buildForm(FormBuilderInterface $builder, array $options)

{

$builder
->add('domaine', EntityType::class, array(
            'class' => 'FrontBundle:Domaine',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('domaine')->orderBy('domaine.libelle', 'ASC');
             }))
->add('ville', EntityType::class, array(
            'class' => 'FrontBundle:Ville',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('ville')->orderBy('ville.libelle', 'ASC');
             }))
->add('rechercher', ButtonType::class, array(
                                            'attr' => array('class' => 'save')));

}

public function getName()

{

return 'Hopjob_frontbundle_rechercheannonces';

}

}