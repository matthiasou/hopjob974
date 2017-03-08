<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseAnnonce
 *
 * @ORM\Table(name="reponse_annonce")
 * @ORM\Entity
 */
class ReponseAnnonce
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
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur1;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;


    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;


    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Annonce")
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;


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
     * Set code
     *
     * @param string $code
     *
     * @return ReponseAnnonce
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return ReponseAnnonce
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * @var bool
     *
     * @ORM\Column(name="statut_paiement", type="boolean")
     */
    private $statutPaiement;

    /**
     * @var bool
     *
     * @ORM\Column(name="validation", type="boolean")
     */
    private $validation;


    /**
     * Set statutPaiement
     *
     * @param boolean $statutPaiement
     *
     * @return ReponseAnnonce
     */
    public function setStatutPaiement($statutPaiement)
    {
        $this->statutPaiement = $statutPaiement;

        return $this;
    }

    /**
     * Get statutPaiement
     *
     * @return bool
     */
    public function getStatutPaiement()
    {
        return $this->statutPaiement;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     *
     * @return ReponseAnnonce
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set idUtilisateur1
     *
     * @param integer $idUtilisateur1
     *
     * @return ReponseAnnonce
     */
    public function setIdUtilisateur1($idUtilisateur1)
    {
        $this->idUtilisateur1 = $idUtilisateur1;

        return $this;
    }

    /**
     * Get idUtilisateur1
     *
     * @return integer
     */
    public function getIdUtilisateur1()
    {
        return $this->idUtilisateur1;
    }

    /**
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur
     *
     * @return ReponseAnnonce
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
     * Set utilisateur1
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur1
     *
     * @return ReponseAnnonce
     */
    public function setUtilisateur1(\Hopjob\FrontBundle\Entity\User $utilisateur1)
    {
        $this->utilisateur1 = $utilisateur1;

        return $this;
    }

    /**
     * Get utilisateur1
     *
     * @return \Hopjob\FrontBundle\Entity\User
     */
    public function getUtilisateur1()
    {
        return $this->utilisateur1;
    }

    /**
     * Set annonce
     *
     * @param \Hopjob\FrontBundle\Entity\Annonce $annonce
     *
     * @return ReponseAnnonce
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
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}
