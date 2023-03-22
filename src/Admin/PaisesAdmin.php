<?php

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\Form\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PaisesAdmin extends PersonaAdmin{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add("nombre", TextType::class, ['label' => 'Nombre'])
             ->add("prefijo", TextType::class, ['label' => 'Prefijo'])
             ->add("estado", BooleanType::class, ['label' => 'Estado']);       
             
              
             
    }

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter
             ->add("nombre", null, ['label' => "Nombre"])
             ->add("prefijo", null, ['label' => "Prefijo"]) 
             ->add("estado", null, ['label' => "Estado"]);
             
             
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
        ->add("nombre")
        ->add("prefijo") 
        ->add("estado");       
    }
    protected function configureShowFields(ShowMapper $show): void
    {
        $show
        ->add("nombre", null, ["router" => ["name" => "edit"]])
        ->add("prefijo")
        ->add("estado", null, ["editable" => true]);
             
    }


 }

