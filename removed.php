<?php
if (isset($_POST['remove'])) {
    require_once('db_connect.php');
    $remove_waren_id = intval($_POST['remove']);
    echo $remove_waren_id;
   // $sql = "SELECT * INTO ware_removed
   // FROM ware
   // WHERE Waren_ID = '$remove_waren_id'";
    $sql = "DELETE FROM ware WHERE Waren_ID = '$remove_waren_id'";
/*
    if (mysqli_query($connection, $sql)) {
        echo "Record removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    mysqli_close($connection);
    }
*/
}
?>