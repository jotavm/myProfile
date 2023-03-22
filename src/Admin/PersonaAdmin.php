<?php

namespace App\Admin;

use App\Entity\Paises;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\Form\Type\BooleanType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PersonaAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add("identificacion", TextType::class, ['label' => 'Identificacïon'])
            ->add("pais" , EntityType::class, ["class" => Paises::class, "choice_label" => "nombre", "label" => "paises"])
             ->add("correo", EmailType::class, ['label' => 'Correo'])
             ->add("primernombre", TextType::class, ['label' => 'Primer Nombre'])        
             ->add("segundonombre", TextType::class, ['label' => 'Segundo Nombre' , 'required' => false])
             ->add("primerapellido", TextType::class, ['label' => 'Primer Apellido'])
             ->add("segundoapellido", TextType::class, ['label' => 'Segundo Apellido', 'required' => false])
             ->add("fechanacimiento", DateType::class,
              ['label' => 'Fecha de Nacimineto', 'years' => range(date('Y')-100,date ('Y')-1)])
              ->add("estado", BooleanType::class, ['label' => 'Estado']);
             
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
        $list
        ->addIdentifier("identificacion", null,
         [
            "route" => ["name" => "edit"],
            "label" => "identificacion",
         ])
             ->add("primernombre", null,
             [
                "label" => "Nombre",
             ])  
             
             ->add("primerapellido", null,
            [
                "label" => "Apellido",
            ] )
             ->add("correo", null,
             [
                "label" => "Correo",
             ])
             ->add("fechanacimiento", null,
             [
                "label" => "Fechana de cimiento",
             ])
              ->add("pais", null,
              [
                "label" => "pais",
              ])
             ->add("estado", null, ["edittable" => true]);        
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

