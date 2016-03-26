<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
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

}