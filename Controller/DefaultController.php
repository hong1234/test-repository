<?php

namespace Foggyline\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$rs = $this->container->getParameter('test.twitter');
        $sv = $this->container->get('foggyline_test.example');

        var_dump($sv->getMessage());

        return $this->render('FoggylineTestBundle:Default:index.html.twig');
    }
}
