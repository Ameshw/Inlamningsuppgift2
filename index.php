<?php include 'header.php';?>
<?php
  require_once('connect.php');
  // Skapa en SQL-sats
  $query = "SELECT * FROM  destination ORDER BY pris";
  // Kör SQL-satsen
  $table = mysqli_query($connection , $query)
           or die (mysqli_error($connection));
?>
<h1>Välkommen Till Vår Resbyrå</h1>
<h2> Att Resa Är Att Leva </h2>
<div class="container">
  <div class="row">
<?php while($row = $table->fetch_assoc()) { ?>
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="Images/<?php echo $row['bild']?>" alt="Bild på destination">
      <div class="card-body">
        <h4 class="card-title"><?php echo $row['titel'] ?><span class="price badge badge-success"><?php echo $row['pris'] . " SEK" ?></span></h4>
        <p class="card-text"><?php echo $row['beskrivning'] ?></p>
        <div class="d-flex justify-content-between align-items-center">
        </div>
        <form action="kontaktform.php" method="post">
          <input type="hidden" name="artikelnummer" value="<?php echo $row['artikelnummer']?>">
          <input type="hidden" name="titel" value="<?php echo $row['titel']?>">
          <input type="hidden" name="pris" value="<?php echo $row['pris']?>">
          <input type="hidden" name="bild" value="<?php echo $row['bild']?>">
          <input type="submit" value="KÖP NU" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
  </div>
<?php include 'footer.php';?>