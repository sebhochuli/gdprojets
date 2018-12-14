<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DecompteController extends AbstractController
{
    /**
     * @Route("/decompte", name="decompte")
     */
    public function index()
    {
        return $this->render('decompte/index.html.twig', [
            'controller_name' => 'DecompteController',
        ]);
    }
}
