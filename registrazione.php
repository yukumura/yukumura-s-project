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

    $username=$_POST['username'];
    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $usermail=$_POST['usermail'];
    $pswd=$_POST['pswd'];

    //session_start();
    //
    //$ip =  "0.0.0.0";
    //$port = "3306";
    //$user = "yukumura";
    //$db = "c9";
 
    //$mysqli = new mysqli();
    //$mysqli->connect($ip, $user, '', $db);    

////////////////////////////////////////////////////////////////////////////
$query="SELECT COUNT(*) as total FROM iscritti WHERE username LIKE '$username'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();
//echo $row['total']. " corrispondenze trovate <br>";

if($row['total']!=0){
    echo "$username è già utilizzato. Riprova.<br>";
}
////////////////////////////////////////////////////////////////////////////
//$query="SELECT COUNT(*) as total FROM iscritti WHERE nome='$nome' AND cognome='$cognome'";
//    
//$result = $mysqli->query($query);
//$row = $result->fetch_assoc();
//echo $row['total']. " corrispondenze trovate <br>";
//
//if($row['total']!=0){
//   echo "Esiste già un $nome $cognome. Sicuro di non esserti già registrato? <br>";
//   $errore=1;
//}else{
//    echo "Nome e cognome ok.<br>";
//    $errore=0;
//}
////////////////////////////////////////////////////////////////////////////
$query="SELECT COUNT(*) as total FROM iscritti WHERE email='$usermail'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();
//echo $row['total']. " corrispondenze trovate <br>";

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


//if ($result = $mysqli->query("SELECT * FROM iscritti LIMIT 10")) {
//    printf("Select returned %d rows.\n", $result->num_rows);
//}else printf("Error message: %s\n", $mysqli->error);
// chiudo la connessione a MySQL

    $mysqli->close();
    header("refresh:10;url='index.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='home.php'\" value=\"Ritorna alla Home\"></form>";
?>
</h4>
</div>
</body>
</html>