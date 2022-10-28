<?php
    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per Tigger
    require '../Models/singletonModel.php';

    function makeRoars($num){
        // instanciem l'objecte Tigre a partir de la Classe Tigger:
        // abans feiem així, permetia varis instàncies
        // $objTigre = new Tigger();
        // ara no permet usar el NewOperator per tan farem:
        $objTIGRE = Tigger::getInstance($num);
        $msg = 'A tigger was born at ' . $objTIGRE->getMomento() . ' .... ' . PHP_EOL;
        for ($i=1;$i<=$num;$i++){
            $msg .= $objTIGRE->roar();
            $objTIGRE->setCounter($objTIGRE->getCounter()+1);
        }
        $msg .= '<br>' . PHP_EOL;
        // return $numRoars = $objTIGRE->showRoars($num);
        return $msg;
    }

    function output($msg){
        $objTIGRE = Tigger::getInstance(0);
        $msg .= '<br>' . PHP_EOL . 'So the Tigger born at ' . $objTIGRE->getMomento() . ' has roared ';
        $times = $objTIGRE->getCounter();
        if ($times < 3){
            $msg .= 'only for ' . $times . ' times, keep calm.';
        } else {
            $msg .= 'for ' . $times . ' times, run away!';
        }        
        echo $msg;
    }
