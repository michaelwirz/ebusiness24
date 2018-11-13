<?php
require_once('db_connect.php');
$sql = "SELECT Waren_ID, Name, Einkaufspreis, Verkaufspreis FROM ware";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
<tbody>
    <tr>
      <td>
        " . $row["Waren_ID"]. "
      </td>
      <td>
        " . $row["Name"]. "
      </td>
      <td>
        " . $row["Einkaufspreis"]. "
      </td>
      <td>
        " . $row["Verkaufspreis"]. "
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