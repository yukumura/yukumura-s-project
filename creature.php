<!doctype html>
<?php
include('cuore.php');
include('database_connect.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
</head>

<body>
    <div id="home"></div>
    
    <?php
    include('intestazione.html');
    ?>

    <div class="titolo">
     <h1>Creature</h1>
   </div>
   
   <div id="content">
<p>
<?php
  if(isset($_SESSION['username'])) {
	echo "Se vuoi inserire un articolo premi <a href='inseriscicreature.php'><u>Qui</u></a>";
	}else{
      echo "Devi essere registrato per poter inserire un articolo. ";
      echo "<a href='registrati.php'>Registrati</a>";
      echo " oppure ";
      echo "<a href='login.php'>loggati</a>.";
      }
      
    //$mysqli->close();
  ?>
</p>  

<!--      </div> > -->


    <script>
     $(function() {
        $("#segnalibro" ).accordion({collapsible: true, active: false,  heightStyle: "content"});
        });
    </script>
    <br><br><br>
    <div id="segnalibro">
     <!-- <div class="segnalibro"> -->

        <h3>Articoli con la A</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'a%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
       
       <h3>Articoli con la B</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'b%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la C</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'c%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la D</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'd%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la E</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'e%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la F</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'f%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la G</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'g%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la H</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'h%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la I</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'i%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la J</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'j%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la K</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'k%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la L</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'l%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la M</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'm%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la N</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'n%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la O</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'o%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la P</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'p%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la Q</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'q%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la R</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'r%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
         
        <h3>Articoli con la S</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 's%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
    
        <h3>Articoli con la T</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 't%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>

        <h3>Articoli con la U</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'u%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>

        <h3>Articoli con la V</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'v%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>

        <h3>Articoli con la W</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'w%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la X</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'x%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la Y</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'y%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        <h3>Articoli con la Z</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'z%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        

</div>

<div class="segnalibro">
    <a href="#home">Torna su</a>
    </div>

</div>

<?php
include('piepagina.php');
?>

</body>
</html>