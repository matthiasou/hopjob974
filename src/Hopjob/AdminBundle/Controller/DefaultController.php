<?php

namespace Hopjob\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function adminAction()
    {
        // Récupération des informations de l'utilisateur qui est connecté
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('FrontBundle:User')
            ->find(1);

        if (empty($user)) {
            $params['utilisateurs'] = null;
        }

        $formatted[] = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'moyenne_notation' => $user->getMoyenneNotation(),
            'revenu' => $user->getRevenu(),
            'nb_job' => $user->getNbJob(),
        ];



        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("FrontBundle:User")->findOneBy(array('id' => 1 ));
        $reponse = $em->getRepository("FrontBundle:ReponseAnnonce")->findOneBy(array('validation' => 1, 'statutPaiement' => 0, 'utilisateur1' => 1));
        $annonce = $em->getRepository("FrontBundle:Annonce")->findOneBy(array());
        if (empty($reponse)) {
            $params['annonces'] = null;
        }
        $formattedAnnonces[] = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'mail' => $user->getEmail(),
            'date_naissance' => $user->getDateNaissance(),
            'adresse' => $user->getAdresse(),
            'description' => $user->getDescription(),
            'moyenne_notation' => $user->getMoyenneNotation(),
            'civilite' => $user->getCivilite()->getLibelle(),
            'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
            'ville' => $user->getVille()->getNomReel(),
            'metier' => $user->getMetier(),
            'domaine' => $user->getDomaine()->getLibelle(),
            'id' => $annonce->getId(),
            'titre' => $annonce->getTitre(),
            'nbPersonnes' => $annonce->getNbPersonnes(),
            'vehicule' => $annonce->getVehicule(),
            'dateFixe' => $annonce->getDateFixe(),
            'dateLimite' => $annonce->getDateLimite(),
            'prixTotal' => $annonce->getPrixTotal(),
            'telephone' => $annonce->getTelephone(),
            'description' => $annonce->getDescription(),
            'ville' => $annonce->getVille()->getNomReel(),
            'user' => $annonce->getUser()->getId(),
            'typeVehicule' => $annonce->getTypeVehicule()->getLibelle(),
            'horaireHoraire' => $annonce->getHoraire()->getLibelle(),
            'code' => $reponse->getCode(),
            'commentaire' => $reponse->getCommentaire(),
            'idReponseAnnonce' => $reponse->getId(),
            'statutPaiement' => $reponse->getStatutPaiement(),
            'validation' => $reponse->getValidation(),
            'idAnnonce' => $reponse->getAnnonce()->getId(),
            'utilisateur' => $reponse->getUtilisateur()->getId(),
            'utilisateur1' => $reponse->getUtilisateur1()->getId(),
        ];










        $params['utilisateurs'] = $formatted;
        $params['annonces'] = $formattedAnnonces;
        return $this->render('AdminBundle::default/admin.html.twig', $params);
    }

    /**
     * @Route("/messagerie")
     */
    public function messagerieAction()
    {
        return $this->render('AdminBundle::messagerie.html.twig');
    }

    /**
     * @Route("/code")
     */
    public function codeAction()
    {
        return $this->render('AdminBundle::code.html.twig');
    }

    /**
     * @Route("/documents")
     */
    public function documentsAction()
    {
        return $this->render('AdminBundle::documents.html.twig');
    }
}
