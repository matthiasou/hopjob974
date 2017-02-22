<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeService
 *
 * @ORM\Table(name="demande_service")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\DemandeServiceRepository")
 */
class DemandeService
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
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="taux_horaire", type="integer")
     */
    private $tauxHoraire;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Activite", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $activite;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Annonce", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $annonce;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Utilisateur", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;


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
     * Set duree
     *
     * @param integer $duree
     *
     * @return DemandeService
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set tauxHoraire
     *
     * @param integer $tauxHoraire
     *
     * @return DemandeService
     */
    public function setTauxHoraire($tauxHoraire)
    {
        $this->tauxHoraire = $tauxHoraire;

        return $this;
    }

    /**
     * Get tauxHoraire
     *
     * @return int
     */
    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return DemandeService
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return DemandeService
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return DemandeService
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set activite
     *
     * @param \Hopjob\FrontBundle\Entity\Activite $activite
     *
     * @return DemandeService
     */
    public function setActivite(\Hopjob\FrontBundle\Entity\Activite $activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Hopjob\FrontBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set annonce
     *
     * @param \Hopjob\FrontBundle\Entity\Annonce $annonce
     *
     * @return DemandeService
     */
    public function setAnnonce(\Hopjob\FrontBundle\Entity\Annonce $annonce)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \Hopjob\FrontBundle\Entity\Annonce
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\Utilisateur $utilisateur
     *
     * @return DemandeService
     */
    public function setUtilisateur(\Hopjob\FrontBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Hopjob\FrontBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
