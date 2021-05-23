<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_order", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    protected $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_box", type="integer")
     */
    protected $idBox;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    protected $total;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", columnDefinition="TEXT")
     */
    protected $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_confirmed", type="boolean")
     */
    protected $isConfirmed;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", columnDefinition="datetime")
     */
    protected $date;

    /**
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     * @return Order
     */
    public function setIdUser(int $idUser): Order
    {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdBox(): int
    {
        return $this->idBox;
    }

    /**
     * @param int $idBox
     * @return Order
     */
    public function setIdBox(int $idBox): Order
    {
        $this->idBox = $idBox;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return Order
     */
    public function setTotal(float $total): Order
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Order
     */
    public function setComment(string $comment): Order
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->isConfirmed;
    }

    /**
     * @param bool $isConfirmed
     * @return Order
     */
    public function setIsConfirmed(bool $isConfirmed): Order
    {
        $this->isConfirmed = $isConfirmed;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Order
     */
    public function setDate(string $date): Order
    {
        $this->date = $date;
        return $this;
    }
}