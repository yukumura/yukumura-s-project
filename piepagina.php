 <div id="piedipagina">
 <div id="formattazione_testo">
  <p>
  <?php
  include('cuore.php');
  
  $query="SELECT inseriti FROM iscritti where username = '$_SESSION[username]'";
  $result = $mysqli->query($query);
  $row = $mysqli->fetch_row($result);
  
  if(isset($_SESSION['username'])) {
	echo "Bentornato, ".$_SESSION['username'];
	echo ". Hai inserito $row[0] racconti nel sito.<br>";
	echo "Ricordati di "; echo "<a href='logout.php'>sloggare</a>"; echo " quando hai finito.";
  }else{
      echo "E' la prima volta che visiti il sito? <br>";
      echo "<a href='registrati.php'>Registrati</a>";
      echo " oppure ";
      echo "<a href='login.php'>loggati</a>.";
      }
  ?>
  </p>
  </div>
  </div>