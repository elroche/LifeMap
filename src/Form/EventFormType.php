<?php

namespace App\Form;

use App\Entity\Api;
use App\Entity\Database;
use App\Entity\Event;
use App\Entity\EventType;
use App\Entity\Framework;
use App\Entity\Library;
use App\Entity\ProjectManagement;
use App\Entity\Skill;
use App\Entity\Technology;
use App\Entity\Tool;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('details')
            ->add('startDate', null, [
                'widget' => 'single_text'
            ])
            ->add('endDate', null, [
                'widget' => 'single_text'
            ])
            ->add('datePrecision')
            ->add('effectif')
            ->add('isFavorite')
            ->add('eventType', EntityType::class, [
                'class' => EventType::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('technologies', EntityType::class, [
                'class' => Technology::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('tools', EntityType::class, [
                'class' => Tool::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('skills', EntityType::class, [
                'class' => Skill::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('frameworks', EntityType::class, [
                'class' => Framework::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('databaseList', EntityType::class, [
                'class' => Database::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('apis', EntityType::class, [
                'class' => Api::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('projectManagements', EntityType::class, [
                'class' => ProjectManagement::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('libraries', EntityType::class, [
                'class' => Library::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
