<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
     
<?php

session_start();

$anvandernamn =  $_POST["name"];
$losenord = $_POST["lösenord"];

$_SESSION["name"] = $anvandernamn;

if ($anvandernamn == true && $losenord == true) {
    echo "Sessionen tillhör: " . $anvandernamn . "<br>";
    echo "<form action ='filuppladning.php' method='post'>
    <input type = 'file' name='fileToupload' ><br>
    <input type = 'submit' >ladda fil<br>
    </form>";
}
else {
    echo "Det gick inte att logga in försök igen!";
}
echo "<a href='http://localhost/inlamning2/formler.php'>Tillbaka till inloggningen</a>";

/*
    <?php
$session_start();


$_SESSION["användernamn"] = $_POST["name"];  // För enkelhetens skull hoppar vi över lösenordskontroll i detta exempel
echo '<input type="submit" value="Upload Image" name="submit">';
?>
*/
?>

</body>
</html>



