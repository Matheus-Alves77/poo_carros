<?php

require_once ("veiculo.php");

class VeiculoPassageiro extends Veiculo {
    private $numeroPassageiros;

    public function __construct($placa, $marca, $modelo, $numeroPassageiros) {
        parent::__construct($placa, $marca, $modelo);
        $this->numeroPassageiros = $numeroPassageiros;
    }

    public function getNumeroPassageiros() {
        return $this->numeroPassageiros;
    }

    public function setNumeroPassageiros($numeroPassageiros) {
        $this->numeroPassageiros = $numeroPassageiros;
    }
}
