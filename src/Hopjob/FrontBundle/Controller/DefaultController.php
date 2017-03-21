<?php

namespace Hopjob\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Domaine;


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
        $annonces = $this->get('doctrine.orm.entity_manager')
                ->getRepository('FrontBundle:Annonce')
                ->findAll();
                 $form = $this->createForm("Hopjob\FrontBundle\Form\AnnonceSearchType",null,array('method' => 'POST'));
        if (empty($annonces)) {
            $params['annonces'] = null;
            $params['liste_annonces'] = null;
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
               'description' => $annonce->getDescription(),
               'ville' => $annonce->getVille()->getNom(),
               'utilisateur' => $annonce->getUtilisateur()->getNom(),
               'typeVehicule' => $annonce->getTypeVehicule()->getLibelle(),
               'horaire' => $annonce->getHoraire()->getLibelle(),        
            ];
        }
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
              return $this->render('FrontBundle::annonces.html.twig', array('liste_annonces' => $liste_annonces));
              $params['liste_annonces'] = $liste_annonces;
            }
        }

        $params['annonces'] = $formatted;
        $params['form'] = $form->createView();
        $params['base_dir'] = 'toto'.realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;

        return $this->render('FrontBundle::annonces.html.twig', $params);
    }
    /**
     * @Route("/annonces/detail_annonce/{id}", name="detail_annonce")
     */
    public function detailannonceAction(Request $request, $id){

    $em = $this->getDoctrine()->getManager();
    $annonce =  $em->getRepository("FrontBundle:Annonce")->findOneBy(array('id' => $id));
    return $this->render('FrontBundle::detail_annonce.html.twig', array(
            'annonce' => $annonce
            ));

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
