<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Images;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label'=>' '
            ])
            ->add('description', TextType::class, [
                'label'=>' '
            ])
            ->add('prix', TextType::class, [
                'label'=>' '
            ])
            // ->add('image', EntityType::class, [
            //     'class' => Images::class,
            //     'label'=>' '
            // ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'label'=>' '
            ])
            ->add('Valider', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
