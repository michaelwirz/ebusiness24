<?php
if (isset($_POST['remove'])) {
    require_once('db_connect.php');
    $remove_waren_id = $_POST['remove'];
    echo $remove_waren_id;
   // $sql = "SELECT * INTO ware_removed
   // FROM ware
   // WHERE Waren_ID = '$remove_waren_id'";
    $sql = "DELETE FROM ware WHERE Waren_ID = '$remove_waren_id'";
    mysqli_close($connection);
}
?>