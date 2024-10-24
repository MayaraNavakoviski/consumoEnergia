<?php

require_once("IConsumidorEnergia.php");

//  Começo da Class RESIDENCIAL:  /
class Residencial implements IConsumidorEnergia{

    // Atributo 
    private int $consumo;

    // Método:
    public function getValorFatura() {
        return $this->consumo * 1.05;
    }

    // GETs e SETs:
    public function getConsumo(): int {
        return $this->consumo;
    }
    public function setConsumo(int $consumo): self {
        $this->consumo = $consumo;
        return $this;
    }
}
