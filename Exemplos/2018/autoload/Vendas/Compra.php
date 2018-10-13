<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 10:16
 */

class Compra
{
    protected $id;
    protected $produtos;
    protected $usuario;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * @param mixed $produto
     */
    public function setProdutos($produtos): void
    {
        $this->produtos = $produtos;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }

    /**
     * @param array $produtos
     * @param Usuario $usuario
     */
    public function cadastrar(array $produtos, Usuario $usuario)
    {
        $this->setId(rand(10000000000000, 90000000000000));
        $this->setProdutos($produtos);
        $this->setUsuario($usuario);
    }

    /**
     * @return string
     */
    public function imprimir()
    {
        $r = 'Compra id: ' . $this->getId() . '<hr>';
        $r = $r . 'Produtos: ' . '<br>';
        foreach ($this->getProdutos() as $produto) {
            $r = $r . $produto->imprimir() . '<br>';
        }
        $r = $r . '<hr>';
        $r = $r . $this->getUsuario()->imprimir();
        return $r;
    }
}