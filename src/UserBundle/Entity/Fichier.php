<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\FichierRepository")
 */
class Fichier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

  


    /**
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\User", inversedBy="fichier")
     * @ORM\JoinColumn(nullable=true)
    */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Publication", inversedBy="fichier")
     * @ORM\JoinColumn(nullable=true)
    */
    private $publication;
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
     * Set nom
     *
     * @param string $nom
     * @return Fichier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set user
     *
     * @param \ProjetBundle\Entity\User $user
     * @return Fichier
     */
    public function setUser(\ProjetBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ProjetBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set publication
     *
     * @param \ProjetBundle\Entity\Publication $publication
     * @return Fichier
     */
    public function setPublication(\ProjetBundle\Entity\Publication $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \ProjetBundle\Entity\Publication 
     */
    public function getPublication()
    {
        return $this->publication;
    }
}
