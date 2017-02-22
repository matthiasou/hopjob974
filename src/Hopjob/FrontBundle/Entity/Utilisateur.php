<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Annonce", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\DemandeService", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Document", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Message", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Message", mappedBy="utilisateur1")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Notation", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Paiement", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\ReponseAnnonce", mappedBy="utilisateur")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\ReponseAnnonce", mappedBy="utilisateur1")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\StatUser", mappedBy="utilisateur")
     */
    private $id;

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
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne_notation", type="float")
     */
    private $moyenneNotation;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Civilite", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $civilite;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Domaine", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domaine;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Metier", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $metier;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\TypeUtilisateur", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeUtilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Ville", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Utilisateur
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
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set domaine
     *
     * @param \Hopjob\FrontBundle\Entity\Domaine $domaine
     *
     * @return Utilisateur
     */
    public function setDomaine(\Hopjob\FrontBundle\Entity\Domaine $domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \Hopjob\FrontBundle\Entity\Domaine
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set metier
     *
     * @param \Hopjob\FrontBundle\Entity\Metier $metier
     *
     * @return Utilisateur
     */
    public function setMetier(\Hopjob\FrontBundle\Entity\Metier $metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \Hopjob\FrontBundle\Entity\Metier
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set typeUtilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\TypeUtilisateur $typeUtilisateur
     *
     * @return Utilisateur
     */
    public function setTypeUtilisateur(\Hopjob\FrontBundle\Entity\TypeUtilisateur $typeUtilisateur)
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }

    /**
     * Get typeUtilisateur
     *
     * @return \Hopjob\FrontBundle\Entity\TypeUtilisateur
     */
    public function getTypeUtilisateur()
    {
        return $this->typeUtilisateur;
    }

    /**
     * Set ville
     *
     * @param \Hopjob\FrontBundle\Entity\Ville $ville
     *
     * @return Utilisateur
     */
    public function setVille(\Hopjob\FrontBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Hopjob\FrontBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}
