<?php

require 'db.php';

$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM users where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_assoc($result);
$encontrados = mysqli_num_rows($result);

if ($encontrados >= 1) {
    session_start();
    $_SESSION['name'] = $fila['name'];
    $_SESSION['rol'] = $fila['rol'];
    if ($_SESSION['rol'] == 0) {
        header('Location:home-admin.php');
    } else if ($_SESSION['rol'] == 1) {
        header('Location:home-user.php');
    }
} else {
    header('Location:login.php');
}