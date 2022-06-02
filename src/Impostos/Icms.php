<?php

namespace DesafiosSemanais\Impostos;

use DesafiosSemanais\Orcamento;

class Icms extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
