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

    /**
     * @return int
     */
    public function getIdBox()
    {
        return $this->idBox;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Box
     */
    public function setName(string $name): Box
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Box
     */
    public function setPrice(float $price): Box
    {
        $this->price = $price;
        return $this;
    }
}