<?php

namespace CompaniesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * office
 *
 * @ORM\Table(name="office")
 * @ORM\Entity(repositoryClass="CompaniesBundle\Repository\officeRepository")
 */
class office
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
     * @ORM\Column(name="officeAdress", type="string", length=255)
     */
    private $officeAdress;


    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=11)
     */
    private $phone;
	
    /**
 * @ORM\OneToOne(targetEntity="company")
 * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
 */
    private $company;

public function __toString()
{
return (string) $this->officeAdress;
}

  
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
     * Set officeAdress
     *
     * @param string $officeAdress
     * @return office
     */
    public function setOfficeAdress($officeAdress)
    {
        $this->officeAdress = $officeAdress;

        return $this;
    }

    /**
     * Get officeAdress
     *
     * @return string 
     */
    public function getOfficeAdress()
    {
        return $this->officeAdress;
    }

  

  

    /**
     * Set phone
     *
     * @param string $phone
     * @return office
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
     * Set company
     *
     * @param \CompaniesBundle\Entity\company $company
     * @return office
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
