<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Index extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
    }
}