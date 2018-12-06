<?php
session_start();
if (isset($_SESSION["username"])) {
?>
<html>
<head>
<title></title>
</head>
<body>
<hl>Hallo <?php echo $_SESSION["username"];?></hl>
<a href="logout.php">Ausloggen</a>
</body>
</html>
<?php
} else {
Bitte einloggen, <a href="login.php">hier</a>
}
?>