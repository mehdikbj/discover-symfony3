<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class HomepageController extends Controller
{

    /**
     * @Route("/homepage", name="homepage")
     */
    public function homeAction(Request $request)
    {
        $session = new Session();
        $session->set('username', $this->getUser()->getUsername());

        // replace this example code with whatever you need
        return $this->render('homepage/index.html.twig', []);
    }

}