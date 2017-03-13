<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\VilleRepository")
 */
class Ville
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Annonce", mappedBy="ville")
     * @ORM\OneToMany(targetEntity="Hopjob\FrontBundle\Entity\Utilisateur", mappedBy="ville")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=3)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_simple", type="string", length=255)
     */
    private $nomSimple;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_reel", type="string", length=255)
     */
    private $nomReel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_soundex", type="string", length=255)
     */
    private $nomSoundex;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=255)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="code_commune", type="string", length=255)
     */
    private $codeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="arrondissement", type="string", length=255)
     */
    private $arrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="canton", type="string", length=255)
     */
    private $canton;

    /**
     * @var string
     *
     * @ORM\Column(name="amdi", type="string", length=255)
     */
    private $amdi;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude_deg", type="float")
     */
    private $longitudeDeg;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude_deg", type="float")
     */
    private $latitudeDeg;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_grd", type="string", length=255)
     */
    private $longitudeGrd;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_grd", type="string", length=255)
     */
    private $latitudeGrd;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_dms", type="string", length=255)
     */
    private $longitudeDms;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_dms", type="string", length=255)
     */
    private $latitudeDms;

    /**
     * @var int
     *
     * @ORM\Column(name="zmin", type="integer")
     */
    private $zmin;


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
     * Set departement
     *
     * @param string $departement
     *
     * @return Ville
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Ville
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ville
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
     * Set nomSimple
     *
     * @param string $nomSimple
     *
     * @return Ville
     */
    public function setNomSimple($nomSimple)
    {
        $this->nomSimple = $nomSimple;

        return $this;
    }

    /**
     * Get nomSimple
     *
     * @return string
     */
    public function getNomSimple()
    {
        return $this->nomSimple;
    }

    /**
     * Set nomReel
     *
     * @param string $nomReel
     *
     * @return Ville
     */
    public function setNomReel($nomReel)
    {
        $this->nomReel = $nomReel;

        return $this;
    }

    /**
     * Get nomReel
     *
     * @return string
     */
    public function getNomReel()
    {
        return $this->nomReel;
    }

    /**
     * Set nomSoundex
     *
     * @param string $nomSoundex
     *
     * @return Ville
     */
    public function setNomSoundex($nomSoundex)
    {
        $this->nomSoundex = $nomSoundex;

        return $this;
    }

    /**
     * Get nomSoundex
     *
     * @return string
     */
    public function getNomSoundex()
    {
        return $this->nomSoundex;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Ville
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Ville
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set codeCommune
     *
     * @param string $codeCommune
     *
     * @return Ville
     */
    public function setCodeCommune($codeCommune)
    {
        $this->codeCommune = $codeCommune;

        return $this;
    }

    /**
     * Get codeCommune
     *
     * @return string
     */
    public function getCodeCommune()
    {
        return $this->codeCommune;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     *
     * @return Ville
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set canton
     *
     * @param string $canton
     *
     * @return Ville
     */
    public function setCanton($canton)
    {
        $this->canton = $canton;

        return $this;
    }

    /**
     * Get canton
     *
     * @return string
     */
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * Set amdi
     *
     * @param string $amdi
     *
     * @return Ville
     */
    public function setAmdi($amdi)
    {
        $this->amdi = $amdi;

        return $this;
    }

    /**
     * Get amdi
     *
     * @return string
     */
    public function getAmdi()
    {
        return $this->amdi;
    }

    /**
     * Set longitudeDeg
     *
     * @param float $longitudeDeg
     *
     * @return Ville
     */
    public function setLongitudeDeg($longitudeDeg)
    {
        $this->longitudeDeg = $longitudeDeg;

        return $this;
    }

    /**
     * Get longitudeDeg
     *
     * @return float
     */
    public function getLongitudeDeg()
    {
        return $this->longitudeDeg;
    }

    /**
     * Set latitudeDeg
     *
     * @param float $latitudeDeg
     *
     * @return Ville
     */
    public function setLatitudeDeg($latitudeDeg)
    {
        $this->latitudeDeg = $latitudeDeg;

        return $this;
    }

    /**
     * Get latitudeDeg
     *
     * @return float
     */
    public function getLatitudeDeg()
    {
        return $this->latitudeDeg;
    }

    /**
     * Set longitudeGrd
     *
     * @param string $longitudeGrd
     *
     * @return Ville
     */
    public function setLongitudeGrd($longitudeGrd)
    {
        $this->longitudeGrd = $longitudeGrd;

        return $this;
    }

    /**
     * Get longitudeGrd
     *
     * @return string
     */
    public function getLongitudeGrd()
    {
        return $this->longitudeGrd;
    }

    /**
     * Set latitudeGrd
     *
     * @param string $latitudeGrd
     *
     * @return Ville
     */
    public function setLatitudeGrd($latitudeGrd)
    {
        $this->latitudeGrd = $latitudeGrd;

        return $this;
    }

    /**
     * Get latitudeGrd
     *
     * @return string
     */
    public function getLatitudeGrd()
    {
        return $this->latitudeGrd;
    }

    /**
     * Set longitudeDms
     *
     * @param string $longitudeDms
     *
     * @return Ville
     */
    public function setLongitudeDms($longitudeDms)
    {
        $this->longitudeDms = $longitudeDms;

        return $this;
    }

    /**
     * Get longitudeDms
     *
     * @return string
     */
    public function getLongitudeDms()
    {
        return $this->longitudeDms;
    }

    /**
     * Set latitudeDms
     *
     * @param string $latitudeDms
     *
     * @return Ville
     */
    public function setLatitudeDms($latitudeDms)
    {
        $this->latitudeDms = $latitudeDms;

        return $this;
    }

    /**
     * Get latitudeDms
     *
     * @return string
     */
    public function getLatitudeDms()
    {
        return $this->latitudeDms;
    }

    /**
     * Set zmin
     *
     * @param integer $zmin
     *
     * @return Ville
     */
    public function setZmin($zmin)
    {
        $this->zmin = $zmin;

        return $this;
    }

    /**
     * Get zmin
     *
     * @return int
     */
    public function getZmin()
    {
        return $this->zmin;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
