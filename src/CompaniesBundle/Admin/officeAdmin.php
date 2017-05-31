<?php

namespace CompaniesBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
 
class officeAdmin extends Admin
{
  /**
   * Конфигурация формы редактирования записи
   * 
   * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
   */
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
     
      ->add('company', 'entity', array(
            'class' => 'CompaniesBundle:Company',
            'choice_label' => 'name',
            'label' => 'Company name'
            ))
      ->add ('phone')
      ->add('officeAdress');  
  }
 
  /**
   * Конфигурация списка записей
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id', null, array('label' => 'Office_id'))
      ->add('CompanyID', null, array('label' => 'Компанія'))
      ->add('officeAdress', null, array('label' => 'Адреса'));
      
        
  }
 
  /**
   * Поля, по которым производится поиск в списке записей
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('officeAdress', null, array('label' => 'Адреса'));
  }   
}