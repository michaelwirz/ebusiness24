<div class="col-md-5">
    <div class="card">
        <div class="card-header card-header-danger">
            <h4 class="card-title">Warentyp entfernen</h4>
            <p class="card-category">Hier kann noch ein Text hin</p>
        </div>
        <div class="card-body">
            <form role="form" method="post" action="dashboard.php">
                <select name="remove" class="browser-default custom-select">
                    <?php include 'remove_query.php' ;?>
                </select>
                <input type="submit" value="ETNFERNEN" class="btn btn-info pull-right">
            </form>
        </div>
    </div>
</div>
<?php 
    include 'removed.php';
?>


