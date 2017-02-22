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

        if (empty($annonces)) {
            return new JsonResponse(['message' => 'Annonces not found'], Response::HTTP_NOT_FOUND);
        }

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
               'utilisateur' => $annonce->getUtilisateur()->getId(),
               'typeVehicule' => $annonce->getTypeVehicule()->getId(),
               'horaire' => $annonce->getHoraire()->getId(),        
            ];
        }
        return new JsonResponse($formatted);
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
