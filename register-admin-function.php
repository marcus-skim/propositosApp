<?php

include 'db.php';

/* Checamos si el formulario fue enviado */
if (!isset($_POST['submit'])) {
    /* Eliminamos slashes del dato enviado por POST */
    $uname = stripslashes($_POST['uname']);
    /* Antepone slashes para el envio de datos */
    $uname = mysqli_real_escape_string($conn, $uname);

    $lastname = stripslashes($_POST['lastname']);
    $lastname = mysqli_real_escape_string($conn, $lastname);

    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_POST['pass']);
    $password = mysqli_real_escape_string($conn, $password);
}

/* Buscar usuario dentro de bd */

$finduser = "SELECT * FROM users where email = '$email'";
$result = mysqli_query($conn, $finduser);
$count = mysqli_num_rows($result);

if ($count > 0) {
    header('location: register.php');
    echo '<script>alert("El usuario ya existe")</script>';
} else {
    $query = "INSERT into users (name, lastname ,email, password, rol) VALUES ('$uname', '$lastname', '$email', '$password', 0 )";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:admin-panel.php');
    } else {
        echo 'Hubo un error.mysqli_error($con)';
    }
}