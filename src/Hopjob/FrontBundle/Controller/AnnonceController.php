<?php

namespace Hopjob\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Annonce;
use Hopjob\FrontBundle\Entity\Ville;
use Hopjob\FrontBundle\Entity\Utilisateur;
use Hopjob\FrontBundle\Entity\TypeVehicule;
use Hopjob\FrontBundle\Entity\Horaire;
use Symfony\Component\HttpFoundation\Response;

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
            'activites' => $activites
        ));
      }

      public function createannonceAction(Request $request, $sousdomaines, $domaine, $activites)
      {
         $em = $this->getDoctrine()->getManager();
         $activite = $em->getRepository("FrontBundle:Activite")->findBy(array('libelle' => $activites),array('libelle' => "ASC"));
         $form = $this->createForm("Hopjob\FrontBundle\Form\.$activite.",null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'method' => 'POST'
            ));
         if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);
            if($form->isValid())
            {
              //On récupère les données entrées dans le formulaire par l'utilisateur
              $data = $this->getRequest()->request->get('Hopjob_frontbundle_rechercheannonces');
              //On va récupérer la méthode dans le repository afin de trouver toutes les annonces filtrées par les paramètres du formulaire
              $liste_annonces = $em->getRepository('hopjob:Annonce')->findAnnonceByParametres($data);
              //Puis on redirige vers la page de visualisation de cette liste d'annonces
              return $this->render('Hopjpb:Annonce:annonces.html.twig', array('liste_annonces' => $liste_annonces));
            }
        }
        return $this->render('FrontBundle::createannonce.html.twig', array(
            'form' => $form->createView(),
            'domaine' => $domaine,
            'sousdomaines' => $sousdomaines,
            'activites' => $activites,
            'activite' => $activite
            
        ));
      }
	 /**
     * Récupère l'ensemble des annonces
     * @Route("/annonces", name="annonces_list")
     * @Method({"GET"})
     */
    public function getAnnoncesAction(Request $request)
    {
		$annonces = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Annonce')
                ->findAll();
                 $form = $this->createForm("Hopjob\FrontBundle\Form\AnnonceSearchType",null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'method' => 'POST'
            ));

        if (empty($annonces)) {
            return new JsonResponse(['message' => 'Annonces not found'], Response::HTTP_NOT_FOUND);
        }
/*
        $formatted = [];
        foreach ($annonces as $annonce) {
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
               'utilisateur' => $annonce->getUtilisateur()->getNom(),
               'typeVehicule' => $annonce->getTypeVehicule()->getId(),
               'horaire' => $annonce->getHoraire()->getId(),        
            ];
        }
        return new JsonResponse($formatted);
        */
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
