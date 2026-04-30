<?php

//exemplo de como seria usaDO AS classes e etc.

require_once ("veiculo.php");
require_once ("veiculocarga.php");

$carro = new VeiculoPassageiro("ABC-1234", "Toyota", "Corolla", 5);
$caminhao = new VeiculoCarga("XYZ-9876", "Volvo", "FH", 18000);

echo $carro->getPlaca();
echo $caminhao->getCapacidadeCargaKg();

?>
