<?php

namespace Hopjob\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Entity\Message as BaseMessage;

/**
 * @ORM\Entity
 */
class Conversation
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateur
     *
     * @param \Hopjob\FrontBundle\Entity\User $utilisateur
     *
     * @return Conversation
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
     * @return Conversation
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
}
