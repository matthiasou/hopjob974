<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeVehicule
 *
 * @ORM\Table(name="type_vehicule")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\TypeVehiculeRepository")
 */
class TypeVehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Annonce", mappedBy="typeVehicule")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * @return TypeVehicule
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
}
