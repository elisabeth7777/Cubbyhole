<?php

namespace CubbyHole\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use CubbyHole\MainBundle\Entity\Plan;
use CubbyHole\MainBundle\Entity\Subscription;

class SubscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('CubbyHoleMainBundle:Default:index.html.twig');
    }
    public function chooseAction(){
        
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CubbyHoleMainBundle:Plan')->findByAvailable(true);
        
        return $this->render('CubbyHoleMainBundle:Subscription:new.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function newAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $plan = $em->getRepository('CubbyHoleMainBundle:Plan')->find($id);
        $subscription = new Subscription();
        $subscription->setUser($user);
        $subscription->setPlan($plan);
        $subscription->setIsPaid(true);
        $subscription->setDateExpiration(new \DateTime());
        $em->persist($subscription);
        $em->flush();
        $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
        $response = new RedirectResponse($url);
        return $response;
    }

}

?>
