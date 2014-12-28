<!DOCTYPE html>
<html>
<?php
    include('database_connect.php');
?>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    </head>
<body>

<div id="form_creature">
     <form method="POST" action="mostroinserito.php">
      
       <label for="titolo">Titolo/Nome creatura</label>
          <input type="text" name="titolo" value=""/>

        <label for="descrizione">Descrizione</label>
        <textarea rows="80" cols="150"
        name="descrizione">Inserisci qui la tua storia</textarea> 

	<input type="submit" name="inserisci" value="Inserisci">
     </form>
</div>
</body>
</html>