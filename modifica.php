<!DOCTYPE html>

<?php
include('cuore.php');
?>

<html>

  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - RCeS</title>
  </head>
  
  <body>
   
     <?php
  include('intestazione.html');
      ?>

   <div class="titolo">
     <h1><?php echo $_GET['id']. " - Modifica"; ?></h1>
   </div>

	<?php
	
	$query="SELECT descrizione FROM creature where nome = '$_GET[id]'";
	//"SELECT username as risultato FROM iscritti WHERE username LIKE '$username'";
    $result = $mysqli->query($query);
    $row = mysqli_fetch_row($result);
    
    $query="SELECT id from creature where nome = '$_GET[id]'";
    $result = $mysqli->query($query);
    $raw = mysqli_fetch_row($result);
    ?>
    
<div id="form_creature">
     <form method="POST" action="mostroinserito.php?id=<?php echo $raw[0]; ?>">
      
       <label for="titolo">Titolo/Nome creatura</label>
          <input type="text" name="titolo" value="<?php echo $_GET['id']; ?>"/>

        <label for="descrizione">Descrizione</label>
        <textarea rows="80" cols="150"
        name="descrizione"><?php echo $row[0]; ?></textarea> 

	<input type="submit" name="inserisci" value="Modifica">
     </form>
</div>
</body>
</html>