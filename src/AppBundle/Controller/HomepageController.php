<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{

    /**
     * @Route("/homepage", name="homepage")
     */
    public function homeAction(Request $request)
    {
        $item = new Item();
        $item->setTitle('Test');
        $item->setDescription('Only a test');
        $item->setCode('123');
        $item->setCollection('Test');

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        // replace this example code with whatever you need
        return $this->render('homepage/index.html.twig', []);
    }

}