<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MadeByYourOwn extends AbstractController
{
    public function index()
    {
        return $this->render('madeByYourOwn.html.twig');
    }
}