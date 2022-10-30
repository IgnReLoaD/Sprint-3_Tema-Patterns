<?php

    class Duck {

        public function quack() {
            echo "Quack \n" . "<br>";
        }

        public function fly() {
            echo "I'm flying \n" . "<br>";
        }
    }

    class Turkey {

        public function gobble() {
            echo "Gobble gobble \n" . "<br>";
        }

        public function fly() {
        echo "I'm flying a short distance \n" . "<br>";
        }
    }

    // aquí caldria desenvolupar una classe, que actui com Adapter
    // capturant les trucades a classe Turkey i modificant com Duck
    // ......
    class TurkeyAdapter extends Turkey{
    
        // 1. Zona atributs
        private $turkeyAsDuck;
    
        // 2. Zona constructor
        public function __construct(Turkey $turkeyLearning){
            $this->turkeyAsDuck = $turkeyLearning;
        }

        // 2. Zona mètodes, en tindrem 2:

        // capturem la trucada a "quack" (mateix nom) perquè faci un globe
        public function quack(){
            $this->turkeyAsDuck->globbe();
        }

        // capturem la trucada a "fly" (mateix nom) per adaptar llargada del vol
        public function fly(){
            for ($step=1;$step<=5;$step++){
                $this->turkeyAsDuck->fly();
            }
        }
    }

?>
