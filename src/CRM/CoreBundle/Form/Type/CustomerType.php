<?php
namespace CRM\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('firstName', 'text');
        $builder->add(
            'file',
            'file',
            array(
                'label' => 'avatar',
                 'required' => false
            )
        );
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

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRM\CoreBundle\Entity\Customer',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'customer';
    }
}
