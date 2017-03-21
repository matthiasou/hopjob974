<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="reponse_question")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\ReponseQuestionRepository")
 */
class ReponseQuestion
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
     * @ORM\Column(name="libelle", type="string", length=45)
     */
    private $libelle;


    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="float")
     */
    private $valeur;



    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Question", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;


    /**
     * Get id
     *
     * @return integer
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
     * @return ReponseQuestion
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
     * Set valeur
     *
     * @param float $valeur
     *
     * @return ReponseQuestion
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return float
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set question
     *
     * @param \Hopjob\FrontBundle\Entity\Question $question
     *
     * @return ReponseQuestion
     */
    public function setQuestion(\Hopjob\FrontBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Hopjob\FrontBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
