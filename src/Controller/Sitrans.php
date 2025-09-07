<?php
// src/Controller/Sitrans.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class Sitrans extends AbstractController
{
    #[Route('/sitrans')]
    public function index(): Response
    {
        return $this->render('sitrans/index.html.twig', [
            'index' => 'Salut je vais coder le site Sitrans ici !',
        ]);
    }
}