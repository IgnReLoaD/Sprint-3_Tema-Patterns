<?php

class Tigger
{
    // 1. ZONA ATRIBUTS --------------------

    // declarem una instància única, i privada pq no s'hi pugui accedir
    private static $_instanciaUnica = null; 
    private $_momento = null;
    private $_counter = 0;

    // 2. ZONA CONSTRUCTOR -----------------
    
    //assegurem que no es pugui generar amb NEW
    protected function __construct($num)
    {
        $this->_counter = $this->_counter + $num;
        $this->_momento = date("h:i:sa");    // getDate();
    } 

    // responsable de crear instància de classe Tigger només una vegada
    // i tornar aquesta única instància cada vegada que es crida
    public static function getInstance($num)
    {
        if (!isset(self::$instanciaUnica)) {
            echo "Building character..." . PHP_EOL;
            self::$_instanciaUnica = new static($num);
        }
        return self::$_instanciaUnica;
    }

    // 3. ZONA de GETTERS-SETTERS---------------

    // mètode getCounter() que retorni el nombre de vegades que Tigger ha realitzat rugits
    public function getCounter(){
        return $this->_counter;
    }
    // mètode setCounter() per establir els números de rugits que l'usuari demana
    public function setCounter($rugits){
        $this->_counter = $rugits;
    }
    // mètode getMomento() per comprobar que retorna la primera instància creada sempre
    public function getMomento(){
        return strval($this->_momento);
    }

    // 4. ZONA de METODES-----------------------

    // funció que genera l'acció demanada (un "rugit")
    public function roar()
    {
        return "Grrr!" . PHP_EOL;
    }

    // Imprimeix en pantalla múltiples vegades el rugit de Tigger
    // ... ho traslladem al Controller
    
    // public function showRoars($roars){
    //     for ($i=1;$i<=$roars;$i++){
    //         $this->roar();
    //         $this->setCounter($this->getCounter+1);
    //     }
    //     return $this->getCounter;
    // }
}

?>
