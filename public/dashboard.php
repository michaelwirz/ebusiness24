<?php 
include 'head.php';
$page = "Dashboard";
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