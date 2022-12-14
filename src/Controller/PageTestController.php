<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageTestController extends AbstractController
{
    #[Route('/TestPage', name: 'app_page_test')]
    public function index(): Response
    { 
        return $this->render('page_test/index.html.twig');
    }
}
