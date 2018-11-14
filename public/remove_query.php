<?php
require_once('db_connect.php');
$sql = "SELECT Waren_ID, Name FROM ware";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<option disbaled selected>Warentyp auswählen...</option>\n";
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["Waren_ID"] . '">(' . $row["Waren_ID"] . ') ' . $row["Name"] . '</option>';
        echo "\n";
    }
} else {
   echo "<option selected>kein Warentyp angelegt!</option>\n"; 
}
    
?>