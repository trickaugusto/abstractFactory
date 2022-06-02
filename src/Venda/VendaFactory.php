<?php

namespace DesafiosSemanais\Venda;

interface VendaFactory
{
    public function criarVenda();
    public function imposto();
}