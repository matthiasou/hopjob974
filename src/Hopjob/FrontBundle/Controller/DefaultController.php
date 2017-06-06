<?php

namespace Hopjob\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Domaine;
use Hopjob\FrontBundle\Entity\ReponseAnnonce;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // récupération des données sur le REST
        $domaines = $this->get('doctrine.orm.entity_manager')
                ->getRepository('FrontBundle:Domaine')
                ->findAll();

        if (empty($domaines)) {
            $params['domaines'] = null;
        }

        $formated = [];
        foreach ($domaines as $domaine) {
            $formatted[] = [
               'id' => $domaine->getId(),
               'libelle' => $domaine->getLibelle(),       
            ];
        }
        $params['domaines'] = $formatted;
        $params['base_dir'] = 'toto'.realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;

        return $this->render('FrontBundle::default/index.html.twig', $params);
    }

    /**
     * @Route("/register/confirmed", name="confirmed")
     */
    public function confirmationRegistrationAction(Request $request){
        // récupération des données sur le REST
        $domaines = $this->get('doctrine.orm.entity_manager')
                ->getRepository('FrontBundle:Domaine')
                ->findAll();

        if (empty($domaines)) {
            $params['domaines'] = null;
        }

        $formated = [];
        foreach ($domaines as $domaine) {
            $formatted[] = [
               'id' => $domaine->getId(),
               'libelle' => $domaine->getLibelle(),       
            ];
        }
        $params['domaines'] = $formatted;
        $params['base_dir'] = 'toto'.realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;
        $params['confirmationRegistration'] = true;
        return $this->render('FrontBundle::default/index.html.twig', $params);
    }

    /**
     * @Route("/annonces", name="annonces")
     */
    public function annoncesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $domaines = $em->getRepository("FrontBundle:Domaine")->findAll();
        $villes = $em->getRepository("FrontBundle:Ville")->findAll();
        $utilisateurs = $em->getRepository("FrontBundle:User")->findAll();
        $horaires = $em->getRepository("FrontBundle:Horaire")->findAll();
        $villes = $em->getRepository("FrontBundle:Ville")->findAll();
        $type_vehicules = $em->getRepository("FrontBundle:TypeVehicule")->findAll();
        $annonces = $em->getRepository("FrontBundle:Annonce")->findAll();
        
        $r = array();
        foreach ($annonces as $a){
            $infoannonce = $em->getRepository("FrontBundle:Annonce")->findOneBy(array('id' => $a));
            $idannonce = $infoannonce->getId();
            $reponse_annonce = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $a));
            $r['idannonce'] = count($reponse_annonce);
        }

        $btn = $request->get('btn');
                 $form = $this->createForm("Hopjob\FrontBundle\Form\AnnonceSearchType",null,array('method' => 'POST'));
        if (empty($annonces)) {
            $params['annonces'] = null;
        }
       
        if ($request->isMethod('POST')) {
            if ($btn == 'nomDomaineChange')
            {
                $val = $request->get('val');
                $sous_domaine = $em->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $val));
                $activite = $em->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sous_domaine));
                $demande_service = $em->getRepository("FrontBundle:DemandeService")->findBy(array('activite' => $activite));
                if (isset($villeSelected))
                {
                    $liste_annonces = $em->getRepository("FrontBundle:Annonce")->findBy(array('demandeService' => $demande_service, 'ville' => $villeSelected));
                }
                else 
                {
                    $liste_annonces = $em->getRepository("FrontBundle:Annonce")->findBy(array('demandeService' => $demande_service));
                }
                $domaineSelected = $val;
                return $this->render('FrontBundle::annonces.html.twig', array('domaineSelect' => $domaineSelected ,'annonces' =>$annonces, 'domaines' => $domaines, 'villes' => $villes, 'liste_annonces' => $liste_annonces) );
            }
            if($btn == 'nomVilleChange')
            {
                $val = $request->get('val');
                $domaineId = $request->get('domaineId');
                $villeSelected = $val;
                if (isset($domaineId))
                {
                    $sous_domaine = $em->getRepository("FrontBundle:SousDomaine")->findBy(array('domaine' => $domaineId));
                    $activite = $em->getRepository("FrontBundle:Activite")->findBy(array('sousDomaine' => $sous_domaine));
                    $demande_service = $em->getRepository("FrontBundle:DemandeService")->findBy(array('activite' => $activite));
                    $liste_annonces = $em->getRepository("FrontBundle:Annonce")->findBy(array('ville' => $val, 'demandeService' => $demande_service));
                }
                else
                {
                    $liste_annonces = $em->getRepository("FrontBundle:Annonce")->findBy(array('ville' => $val));
                }
                return $this->render('FrontBundle::annonces.html.twig', array('villeSelected' => $villeSelected ,'annonces' =>$annonces, 'domaines' => $domaines, 'villes' => $villes, 'liste_annonces' => $liste_annonces) );
            }
              

        }
        $params['domaines'] = $domaines;
        $params['villes'] = $villes;        
        $params['annonces'] = $annonces;
        $params['base_dir'] = 'toto'.realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;
        return $this->render('FrontBundle::annonces.html.twig', $params);
    }
    /**
     * @Route("/annonces/detail_annonce/{id}", name="detail_annonce")
     */
    public function detailannonceAction(Request $request, $id){

    $em = $this->getDoctrine()->getManager();
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $users = $em->getRepository("FrontBundle:User")->findAll();
    $annonce =  $em->getRepository("FrontBundle:Annonce")->findOneBy(array('id' => $id));
    $data = $annonce->getUser();
    $us = $em->getRepository("FrontBundle:User")->findOneBy(array('id' => $data));
    $reponse_annonce = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $id));
    $reponseWithValidation = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $id, 'validation' => 1));
    $response = new ReponseAnnonce();

    if(isset($_POST['Envoyer'])){
        $response->setUtilisateur($us);
        $response->setUtilisateur1($user);
        $response->setAnnonce($annonce);
        $response->setPrix($_POST['prix']);
        $response->setCommentaire($_POST['commentaire']);
        $response->setStatutPaiement(0);
        $response->setValidation(0);
        $response->setAvisPosted(0);
        $response->setDateReponse(new \DateTime("now"));
        $em->persist($response);
        $em->flush();
        return $this->redirectToRoute('detail_annonce', array('id' => $id, 'user' => $user));
    }
    if(isset($_POST['reponseok'])){
        $reponseencours = $_POST['id_reponse'];
        $r = $em->getRepository("FrontBundle:ReponseAnnonce")->findOneBy(array('id' => $reponseencours));
        $r->setValidation(1);
        $em->persist($r);
        $em->flush();
        return $this->redirectToRoute('detail_annonce', array('id' => $id, 'user' => $user));
    }
    return $this->render('FrontBundle::detail_annonce.html.twig', array(
            'annonce' => $annonce,
            'user' => $user,
            'reponse_annonce' => $reponse_annonce,
            'reponseWithValidation' => $reponseWithValidation,
            ));

    }

    /**
     * @Route("/annonces/modif_annonce/{id}", name="modif_annonce")
     */
    public function modifannonceAction(Request $request, $id){

    $em = $this->getDoctrine()->getManager();
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $horaires = $em->getRepository("FrontBundle:Horaire")->findAll();
    $typevehicules = $em->getRepository("FrontBundle:TypeVehicule")->findAll();
    $villes = $em->getRepository("FrontBundle:Ville")->findAll();
            $annonce = $em->getRepository("FrontBundle:Annonce")->findOneBy(array('id' => $id));

    if(isset($_POST['modifier']))
    {
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
          $annonce->setUser($user);
          $em->persist($annonce);
          $em->flush();
          return $this->redirectToRoute('annonces');
    }
    return $this->render('FrontBundle::modif_annonce.html.twig', array('id' => $id, 'typevehicules' => $typevehicules, 'horaires' => $horaires, 'villes' => $villes, 'annonce' => $annonce));

    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form = $this->createForm('Hopjob\FrontBundle\Form\ContactType',null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :

                    return $this->redirectToRoute('redirect_to_somewhere_now');
                }else{
                    // An error ocurred, handle
                    var_dump("Errooooor :(");
                }
            }
        }

        return $this->render('FrontBundle::contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function sendEmail($data){
        $myappContactMail = 'contact@hopjob974.fr';

        // Mail() transport
        $transport = \Swift_MailTransport::newInstance();

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance($data["theme"]." / ". $data['subject'])
            ->setFrom(array($myappContactMail => "Message du site HopJob974"))
            ->setTo(array(
                //ici mettre l'adressse mail que l'on souhaite
                $myappContactMail => $myappContactMail
            ))
            ->setBody($data["message"].$data["nom"].$data["prenom"]."<br>Email :".$data["email"]);

        return $mailer->send($message);
    }

    /**
     * @Route("/pdf", name="_pdf")
     */
    public function pdfAction(){
        $template = $this->renderView('::pdf.html.twig',[]);
        $html2pdf = $this->get('app.html2pdf');
        $html2pdf->create('P','A4','fr',true,'UTF-8', array(10,15,10,15));
        return $html2pdf->generatePdf($template, "facture");
    }

}
