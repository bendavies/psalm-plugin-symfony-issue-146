<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AceController extends AbstractController
{
    #[Route('/ace', name: 'ace')]
    public function index(): Response
    {
        return $this->render('ace/index.html.twig', [
            'controller_name' => 'AceController',
        ]);
    }
}
