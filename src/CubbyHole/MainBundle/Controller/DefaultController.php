<?php

namespace CubbyHole\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('CubbyHoleMainBundle:Default:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('CubbyHoleMainBundle:Default:about.html.twig');
    }
    public function planAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CubbyHoleMainBundle:Plan')->findByAvailable(true);        
        return $this->render('CubbyHoleMainBundle:Default:plan.html.twig', array(
            'entities' => $entities,
        ));
    }    
}
