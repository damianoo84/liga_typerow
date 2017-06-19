<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\League;

class MeetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('hostGoals')
                ->add('guestGoals')
                ->add('term')
                ->add('position')
                ->add('createdAt')
                ->add('updatedAt')
                ->add('hostTeam')
                ->add('guestTeam')
                ->add('matchday')
                ->add('league')
//                ->add('league', 'collection', array(
//                    'type' => new League(),
//                    'allow_add' => true,
//                    'allow_delete' => true,
//                    'by_reference' => false,)
//                )
            ;
        
//        exit(\Doctrine\Common\Util\Debug::dump($builder));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Meet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_meet';
    }


}
