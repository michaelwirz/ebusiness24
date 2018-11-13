<?php 
include 'head.php';
$page = "Dashboard";
    if (isset($_POST['submit'])) {
    require_once('db_connect.php');
    $name = $_POST['Name']; 
    $einkaufspreis = $_POST['Einkaufspreis'];
    $verkaufspreis = $_POST['Verkaufspreis'];
    $sql= "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) VALUES ('$name', '$einkaufspreis', '$verkaufspreis')";
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
                    <?php include 'add.php'; ?>
                    <?php include 'remove.php'; ?>
                </div>
            </div>
        </div>
        <div>
            <?php 
                include 'footer.php' 
            ?>
        </div>