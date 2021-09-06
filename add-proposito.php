<?php

require 'db.php';

$nombre = $_POST['proposito_name'];
$descripcion = $_POST['description_proposito'];

$sql = "INSERT INTO proposito (name_proposito, description_proposito) VALUES ('$nombre','$descripcion')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo 'Proposito ingresado';
}