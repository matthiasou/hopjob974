<?php

namespace Hopjob\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse1');
        $builder->add('adresse2', TextType::class, array('required' => false));
        $builder->add('codePostal');
        $builder->add('ville', EntityType::class, array(
            'class' => 'FrontBundle:Ville',
            'choice_label' => 'libelle',
        ));

    }
   
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hopjob\FrontBundle\Entity\Adresse'
        ));
    }
  
    /**
     * @return string
     */
    public function getName()
    {
        return 'hopjob_frontbundle_adresse';
    }

}