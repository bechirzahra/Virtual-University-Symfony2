<?php


namespace MyApp\UlearnBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluationForm extends AbstractType{
    //put your code here
     public function buildForm(FormBuilderInterface $builder, array $options)
    {		
	$builder
			->add('commentaire','textarea');
			// ->add('note','text')
            	
                
        
    }
        public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
            
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\UlearnBundle\Entity\Evaluation'
        ));
    }

    public function getName()
    {
        return 'evaluation';
    }


}
