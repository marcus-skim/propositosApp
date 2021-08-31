<?php

/* Practica con bool */

$valor = False;

echo '<h4>Practica con bools</h4>';

if ($valor) {
    echo "Hola mundo";
} else {
    echo "No estas listo";
}

echo '<br>';

/* Practica con integer */

$valor1 = 10;

echo '<h4>Practica con integers</h4>';

if (is_int($valor1)) {
    echo "Es un numero \$entero";
    # code...
} else {
    echo "Es otro tipo de dato";
}


/* Practica con variables */

$nombre = 'Marcus';

echo '<h4>Practica con funcion y variables</h4>';

$edad = '20';

function nombrar($nombre, $edad)
{
    echo 'Mi nombre es: ' . $nombre . ' y tengo ' . $edad . ' años';
}

nombrar($nombre, $edad);

/* Practica con arrays */

$datos = array('nombre' => "Marcus", 'edad' => 22, 'color_ojos' => "Cafe", 'sueño' => "Romperla", array('domicilio' => "Marimar #594", 'nacionalidad', 'Mexicana'));

echo '<h4>Practica con arrays</h4>';

var_dump($datos);


/* Practica con estructuras de control */

echo '<h3>Practica con estructuras de control</h3>';

echo '<h4>If</h4>';

$usuario = 1;

if ($usuario == 0) :
    echo 'Usuario administrador';
elseif ($usuario == 1) :
    echo 'Usuario comun';
else :
    echo 'No esta registrado';
endif;


echo '<h4>While</h4>';

$i = 1;

while ($i <= 20) :
    echo $i;
    $i++;
endwhile;

echo '<h4>For</h4>';


for ($i = 1; $i < 10; $i++) {
    echo $i;
}

echo '<h4>Foreach</h4>';


$amigos = array('1' => 'Marcus', '2' => 'Ricardo', '3' => 'Omar', '4' => 'Diego');

foreach ($amigo as $amigos => $value) {
    echo $value;
}