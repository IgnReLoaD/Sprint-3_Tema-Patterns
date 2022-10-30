<?php

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>DESIGN PATTERNS</title>

	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi|Roboto:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/patternsStyles.css">
</head>
<body>
    <h1>DESIGN PATTERNS:</h1>

    <h2>3 types: Creational, Structurals, Behavior</h2>

    <p>Ejemplo de uno de los Creational Pattern -> <b>Singleton:</b> ejercicio                   
        <a href="./1_Creational_Patterns/Exercici_N1-Singleton_pattern/Views/singletonView.php">Tigger</a></p>
    <p>Ejemplo de uno de los Structural Pattern -> <b>Adapter:</b> ejercicio 
        <a href="./2_Structural_Patterns/Exercici_N2-Adapter_pattern/Views/adapterView.php">Poultry</a></p>
    <p>Ejemplo de uno de los Behaviors Patterns -> <b>Strategy:</b> ejercicio 
        <a href="./3_Behavior_Patterns/Exercici_N3-Strategy_pattern/Views/strategyView.php">Cupoun</a></p>
    <br>

    <h2>DEFINITIONS:</h2>

    <h3>1. Creational Patterns (creacionales):</h3>
        <h4>1.1. Factory Method</h4>
            <p>Proporciona una interfaz para creación de objetos en una superclase, mientras permite a subclases alterar el tipo de objetos que crearán.</p>
        <h4>1.2. Abstract Factory</h4>
            <p>Permite producir familias de objetos relacionados sin especificar sus clases concretas.</p>
        <h4>1.3. Builder</h4>
            <p>Permite construir objetos complejos paso a paso. Distintos tipos y representaciones de un objeto empleando el mismo código de construcción.</p>
        <h4>1.4. Prototype</h4>
            <p>Permite copiar objetos existentes sin que el código dependa de sus clases.</p>
        <h4>1.5. Singleton </h4>
            <p>Permite asegurar que una clase tenga una única instancia, y proporciona un punto de acceso global a dicha instancia. </p>
            <p>Ejemplo: la conexión a BD en un programa.</p>
        <br><br>

    <h3>2. Structural Patterns (estructurales):</h3>
        <h4>2.1. Adapter</h4>
            <p>Permite la colaboración entre objetos con interfaces incompatibles.</p>
        <h4>2.2. Bridge</h4>
            <p>Permite dividir una clase o grupo de clases relacionadas en dos jerarquías (abstracción e implementación) desarrolladas independientemente.</p>
        <h4>2.3. Composite</h4>
            <p>Permite componer objetos en estructuras de árbol y trabajar con esas estructuras como si fueran objetos individuales.</p>
        <h4>2.4. Decorador</h4>
            <p>Permite añadir funcionalidades a objetos colocando estos objetos dentro de objetos encapsulados especiales que contienen las funcionalidades.</p>
        <h4>2.5. Facade (fachada)</h4>
            <p>Proporciona una interfaz simplificada a una biblioteca, un framework o cualquier otro grupo complejo de clases.</p>
        <h4>2.7. Flyweight</h4>
            <p>Permite mantener más objetos dentro de la cantidad disponible de mem RAM compartiendo las partes comunes del estado entre varios objetos.</p>
        <h4>2.8. Proxy</h4>
            <p>Permite proporcionar un substituto o marcador de posición para otro objeto. Un proxy controla el acceso al objeto original permitiéndote </p>
            <p>hacer algo antes o después de que la solicitud llegue al objeto original.</p>
        <br><br>

    <h3>3. Behavior Patterns (comportamiento):</h3>
        <h4>3.1. Chain of responsability</h4>
            <p>Permite pasar solicitudes a lo largo de una cadena de manejadores. Al recibir una solicitud, cada manejador decide si la procesa o si la </p>
            <p>pasa al siguiente manejador de la cadena.</p>
        <h4>3.2. Command</h4>
            <p>Convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud. Esta transformación te permite </p>
            <p>parametrizar los métodos con diferentes solicitudes, retrasar, o poner en cola la ejecución de una solicitud y soportar operaciones que</p>
            <p>no se suelen realizar.</p>
        <h4>3.3. Iterator</h4>
            <p>Permite recorrer elementos de una colección sin exponer su representación subyacente (lista, pila, árbol, etc).</p>
        <h4>3.4. Mediator</h4>
            <p>Permite reducir las dependencias caóticas entre objetos. El patrón restringe las comunicaciones directas entre los objetos, forzándolos</p>
            <p>a colaborar únicamente a través de un objeto mediador.</p>
        <h4>3.5. Memento</h4>
            <p>Permite guardar y restaurar el estado previo de un objeto sin revelar los detalles de su implementación.</p>
        <h4>3.6. Observer</h4>
            <p>Permite definir un mecanismo de suscripción para notificar a varios objetos sobre eventos que sucedan al objeto que está observando.</p>
        <h4>3.7. State</h4>
            <p>Permite a un objeto alterar su comportamiento cuando su estado interno cambia. Parece como si el objeto cambiara su clase.</p>
        <h4>3.8. Strategy</h4>
            <p>Permite definir una familia de algoritmos, colocar cada uno de ellos en una clase separada y hacer sus objetos intercambiables.</p>
        <h4>3.9. Template Method</h4>
            <p>Define el esqueleto del algoritmo en superclase pero permite que subclases sobreescriban pasos del algoritmo sin cambiar su estructura.</p>
        <h4>3.10. Visitor</h4>
            <p>Permite separar algoritmos de los objetos sobre los que operan.</p>
        <br><br>

    <h3><b>IT Academy 2022</b></h3>
    <br>
</body>
</html>