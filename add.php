<?php
    if (isset($_POST['submit'])) {
    require_once('db_connect.php');
    $name = htmlspecialchars($_POST['Name']); 
    $einkaufspreis = (float) $_POST['Einkaufspreis'];
    $verkaufspreis = (float) $_POST['Verkaufspreis'];
    echo $name;
    echo $einkaufspreis;
    echo $verkaufspreis;
    $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) 
    VALUES ('$name', '$einkaufspreis', '$verkaufspreis')";
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
               <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label class="bmd-label-floating">Produkt-ID</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Produktname</label>
                            <input type="text" required="1" class="form-control" name="Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Einkaufspreis</label>
                            <input min="0" step="0.01" value="0" placeholder="wird automatisch vergeben" required="1" type="number" class="form-control"  name="Einkaufspreis">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Verkaufspreis</label>
                            <input min="0" step="0.01" value="0" placeholder=" " required="1" type="number" class="form-control"  name="Verkaufspreis">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-info pull-right" vlue="HINZUFÜGEN">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>