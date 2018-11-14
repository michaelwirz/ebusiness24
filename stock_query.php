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
        $ekpreis = number_format ($ekpreis , $decimals = 2 , $dec_point = "," , $thousands_sep = "." );
        $vkpreis = number_format ($vkpreis , $decimals = 2 , $dec_point = "," , $thousands_sep = "." );
        $warenwert = 5;
        $gesamtwert = $gesamtwert + $warenwert;
        echo '<tbody>
                    <tr>
                      <th scope="row">
                        ' . $id . '
                      </th>
                      <td>
                        ' . $name . '
                      </td>
                      <td class="td-price">
                        ' . $ekpreis . ' €' . '
                      </td>
                      <td class="td-price">
                        ' . $vkpreis . ' €' . '
                      </td>
                      <td class="td-total">
                        ' . $warenwert . ' €' . '
                      </td>
                    </tr>
                </tbody>';
    } echo '<tr>
                <th scope="row"></th>
                <td></td>
                <td class="td-price"></td>
                <td class="td-price"></td>
                <td class="td-total">
                ' . $gesamtwert . ' €' . '
                </td>
            </tr>';
} else {
   echo '<tbody>
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
            </tbody>'; 
}
mysqli_close($connection);  
    
?>