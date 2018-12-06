<?php
session_start();
$verhalten=0;
if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
$verhalten=0;
}
if($_GET["page"]=="log") {
$user=$_POST["user"];
$passwort=$_POST["passwort"];
}
if ($user=="" and $passwort=="") {
$_SESSION["username"]=$user;
$verhalten=1;
} else {
$verhalten = 2;
}
?>
<html>
    <head>
    <title>Login</title>
        <?php
            if ($verhalten==1) {
                <meta http-equiv="refresh" content="3; URL=login2.php"> 
            }
    </head>
    <body>
    <?php
    if ($verhalten==0) {
        echo "bitte einloggen<br>";
        <form method="post" action="login.php?page=log">
            Name:<input type="text" name="user"><br>
            Passwort:<input type="password" name="passwort"><br>
            <input type="submit" value="Einloggen">
        </form>

    }
    if ($verhalten==1) {
        echo "Login erfolgreich, haben Sie einen Moment Geduld";
    }
    if ($verhalten==2) {
        echo "Login fehlgeschlagen <a href='login.php'>zurück</a>"
    }
        ?>
    </body>
</html>