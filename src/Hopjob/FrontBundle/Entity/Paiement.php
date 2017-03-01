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
    * @ORM\ManyToOne(targetEntity="Hopjob\UserBundle\Entity\User", inversedBy="id")
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
     * @param \Hopjob\UserBundle\Entity\User $utilisateur
     *
     * @return Paiement
     */
    public function setUtilisateur(\Hopjob\UserBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Hopjob\UserBundle\Entity\User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
