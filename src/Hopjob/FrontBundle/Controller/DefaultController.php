<?php

namespace Hopjob\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // récupération des données sur le REST
        $domaines = $this->get("http")->performRequest("domaines");

        return $this->render('FrontBundle::default/index.html.twig', [
            'base_dir' => 'toto'.realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'domaines' => $domaines
        ]);
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
