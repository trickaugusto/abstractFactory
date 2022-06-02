<?php

namespace DesafiosSemanais\Impostos;

use DesafiosSemanais\Orcamento;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
