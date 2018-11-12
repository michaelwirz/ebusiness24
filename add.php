<?php
    if (isset($_POST['submit'])) {
    require_once('db_connect.php');
    $name = $_POST['Name']; 
    $einkaufspreis = $_POST['Einkaufspreis'];
    $verkaufspreis = $_POST['Verkaufspreis'];
    $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) VALUES ('$name', '$einkaufspreis', '$verkaufspreis')";
    }
?>