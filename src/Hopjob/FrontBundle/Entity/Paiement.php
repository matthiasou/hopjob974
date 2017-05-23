<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @var bool
     *
     * @ORM\Column(name="effectue", type="boolean")
     */
    private $effectue;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_abonnement", type="date")
     */
    private $dateFinAbonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_job", type="integer",  nullable=true)
     */
    private $nbJob;

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
     * Set effectue
     *
     * @param boolean $effectue
     *
     * @return Paiement
     */
    public function setEffectue($effectue)
    {
        $this->effectue = $effectue;

        return $this;
    }

    /**
     * Get effectue
     *
     * @return bool
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur
     *
     * @return Paiement
     */
    public function setUtilisateur(\Hopjob\FrontBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Hopjob\FrontBundle\Entity\User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set dateFinAbonnement
     *
     * @param \DateTime $dateFinAbonnement
     *
     * @return Paiement
     */
    public function setDateFinAbonnement($dateFinAbonnement)
    {
        $this->dateFinAbonnement = $dateFinAbonnement;

        return $this;
    }

    /**
     * Get dateFinAbonnement
     *
     * @return \DateTime
     */
    public function getDateFinAbonnement()
    {
        return $this->dateFinAbonnement;
    }

    /**
     * Set nbJob
     *
     * @param integer $nbJob
     *
     * @return Paiement
     */
    public function setNbJob($nbJob)
    {
        $this->nbJob = $nbJob;

        return $this;
    }

    /**
     * Get nbJob
     *
     * @return integer
     */
    public function getNbJob()
    {
        return $this->nbJob;
    }
}
