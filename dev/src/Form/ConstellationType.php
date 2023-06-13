<?php

namespace App\Form;

use App\Entity\Constellation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConstellationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Observation_Season')
            ->add('Code_Constellation')
            ->add('Latin_name')
            ->add('French_name')
            ->add('English_name')
            ->add('area_in_square_degrees')
            ->add('Dec_Declinaison')
            ->add('RA_Right_Ascension')
            ->add('Principal_star')
            ->add('area_celestial_sphere')
            ->add('zone_celestial_equator')
            ->add('zone_ecliptic')
            ->add('zone_Milky_Way')
            ->add('Quad')
            ->add('Name_origin')
            ->add('Pictures')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Constellation::class,
        ]);
    }
}
