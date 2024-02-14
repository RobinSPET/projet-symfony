<?php

namespace App\Form;

use App\Entity\Images;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('url', TextType::class, [
                'label'=>' '
            ])
            ->add('attachedProduct', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'titre'
            ])
            ->add('Valider', SubmitType::class);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Images::class,
        ]);
    }
}
