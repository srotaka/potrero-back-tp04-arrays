<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Nº4 | Silvia Otaka</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <section>
        <h1>Trabajo Práctico Nº4 - Potrero Backend</h1>
        <h2>ARRAYS</h2>
        <br> <br>

        <h3> 1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
        <?php
        $pares = [];

        for ($i = 1; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $pares[] = $i;
            }
        }
        foreach ($pares as $par) {
            print "<p>$par</p>\n";
        }
        ?>

        <hr>
        <h3>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().</h3>
        <?php
        $array2 = ["Pedro", "Ana", 34, 1];
        print_r($array2);
        ?>

        <hr>
        <h3>3. Crear un array asociativo e introducir los siguientes valores:</h3>
        <li>
            <ul>Nombre: Pedro</ul>
            <ul>Apellido: Torres</ul>
            <ul>Dirección: Av. Mayor 3703</ul>
            <ul>Teléfono: 1122334455</ul>
        </li>
        <?php
        $infoPedro = [
            'name' => "Pedro",
            'lastName' => "Torres",
            'address' => "Av. Mayor 3703",
            'phone' => 1122334455,
        ];
        print "<h3>Impresión de array asociativa:</h3>";
        print "
            <li>
            <ul>Nombre: $infoPedro[name]</ul>
            <ul>Apellido: $infoPedro[lastName]</ul>
            <ul>Dirección: $infoPedro[address]</ul>
            <ul>Teléfono: $infoPedro[phone]</ul>
            </li>
            ";
        ?>

        <hr>
        <h3>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. 
            A continuación, muestra el contenido del array.  Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid. 
        </h3>

        <?php
        $cities = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
        $arr_length = count($cities);
        
        for ($i = 0; $i < $arr_length ; $i++) {
            
            print "<p>La ciudad en el índice $i es: $cities[$i].</p>\n";
        }         
        ?>
        
        <hr>
        <h3>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, 
            LA para Los Ángeles y CCG para Chicago.  Ejemplo: El índice de Madrid es MD.</h3>
        
        <?php

        $citiesWithIndex = [
            'MD' => "Madrid",
            'BCL' => "Barcelona",
            'LD' => "Londres",
            'NY' => "New York",
            'LA' => "Los Ángeles",
            'CCG' => "Chicago",
            ];
            
        foreach($citiesWithIndex as $codigo=>$city){
    	    print "<p>El índice de $city es $codigo.<p>\n";
    	}
        
        ?>
    </section>
</body>

</html>