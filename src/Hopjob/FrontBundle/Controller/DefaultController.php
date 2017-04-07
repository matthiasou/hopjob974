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
        $em = $this->getDoctrine()->getManager();
        $domaines = $em->getRepository("FrontBundle:Domaine")->findAll();
        $villes = $em->getRepository("FrontBundle:Ville")->findAll();
        $utilisateurs = $em->getRepository("FrontBundle:User")->findAll();
        $horaires = $em->getRepository("FrontBundle:Horaire")->findAll();
        $villes = $em->getRepository("FrontBundle:Ville")->findAll();
        $type_vehicules = $em->getRepository("FrontBundle:TypeVehicule")->findAll();
        $annonces = $em->getRepository("FrontBundle:Annonce")->findAll();
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
    $users = $em->getRepository("FrontBundle:User")->findAll();
    $annonce =  $em->getRepository("FrontBundle:Annonce")->findOneBy(array('id' => $id));
    $reponse_annonce = $em->getRepository("FrontBundle:ReponseAnnonce")->findBy(array('annonce' => $id));

    return $this->render('FrontBundle::detail_annonce.html.twig', array(
            'annonce' => $annonce,
            'reponse_annonce' => $reponse_annonce,
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
