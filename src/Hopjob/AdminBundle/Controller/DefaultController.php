<?php

namespace Hopjob\AdminBundle\Controller;

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
        return $this->render('AdminBundle::default/admin.html.twig');
    }

    /**
     * @Route("/messagerie")
     */
    public function messagerieAction()
    {
        return $this->render('AdminBundle::messagerie.html.twig');
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
        return $this->render('AdminBundle::documents.html.twig');
    }
}
