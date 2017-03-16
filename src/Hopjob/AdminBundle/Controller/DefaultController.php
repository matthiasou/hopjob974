<?php

namespace Hopjob\AdminBundle\Controller;

use Hopjob\AdminBundle\Entity\Conversation;
use Hopjob\AdminBundle\Entity\Message;
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


        $conversation2 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur' => $user ));
        // $messages2= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation2,'utilisateur' => $user, 'isRead' => false  ));

        $messages2= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation2)
            ->setParameter('utili', $user)
            ->getResult();


        $conversation3 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur1' => $user ));
        //$messages3= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation3, 'utilisateur' => $user, 'isRead' => false ));
        $messages3= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation3)
            ->setParameter('utili', $user)
            ->getResult();

        $nbUnread = count($messages3) + count($messages2);


        $params['nbUnRead'] = $nbUnread;





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

        // Affichage des informations de l'utilisateur connecté
        $formatted[] = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'moyenne_notation' => $user->getMoyenneNotation(),
            'revenu' => $user->getRevenu(),
            'nb_job' => $user->getNbJob(),
        ];



        $em = $this->getDoctrine()->getManager();
        $domaine = $em->getRepository("FrontBundle:Domaine")->findBy(array());
        $sous_domaine = $em->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $domaine));
        $activite = $em->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sous_domaine));
        $demande_service = $em->getRepository("FrontBundle:DemandeService")->findBy(array('activite' => $activite));
        $annonces = $em->getRepository("FrontBundle:Annonce")->findBy(array('demandeService' => $demande_service));
        $reponse = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $annonces,'validation' => 1, 'utilisateur1' => $user->getId()));

        if (empty($reponse)) {
            $params['reponses'] = null;
        }

        $em1 = $this->getDoctrine()->getManager();
        $domaine1 = $em1->getRepository("FrontBundle:Domaine")->findBy(array());
        $sous_domaine1 = $em1->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $domaine1));
        $activite1 = $em1->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sous_domaine1));
        $demande_service1 = $em1->getRepository("FrontBundle:DemandeService")->findBy(array('activite' => $activite1));
        $annonces1 = $em1->getRepository("FrontBundle:Annonce")->findBy(array('demandeService' => $demande_service1));
        $reponse1 = $em1->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $annonces1,'validation' => 1,  'utilisateur' => $user->getId()));

        if (empty($reponse1)) {
            $params['reponses1'] = null;
        }


        $conversation2 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur' => $user ));
        // $messages2= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation2,'utilisateur' => $user, 'isRead' => false  ));

        $messages2= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation2)
            ->setParameter('utili', $user)
            ->getResult();


        $conversation3 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur1' => $user ));
        //$messages3= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation3, 'utilisateur' => $user, 'isRead' => false ));
        $messages3= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation3)
            ->setParameter('utili', $user)
            ->getResult();

        $nbUnread = count($messages3) + count($messages2);


        $params['nbUnRead'] = $nbUnread;


        $params['reponses'] = $reponse;
        $params['reponses1'] = $reponse1;
        $params['utilisateurs'] = $formatted;
        return $this->render('AdminBundle::messagerie.html.twig',$params);
    }

    /**
     * @Route("/message{id}")
     */
    public function messageAction($id)
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



        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository("FrontBundle:User")->findOneBy(array('id' => $id ));




        $conversation = $em->getRepository("AdminBundle:Conversation")->findOneBy(array('utilisateur' => array($user,$contact), 'utilisateur1' => array($user,$contact) ));
        $messages= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation), array('date' => 'ASC'));


        $conversation2 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur' => $user ));
       // $messages2= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation2,'utilisateur' => $user, 'isRead' => false  ));

       $messages2= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation2)
            ->setParameter('utili', $user)
            ->getResult();


        $conversation3 = $em->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur1' => $user ));
        //$messages3= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation3, 'utilisateur' => $user, 'isRead' => false ));
        $messages3= $em->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation3)
            ->setParameter('utili', $user)
            ->getResult();

        $nbUnread = count($messages3) + count($messages2);




        $conversation4= $em->getRepository("AdminBundle:Conversation")->findOneBy(array('utilisateur' => array($user,$contact), 'utilisateur1' => array($user,$contact) ));
        $messages4= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation4, 'utilisateur' => $contact));


        foreach ($messages4 as $message){
            $message->setIsRead(true);
            $em->flush();

        }

        $params['utilisateurs'] = $formatted;
        $params['nbUnRead'] = $nbUnread;
        $params['messages'] = $messages;
        $params['conversation2'] = $messages2;
        $params['conversation3'] = $messages3;
        $params['contact'] = $contact;

        if (isset($_POST['message'])) {
            echo "coucou";

            $conversationSeek = $em->getRepository("AdminBundle:Conversation")->findOneBy(array('utilisateur' => array($user,$contact), 'utilisateur1' => array($user,$contact) ));
            if ($conversationSeek == null ){

                $newConversation = new  Conversation();
                $newConversation->setUtilisateur($user);
                $newConversation->setUtilisateur1($contact);
                $em->persist($newConversation);
                $em->flush();

                $newMessage = new  Message();
                $newMessage->setUtilisateur($user);
                $newMessage->setContenu($_POST['message']);
                $newMessage->setConversation($newConversation);
                $newMessage->setIsRead(false);
                $newMessage->setDate(new \DateTime());
                $em->persist($newMessage);
                $em->flush();
                return $this->redirect($this->generateUrl('message', array('id' => $contact->getId())));
            }
            else{
                $newMessage = new  Message();
                $newMessage->setUtilisateur($user);
                $newMessage->setContenu($_POST['message']);
                $newMessage->setConversation($conversationSeek);
                $newMessage->setIsRead(false);
                $newMessage->setDate(new \DateTime());
                $em->persist($newMessage);
                $em->flush();
                return $this->redirect($this->generateUrl('message', array('id' => $contact->getId())));

            }

        }

        return $this->render('AdminBundle::message.html.twig',$params);

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


        $conversation2 = $em5->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur' => $user ));
        // $messages2= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation2,'utilisateur' => $user, 'isRead' => false  ));

        $messages2= $em5->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation2)
            ->setParameter('utili', $user)
            ->getResult();


        $conversation3 = $em5->getRepository("AdminBundle:Conversation")->findBy(array('utilisateur1' => $user ));
        //$messages3= $em->getRepository("AdminBundle:Message")->findBy(array('conversation' => $conversation3, 'utilisateur' => $user, 'isRead' => false ));
        $messages3= $em5->createQuery('SELECT m FROM AdminBundle:Conversation c
                  JOIN AdminBundle:Message m
                  WHERE
                    m.conversation=:conversation
                  AND m.utilisateur!=:utili
                  AND m.isRead=FALSE ')
            ->setParameter('conversation', $conversation3)
            ->setParameter('utili', $user)
            ->getResult();

        $nbUnread = count($messages3) + count($messages2);


        $params['nbUnRead'] = $nbUnread;
        $params['factures'] = $factures;
        $params['utilisateurs'] = $formatted;
        $params['bulletins'] = $document;


        return $this->render('AdminBundle::documents.html.twig', $params);
    }
}
