<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousDomaine
 *
 * @ORM\Table(name="sous_domaine")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\SousDomaineRepository")
 */
class SousDomaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Activite", mappedBy="sousDomaine")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Domaine", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domaine;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return SousDomaine
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set domaine
     *
     * @param \Hopjob\FrontBundle\Entity\Domaine $domaine
     *
     * @return SousDomaine
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
}
