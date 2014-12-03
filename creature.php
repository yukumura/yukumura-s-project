<!DOCTYPE html>
<?php
include('cuore.php');
?>
<html>
  
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>
  </head>

  <body>
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
      </div>

    <br>
    
    <a id="segnalibro"></a>
    <div class="segnalibro">
    <a href="#A">A</a>
    <a href="#B">B</a>
    <a href="#C">C</a>
    <a href="#D">D</a>
    <a href="#E">E</a>
    <a href="#F">F</a>
    <a href="#G">G</a>
    <a href="#H">H</a>
    <a href="#I">I</a>
    <a href="#J">J</a>
    <a href="#K">K</a>
    <a href="#L">L</a>
    <a href="#M">M</a>
    <a href="#N">N</a>
    <a href="#O">O</a>
    <a href="#P">P</a>
    <a href="#Q">Q</a>
    <a href="#R">R</a>
    <a href="#S">S</a>
    <a href="#T">T</a>
    <a href="#U">U</a>
    <a href="#V">V</a>
    <a href="#W">W</a>
    <a href="#X">X</a>
    <a href="#Y">Y</a>
    <a href="#Z">Z</a>
    </div>
    
    <div id="lettere">
    <a id="A"></a>
    <h1>A</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'a%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="B"></a>
    <h1>B</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'b%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="C"></a>
    <h1>C</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'c%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="D"></a>
    <h1>D</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'd%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="E"></a>
    <h1>E</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'e%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="F"></a>
    <h1>F</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'f%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="G"></a>
    <h1>G</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'g%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="H"></a>
    <h1>H</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'h%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="I"></a>
    <h1>I</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'i%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="J"></a>
    <h1>J</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'j%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="K"></a>
    <h1>K</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'k%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="L"></a>
    <h1>L</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'l%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="M"></a>
    <h1>M</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'm%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="N"></a>
    <h1>N</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'n%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="O"></a>
    <h1>O</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'o%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="P"></a>
    <h1>P</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'p%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="Q"></a>
    <h1>Q</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'q%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="R"></a>
    <h1>R</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'r%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="S"></a>
    <h1>S</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 's%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="T"></a>
    <h1>T</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 't%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="U"></a>
    <h1>U</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'u%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="V"></a>
    <h1>V</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'v%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="W"></a>
    <h1>W</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'w%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="X"></a>
    <h1>X</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'x%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="Y"></a>
    <h1>Y</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'y%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>    
    
    <a id="Z"></a>
    <h1>Z</h1> 
    <?php
    $query="SELECT nome FROM creature where nome like 'z%'";
    $result = $mysqli->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $nome = $row[0];
        echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
    }
    ?>
    
    </div>
    
    <div class="segnalibro">
    <a href="#segnalibro">Torna su</a>
    </div>
    
<?php
include('piepagina.php');
?>

 </body>

</html>
    