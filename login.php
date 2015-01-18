<!DOCTYPE html>
<?php
include('cuore.php');
include('database_connect.php');
?>
<html>
<!-- Form da cui prelevo i dati per effettuare il login -->
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Login</title>
  </head>
  
 <body>
    
    <?php
  include('intestazione.html');
    ?>

<div class="titolo">
     <h1>Login</h1>
   </div>

   <div id="form_autenticazione">
     <form method="POST" action="autenticati.php">
      
       <label for="nick">Nickname</label>
          <input type="text" name="username" value="" required/>

       <label for="pswd">Password</label>
          <input type="password" name="pswd" value="" required/>

	<input type="submit" name="login" value="Log In">
     </form>
   </div>
   
 </body>

</html>
