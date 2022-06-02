<?php

use DesafiosSemanais\Venda\VendaProdutoFactory;
use DesafiosSemanais\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaServicoFactory('Patrick');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);