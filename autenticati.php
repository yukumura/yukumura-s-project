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
///////////////////////////////////////////////////////////////////////////////////
//Come funziona? Prelevo i dati inseriti dal form, controllo nel database se è  //
//già presente un utente registrato così. Se esiste, l'utente effettua il login//
//altrimenti viene segnalato l'errore.                                        //
///////////////////////////////////////////////////////////////////////////////

    include('cuore.php');
    include('database_connect.php');
    $errore=0;
    $username=$_POST['username'];
    $pswd=$_POST['pswd'];
    
if($username=='' or $pswd== '' ){
	echo "Compila tutti i campi!";
	$errore=1;
}

if($errore!=1){
$pswd = md5($pswd);
$query="SELECT COUNT(*) as total FROM iscritti WHERE username LIKE '$username' and password='$pswd'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

    if($row['total']==1){
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();

    $query="SELECT username as risultato FROM iscritti WHERE username LIKE '$username'";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    $username = $row['risultato'];
    
    echo "Login effettuato. <br> Bentornato $username, adesso sei loggato nel sito e puoi accedere a tutti i servizi.<br><br>";
    }else{ 
            echo "I dati da te inseriti non corrispondono a nessun utente registrato. Riprova.";
            $errore=1;
}
    if($errore!=1){
    $_SESSION['username']=$username;
    header("refresh:10;url='index.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='index.php'\" value=\"Ritorna alla Home\"></form>";
    $mysqli->close();
    /*CLOSE THE SESSION WITH USER DATA*/
    session_write_close();
    }
?>
</h4>
</div>
</body>
</html>