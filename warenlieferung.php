<?php 
include 'head.php';
$page = "Lieferung";
?>

<?php

if (isset($_POST['eintragen'])) {
    require_once ('db_connect.php');
    //function, die die aktuelle Menge per SQL-Query abruft -> $gelagerte_menge
    $id_lieferung = ($_POST['Waren_ID']); 
    $einkaufspreis_lieferung = (float) $_POST['gelieferte_menge'];
    // $gelagerte_menge = $gelagerte_menge + $gelieferte_menge
    /* $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) 
    VALUES ('$name', '$einkaufspreis', '$verkaufspreis')"; */
    // 
    if (mysqli_query($connection, $sql)) {
//       echo "New record created successfully";
    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    mysqli_close($connection);
    }
}
?>

<body class="">
  <div class="wrapper ">
        <?php include 'sidebar.php'; ?>
    </div>
    <div class="main-panel">
      <?php include 'navbar.php'; ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">






<div class="col-md-5">
    <div class="card">
        <div class="card-header card-header-danger">
            <h4 class="card-title">Warenlieferung eintragen</h4>
            <p class="card-category">Hier kann noch ein Text hin</p>
        </div>
        <div class="card-body">
            <form role="form" method="post" action="warenlieferung.php">
                <div class="row">
                <select name="eintragen" class="browser-default custom-select">
								<?php
								require_once('db_connect.php');
								//zeige uns, welche Waren schon eingetragen sind und wir groß der derzeitige Warenbestand ist.
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
								 </select>
								 <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">gelieferte Menge</label>
                            <input min="0" step="1" required type="number" class="form-control"  name="gelieferte_menge">
                        </div>
                    </div>
							</div>
                <input type="submit" value="EINTRAGEN" class="btn btn-info pull-right">
            </div></form>
        </div>
    </div>
</div>
<?php include 'footer.php' ?></div>