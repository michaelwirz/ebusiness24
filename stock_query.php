<?php
require_once('db_connect.php');
$sql = "SELECT Waren_ID, Name, Einkaufspreis, Verkaufspreis FROM ware";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["Waren_ID"];
        $name = $row["Name"];
        $menge = 5;
        $ekpreis = floatval($row["Einkaufspreis"]);
        $vkpreis = floatval($row["Verkaufspreis"]);
        $ekpreis = number_format ($ekpreis , $decimals = 2 , $dec_point = "," , $thousands_sep = "." );
        $vkpreis = number_format ($vkpreis , $decimals = 2 , $dec_point = "," , $thousands_sep = "." );
        $warenwert = $ekpreis * $menge;
        $gesamtwert = $gesamtwert + $warenwert;
        echo '<tbody>
                    <tr>
                      <th class="text-center scope="row">
                        ' . $id . '
                      </th>
                      <td>
                        ' . $name . '
                      </td>
                      <td class="text-right">
                        ' . $menge . '
                      </td>
                      <td class="text-right">
                        ' . $ekpreis . ' €  ' . '
                      </td>
                      <td class="text-right">
                        ' . $vkpreis . ' €  ' . '
                      </td>
                      <th class="text-right">
                        ' . $warenwert . ' €  ' . '
                      </th>
                    </tr>
                </tbody>';
    } echo '<tr>
                <th  class="text-right" scope="row"></th>
                <td></td>
                <td class="text-right"></td>
                <td class="text-right"></td>
                <td class="text-right"></td>
                <th class="text-right">
                ' . $gesamtwert . ' €  ' . '
                </th>
            </tr>';
} else {
   echo '<tbody>
                <tr>
                  <tn class="text-center">
                    –
                  </th>
                  <td class="text-center">
                    –
                  </td>
                  <td class="text-right">
                    –
                  </td>
                  <td class="text-right">
                    –
                  </td>
                  <th class="text-right">
                    –
                  </th>
                </tr>
            </tbody>'; 
}
mysqli_close($connection);  
    
?>