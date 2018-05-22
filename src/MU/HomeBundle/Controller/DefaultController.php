<?php

namespace MU\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MUHomeBundle:Default:index.html.twig');
    }
}
