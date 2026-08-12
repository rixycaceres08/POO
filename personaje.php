<?php

abstract class personaje {
    private $nombre;
    private $vida = 100:

    public function __ construct($nombre) {
        $this ->nombre = $mobre;    
    }

    public function getnombre() {
        return $this->nombre;
    }

        public function getvida() {
        return $this->vida;
    }

    abstract public function atacra ();
    }

    class guerrero extends personaje {
        public function atacar() {
        echo $this->getnombre(). "ataca con espada: -20 de vida" . PHP_EOL;
        }
    }
    class mago extends personaje {
        public function atacar() {
        echo $this->getnombre(). "lanza una bola de fuego:-30 de vida" . PHP_EOL;
        }
    }

    $g = new guerrero("Thorin");
    $m = new mago ("Elandra");

    $equipo = [$g, $m];
    foreach ($equipo as $p) {
        $->atacar();
    }

