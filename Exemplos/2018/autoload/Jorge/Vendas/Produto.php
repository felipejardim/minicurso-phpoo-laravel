<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 10:30
 */

namespace Jorge\Vendas;

class Produto
{
    protected $id;
    protected $descricao;

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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @param $id
     * @param $descricao
     */
    public function cadastrar($id, $descricao)
    {
        $this->setId($id);
        $this->setDescricao($descricao);
    }

    public function imprimir()
    {
        $r = 'Id: ' . $this->getId() . ', descrição: ' . $this->getDescricao();
        return $r;
    }
}