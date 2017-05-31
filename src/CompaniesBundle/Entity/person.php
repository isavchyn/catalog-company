<?php

namespace CompaniesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="CompaniesBundle\Repository\personRepository")
 */
class person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=11)
     */
    private $phone;

    /**
     * Many person have One office.
     * @ORM\ManyToOne(targetEntity="office")
     * @ORM\JoinColumn(name="office_id", referencedColumnName="id")
     */
    private $office;

    /**
     * Many person have One company.
     * @ORM\ManyToOne(targetEntity="company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set officeId
     *
     * @param string $officeId
     * @return person
     */
    public function setOfficeId($officeId)
    {
        $this->officeId = $officeId;

        return $this;
    }

    /**
     * Get officeId
     *
     * @return string 
     */
    public function getOfficeId()
    {
        return $this->officeId;
    }

    /**
     * Set companyId
     *
     * @param string $companyId
     * @return person
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get companyId
     *
     * @return string 
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return person
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set office
     *
     * @param \CompaniesBundle\Entity\office $office
     * @return person
     */
    public function setOffice(\CompaniesBundle\Entity\office $office = null)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return \CompaniesBundle\Entity\office 
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set company
     *
     * @param \CompaniesBundle\Entity\company $company
     * @return person
     */
    public function setCompany(\CompaniesBundle\Entity\company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \CompaniesBundle\Entity\company 
     */
    public function getCompany()
    {
        return $this->company;
    }
}
