<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TotoController extends AbstractController
{
    #[Route("/index")]
    function index():Response
    {
        return new Response("Bonjour");
    }

}