<?php

namespace Hopjob\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Annonce;
use Hopjob\FrontBundle\Entity\Ville;
use Hopjob\FrontBundle\Entity\User;
use Hopjob\FrontBundle\Entity\TypeVehicule;
use Hopjob\FrontBundle\Entity\Horaire;
use Hopjob\FrontBundle\Entity\DemandeService;
use Symfony\Component\HttpFoundation\Response;
use Hopjob\FrontBundle\Form\AnnonceType;

class AnnonceController extends Controller
{

  public function domainesAction(Request $request, $domaines)
  {
  // Create the form according to the FormType created previously.
        // And give the proper parameters
        $em = $this->getDoctrine()->getManager();
        $domaine =  $em->getRepository("FrontBundle:Domaine")->findOneBy(array('libelle' => $domaines));
        $sousdomaines = $em->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $domaine),array('libelle' => "ASC"));
        

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
             $form->handleRequest($request);
        }

        return $this->render('FrontBundle::domaines.html.twig', array(
            'domaines' => $domaines,
            'sousdomaines' => $sousdomaines
            ));
  }
  public function sousdomainesAction(Request $request,$domaines, $sousdomaines)
  {
  // Create the form according to the FormType created previously.
        // And give the proper parameters
        $em = $this->getDoctrine()->getManager();
        $domaine =  $em->getRepository("FrontBundle:Domaine")->findOneBy(array('libelle' => $domaines));
        $sousdomaine = $em->getRepository("FrontBundle:SousDomaine")->findBy(array('libelle' => $sousdomaines));
        $activites = $em->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sousdomaine),array('libelle' => "ASC"));

        return $this->render('FrontBundle::sousdomaines.html.twig', array(
            'domaine' => $domaine,
            'sousdomaines' => $sousdomaines,
            'activites' => $activites,
        ));
      }

      public function createannonceAction(Request $request, $sousdomaines, $domaine, $activite)
      {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $util = $em->getRepository("FrontBundle:User")->findOneBy(array('nom' => 'Lecomte'));
        $activites = $em->getRepository("FrontBundle:Activite")->findBy(array('libelle' => $activite));
        $act = $em->getRepository("FrontBundle:Activite")->findOneBy(array('libelle' => $activite));
        
        $horaires = $em->getRepository("FrontBundle:Horaire")->findAll();
        $typevehicules = $em->getRepository("FrontBundle:TypeVehicule")->findAll();
        $villes = $em->getRepository("FrontBundle:Ville")->findAll();
        $demandeService = new DemandeService();
        $annonce = new Annonce();
        
        if (isset($_POST['envoyer'])){
          $demandeService->setActivite($act);
          $demandeService->setUtilisateur($util);
          $demandeService->setDuree(1);
          $demandeService->setTauxhoraire(10);
          $demandeService->setTotal(100);
          $demandeService->setDateDebut(new \DateTime("now"));
          $demandeService->setDateFin(new \DateTime($_POST['datelimite']));
          $em->persist($demandeService);
          $em->flush();
          $ville = $em->getRepository("FrontBundle:Ville")->findOneBy(array('libelle'=> $_POST['ville']));
          $horaire = $em->getRepository("FrontBundle:Horaire")->findOneBy(array('libelle'=> $_POST['horaire']));
          $typevehicule = $em->getRepository("FrontBundle:TypeVehicule")->findOneBy(array('libelle'=> $_POST['typevehicule']));
          $last = $em->getRepository("FrontBundle:DemandeService")->findOneBy(array(),array('id' => 'DESC'));
          $annonce->setTitre($_POST['titre']);
          $annonce->setNbPersonnes($_POST['nbpersonnes']);
          if(isset($_POST['datefixe'])){
            $annonce->setDateFixe(1);
            $annonce->setDateLimite(new \DateTime("now"));
          }
          if(isset($_POST['vehicule'])){
            $annonce->setVehicule(1);
            $typevehicule->setLibelle($_POST['typevehicule']);
            $annonce->setTypeVehicule($typevehicule);
          }
          $annonce->setPrixTotal($_POST['prix']);
          $annonce->setTelephone($_POST['telephone']);
          $annonce->setDescription($_POST['description']);
          $annonce->setHoraire($horaire);
          $annonce->setVille($ville);
          $annonce->setDemandeService($last);
          $annonce->setUser($util);
          $em->persist($annonce);
          $em->flush();
          return $this->redirectToRoute('annonces');
        }
        return $this->render('FrontBundle::createannonce.html.twig', array(
            'domaine' => $domaine,
            'sousdomaines' => $sousdomaines,
            'activites' => $activites,
            'horaires' => $horaires,
            'typevehicules' => $typevehicules,
            'villes' => $villes
        ));
      }

     /**
     * Récupère une annonce par son id
     * @Route("/annonces/{id}",requirements={"id" = "\d+"}, name="annonce_id")
     * @Method({"GET"})
     */
    public function getAnnonceByIdAction(Request $request)
    {
        $annonce = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Annonce')
                ->find($request->get('id'));

        if (empty($annonce)) {
            return new JsonResponse(['message' => 'Annonce not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'id' => $annonce->getId(),
               'titre' => $annonce->getTitre(),
               'nbPersonnes' => $annonce->getNbPersonnes(),
               'vehicule' => $annonce->getVehicule(),
               'dateFixe' => $annonce->getDateFixe(),
               'dateLimite' => $annonce->getDateLimite(),
               'prixTotal' => $annonce->getPrixTotal(),
               'telephone' => $annonce->getTelephone(),
               'ville' => $annonce->getVille()->getId(),
               'utilisateur' => $annonce->getUtilisateur()->getId(),
               'typeVehicule' => $annonce->getTypeVehicule()->getId(),
               'horaire' => $annonce->getHoraire()->getId(),        
            ];

        return new JsonResponse($formatted);
        
    }

  /**
  * Création d'une annonce
  * @Rest\View
  * @Rest\Post("/addannonces")
  */
 public function postAnnoncesAction(Request $request)
 {
  $em = $this->getDoctrine()->getManager();

   $data = new Annonce;
   $id = $request->get('id');
   $titre = $request->get('titre');
   $nbPersonnes = $request->get('nbPersonnes');
   $vehicule = $request->get('vehicule');
   $dateFixe = $request->get('dateFixe');
   $dateLimite = $request->get('dateLimite');
   $prixTotal = $request->get('prixTotal');
   $telephone = $request->get('telephone');
   $description = $request->get('description');

   $ville = $em->getRepository("AppBundle:Ville")->findOneBy(array('id' =>$request->get('ville')));
   $utilisateur = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('id' => $request->get('utilisateur')));
   $typeVehicule = $em->getRepository("AppBundle:TypeVehicule")->findOneBy(array('id' => $request->get('typeVehicule')));
   $horaire = $em->getRepository("AppBundle:Horaire")->findOneBy(array('id' =>$request->get('horaire')));

  $data->setTitre($titre);
  $data->setNbPersonnes($nbPersonnes);
  $data->setVehicule($vehicule);
  $data->setDateFixe($dateFixe);
  $data->setDateLimite(new \DateTime());
  $data->setPrixTotal($prixTotal);
  $data->setTelephone($telephone);
  $data->setDescription($description);
  $data->setVille($ville);
  $data->setUtilisateur($utilisateur);
  $data->setTypeVehicule($typeVehicule);
  $data->setHoraire($horaire);
  $em->persist($data);
  $em->flush();

    return new View("Annonce Added Successfully", Response::HTTP_OK);
 }
}
