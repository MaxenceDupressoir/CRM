<?php
namespace CRM\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('firstName', 'text');
        $builder->add('email', 'email');
        $builder->add('phone', 'number');
        $builder->add(
            'landLine',
            'number',
            array(
                'required' => false
            )
        );
        $builder->add(
            'newsLetter',
            'checkbox',
            array(
                'required' => false
            )
        );
        $builder->add(
            'type',
            'entity',
            array(
                'class' => 'CRMCoreBundle:CustomerType',
            )
        );
        $builder->add(
            'status',
            'entity',
            array(
                'class' => 'CRMCoreBundle:Status',
            )
        );
    }

    public function getName()
    {
        return 'customer';
    }
}
