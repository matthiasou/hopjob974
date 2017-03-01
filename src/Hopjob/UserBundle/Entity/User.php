<?php
// src/AppBundle/Entity/User.php

namespace Hopjob\UserBundle\Entity;

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

    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

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


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}