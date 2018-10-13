<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 11:21
 */




class Estoque
{
    private $total;

    /**
     * Estoque constructor.
     */
    public function __construct()
    {
        $this->setTotal(rand(0, 5000));
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}