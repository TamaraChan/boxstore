<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use http\Encoding\Stream\Deflate;

/**
 * @ORM\Entity
 * @ORM\Table(name="box")
 */
class Box
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_box", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idBox;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    protected $price;
}