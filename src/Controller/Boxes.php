<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Boxes extends AbstractController
{
    public function index()
    {
        return $this->render('boxes.html.twig');
    }
}