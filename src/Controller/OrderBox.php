<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderBox extends AbstractController
{
    public function index($idBox)
    {
        return $this->render(
            'orderBox.html.twig',
            [
                'idBox' => $idBox
            ]
        );
    }
}