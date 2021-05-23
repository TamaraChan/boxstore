<?php


namespace App\Controller;

use App\Entity\Box;
use App\Entity\Order;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\VarDumper\VarDumper;

class OrderBox extends AbstractController
{
    public function index(Request $request, $idBox)
    {
        $twigVars = [
            'idBox' => $idBox
        ];

        if ($request->getSession()->has('error')) {
            $twigVars['errors'] = [
                $request->getSession()->get('error')
            ];
            $request->getSession()->remove('error');
        }

        return $this->render(
            'orderBox.html.twig',
            $twigVars
        );
    }

    public function createOrder(Request $request)
    {
        $errorMessage = 'Произошла ошибка при создании заказа.';

        if ($request->cookies->get('idUser')) {
            $idUser = $request->cookies->get('idUser');
        } else {
            $guest = (new User())
                ->setName($request->get('name'))
                ->setAddress($request->get('address'))
                ->setPhone($request->get('phone'))
                ->setIsGuest(true)
                ->setEmail($request->get('email'));

            try {
                $this->getDoctrine()->getManager()->persist($guest);
                $this->getDoctrine()->getManager()->flush();
            } catch (\Exception $e) {
                $request->getSession()->set('error', $errorMessage);
                return $this->redirectToRoute('orderBox', ['idBox' => (int)$request->get('idBox')]);
            }


            $idUser = $guest->getIdUser();
        }

        /** @var Box $box*/
        $box = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Box::class)
            ->find((int)$request->get('idBox'));

        if (is_null($box)) {
            $request->getSession()->set('error', $errorMessage);
            return $this->redirectToRoute('orderBox', ['idBox' => (int)$request->get('idBox')]);
        }

        $order = (new Order())
            ->setIdBox($box->getIdBox())
            ->setIdUser($idUser)
            ->setComment($request->get('comment'))
            ->setTotal((float)$box->getPrice())
            ->setIsConfirmed(false)
            ->setDate(date(Order::DATE_FORMAT))
        ;

        try {
            $this->getDoctrine()->getManager()->persist($order);
            $this->getDoctrine()->getManager()->flush();
        } catch (\Exception $e) {
            $request->getSession()->set('error', $errorMessage);
            return $this->redirectToRoute('orderBox', ['idBox' => (int)$request->get('idBox')]);
        }

        return $this->redirectToRoute('confirmation');
    }

    public function confirmation()
    {
        return $this->render('confirmation.html.twig');
    }
}