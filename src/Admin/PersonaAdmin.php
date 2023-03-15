<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonaAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add("primernombre", TextType::class);
    }


    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter->add("primernombre");
    }
    protected function configureListFields(ListMapper $list): void
    {
        $list->add("primernombre");
    }
    protected function configureShowFields(ShowMapper $show): void
    {
        $show->add("primernombre");
    }

    }

