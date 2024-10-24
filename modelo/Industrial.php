<?php

require_once("IConsumidorEnergia.php");

//  Começo da Class INDUSTRIAL:  //
class Industrial implements IConsumidorEnergia{

    // Atributo:
    private int $consumo;

    // Método:
    public function getValorFatura(){

        if ($this->consumo <= 500) {
            return $this->consumo * 1.80;
        }
        else {
            return $this->consumo * 2.30;
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
