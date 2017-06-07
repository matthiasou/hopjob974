<?php

namespace Hopjob\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Utilisateur;
use Hopjob\FrontBundle\Entity\Annonce;
use Hopjob\FrontBundle\Entity\Civilite;
use Hopjob\FrontBundle\Entity\ReponseAnnonce;
use Hopjob\FrontBundle\Entity\Document;
use Hopjob\FrontBundle\Entity\TypeUtilisateur;
use Hopjob\FrontBundle\Entity\Metier;
use Hopjob\FrontBundle\Entity\Domaine;
use Hopjob\FrontBundle\Entity\Ville;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;


class UtilisateurController extends Controller
{
	 /**
     * Récupère l'ensemble des utilisateurs
     * @Route("/utilisateurs", name="utilisateurs_list")
     * @Method({"GET"})
     */
    public function getUtilisateursAction(Request $request)
    {
		$users = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Utilisateur')
                ->findAll();

        if (empty($users)) {
            return new JsonResponse(['message' => 'Users not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [];
        foreach ($users as $user) {
            $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
               'domaine' => $user->getDomaine()->getLibelle(),            
               ];
        }
        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur par son id
     * @Route("/utilisateurs/{id}",requirements={"id" = "\d+"}, name="utilisateur_id")
     * @Method({"GET"})
     */
    public function getUtilisateurByIdAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Utilisateur')
                ->find($request->get('id'));

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
               'domaine' => $user->getDomaine()->getLibelle(), 
            ];

        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur et ses documents par son id
     * @Route("documents/{id}",requirements={"id" = "\d+"}, name="attestation_id")
     * @Method({"GET"})
     */
    public function getUtilisateurByIdWithDocumentsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('id' => $id ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateur' => $user ));
        if (empty($document)) {
            return new JsonResponse(['message' => 'Document not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
               'domaine' => $user->getDomaine()->getLibelle(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'id' => $document->getId(),
            ];

        return new JsonResponse($formatted);
    }
  /**
     * Récupère un utilisateur et ses factures par son id
     * @Route("factures/{id}",requirements={"id" = "\d+"}, name="factures_id")
     * @Method({"GET"})
     */
  public function getUtilisateurByIdWithFacturesAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('id' => $id ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateur' => $user, 'typeDocument' => 1));
        if (empty($document)) {
            return new JsonResponse(['message' => 'Document not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
               'domaine' => $user->getDomaine()->getLibelle(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'id' => $document->getId(),
            ];

        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur et ses attesations par son id
     * @Route("attestations/{id}",requirements={"id" = "\d+"}, name="attestations_id")
     * @Method({"GET"})
     */
  public function getUtilisateurByIdWithAttestationsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('id' => $id ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateur' => $user, 'typeDocument' => 2));
        if (empty($document)) {
            return new JsonResponse(['message' => 'Document not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
               'domaine' => $user->getDomaine()->getLibelle(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'id' => $document->getId(),
            ];

        return new JsonResponse($formatted);
    }
  /**
  * Création d'un utilisateur
  * @Rest\View
  * @Rest\Post("/addutilisateurs")
  */
 public function postUtilisateursAction(Request $request)
 {
    $em = $this->getDoctrine()->getManager();
    
   $data = new Utilisateur;
   $id = $request->get('id');
   $nom = $request->get('nom');
   $prenom = $request->get('prenom');
   $mail = $request->get('mail');
   $dateNaissance = $request->get('dateNaissance');
   $adresse = $request->get('adresse');
   $login = $request->get('login');
   $password = $request->get('password');
   $description = $request->get('description');
   $moyenneNotation = $request->get('moyenneNotation');

   $civilite = $em->getRepository("AppBundle:Civilite")->findOneBy(array('id' => $request->get('civilite')));
   $typeUtilisateur = $em->getRepository("AppBundle:TypeUtilisateur")->findOneBy(array('id' => $request->get('typeUtilisateur')));
   $metier = $em->getRepository("AppBundle:Metier")->findOneBy(array('id' =>$request->get('metier')));
   $ville = $em->getRepository("AppBundle:Ville")->findOneBy(array('id' =>$request->get('ville')));
   $domaine = $em->getRepository("AppBundle:Domaine")->findOneBy(array('id' =>$request->get('domaine')));
  
  $data->setNom($nom);
  $data->setPrenom($prenom);
  $data->setMail($mail);
  $data->setDateNaissance(new \DateTime());
  $data->setAdresse($adresse);
  $data->setLogin($login);
  $data->setPassword($password);
  $data->setDescription($description);
  $data->setMoyenneNotation($moyenneNotation);
  $data->setCivilite($civilite);
  $data->setTypeUtilisateur($typeUtilisateur);
  $data->setVille($ville);
  $data->setMetier($metier);
  $data->setDomaine($domaine);  
  $em->persist($data);
  $em->flush();

    return new View("User Added Successfully", Response::HTTP_OK);
 }

/**
 * Modification d'un utilisateur
 * @Rest\Put("/utilisateur/{id}")
 */
 public function updateUtilisateurAction($id,Request $request)
 { 
   $data = new Utilisateur;
   $nom = $request->get('nom');
   $prenom = $request->get('prenom');
   $mail = $request->get('mail');
   $dateNaissance = $request->get('dateNaissance');
   $adresse = $request->get('adresse');
   $login = $request->get('login');
   $password = $request->get('password');
   $description = $request->get('description');
   $moyenneNotation = $request->get('moyenneNotation');
   
   $em = $this->getDoctrine()->getManager();
   $utilisateur = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($id);
   $civilite = $em->getRepository("AppBundle:Civilite")->findOneBy(array('id' => $request->get('civilite')));
   $typeUtilisateur = $em->getRepository("AppBundle:TypeUtilisateur")->findOneBy(array('id' => $request->get('typeUtilisateur')));
   $metier = $em->getRepository("AppBundle:Metier")->findOneBy(array('id' =>$request->get('metier')));
   $ville = $em->getRepository("AppBundle:Ville")->findOneBy(array('id' =>$request->get('ville')));
   $domaine = $em->getRepository("AppBundle:Domaine")->findOneBy(array('id' =>$request->get('domaine')));
if (empty($utilisateur)) {
   return new View("user not found", Response::HTTP_NOT_FOUND);
 } 
else{
  $utilisateur->setNom($nom);
  $utilisateur->setPrenom($prenom);
  $utilisateur->setMail($mail);
  $utilisateur->setDateNaissance(new \DateTime());
  $utilisateur->setAdresse($adresse);
  $utilisateur->setLogin($login);
  $utilisateur->setPassword($password);
  $utilisateur->setDescription($description);
  $utilisateur->setMoyenneNotation($moyenneNotation);
  $utilisateur->setCivilite($civilite);
  $utilisateur->setTypeUtilisateur($typeUtilisateur);
  $utilisateur->setVille($ville);
  $utilisateur->setMetier($metier);
  $utilisateur->setDomaine($domaine);
  $em->flush();
   return new View("User Updated Successfully", Response::HTTP_OK);
 }
}

 /**
 * Suppression d'un utilisateur
 * @Rest\Delete("/utilisateur/{id}")
 */
public function deleteAction($id)
{
  $data = new Utilisateur;
  $sn = $this->getDoctrine()->getManager();
  $utilisateur = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($id);
  if (empty($utilisateur)) 
  {
    return new View("utilisateur not found", Response::HTTP_NOT_FOUND);
  }
  else 
  {
    $sn->remove($utilisateur);
    $sn->flush();
  }
  return new View("deleted successfully", Response::HTTP_OK);
}

 /**
     * Recuperer toutes les missions, annonces qu'un utilisateur va devoir réaliser
     * @Route("missions/{id}",requirements={"id" = "\d+"}, name="id")
     * @Method({"GET"})
     */
    public function getMissionsByUserAction($id,Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('id' => $id ));
    $reponse = $em->getRepository("AppBundle:ReponseAnnonce")->findOneBy(array('validation' => 1, 'statutPaiement' => 0, 'utilisateur1' => $id));
    $annonce = $em->getRepository("AppBundle:Annonce")->findOneBy(array()); 
 if (empty($reponse)) {
            return new JsonResponse(['message' => 'Missions not found'], Response::HTTP_NOT_FOUND);
        }
            $formatted[] = [
               'id' => $user->getId(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite' => $user->getCivilite()->getLibelle(),
               'type_utilisateur' => $user->getTypeUtilisateur()->getLibelle(),
               'ville' => $user->getVille()->getNomReel(),
               'metier' => $user->getMetier()->getLibelle(),
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
               'utilisateur' => $annonce->getUtilisateur()->getId(),
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
        
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/user/{id}", name="profil")
     */
    public function profilAction($id){

      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository("FrontBundle:User")->find($id);
        
      return $this->render('FrontBundle::profil.html.twig', array('user' => $user));
        
    }

    /**
     * @Route("/parametres", name="parametres")
     */
    public function parametresAction(Request $request){

      $em = $this->getDoctrine()->getManager();
      $civilite = $em->getRepository('FrontBundle:Civilite')->findAll();
      $ville = $em->getRepository('FrontBundle:Ville')->findAll();
      $user = $this->getUser();
      $adresse = $user->getAdresse();

// die(dump($ville));

      if ($request->isMethod('POST'))
      {
        if ($request->get('prenom'))
          $user->setPrenom($request->get('prenom'));

        if ($request->get('nom'))
          $user->setNom($request->get('nom'));

        if ($request->get('civilite'))
          $user->setCivilite($request->get('civilite'));

        if ($request->get('dateNaissance'))
        {
          $date = new \DateTime($request->get('dateNaissance'));
          $user->setDateNaissance($date);
        }
                
        if ($request->get('description'))
          $user->setDescription($request->get('description'));

        if ($request->get('adresse1'))
          $adresse->setAdresse1($request->get('adresse1'));
        
        if ($request->get('adresse2'))
          $adresse->setAdresse2($request->get('adresse2'));
        
        if ($request->get('codePostal'))
          $adresse->setCodePostal($request->get('codePostal'));
        
        if ($request->get('ville'))
        {
          $userVille = $em->getRepository('FrontBundle:Ville')->find($request->get('ville'));
          $adresse->setVille($userVille);
        }

        $user->setAdresse($adresse);

        $em->persist($user);
        $em->flush();
  

      }

      return $this->render('FrontBundle::parametres.html.twig', array('user' => $user, 'civilite' => $civilite, 'ville' => $ville));
        
    }

}
