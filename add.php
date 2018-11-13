<?php
if (isset($_POST['submit'])) {
    require_once('db_connect.php');
    $name = htmlspecialchars($_POST['Name']); 
    $einkaufspreis = (float) $_POST['Einkaufspreis'];
    $verkaufspreis = (float) $_POST['Verkaufspreis'];
    $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) 
    VALUES ('$name', '$einkaufspreis', '$verkaufspreis')";
    $last_id = mysqli_insert_id($connection);
    $new_id = $last_id -9;
    $sql= "UPDATE ware 
    SET Waren_ID = '$new_id'
    WHERE Waren_ID = '$last_id'";
}
?>

<div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Warentyp hinzufügen</h4>
            <p class="card-category">Produktname, Einkaufs- und Verkaufspreis sind erforderlich</p>
        </div>
        <div class="card-body">
            <form role="form" method="post" action="dashboard.php">
               <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Produktname</label>
                            <input type="text" required class="form-control" name="Name">
                        </div>
                    </div>
                   <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >
                            <label class="bmd-label-floating">Produkt-ID</label>
                            <input type="text" class="form-control" value="automatisch" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Einkaufspreis</label>
                            <input min="0" step="0.01" required type="number" class="form-control"  name="Einkaufspreis">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Verkaufspreis</label>
                            <input min="0" step="0.01" required type="number" class="form-control"  name="Verkaufspreis">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-info pull-right" vlue="HINZUFÜGEN">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>