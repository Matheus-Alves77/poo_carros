<?php

declare (strict_types=1);

 class Veiculo {
    protected $placa;
    protected $marca;
    protected $modelo;
    protected $anoModelo;
    protected $anoFabricacao;
    protected $chassi;
    protected $renavam;
    protected $procedencia;

    protected $corExterna;
    protected $corInterna;
    protected $tipoCombustivel;
    protected $motor;
    protected $quilometragem;
    protected $consumoMedio;
    protected $numeroPortas;
    protected $opcionais;

    public function __construct($placa, $marca, $modelo) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    
    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

}
