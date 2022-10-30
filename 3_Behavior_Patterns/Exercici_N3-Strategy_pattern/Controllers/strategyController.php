<?php
    // l'arxiu model té la Classe amb Mètodes i Model de dades definit
    require '../Models/strategyModel.php';

    function createDiscount($objCAR){
        $objCAR->addSeasonDiscount();
        $objCAR->addStockDiscount();
        return true;
    }

    function carGenerator($strBrand){
        switch ($strBrand){
            case 'bmw' : $objCAR = new BmwCupounGenerator();      break;
            case 'mb'  : $objCAR = new MercedesCupounGenerator(); break;
            case 'alfa': $objCAR = new AlfaRomeoCupounGenerator();break;
        }
        return $objCAR;
    }

    function salesRate($strBrand){
        $objCAR = carCouponGenerator($strBrand);
        createDiscount($objCAR);
    }

    function output($objCAR,$strBrand){
        echo "<h4>Get <b>{$objCAR->_discount}%</b> off the price of your new {$strBrand} car.</h4>";
    }
