<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_POST['gomb'])){
    print("<form action='bejelentkezes.php' method='post'><br>");
    print("Felhasználónév: <input type='text' name='nev2'><br>");
    print("Jelszó: <input type='password' name='jelszo2'><br>");
    print("<input type='submit' name='gomb'><br>");
    
    print("</form>");

}
else{

    require("Sz.R.11.26.php");
    $nev2 = $_POST['nev2'];
    $jelszo2 = $_POST['jelszo2'];
    
    
    $query = "INSERT INTO felhasznalo (id, jelszo) VALUES ('$nev2','$jelszo2')";
    mysqli_query($kapcsolat,$query) or die ('Hiba az adatbevitelnél!');
    print("Sikeres regisztráció!");
}
?>