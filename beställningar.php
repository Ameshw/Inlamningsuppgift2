<?php include 'header.php';?>
<h2>Lista av Beställningar</h2>
<?php
    require_once('connect.php');
    // Skapa en SQL-sats
    $query = "SELECT * FROM orders, destination where orders.artikelnummer = destination.artikelnummer ORDER BY orders.ordernummer;";
    // Kör SQL-satsen
    $table = mysqli_query($connection , $query)
          or die (mysqli_error($connection));
    // Visa en HTML-tabell
?>
<table class="table">
<tr> 
    <th>Ordernummer</th> 
    <th>Kundnamn</th> 
    <th>Epost</th> 
    <th>Mobil</th>
    <th>Adress</th>
    <th>Artikelnummer</th>
    <th>Titel</th>
    <th>Pris</th>
</tr>
<?php while($row = $table->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['ordernummer'] ?></td>
    <td><?php echo $row['kundnamn'] ?></td>
    <td><?php echo $row['epost'] ?></td>
    <td><?php echo $row['mobil'] ?></td>
    <td><?php echo $row['adress'] ?></td>
    <td><?php echo $row['artikelnummer'] ?></td>
    <td><?php echo $row['titel'] ?></td>
    <td><?php echo $row['pris'] ?></td>
</tr>
<?php } ?>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>