<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('required' => true));
        $builder->add('datedebut', DateType::class, array('required' => true));
        $builder->add('datefin', DateType::class, array('required' => true));
        $builder->add('lieu', TextType::class, array('required' => true));
        
        $builder->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
    
    public function getName()
    {
        return 'formation';
    }
    
    public function getDatedebut()
    {
        return 'formation';
    }
    
    public function getDatefin()
    {
        return 'formation';
    }
    
    public function getLieu()
    {
        return 'formation';
    }
}
