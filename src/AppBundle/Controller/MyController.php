<?php

namespace AppBundle\Controller;


use AppBundle\form\Type\MyFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class MyController extends Controller
{

    /**
     * @Route("/my/{params}", name="my", defaults={"params"=null})
     * @Method({"GET", "POST"})
     */
    public function myAction(Request $request) {

        $form = $this->createForm(MyFormType::class);
        $form->handleRequest($request);

        if ($form->isValid()) {
        }

        return $this->render('myTemplate/my.html.twig', [
            'name' => $request->get('params'),
            'form' => $form->createView()
        ]);
    }

}