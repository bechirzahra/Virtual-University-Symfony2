<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $years = range( date('Y') - 60, date('Y') - 16 );
		$builder
            ->add('sexe', 'choice', array(
								'label' => 'Sexe', 
								'expanded' => true, 
								'choices' => array('Femme' => 'Femme', 'Homme' => 'Homme')
							))
			 ->add('nom', null, array('label' => 'Nom'))
			 ->add('prenom', null, array('label' => 'Prénom'))
			 ->add('naissance', 'date', array(
							'label' => 'Date de naissance',
							'years' => array_combine($years, $years),
							))
			
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('roles', 'collection', array(
                'type' => 'choice',
                   'options' => array(
                       'label' => false,
                'choices' => array(
                'ROLE_ENSEIGNANT' => 'Enseignant',
                'ROLE_ETUDIANT' => 'Etudiant',
                'ROLE_CHEFENTREPRISE' => 'ChefEntreprise'
            ),
            'required'    => false,
            'empty_value' => 'Choisir le role',
            'empty_data'  => null
        )))    
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    public function getName()
    {
        return 'fos_user_registration';
    }
}
