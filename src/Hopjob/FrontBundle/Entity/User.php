<?php
// src/AppBundle/Entity/User.php

namespace Hopjob\FrontBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



    /**
     * @ORM\Entity
     * @ORM\Table(name="utilisateur")
     */
    class User extends BaseUser
    {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Annonce", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\DemandeService", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Document", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Message", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Message", mappedBy="user1")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Notation", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Paiement", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\ReponseAnnonce", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\ReponseAnnonce", mappedBy="user1")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\StatUser", mappedBy="user")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */

    private $prenom;


    /**
     * @ORM\OneToOne(targetEntity="Hopjob\FrontBundle\Entity\Adresse",cascade={"persist", "remove"})
     *
     */
    private $adresse;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne_notation", type="float",  nullable=true)
     */
    private $moyenneNotation;



    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float",  nullable=true)
     */
    private $revenu;



    /**
     * @var int
     *
     * @ORM\Column(name="nb_job", type="integer",  nullable=true)
     */
    private $nbJob;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Civilite")
     *
     */
    private $civilite;

    /**
     * @ORM\ManyToMany(targetEntity="Hopjob\FrontBundle\Entity\Domaine", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $domaines;
   
    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="string", length=255,  nullable=true)
     */
    private $metier;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set moyenneNotation
     *
     * @param float $moyenneNotation
     *
     * @return User
     */
    public function setMoyenneNotation($moyenneNotation)
    {
        $this->moyenneNotation = $moyenneNotation;

        return $this;
    }

    /**
     * Get moyenneNotation
     *
     * @return float
     */
    public function getMoyenneNotation()
    {
        return $this->moyenneNotation;
    }

    /**
     * Set civilite
     *
     * @param \Hopjob\FrontBundle\Entity\Civilite $civilite
     *
     * @return User
     */
    public function setCivilite(\Hopjob\FrontBundle\Entity\Civilite $civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return \Hopjob\FrontBundle\Entity\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set metier
     *
     * @param string $metier
     *
     * @return User
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return string
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * @return mixed
     */
    public function getNbJob()
    {
        return $this->nbJob;
    }

    /**
     * @param mixed $nbJob
     */
    public function setNbJob($nbJob)
    {
        $this->nbJob = $nbJob;
    }


    /**
     * @return float
     */
    public function getRevenu()
    {
        return $this->revenu;
    }

    /**
     * @param float $revenu
     */
    public function setRevenu($revenu)
    {
        $this->revenu = $revenu;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Add domaine
     *
     * @param \Hopjob\FrontBundle\Entity\Domaine $domaine
     *
     * @return User
     */
    public function addDomaine(\Hopjob\FrontBundle\Entity\Domaine $domaine)
    {
        $this->domaines[] = $domaine;

        return $this;
    }

    /**
     * Remove domaine
     *
     * @param \Hopjob\FrontBundle\Entity\Domaine $domaine
     */
    public function removeDomaine(\Hopjob\FrontBundle\Entity\Domaine $domaine)
    {
        $this->domaines->removeElement($domaine);
    }

    /**
     * Get domaines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDomaines()
    {
        return $this->domaines;
    }

    public function setEmail($email){
        parent::setEmail($email);
        $this->setUsername($email);
    }
        /**
 * toString
 * @return string
 */
public function __toString() 
{
    return $this->getNom();
}
    
}
