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

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre')
        ->add('nbPersonnes')
        ->add('vehicule')
        ->add('dateFixe')
        ->add('dateLimite')
        ->add('prixTotal')
        ->add('telephone')
        ->add('description')
        ->add('horaire', EntityType::class, array(
            'class' => 'FrontBundle:Horaire',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('horaire')->orderBy('horaire.libelle', 'ASC');
             },
            'placeholder' => 'Choisir l horaire',
            'expanded' => false,
            'multiple' => false,
            'label' => 'Horaire',
            'required' => false,
            'choice_label' => 'libelle'
        ))
        ->add('typeVehicule', EntityType::class, array(
            'class' => 'FrontBundle:typeVehicule',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('typeVehicule')->orderBy('typeVehicule.libelle', 'ASC');
             },
            'placeholder' => 'Choisir le type de vehicule',
            'expanded' => false,
            'multiple' => false,
            'label' => 'Type de vehicule',
            'required' => false,
            'choice_label' => 'libelle'
        ))
        ->add('user', EntityType::class, array(
            'class' => 'FrontBundle:User',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('user')->orderBy('user.nom', 'ASC');
             },
            'placeholder' => 'Choisir l utilisateur',
            'expanded' => false,
            'multiple' => false,
            'label' => 'Utilisateur',
            'required' => false,
            'choice_label' => 'nom'
        ))
        ->add('ville', EntityType::class, array(
            'class' => 'FrontBundle:Ville',
            'query_builder' => function(EntityRepository $repository) {
            return $repository->createQueryBuilder('ville')->orderBy('ville.libelle', 'ASC');
             },
            'placeholder' => 'Choisir la ville',
            'expanded' => false,
            'multiple' => false,
            'label' => 'Ville',
            'required' => false,
            'choice_label' => 'libelle'
        ))
        ->add('publier', ButtonType::class, array(
                                            'attr' => array('class' => 'save')))
        //->add('publier', SubmitType::class, array('attr' => array('class' => 'submit_back')))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hopjob\FrontBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hopjob_frontbundle_annonce';
    }


}
