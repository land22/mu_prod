<?php
namespace MU\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MUHomeBundle:Home:index.html.twig');
    }
}
