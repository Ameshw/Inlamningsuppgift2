<?php
//Säkerhetsoptimera backendsystemet
if (empty($_POST) ||
    !isset($_POST['artikelnummer']) ||
    !isset($_POST['titel']) ||
    !isset($_POST['bild']) ||
    !isset($_POST['pris'])) {
    // Array post are tom
    //http_response_code(404);
    header('Location: index.php');
}
$artikelnummer = $_POST['artikelnummer'];
$destination = $_POST['titel'];
$img = $_POST['bild'];
$pris = $_POST['pris'];

include 'header.php';

echo "<h2>Du har valt att resa till " . $destination . " som kostar dig: " . $pris ." SEK<img align='middle' src='images/$img' alt= ''></h2>";
?>
    <h3>Fyll i dina kontaktuppgifter:</h3>
    <form method="post" action="mail.php" >
        <input type="hidden" name="artikelnummer" value="<?=$artikelnummer?>">
        <input type="hidden" name="destination" value="<?=$destination?>">
        <input type="hidden" name="pris" value="<?=$pris?>">
        <p>Namn *<br><input type="text" name="name" placeholder="Ange ditt namn" required></p>
        <p>E-post *<br><input type="email" name="email" placeholder="Ange ditt e-post" required></p>
        <p>Adress *<br><input type="text" name="adress" placeholder="Ange ditt adress" required></p>
        <p>Mobilnummer *<br><input type="tel" name="mobilnummer" placeholder="Ange ditt mobilnummer" required></p>
        <p><input type="submit" value="Submit"></p>
        * Obligatoriska fält
    </form>
<?php include 'footer.php';?>