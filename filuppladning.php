 

<?php
session_start();

$anvandernamn = $_SESSION["name"];
echo $anvandernamn . " laddade upp en fil! <br> <br>";

echo "Följade filuppladdningar finns i filen: <br> <br>";
    $fname = $_POST["fileToupload"];
/*
    $target_dir = "uppladdningar/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
*/
    $file = fopen("uppladdningar.txt", "a");
    fwrite($file, "$anvandernamn => $fname <br>");
    fclose($file);

   $file = fopen("uppladdningar.txt", "r");
   echo fread($file, filesize("uppladdningar.txt"));
   fclose($file);

    /*
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
*/

?>