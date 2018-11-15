<?php

//füge neuen Warentypen zum Lager hinzu
function AddNewProduct() {
    global $connection;
    $name = htmlspecialchars($_POST['Name']); 
    $einkaufspreis = (float) $_POST['Einkaufspreis'];
    $verkaufspreis = (float) $_POST['Verkaufspreis'];
    $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) 
    VALUES ('$name', '$einkaufspreis', '$verkaufspreis')";
    if (mysqli_query($connection, $sql)) {
       echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    mysqli_close($connection);
    }
}
?>