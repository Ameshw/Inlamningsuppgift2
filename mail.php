<?php
//Säkerhetsoptimera backendsystemet
if (empty($_POST) ||
    !isset($_POST['pris']) ||
    !isset($_POST['destination']) ||
    !isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['mobilnummer']) ||
    !isset($_POST['adress']) ||
    !isset($_POST['artikelnummer'])) {
    // Array post are tom
    //http_response_code(404);
    header('Location: index.php');
    return;
}

include 'header.php';

// Hämta data från formuläret via metoden POST
$pris = $_POST['pris'];
$destination = $_POST['destination'];
$kundnamn = $_POST['name'];
$epost = $_POST['email'];
$mobil = $_POST['mobilnummer'];
$adress = $_POST['adress'];
$artikelnummer = $_POST['artikelnummer'];

// Argument som behövs i funktionen mail
$message = "Nu har du köpt en resa till $destination som kostar $pris";

if(isset($_POST['email'])) {
    mail($to , $subject, $message, $headers);
}

echo "<h2>Det här är din bokningsbekräftelse! <br> Ha en underbar resa till $destination!</h2>";

require_once('connect.php');
// Skapa en SQL-sats
$query = "INSERT INTO orders (kundnamn, epost, mobil, adress, artikelnummer) VALUES ('$kundnamn', '$epost', '$mobil', '$adress', '$artikelnummer')";
// Kör SQL-satsen
mysqli_query($connection , $query)
or die (mysqli_error($connection));
?>
<?php include 'footer.php';?>


