<!DOCTYPE html>

<?php
include('cuore.php');
include('database_connect.php');
?>
<!-- Selezionato un racconto, vengono prelevate dal database tutte le informazioni inerenti, eseguendo poi un controllo fra l'autore del racconto e l'utente
     che sta controllando il racconto. Se i due combaciano, apparirà il bottone di edit per il racconto, altrimenti no. -->
<html>

  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale</title>
  </head>
  
  <body>
   
     <?php
  include('intestazione.html');
      ?>

   <div class="titolo">
     <h1><?php echo $_GET['id']; ?></h1>
   </div>

	<div id="content">
	<?php
	
	$query="SELECT descrizione FROM creature where nome = '$_GET[id]'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
		echo "<p>$row[0]";
    }
    ?>
    <br><br><em>- Racconto inserito da 
    <?php 
    	$query="SELECT autore FROM creature where nome = '$_GET[id]'";
    	$result = $mysqli->query($query);
    	$row = mysqli_fetch_row($result);
    	echo $row[0];
    	?>
    </em></p></div>

	<div id="form1">
	<?php
  if(($_SESSION['username'])==$row[0]) {
      $nome = $_GET['id'];
	echo "<form><input type=\"button\" onclick=\"window.location='modifica.php?id=$nome'\" value=\"Modifica l'articolo\"></form>";
	}
     
      ?>
      </div>
      <div id="form2"
      <form><input type="button" onclick="history.back()" value="Torna indietro"></form>
    </div>
<br><br><br>
<?php
include('piepagina.php');
?>
	
</html>
