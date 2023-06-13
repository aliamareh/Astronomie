<?php

namespace App\Form;

use App\Entity\ObjetCeleste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjetCelesteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('IC_NGC')
            ->add('Name')
            ->add('NGC')
            ->add('IC')
            ->add('Object_Type_abrev')
            ->add('Object_type')
            ->add('ra')
            ->add('declinaison')
            ->add('Major_axis')
            ->add('Minor_axis')
            ->add('Position_angle')
            ->add('b_mag')
            ->add('v_mag')
            ->add('j_mag')
            ->add('h_mag')
            ->add('k_mag')
            ->add('Surface_Brigthness')
            ->add('Hubble_Galaxies')
            ->add('Cstar_UMag')
            ->add('Cstar_BMag')
            ->add('Cstar_VMag')
            ->add('Cstar_Names')
            ->add('identifiers')
            ->add('common_names')
            ->add('ned_notes')
            ->add('openngc_notes')
            ->add('Pictures')
            ->add('Messier')
            ->add('Code_Constellation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ObjetCeleste::class,
        ]);
    }
}
