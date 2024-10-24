<?php

require_once("IConsumidorEnergia.php");

//  Começo da Class COMERCIAL 
class Comercial implements IConsumidorEnergia{

    // Atributo:
    private int $consumo;

    // Método:
    public function getValorFatura() {

        if ($this->consumo <= 100) {
            return $this->consumo * 1.45;
        }
        else {
            return $this->consumo * 1.60;
        }
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
