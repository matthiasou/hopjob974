<?php

namespace Hopjob\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('admin.html.twig');
    }

    public function messagerieAction()
    {
        return $this->render('messagerie.html.twig');
    }

    public function codeAction()
    {
        return $this->render('code.html.twig');
    }

    public function documentsAction()
    {
        return $this->render('documents.html.twig');
    }

}
