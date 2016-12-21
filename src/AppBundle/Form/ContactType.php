<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 20/12/2016
 * Time: 23:27
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('theme', ChoiceType::class, array(
                'choices'  => array(
                    'Nature de la demande' => null,
                    'Problème avec le client' => "Problème avec le client",
                    'Problème avec le travailleur' => "Problème avec le client",
                    'Autre' => "Autre"
                ),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez spécifier votre demande")),
                )

            ))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'Sujet / Titre '),
                'constraints' => array(
                    new NotBlank(array("message" => "Sujet / Titre")),
                )
            ))
            ->add('nom', TextType::class, array('attr' => array('placeholder' => 'nom'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez entrer votre nom")),
                )
            ))
            ->add('prenom', TextType::class, array('attr' => array('placeholder' => 'prénom'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez entrer votre prénom")),
                )
            ))
            ->add('phone', NumberType::class, array('attr' => array('placeholder' => 'téléphone'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez entrer votre numéro")),
                )
            ))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez entrer votre adresse email ")),
                    new Email(array("message" => "Votre Email semble ne pas être valide")),
                )
            ))
            ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'message'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez écrire votre message..")),
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'contact_form';
    }
}