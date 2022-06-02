<?php

namespace DesafiosSemanais\Venda;
use DesafiosSemanais\Impostos\Iss;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }
    
    public function criarVenda()
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }
    
    public function imposto()
    {
        return new Iss();
    }
}