<?php

abstarct class vehiculo {
    private $marca;
    private $velocidad = 0;

    public function _construct($marca) {
        $this->marca = $marca;
    }
    
    public function getvelocidad() {
        return $this->velocidad;
    }

    abstract public function acelerar();
}

class carro extends vehiculo {
    private $puertas = 4;

    public function acelerar() 
    echo "Vrrum! 4 ruedas" . PHP_EOL;
}

class moto extends vehiculo {
    private $tieneSidecar = false;

    public function acelerar() {
        echo "Rrrapido!" . PHP_EOL; 
    }
}
$c = new carro("Toyota");
$m new moto("Honda");

$flota = [$c, $m];
foreach ($flota as $v) {
    $v->acelerar();
}