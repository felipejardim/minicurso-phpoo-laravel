<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 11:32
 */

/**
 * Namespace
 * - Padrão de desenvolvimento PHP
 * - Disponível a partir da versão 5.3
 * - A declaração deve ser feito no início
 * - Evita colisão de nomes
 * - Evita o uso de prefixo.
 * - Para usar deve seguir as normas do PSR-4
 */

include_once "vendor/autoload.php";

// Cadastro de um usuário
$usuario1 = new Jorge\Vendas\Usuario();
$usuario1->cadastrar('Usuario 1', 26);

// Cadastro de dois novos produtos
$produto1 = new Jorge\Vendas\Produto();
$produto1->cadastrar(1, 'Omo');
$produto2 = new Jorge\Vendas\Produto();
$produto2->cadastrar(2, 'Café Brasileiro');

// Uma compra
$c = new Jorge\Vendas\Compra();
$c->cadastrar(array($produto1, $produto2), $usuario1);
echo $c->imprimir();

echo "<br><br>";

$e = new \Jorge\Estoque\Estoque();
echo $e->getTotal();
