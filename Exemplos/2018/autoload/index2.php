<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 10:56
 */

/**
 * Desvantagem, o arquivo auto load deve verificar todas os diretorios e subdiretórios que possuem arquivos
 * de classes.
 */
include_once 'autoload.php';

// Cadastro de um usuário
$usuario1 = new Usuario(); // Toda vez que possue um new, a função __autoload é chamada.
$usuario1->cadastrar('Usuario 1', 26);

// Cadastro de dois novos produtos
$produto1 = new Produto();
$produto1->cadastrar(1, 'Omo');
$produto2 = new Produto();
$produto2->cadastrar(2, 'Café Brasileiro');

// Uma compra
$c = new Compra();
$c->cadastrar(array($produto1, $produto2), $usuario1);
echo $c->imprimir();