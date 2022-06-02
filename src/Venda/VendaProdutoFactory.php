<?php

namespace DesafiosSemanais\Venda;
use DesafiosSemanais\Impostos\Icms;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }
    
    public function criarVenda()
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }
    
    public function imposto()
    {
        return new Icms();
    }
}