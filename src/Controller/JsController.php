<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JsController extends AbstractController
{
    /**
     * @Route("/js", name="js")
     */
    public function index()
    {
        return $this->render('js/index.html.twig', [
            'controller_name' => 'JsController',
        ]);
    }
}
