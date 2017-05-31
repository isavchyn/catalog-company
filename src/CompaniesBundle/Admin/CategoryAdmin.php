<?php


namespace CompaniesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class CategoryAdmin extends Admin
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
    ->add('createdAt')
    ->add('updatedAt')
     ->add('parent', 'entity', array(
            'class' => 'CompaniesBundle\Entity\Category',       
            'choice_label' => 'name',
            'required' => false,                 
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                          ->where('c.parent is NULL');
            },
            ));  
    
  }

  /**
   * Конфигурация списка записей
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
    ->add('name')
    ->add('createdAt')
    ->add('updatedAt')
    ->add('parent', 'entity', array(
            'class' => 'CompanyBundle\Entity\Category',       
            'choice_label' => 'name',
            'required' => false,                 
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                          ->where('c.parent is NULL');
            },
            ));  
  }

  /**
   * Поля, по которым производится поиск в списке записей
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper    
    ->add('name', null, array('label' => 'Категорія'));
  }   

}