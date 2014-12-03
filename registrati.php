<!DOCTYPE html>

<?php
include('cuore.php');
?>

<html>

  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Registrati</title>
  </head>
  
 <body>
  
      <?php
  include('intestazione.html');
      ?>
  
   <div class="titolo">
     <h1>Registrati</h1>
   </div>

   <div id="form_registrazione">
     <form method="POST" action="registrazione.php">
      
       <label for="nick">Nickname</label>
          <input type="text" name="username" value="" required/>

       <label for="nome">Nome</label>
          <input type="text" name="nome" value="" required/>
       
       <label for="cognome">Cognome </label>         
          <input type="text" name="cognome" value="" required/>
       
       <label for="email">Email</label>
          <input type="email" name="usermail" required></input>
	
       <label for="pswd">Password</label>
          <input type="password" name="pswd" value="" required/>
    
    	<br>
	
	<input type="submit" name="registrazione" value="Registrati">
	
     </form>
   </div>

 </body>

</html>
