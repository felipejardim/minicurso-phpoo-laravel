<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 11:23
 */

class Produto
{
    protected $id;
    protected $descricao;
    protected $qtd;

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
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd
     */
    public function setQtd($qtd): void
    {
        $this->qtd = $qtd;
    }

    /**
     * @param $id
     * @param $descricao
     * @param $qtd
     */
    public function cadastrar($id, $descricao, $qtd)
    {
        $this->setId($id);
        $this->setDescricao($descricao);
        $this->setQtd($qtd);
    }

    /**
     * @return string
     */
    public function imprimir()
    {
        $r = 'Produto id: ' . $this->getId() . ' / Descrição: ' . $this->getDescricao() . ' / Quantidade: ' . $this->getQtd();
        return $r;
    }
}