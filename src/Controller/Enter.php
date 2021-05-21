<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Enter extends AbstractController
{
    public function index()
    {
        return $this->render('enter.html.twig');
    }
}