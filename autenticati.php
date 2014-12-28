<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    </head>
<body>
    <div id="formattazione_testo">
    <h4>
    <?php
    include('database_connect.php');
    
    $username=$_POST['username'];
    $pswd=$_POST['pswd'];
    
    $ip =  "0.0.0.0";
    $port = "3306";
    $user = "yukumura";
    $db = "c9";
 
    $mysqli = new mysqli();
    $mysqli->connect($ip, $user, '', $db);    

if($username=='' or $pswd== '' ){
	echo "Compila tutti i campi!";
	$errore=1;
}

if($errore!=1){
////////////////////////////////////////////////////////////////////////////
$pswd = md5($pswd);
$query="SELECT COUNT(*) as total FROM iscritti WHERE username LIKE '$username' and password='$pswd'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

    if($row['total']==1){
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();

    //$query="SELECT id as risultato FROM iscritti WHERE username='$username' and password='$pswd'";
    //$result = $mysqli->query($query);

    //$row = $result->fetch_assoc();
    
    $query="SELECT username as risultato FROM iscritti WHERE username LIKE '$username'";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    $username = $row['risultato'];
    
    $_SESSION['username']=$username;
    //echo $row['risultato']. " valore dell'id. <br>";
	$_SESSION['userid'] = $userid;
    echo "Login effettuato. <br> Bentornato $username, adesso sei loggato nel sito e puoi accedere a tutti i servizi.<br><br>";
    }else echo "I dati da te inseriti non corrispondono a nessun utente registrato. Riprova.";

}
    header("refresh:3;url='home.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='index.php'\" value=\"Ritorna alla Home\"></form>";
    $mysqli->close();

?>
</h4>
</div>
</body>
</html>