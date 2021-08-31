<?php
include 'login.function.php';

if (!isset($_SESSION['name']) && !isset($_SESSION['rol'])) {
    header('location: login.php');
}