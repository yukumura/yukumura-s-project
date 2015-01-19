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
    <script>
    $(function() {
        $("#segnalibro").accordion();});
    </script>
</head>

<body>
  
  <?php/*
    include('intestazione.html');
    */?>

    <div id="segnalibro">
     <!-- <div class="segnalibro"> -->

        <h3>Racconti con la A</h3>
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
       
       <h3>Racconti con la B</h3>
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
        
        <h3>Racconti con la C</h3>
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
        
        <h3>Racconti con la D</h3>
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
        
        <h3>Racconti con la E</h3>
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
        
        <h3>Racconti con la F</h3>
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
        
        <h3>Racconti con la G</h3>
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
        
        <h3>Racconti con la H</h3>
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
        
        <h3>Racconti con la I</h3>
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
        
        <h3>Racconti con la J</h3>
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
        
        <h3>Racconti con la K</h3>
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
        
        <h3>Racconti con la L</h3>
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
        
        <h3>Racconti con la M</h3>
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
        
        <h3>Racconti con la N</h3>
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
        
        <h3>Racconti con la O</h3>
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
        
        <h3>Racconti con la P</h3>
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
        
        <h3>Racconti con la Q</h3>
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
        
        <h3>Racconti con la R</h3>
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
         
        <h3>Racconti con la S</h3>
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
    
        <h3>Racconti con la T</h3>
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

        <h3>Racconti con la U</h3>
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

        <h3>Racconti con la V</h3>
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

        <h3>Racconti con la W</h3>
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
        
        <h3>Racconti con la X</h3>
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
        
        <h3>Racconti con la Y</h3>
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
        
        <h3>Racconti con la Z</h3>
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
</body>
</html>