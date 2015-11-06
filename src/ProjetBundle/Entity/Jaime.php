<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jaime
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\JaimeRepository")
 */
class Jaime {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="liked", type="boolean")
     */
    private $liked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $user;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToOne(targetEntity="Publication", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $publication;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set liked
     *
     * @param boolean $liked
     * @return Jaime
     */
    public function setLiked($liked) {
        $this->liked = $liked;

        return $this;
    }

    /**
     * Get liked
     *
     * @return boolean 
     */
    public function getLiked() {
        return $this->liked;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Jaime
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Jaime
     */
    public function setDatefin($datefin) {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin() {
        return $this->datefin;
    }


    /**
     * Set user
     *
     * @param \ProjetBundle\Entity\User $user
     * @return Jaime
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
     * @return Jaime
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
