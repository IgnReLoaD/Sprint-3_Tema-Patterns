<?php
    // l'arxiu controller té els mètodes-funcions específiques:
    require '../Controllers/singletonController.php';
    // l'arxiu routes només si utilitzessim API remota, aquí estem en local per tan no cal:
    require '../Routes/singletonRoute.php'; 

    // si l'usuari ens ha demanat quelcom...
    if ( !empty($_POST['inpRoars']) && ($_POST['inpRoars'] > 0)) {

        // ENTRADA DE DADES - en view
        $intRoars = intval($_POST['inpRoars']);

        // LLOGICA DE DADES - en controller
        $resultat = makeRoars($intRoars);
        sleep(3);   // 3 segons, per observar l'hora, i que retorna el primer instanciat

        // SORTIDA DE DADES - en view
        // ... ho traslladem més avall, a dins el DIV de Output
        // output($resultat);
    }
?>

<!-- RENDERITZAT del Html  -->    

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>DESIGN PATTERNS Creational</title>
    <link rel="stylesheet" href="../../../styles/patternsStyles.css">
</head>
<body>
    <h2>DESIGN PATTERNS > Creational Patterns > Singleton example (tigger)</h2>
    <h3>Teoria:</h3>
    <h4>1.5. Singleton </h4>
    <p>&nbsp; &nbsp; Permite asegurar que una clase tenga una única instancia, y proporciona un punto de acceso global a dicha instancia. Ej: conexión a BD.</p>
    <hr>
    <h3>Exercici:</h3>
    <p>Refactoritzar la classe Tigger donada (que permetia tenir múltiples objectes tiggers) en un Singleton, considerant:</p>
        <p>&nbsp; &nbsp; - Defineix el mètode getInstance() sense arguments (responsable crear instància única). </p>
        <p>&nbsp; &nbsp; - Imprimeix en pantalla múltiples vegades el rugit de Tigger.</p>
        <p>&nbsp; &nbsp; - Afegeix mètode getCounter() que retorni el nombre de vegades que Tigger ha realitzat rugits.</p>
    </p>    
    <hr>
    <h3>Executar:</h3>
        <form action="singletonView.php" method="post">
            <label for="inpRoars">Entra número de rugits (min.1,max.9): </label>
            <input type="number" id="inpRoars" name="inpRoars" placeholder="0" min="1" max="9">            
            &nbsp; &nbsp;<input type="submit" value=" anem a rugir! ">            
            <hr>     
        </form>
    <h3>Resolució:</h3>
        <div id="outputs">
            <?php output($resultat); ?>
        </div>
    <hr>
    <h3>Tornar:</h3>
    <p>Enrera al menú de <a href="../../../patternsIndex.php">patterns</a></p>
    <br><br>
    <h2><b>IT Academy 2022</b></h2>
    <br><br>
</body>
</html>