<?php

namespace CompaniesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class personAdmin extends Admin
{
  /**
   * Конфигурация формы редактирования записи
   * 
   * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
   */
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
    ->add('name')
    ->add('phone')
    ->add('office', 'entity', array(
            'class' => 'CompaniesBundle:office',
            'choice_label' => 'officeAdress'))
   ->add('company', 'entity', array(
            'class' => 'CompaniesBundle:company',
            'choice_label' => 'name'));

  }

  /**
   * Конфигурация списка записей
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
    ->addIdentifier('id', null, array('label' => 'Person_id'))
    ->add('name', null, array('label' => 'Імя'))
    ->add('office', null, array('label' => 'Офіс в якому працює'))
    ->add('phone', null, array('label' => 'Номер телефону'));         


  }

  /**
   * Поля, по которым производится поиск в списке записей
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
    ->add('id', null, array('label' => 'Айді персони'))
    ->add('name', null, array('label' => 'Імя'))
    ->add('office', null, array('label' => 'Офіс'));
  }   
}