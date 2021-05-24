<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Help extends AbstractController
{
    public function index()
    {
        return $this->render('needs.html.twig');
    }
}