<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PersonaAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add("identificacion", TextType::class, ['label' => 'Identificacïon'])
             ->add("correo", EmailType::class, ['label' => 'Correo'])
             ->add("primernombre", TextType::class, ['label' => 'Primer Nombre'])        
             ->add("segundonombre", TextType::class, ['label' => 'Segundo Nombre' , 'required' => false])
             ->add("primerapellido", TextType::class, ['label' => 'Primer Apellido'])
             ->add("segundoapellido", TextType::class, ['label' => 'Segundo Apellido', 'required' => false])
             ->add("fechanacimiento", DateType::class,
              ['label' => 'Fecha de Nacimineto', 'years' => range(date('Y')-100,date ('Y')-1)]);
             
    }

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter->add("identificacion")
             ->add("correo")
             ->add("primernombre") 
             ->add("segundonombre")
             ->add("primerapellido")
             ->add("segundoapellido")
             ->add("fechanacimiento");
             
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list->add("identificacion")
             ->add("correo")
             ->add("primernombre") 
             ->add("segundonombre")
             ->add("primerapellido")
             ->add("segundoapellido")
             ->add("fechanacimiento");
             
    }
    protected function configureShowFields(ShowMapper $show): void
    {
        $show->add("identificacion")
             ->add("correo")
             ->add("primernombre")        
             ->add("segundonombre")
             ->add("primerapellido")
             ->add("segundoapellido")
             ->add("fechanacimiento");
             
    }


 }

