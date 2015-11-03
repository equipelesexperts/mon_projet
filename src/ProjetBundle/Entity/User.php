<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255,nullable=true)
     */
    private $address;

   /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Fichier", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $fichier;

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
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fichier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fichier
     *
     * @param \UserBundle\Entity\Fichier $fichier
     * @return User
     */
    public function addFichier(\UserBundle\Entity\Fichier $fichier)
    {
        $this->fichier[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \UserBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\UserBundle\Entity\Fichier $fichier)
    {
        $this->fichier->removeElement($fichier);
    }

    /**
     * Get fichier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichier()
    {
        return $this->fichier;
    }
    public function getLastFichier(){
        $image=null;
        if($this->getFichier()->count()>0){
         $image=$this->getFichier()->last();   
        }
        return $image;
    }
}
