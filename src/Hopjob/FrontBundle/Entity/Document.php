<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\DocumentRepository")
 */
class Document
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="repertoire", type="string", length=255)
     */
    private $repertoire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\TypeDocument", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $typeDocument;

    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\ReponseAnnonce", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reponseAnnonce;


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
     * @return Document
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
     * Set repertoire
     *
     * @param string $repertoire
     *
     * @return Document
     */
    public function setRepertoire($repertoire)
    {
        $this->repertoire = $repertoire;

        return $this;
    }

    /**
     * Get repertoire
     *
     * @return string
     */
    public function getRepertoire()
    {
        return $this->repertoire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set typeDocument
     *
     * @param \Hopjob\FrontBundle\Entity\TypeDocument $typeDocument
     *
     * @return Document
     */
    public function setTypeDocument(\Hopjob\FrontBundle\Entity\TypeDocument $typeDocument)
    {
        $this->typeDocument = $typeDocument;

        return $this;
    }

    /**
     * Get typeDocument
     *
     * @return \Hopjob\FrontBundle\Entity\TypeDocument
     */
    public function getTypeDocument()
    {
        return $this->typeDocument;
    }

    /**
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur
     *
     * @return Document
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
     * @return mixed
     */
    public function getReponseAnnonce()
    {
        return $this->reponseAnnonce;
    }

    /**
     * @param mixed $reponseAnnonce
     */
    public function setReponseAnnonce($reponseAnnonce)
    {
        $this->reponseAnnonce = $reponseAnnonce;
    }
}
