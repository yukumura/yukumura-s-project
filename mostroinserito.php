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

    $titolo=$_POST['titolo'];
    $descrizione=$_POST['descrizione'];
    $autore=$_SESSION['username'];
    
    $titolo=$mysqli->real_escape_string($titolo);
    $descrizione=$mysqli->real_escape_string($descrizione);
    
   
   if($titolo=='' or $descrizione== ''){
    	echo "Compila tutti i campi!<br>";
    	$errore=1;
    }else 
        echo "Campi compilati<br>";
    
    $query="SELECT COUNT(*) as total FROM creature WHERE nome='$titolo'";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    
    if($row['total']!=0){
        
        $query="SELECT COUNT(*) as total FROM creature WHERE nome='$titolo' and autore='$autore'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        
            if($row['total']==1){
            //racconto già inserito dal nenno    
                $query="update creature set descrizione = '$descrizione' where nome = '$titolo'";
                $result = $mysqli->query($query);
                $errore=2;
                }else {
                    echo "non esiste nessun racconto con lo stesso nome <br>";
                    $errore=0;
                }
                
                /*else 
                    if (isset($_GET['id'])){
    
                        echo "Cambiato il titolo, il tuo racconto sarà considerato come un nuovo articolo.<br>";
        
                        $query="update creature set descrizione = '$descrizione', nome='$titolo' where id = '$_GET[id]'";
                        $result = $mysqli->query($query);
        
                        $errore=2;
                    }
                        else $errore=0;
        
            $errore=1;
    }else echo "nessun racconto con lo stesso nome<br>";
     
         /* $query="SELECT COUNT(*) as total FROM creature WHERE nome='$titolo' and autore='$autore'";
            $result = $mysqli->query($query);
            $row = $result->fetch_assoc();
            
        }
    
            if($row['total']==1){
        
            $query="update creature set descrizione = '$descrizione' where nome = '$titolo'";
            $result = $mysqli->query($query);
    
            $errore=2;
            }else if (isset($_GET['id'])){
    
    echo "Cambiato il titolo, il tuo racconto sarà considerato come un nuovo articolo.<br>";
    
    $query="update creature set descrizione = '$descrizione', nome='$titolo' where id = '$_GET[id]'";
    $result = $mysqli->query($query);
    
    $errore=2;
    }else $errore=0;


*/
if($errore==0){

    $mysqli->autocommit(false);
    
    $testoformattato=htmlentities($descrizione);
    //$titolo = $titolo." - ".$autore;
    
    $query="INSERT INTO creature (nome, descrizione, autore)
    VALUES ('$titolo', '$testoformattato', '$autore')";
    //lancio la  query
    $result = $mysqli->query($query);
    
//    transazione commit
    if (!$mysqli->commit()) {
    echo "Transazione fallita <br>";
    exit();
    }
    
    $query="SELECT inseriti FROM iscritti where username = '$autore'";
    $result = $mysqli->query($query);
    $row = mysqli_fetch_row($result);
    
    $result = $row[0] + 1;
    
    $query="update iscritti set inseriti = '$result' where username = '$autore'";
    $result = $mysqli->query($query);
    
    echo "<br>Inserimento effettuato.<br><br>";
}/*else if ($errore==2){
    echo "<br>Modifica andata a buon fine.<br><br>";
}*/else
    echo "Inserimento non andato a buon fine. <br><br>";

    $mysqli->autocommit(true);

    $mysqli->close();

    header("refresh:10;url='home.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='creature.php'\" value=\"Ritorna alla pagina\"></form>";
  
    //$query="SELECT nome, descrizione FROM creature";
    //$result = $mysqli->query($query);
    //while ($row = mysqli_fetch_row($result)) {
    //    echo 'Nome: ', $row[0] , '<br>Descrizione: ', $row[1] , "\n";
    //}
?>
</h4>
</div>
</body>
</html>