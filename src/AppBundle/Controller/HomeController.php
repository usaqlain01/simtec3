<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction()
    {
        return new Response('Welcome to Voting App (Symfony 3)');
    }

    /**
     * @Route("/welcome/{name}")
     * @return Response
     */
    public function welcomeAction($name)
    {
        return new Response('Hey there '.$name.' having fun?');
    }

    /**
     * @Route("/twig")
     * @return Response
     */
    public function twigAction()
    {
//        $twig = $this->container->get('templating');
//        $html = $twig->render('twig.html.twig', [
//            'message' => 'Hello Twig',
//        ]);
//
//        return new Response($html);
//  ALL ABOVE CODE CAN BE REPLACED BY this shortcut
        return $this->render('twig.html.twig', [
        'message' => 'Hello Twig',
        ]);
    }

    /**
     * @Route("/api/{name}", name="first_api")
     * @Method("GET")
     */
    public function getApiResponseAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'notes' => $notes,
        ];

        //return new Response(json_encode($data)); short cut it
        return new JsonResponse($data);
    }

}