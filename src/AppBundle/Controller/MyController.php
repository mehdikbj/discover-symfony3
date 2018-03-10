<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class MyController extends Controller
{

    /**
     * @Route("/my/{params}", name="my", defaults={"params"=null})
     * @Method("GET")
     */
    public function myAction(Request $request) {

        return $this->render('myTemplate/my.html.twig', ['name' => $request->get('params')]);
    }

}