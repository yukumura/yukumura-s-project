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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Come funziona? Prelevo i dati inseriti dal form, controllo nel database se esiste già un racconto con lo stesso nome, inserito dallo stesso utente.//  
//Nel caso in cui non esista un racconto con lo stesso nome, viene creato. Nel caso in cui esista un racconto con lo stesso nome, ma l'autore        //
//è diverso, viene segnalato l'errore e il racconto non viene modificato. Diversamente, il racconto viene modificato.                                //
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $titolo=$_POST['titolo'];
    $descrizione=$_POST['descrizione'];
    $autore=$_SESSION['username'];
    
    $titolo=$mysqli->real_escape_string($titolo);
    $descrizione=$mysqli->real_escape_string($descrizione);
    
   
   if($titolo=='' or $descrizione== ''){
    	echo "Compila tutti i campi!<br>";
    	$errore=1;
    }else 
        //echo "Campi compilati<br>";
    
    
    $query="SELECT COUNT(*) as total FROM creature WHERE nome LIKE '$titolo'";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();

    
    if($row['total']!=0){
        //echo "Esiste un racconto chiamato così <br>";
        $query="SELECT COUNT(*) as total FROM creature WHERE nome LIKE '$titolo' and autore='$autore'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
            if($row['total']==1){
                //echo "Hai inserito tu un racconto con lo stesso nome <br>";
                $query="update creature set descrizione = '$descrizione' where nome = '$titolo'";
                $result = $mysqli->query($query);
                $errore=2;
            }else{
                echo "Non sei tu l'autore del racconto. <br>";
                    $errore=1;
                }
    }else{
        $errore=0;
        //echo "Fin qui nessun problema<br>";
    }
    
                if(isset($_GET['id']) and $errore!=2){
                    $query="delete from creature where id ='$_GET[id]'";
                    $result = $mysqli->query($query);
                    //echo "cancellazione effettuata<br>";
                }
    
    if($errore==0){

        $mysqli->autocommit(false);
        $testoformattato=htmlentities($descrizione);
        $query="INSERT INTO creature (nome, descrizione, autore)
        VALUES ('$titolo', '$testoformattato', '$autore')";
        $result = $mysqli->query($query);
        
        //transazione commit
        if (!$mysqli->commit()) {
        echo "Transazione fallita <br>";
        exit();
        }else{
            $query="SELECT inseriti FROM iscritti where username = '$autore'";
            $result = $mysqli->query($query);
            $row = mysqli_fetch_row($result);
            $result = $row[0] + 1;
            $query="update iscritti set inseriti = '$result' where username = '$autore'";
            $result = $mysqli->query($query);
            echo "<br>Inserimento effettuato.<br><br>";
        }
    }else if ($errore==2){
        echo "Modifica avvenuta con successo. <br><br>";
        }
            else{
                echo "Inserimento non andato a buon fine. <br><br>";
            }
    
    $mysqli->autocommit(true);
    $mysqli->close();
    header("refresh:10;url='home.php'");
    echo "<form><input type=\"button\" onclick=\"window.location='creature.php'\" value=\"Ritorna alla pagina\"></form>";
?>
</h4>
</div>
</body>
</html>