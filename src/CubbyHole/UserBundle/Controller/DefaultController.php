<?php

namespace CubbyHole\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CubbyHoleUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
