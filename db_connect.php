<?php
    //connection als Funktion definieren, die bei Bedarf in jedem php-Skript aufgerufen werden kann
function db_connect() {

        // bestehende Verbindung soll erhalnte bleiben, auch wenn die Funktion mehrfach aufgerufen wird
    static $connection;

        // besteht die Verbindung schon?
    if(!isset($connection)) {
             // lade die Umgebungsvariablen in die lokale Variable config
        $config = getenv (); 
        $connection = mysqli_connect($config['DATABASE_HOST'],$config['DB_USERNAME'],$config['DB_PASSWORD'],$config['DB_DATABASE']);
    }

        // Verbindungsaufbau gescheitert?
    if($connection === false) {
            // gib einen Fehler aus
        return mysqli_connect_error(); 
    }
    return $connection;
}

// Connect to the database
$connection = db_connect();

// Check connection
if ($connection->connect_error) {
    die("Connect Error: " . $connection->connect_error);
}
?> 