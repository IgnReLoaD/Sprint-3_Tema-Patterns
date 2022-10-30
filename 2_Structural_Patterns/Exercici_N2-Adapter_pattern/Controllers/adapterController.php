<?php

    require "../Models/adapterModel.php";

    function duck_interaction($duck) {
        $duck->quack();
        $duck->fly();
    }

    $duck = new Duck;
    $turkey = new Turkey;
    // cal implementar la classe TurkeyAdapter en adapterModel
    $turkey_adapter = new TurkeyAdapter($turkey);

    // sortida de dades Turkey (pavo)
    echo "<br><h3>" . "The Turkey says...\n" . "</h3><br>";
    $turkey->gobble();
    $turkey->fly();

    // sortida de dades Duck (pato)
    echo "<br><h3>" . "The Duck says...\n" . "</h3><br>";
    duck_interaction($duck);

    // sortida de dades TurkeyAsDuck (pavoComoPato)
    echo "<br><h3>" . "The TurkeyAdapter says...\n" . "</h3><br>";
    duck_interaction($turkey_adapter);

?>
