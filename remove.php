<div class="col-md-5">
    <div class="card">
        <div class="card-header card-header-danger">
            <h4 class="card-title">Warentyp entfernen</h4>
            <p class="card-category">Hier kann noch ein Text hin</p>
        </div>
        <div class="card-body">
            <!-- <div class="input-group">
                <select class="custom-select bmd-form-group-sm">
                </select>
                <div class="input-group-append">
                    <button class="btn btn-info input-group-btn" type="button">Löschen</button>
                </div>
            </div>-->
            <form role="form" method="post" action="dashboard.php">
                <select name="remove">
                    <?php include 'remove_query.php' ;?>
                </select>
                <input type="submit" value="Entfernen">
            </form>
        </div>
    </div>
</div>
<?php 
    include 'removed.php';
?>


           

<!--
<div class="dropdown bootstrap-select">
      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
    <option disabled selected>Single Option</option>
    <option value="2">Foobar</option>
    <option value="3">Is great</option>
    <option value="4">Is awesome</option>
    <option value="5">Is wow</option>
    <option value="6">Boom !</option>
  </select>
</div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

<div class="input-group"> 
    <div class="input-group-btn">  
        <div class="dropdown-menu"> 
            <a class="dropdown-item" href="#">Action</a> 
            <a class="dropdown-item" href="#">Another action</a> 
        </div>
<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Löschen </button>
    </div> 
<input class="form-control" aria-label="label" name="remove" action="dashboard.php" method="post"> 
</div>


-->