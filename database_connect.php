<?php
$ip = "localhost";
$user = "cicilloniAlberto";
$password = "scimmia454";
$db = "amm14_cicilloniAlberto";
$mysqli = new mysqli();
$mysqli->connect($ip, $user, $password, $db);
// verifico la presenza di errori
if($mysqli->connect_errno!= 0){
// gestione errore
$idErrore= $mysqli->connect_errno;
$msg= $mysqli->connect_error;
error_log("Errore nella connessione al server $idErrore: $msg", 0);
echo "Errore nella connessione $msg";
}
?>