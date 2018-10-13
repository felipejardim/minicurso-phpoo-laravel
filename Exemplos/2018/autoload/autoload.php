<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/10/18
 * Time: 10:59
 */

function __autoload($class__name)
{
    if (file_exists('Vendas/' . $class__name . '.php')) {
        require_once 'Vendas/' . $class__name . '.php';
    }
}