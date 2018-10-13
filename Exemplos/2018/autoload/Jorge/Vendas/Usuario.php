<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 10:16
 */

namespace Jorge\Vendas;

class Usuario
{
    protected $nome;
    protected $idade;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @param $nome
     * @param $idade
     */
    public function cadastrar($nome, $idade)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    /**
     * @return string
     */
    public function imprimir()
    {
        $r = 'Nome: ' . $this->getNome() . ', idade: ' . $this->getIdade();
        return $r;
    }
}