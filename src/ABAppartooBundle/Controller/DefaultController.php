<?php

namespace ABAppartooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ABAppartooBundle:Default:index.html.twig');
    }
}
