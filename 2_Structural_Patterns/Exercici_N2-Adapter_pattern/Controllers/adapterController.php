<?php

    require "../Models/adapterModel.php";

    function duck_interaction($duck,$flights) {
        for ($flight=1; $flight<=$flights; $flight++){
            $duck->quack();
            $duck->fly();
        }
    }

    function exec_poultry($intFlights){
        $duck = new Duck;
        $turkey = new Turkey;
        // cal implementar la classe TurkeyAdapter en adapterModel
        $turkey_adapter = new TurkeyAdapter($turkey);
    
        // sortida de dades Turkey (pavo)
        echo "<h4>" . "The Turkey says...\n" . "</h4>";        
        for ($flight=1; $flight<=$intFlights; $flight++){
            $turkey->gobble();
            $turkey->fly();
        }
    
        // sortida de dades Duck (pato)
        echo "<h4>" . "The Duck says...\n" . "</h4>";
        duck_interaction($duck,$intFlights);
    
        // sortida de dades TurkeyAsDuck (pavoComoPato)
        echo "<h4>" . "The TurkeyAdapter says...\n" . "</h4>";
        duck_interaction($turkey_adapter,$intFlights);
    }

?>
