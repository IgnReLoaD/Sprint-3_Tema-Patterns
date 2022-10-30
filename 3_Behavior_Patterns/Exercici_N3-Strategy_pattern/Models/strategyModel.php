<?php

    // és necessari crear la interfície carCouponGenerator que obligui 
    // a totes les classes que la implementin a usar-los, incloses les 
    // que acabem d'escriure i les que ens agradaria afegir en el futur.
    // Exemple: les classes
    //        - BmwCupounGenerator, 
    //        - MercedesCupounGenerator, 
    //        - AlfaCupounGenerator...
    interface carCupounGenerator{
        public function addSeasonDiscount();
        public function addStockDiscount();
    }

    // Ja que els cupons varien segons cada tipus d'automòbil, l'ideal 
    // seria convocar aquestes funcions en classes separades. 
    // Pel que serà necessari implementar les classes següents:
    class BmwCupounGenerator implements carCupounGenerator{
        public $discount;
        public $highStock;
        public $highSeason;

        public function addSeasonDiscount(){
            if ($this->highSeason){
                return $this->discount;
            }else{
                return $this->discount +=5;
            }
        }

        public function addStockDiscount(){
            if (($this->highStock)){
                return $this->discount;
            }else{
                return $this->discount +=7;
            }
        }
    }

    class MercedesCupounGenerator implements carCupounGenerator{
        public $discount;
        public $highStock;
        public $highSeason;

        public function addSeasonDiscount(){
            if ($this->highSeason){
                return $this->discount;
            }else{
                return $this->discount +=4;
            }
        }

        public function addStockDiscount(){
            if (($this->highStock)){
                return $this->discount;
            }else{
                return $this->discount +=10;
            }
        }
    }

    class AlfaRomeoCupounGenerator implements carCupounGenerator{
        public $discount;
        public $highStock;
        public $highSeason;

        public function addSeasonDiscount(){
            if ($this->highSeason){
                return $this->discount;
            }else{
                return $this->discount +=7;
            }
        }

        public function addStockDiscount(){
            if (($this->highStock)){
                return $this->discount;
            }else{
                return $this->discount +=9;
            }
        }
    }

?>