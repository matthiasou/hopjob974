<?php

namespace Hopjob\FrontBundle\Controller;

use DateInterval;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Hopjob\FrontBundle\Entity\Domaine;
use Hopjob\FrontBundle\Entity\Paiement;


class SouscriptionController extends Controller
{
    /**
     * @Route("/souscription")
     */
    public function indexAction()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $souscription = "";
        if (isset($_POST['1semaine'])) {
            $_SESSION['souscription'] = $_POST['1semaine'];
            return $this->redirect($this->generateUrl('paiement'));
        }
        elseif(isset($_POST['1mois'])){
            $_SESSION['souscription'] = $_POST['1mois'];
            return $this->redirect($this->generateUrl('paiement'));
        }
        elseif(isset($_POST['1trim'])){
            $_SESSION['souscription'] = $_POST['1trim'];
            return $this->redirect($this->generateUrl('paiement'));
        }
        elseif(isset($_POST['1an'])){
            $_SESSION['souscription'] = $_POST['1an'];
            return $this->redirect($this->generateUrl('paiement'));
        }

        return $this->render('FrontBundle::default/souscription.html.twig');

    }



    /**
     * @Route("/paiement")
     */
    public function paiementAction()
    {

        if (isset($_POST['paiement'])) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            // Récupération des informations de l'utilisateur qui est connecté


            if (empty($user)) {
                $params['utilisateurs'] = null;
            }

            $em = $this->getDoctrine()->getManager();
            $today = new \DateTime('NOW');
            $today->add(new DateInterval('P1W')); //Où 'P1W' indique 'Période de 1 semaine'
            $paiement = new  Paiement();
            $paiement->setUtilisateur($user);
            $paiement->setEffectue(1);
            $paiement->setNbJob(0);
            $paiement->setDateFinAbonnement($today);
            $em->persist($paiement);
            $em->flush();

            $js = '<script  type="text/javascript">'.'swal({
  title: "Paiement effectué !",
   text: "Votre abonnement est bien activé",
    type: "success"
  },
  function(){
    window.location.href = "souscription";
});'.
                '</script>';
            $params['js'] = $js;

            return $this->render('FrontBundle::default/souscription.html.twig',$params);


        }




        return $this->render('FrontBundle::default/paiement.html.twig');
    }


}
