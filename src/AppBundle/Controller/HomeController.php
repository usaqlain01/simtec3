<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        $twig = $this->container->get('templating');
        $html = $twig->render('twig.html.twig', [
            'message' => 'Hello Twig',
        ]);

        return new Response($html);
    }    

}