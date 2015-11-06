<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\PublicationRepository")
 */
class Publication {

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
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime")
     */
    private $datepublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime",nullable=true)
     */
    private $datefin;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToOne(targetEntity="User", inversedBy="publications")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $user;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Fichier", mappedBy="publication")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $fichier;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="publication")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $commentaires;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Jaime", mappedBy="publication")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $jaime;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Publication
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return Publication
     */
    public function setDatepublication($datepublication) {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime 
     */
    public function getDatepublication() {
        return $this->datepublication;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Publication
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
     * Constructor
     */
    public function __construct() {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \ProjetBundle\Entity\User $user
     * @return Publication
     */
    public function setUser(\ProjetBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ProjetBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Add fichier
     *
     * @param \UserBundle\Entity\Fichier $fichier
     * @return Publication
     */
    public function addFichier(\UserBundle\Entity\Fichier $fichier) {
        $this->fichier[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \UserBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\UserBundle\Entity\Fichier $fichier) {
        $this->fichier->removeElement($fichier);
    }

    /**
     * Get fichier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichier() {
        return $this->fichier;
    }

    /**
     * Add commentaires
     *
     * @param \ProjetBundle\Entity\Commentaire $commentaires
     * @return Publication
     */
    public function addCommentaire(\ProjetBundle\Entity\Commentaire $commentaires) {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \ProjetBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\ProjetBundle\Entity\Commentaire $commentaires) {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Add jaime
     *
     * @param \ProjetBundle\Entity\Jaime $jaime
     * @return Publication
     */
    public function addJaime(\ProjetBundle\Entity\Jaime $jaime) {
        $this->jaime[] = $jaime;

        return $this;
    }

    /**
     * Remove jaime
     *
     * @param \ProjetBundle\Entity\Jaime $jaime
     */
    public function removeJaime(\ProjetBundle\Entity\Jaime $jaime) {
        $this->jaime->removeElement($jaime);
    }

    /**
     * Get jaime
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJaime() {
        return $this->jaime;
    }

    public function isLikeUser(\ProjetBundle\Entity\User $user) {
        global $kernel;
        $test=false;
        if ('AppCache' == get_class($kernel)) {
            $kernel = $kernel->getKernel();
        }
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
        $lastlike = $em->getRepository('ProjetBundle:Jaime')->findBy(array('user' => $user, 'publication' => $this->getId()));
        if (count($lastlike)) {
            foreach ($lastlike as $like) {
                if ($like->getLiked() == true) {
                    $test=true;
                } else {
                    $test=false;
                }
            }
        } else {
            $test=true;
        }
    }

}
