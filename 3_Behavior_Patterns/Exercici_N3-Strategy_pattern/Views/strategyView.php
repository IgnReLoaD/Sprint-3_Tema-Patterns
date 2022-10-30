<?php
    // l'arxiu controller té els mètodes-funcions específiques:
    require '../Controllers/strategyController.php';
    // l'arxiu routes només si utilitzessim API remota, aquí estem en local per tan no cal:
    require '../Routes/strategyRoute.php'; 
?>

<!-- RENDERITZAT del Html  -->    

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>DESIGN PATTERNS Behavior</title>
    <link rel="stylesheet" href="../../../styles/patternsStyles.css">
</head>
<body>
    <h2>DESIGN PATTERNS > Behavior Patterns > Strategy example (cupoun)</h2>
    <h3>Teoria:</h3>
    <h4>3.8. Strategy</h4>
        <p>Permite definir una familia de algoritmos, colocar cada uno en una clase separada y hacer sus objetos intercambiables.</p>
    <hr>
    <h3>Exercici:</h3>
    <p>Refactoritzar amb patró Strategy que donada la marca d'un automòbil, calculi el descompte., considerant:</p>
        <p>&nbsp; &nbsp; - crear una funció anomenada addSeasonDiscount: que afegeix un dte quan les vendes baixen. </p>
        <p>&nbsp; &nbsp; - crear una funció anomenada addStockDiscount: que afegeix un dte quan l'inventari és massa gran.</p>
        <p>&nbsp; &nbsp; - l'ideal seria convocar les funcions en classes separades: bmwCuoponGenerator i mercedesCuoponGenerator.</p>
        <p>&nbsp; &nbsp; - els mètodes anteriors per cupó tenen el mateix nom: necessari crear interfície carCouponGenerator que obligui a totes les classes que la implementin a usar-los.</p>
    </p>    
    <hr>
    <h3>Executar:</h3>
        <form action="strategyView.php" method="post">
            <label for="cmbMarca">Selecciona la marca: </label>
            <select id="cmbMarca">
                <option value="bmw">BMW - Bayerische Motoren Werke, AG.</option>
                <option value="mb"> MB - Daimler Mercedes-Benz Group, AG.</option>                
                <option value="alfa"> ALFA - Alfa Romeo Milano Automobili, SPA.</option>  
            </select>            
            &nbsp; &nbsp;<input type="submit" value=" Calcular dte ">
            <hr>     
        </form>
    <h3>Resolució:</h3>
        <div id="outputs">
            <?php
                // si l'usuari ens ha demanat quelcom...
                if ( !empty($_POST['cmbMarca']) ) {

                    // ENTRADA DE DADES - en view
                    $strMarca = strval($_POST['cmbMarca']);                    

                    // LLOGICA DE DADES - en controller
                    salesRate($strMarca);                    
                    
                    // SORTIDA DE DADES - en view                    
                    output($strMarca);
                }
            ?>            
        </div>
    <hr>
    <h3>Tornar:</h3>
    <p>Enrera al menú de <a href="../../../patternsIndex.php">patterns</a></p>
    <br><br>
    <h2><b>IT Academy 2022</b></h2>
    <br><br>
</body>
</html>