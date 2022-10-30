<?php
    // l'arxiu controller té els mètodes-funcions específiques:
    require '../Controllers/adapterController.php';
    // l'arxiu routes només si utilitzessim API remota, aquí estem en local per tan no cal:
    require '../Routes/adapterRoute.php'; 
?>

<!-- RENDERITZAT del Html  -->    

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>DESIGN PATTERNS Structural</title>
    <link rel="stylesheet" href="../../../styles/patternsStyles.css">
</head>
<body>
    <h2>DESIGN PATTERNS > Structural Patterns > Adapter example (poultry)</h2>
    <h3>Teoria:</h3>
    <h4>2.1. Adapter</h4>
    <p>&nbsp; &nbsp; Permite la colaboración entre objetos con interfaces incompatibles.</p>
    <hr>
    <h3>Exercici:</h3>
    <p>Suposa que tens les següents dues classes de PHP (Duck i Turkey) en arxiu Poultry (corral d'aus).</p>
    <p>Vols que els seus galls d'indi es comportin com ànecs, de manera que has d'aplicar el adapter pattern. </p>
    <p>En el mateix arxiu, escriu una classe anomenada TurkeyAdapter i assegura't que tingui en compte el següent:</p>
        <p>&nbsp; &nbsp; - La traducció de l'quack entre classes és fàcil: simplement crida al mètode Gobble. </p>
        <p>&nbsp; &nbsp; - Encara que ambdues classes tenen un mètode fly, els galls dindis només poden volar a ratxes curtes.</p>
        <p>&nbsp; &nbsp; - per tan, s'ha de trucar al mètode fly del gall dindi cinc vegades per compensar-ho.</p>
    </p>    
    <hr>
    <h3>Executar:</h3>
        <form action="adapterView.php" method="post">
            <label for="inpFlights">Entra número de vols (min.1,max.9): </label>
            <input type="number" id="inpFlights" name="inpFlights" placeholder="0" min="1" max="9">            
            &nbsp; &nbsp;<input type="submit" value=" anem a volar! ">            
            <hr>     
        </form>
    <h3>Resolució:</h3>
        <div id="outputs">
            <?php
                // si l'usuari ens ha demanat quelcom...
                if ( !empty($_POST['inpFlights']) ) {

                    // ENTRADA DE DADES - en view
                    $intFlights = intval($_POST['inpFlights']);

                    // LLOGICA DE DADES + SORTIDA DE DADES - en controller
                    exec_poultry($intFlights);                    
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