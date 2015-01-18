<!DOCTYPE html>

<?php
include('cuore.php');
include('database_connect.php');
?>

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
//già presente una email o un nick identico. Se non lo è, avviene la registra- //
//zione del nuovo utente, altrimenti viene segnalato l'errore.                //
///////////////////////////////////////////////////////////////////////////////
    
    $username=$_POST['username'];
    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $usermail=$_POST['usermail'];
    $pswd=$_POST['pswd'];


$query="SELECT COUNT(*) as total FROM iscritti WHERE username LIKE '$username'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

if($row['total']!=0){
    echo "$username è già utilizzato. Riprova.<br>";
}

$query="SELECT COUNT(*) as total FROM iscritti WHERE email='$usermail'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

if($row['total']!=0){
   echo "La mail che hai inserito è già utilizzata. Riprova.<br>";
   $errore=1;
}else $errore=0;


if($errore==0){
    
    /* set autocommit to off */
    $mysqli->autocommit(false);
    
    $pswd = md5($pswd);
    $query="INSERT INTO iscritti (nome, cognome, username, password, email)
    VALUES ('$nome', '$cognome', '$username', '$pswd', '$usermail')";

    //lancio la  query
    $result = $mysqli->query($query);
    
    //transazione commit
    if (!$mysqli->commit()) {
    echo "Transazione fallita <br>";
    exit();
    }
    
    echo "Registrazione effettuata. Benvenuto/a $nome $cognome alias $username. <br>Adesso puoi inserire le tue esperienze nella sezione apposita del sito.<br><br>";
}else{
    echo "La registrazione non è andata a buon termine.<br><br>";
}

    $mysqli->autocommit(true);

    $mysqli->close();
    header("refresh:10;url='index.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='home.php'\" value=\"Ritorna alla Home\"></form>";
?>
</h4>
</div>
</body>
</html>