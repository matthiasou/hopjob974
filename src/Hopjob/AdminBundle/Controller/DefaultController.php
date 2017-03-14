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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        // Récupération des informations de l'utilisateur qui est connecté

        if (empty($user)) {
            $params['utilisateurs'] = null;
        }

        // Affichage des informations de l'utilisateur connecté
        $formatted[] = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'moyenne_notation' => $user->getMoyenneNotation(),
            'revenu' => $user->getRevenu(),
            'nb_job' => $user->getNbJob(),
        ];


        // Affichage des prochaines missions d'un utilisateur
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository("FrontBundle:Annonce")->findAll(array());
        $reponse = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $annonces,'validation' => 1, 'statutPaiement' => 0, 'utilisateur1' => $user->getId()));

        if (empty($reponse)) {
            $params['reponses'] = null;
        }


        // Affichage des annonces pour lesquelles il a postulé
        $em2 = $this->getDoctrine()->getManager();
        $reponse2 = $em2->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('utilisateur1' => $user->getId()));

        if (empty($reponse2)) {
            $params['demandes'] = null;
        }


        // Annonces succeptible de lui plaire
        $em3 = $this->getDoctrine()->getManager();

        $userDomaines = array();
        foreach ( $user->getDomaines() as $domaine) {
        $userDomaines[] = $domaine;
      }



        $sous_domaine = $em3->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $userDomaines));
        $activite = $em3->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sous_domaine));
        $demande_service = $em3->getRepository("FrontBundle:DemandeService")->findBy(array('activite' => $activite));
        $annonces2 = $em3->getRepository("FrontBundle:Annonce")->findBy(array('demandeService' => $demande_service));

        if (empty($annonce2)) {
            $params['annoncesSucc'] = null;
        }





        $params['utilisateurs'] = $formatted;
        $params['reponses'] = $reponse;
        $params['demandes'] = $reponse2;
        $params['annoncesSucc'] = $annonces2;
        return $this->render('AdminBundle::default/admin.html.twig', $params);
    }

    /**
     * @Route("/messagerie")
     */
    public function messagerieAction()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        // Récupération des informations de l'utilisateur qui est connecté

        if (empty($user)) {
            $params['utilisateurs'] = null;
        }

        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('validation' => 1, 'statutPaiement' => 0, 'utilisateur1' => $user->getId()));

        if (empty($reponse)) {
            $params['reponses'] = null;
        }

        $em1 = $this->getDoctrine()->getManager();
        $reponse1 = $em1->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('validation' => 1, 'statutPaiement' => 0, 'utilisateur' => $user->getId()));

        if (empty($reponse1)) {
            $params['reponses1'] = null;
        }


        $params['reponses'] = $reponse;
        $params['reponses2'] = $reponse1;

        $sender = $this->get('security.token_storage')->getToken()->getUser();
        $threadBuilder = $this->get('fos_message.composer')->newThread();
        $threadBuilder
            ->addRecipient($sender) // Retrieved from your backend, your user manager or ...
            ->setSender($sender)
            ->setSubject('Stof commented on your pull request #456789')
            ->setBody('You have a typo, : mondo instead of mongo. Also for coding standards ...');
        $sender = $this->get('fos_message.sender');
        $sender->send($threadBuilder->getMessage());

        return $this->render('AdminBundle::messagerie.html.twig',$params);
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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        // Récupération des informations de l'utilisateur qui est connecté

        if (empty($user)) {
            $params['utilisateurs'] = null;
        }

        // Affichage des informations de l'utilisateur connecté
        $formatted[] = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'moyenne_notation' => $user->getMoyenneNotation(),
            'revenu' => $user->getRevenu(),
            'nb_job' => $user->getNbJob(),
        ];



        // Affichage des factures


        $em4 = $this->getDoctrine()->getManager();
        $user1 = $em4->getRepository("FrontBundle:User")->findOneBy(array('id' => $user->getId() ));
        $factures = $em4->getRepository("FrontBundle:Document")->findBy(array('utilisateur' => $user1, 'typeDocument' => 1));

        if (empty($factures)) {
            $params['factures'] = null;
        }




        $em5 = $this->getDoctrine()->getManager();
        $user2 = $em5->getRepository("FrontBundle:User")->findOneBy(array('id' => $user->getId() ));
        $document = $em5->getRepository("FrontBundle:Document")->findBy(array('utilisateur' => $user2, 'typeDocument' => 2));

        if (empty($document)) {
            $params['bulletins'] = null;
        }





        $params['factures'] = $factures;
        $params['utilisateurs'] = $formatted;
        $params['bulletins'] = $document;

        return $this->render('AdminBundle::documents.html.twig', $params);
    }
}
