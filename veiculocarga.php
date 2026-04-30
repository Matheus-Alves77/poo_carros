<?php

declare (strict_types=1);

require_once ("veiculo.php");

class VeiculoCarga extends Veiculo {
    private $capacidadeCargaKg;
    private $altura;
    private $largura;
    private $profundidade;

    public function __construct($placa, $marca, $modelo, $capacidadeCargaKg) {
        parent::__construct($placa, $marca, $modelo);
        $this->capacidadeCargaKg = $capacidadeCargaKg;
    }

    public function getCapacidadeCargaKg() {
        return $this->capacidadeCargaKg;
    }

    public function setCapacidadeCargaKg($capacidadeCargaKg) {
        $this->capacidadeCargaKg = $capacidadeCargaKg;
    }
}
