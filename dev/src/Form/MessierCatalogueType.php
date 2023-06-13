<?php

namespace App\Form;

use App\Entity\MessierCatalogue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessierCatalogueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Messier')
            ->add('NGC')
            ->add('Object_type')
            ->add('Season')
            ->add('Magnitude')
            ->add('Constellation_EN')
            ->add('Constellation_FR')
            ->add('Constellation_Latin')
            ->add('RA_Right_Ascension')
            ->add('Dec_Declinaison')
            ->add('Distance_ly_a_l')
            ->add('Size_Dimension')
            ->add('Discoverer')
            ->add('Year_Annee')
            ->add('Pictures')
            ->add('URL_de_limage')
            ->add('Constellation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MessierCatalogue::class,
        ]);
    }
}
