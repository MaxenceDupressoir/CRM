<?php

namespace CRM\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRMBackBundle:Home:index.html.twig');
    }
}
