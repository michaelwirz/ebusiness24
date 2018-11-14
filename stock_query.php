<?php
require_once('db_connect.php');
$sql = "SELECT Waren_ID, Name, Einkaufspreis, Verkaufspreis FROM ware";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["Waren_ID"];
        $name = $row["Name"];
        $ekpreis = floatval($row["Einkaufspreis"]);
        $vkpreis = floatval($row["Verkaufspreis"]);
        $ekpreis = string number_format ( float $ekpreis , int $decimals = 2 , string $dec_point = "," , string $thousands_sep = "." );
        $vkpreis = string number_format ( float $vkpreis , int $decimals = 2 , string $dec_point = "," , string $thousands_sep = "." );
        echo "
<tbody>
    <tr>
      <td>
        " . $id . "
      </td>
      <td>
        " . $name . "
      </td>
      <td>
        " . $ekpreis . "
      </td>
      <td>
        " . $vkpreis . "
      </td>
    </tr>
</tbody>";
    }
} else {
   echo "
<tbody>
    <tr>
      <td>
        –
      </td>
      <td>
        –
      </td>
      <td>
        –
      </td>
      <td>
        –
      </td>
    </tr>
</tbody>"; 
}
mysqli_close($connection);  
    
?>