<?php

class saludo {
    public function decir (){
        echo "Hola, POO funcional!". PHP_EOL;
    }
}

$s = new saludo();
$s->decir();