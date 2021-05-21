<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Registration extends AbstractController
{
    public function index()
    {
        return $this->render('registration.html.twig');
    }
}