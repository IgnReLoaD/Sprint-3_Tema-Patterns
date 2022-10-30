<?php
    // l'arxiu model té les Classes amb Mètodes i Model de dades definit
    require '../Models/strategyModel.php';

    // els mètodes de les classes es diuen igual, però es criden segons l'objecte
    function createDiscount($objCAR,$strBrand){
        $objCAR->addSeasonDiscount();
        $objCAR->addStockDiscount();
        $strBrand = strtoupper($strBrand);
        return "<p>Get <b>{$objCAR->discount}%</b> off the price of your new {$strBrand} car.</p>";
    }

    // mètode per crear l'objecte CAR segons la Marca
    function carCouponGenerator($strBrand){
        switch ($strBrand){
            case 'bmw' : $objCAR = new BmwCupounGenerator();      break;
            case 'mb'  : $objCAR = new MercedesCupounGenerator(); break;
            case 'alfa': $objCAR = new AlfaRomeoCupounGenerator();break;
        }
        return $objCAR;
    }

    // funció que executa tot (tipus main)
    function salesRate($strBrand){
        $objCAR = carCouponGenerator($strBrand);
        $msg = createDiscount($objCAR,$strBrand);  
        return $msg;      
    }

    // funció per mostrar per pantalla
    function output($msg){
        echo $msg;
    }
