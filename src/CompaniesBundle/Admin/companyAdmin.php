<?php


namespace CompaniesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class companyAdmin extends Admin
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
    ->add('adress')
    ->add('site')
    ->add('description')
    ->add('createdAt')
    ->add('updatedAt')
    ->add('category');
    
  }

  /**
   * Конфигурация списка записей
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
    ->addIdentifier('id', null, array('label' => 'Company_id'))
    ->addIdentifier('name', null, array('label' => 'Заголовок'))
    ->add('created', null, array('label' => 'Заснована'))
    ->add('category', null, array('label' => 'Категорія'))
    ->add('description', null, array('label' => 'Опис'))
    ->add('createdAt', null, array('label' => 'Дата створення запису'))
    ->add('updatedAt', null, array('label' => 'Дата оновлення запису'));       
  }

  /**
   * Поля, по которым производится поиск в списке записей
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
    ->add('id', null, array('label' => 'Айді компанії'))
    ->add('name', null, array('label' => 'Компанія'));
  }   

}