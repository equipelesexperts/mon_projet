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
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Publication", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $publications;
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $commentaire;
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Jaime", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $jaime;
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

    /**
     * Add publications
     *
     * @param \ProjetBundle\Entity\Publication $publications
     * @return User
     */
    public function addPublication(\ProjetBundle\Entity\Publication $publications)
    {
        $this->publications[] = $publications;

        return $this;
    }

    /**
     * Remove publications
     *
     * @param \ProjetBundle\Entity\Publication $publications
     */
    public function removePublication(\ProjetBundle\Entity\Publication $publications)
    {
        $this->publications->removeElement($publications);
    }

    /**
     * Get publications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Add commentaire
     *
     * @param \ProjetBundle\Entity\Commentaire $commentaire
     * @return User
     */
    public function addCommentaire(\ProjetBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \ProjetBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\ProjetBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
    }

    /**
     * Get commentaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Add jaime
     *
     * @param \ProjetBundle\Entity\Jaime $jaime
     * @return User
     */
    public function addJaime(\ProjetBundle\Entity\Jaime $jaime)
    {
        $this->jaime[] = $jaime;

        return $this;
    }

    /**
     * Remove jaime
     *
     * @param \ProjetBundle\Entity\Jaime $jaime
     */
    public function removeJaime(\ProjetBundle\Entity\Jaime $jaime)
    {
        $this->jaime->removeElement($jaime);
    }

    /**
     * Get jaime
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJaime()
    {
        return $this->jaime;
    }
}
