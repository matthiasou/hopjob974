<?php

namespace Hopjob\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 *
 * @ORM\Table(name="notation")
 * @ORM\Entity(repositoryClass="Hopjob\FrontBundle\Repository\NotationRepository")
 */
class Notation
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
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;


    /**
    * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\User", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur1;


    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\Question", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;


    /**
     * @ORM\ManyToOne(targetEntity="Hopjob\FrontBundle\Entity\ReponseQuestion", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reponseQuestion;



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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Notation
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
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur
     *
     * @return Notation
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
     * @return Notation
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
     * Set question
     *
     * @param \Hopjob\FrontBundle\Entity\Question $question
     *
     * @return Notation
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

    /**
     * Set reponseQuestion
     *
     * @param \Hopjob\FrontBundle\Entity\ReponseQuestion $reponseQuestion
     *
     * @return Notation
     */
    public function setReponseQuestion(\Hopjob\FrontBundle\Entity\ReponseQuestion $reponseQuestion)
    {
        $this->reponseQuestion = $reponseQuestion;

        return $this;
    }

    /**
     * Get reponseQuestion
     *
     * @return \Hopjob\FrontBundle\Entity\ReponseQuestion
     */
    public function getReponseQuestion()
    {
        return $this->reponseQuestion;
    }
}
