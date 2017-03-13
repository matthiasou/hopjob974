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

class MontageMeuble extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
        ->add('lieu')
        ->add('nbpersonnes')
        ->add('vehicule')
        ->add('nbmeubles')
        ->add('publier', ButtonType::class, array(
                                            'attr' => array('class' => 'save')))
        //->add('publier', SubmitType::class, array('attr' => array('class' => 'submit_back')))
        ;
    }


}
