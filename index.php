<!DOCTYPE html>
<?php
//include('cuore.php');
if (!isset($_SESSION)) {
      session_start();
      echo session_id();
    }else echo "sessione già aperta";
include ('database_connect.php');

print_r($_SESSION);

?>
<html>

  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale</title>
  </head>
  
  <body>
  <?php
  include('intestazione.html');
  ?>
  
   <div class="titolo">
     <h1>Guide e strategie per combattere ogni tipo di essere soprannaturale</h1>
   </div>

    <div id="content">
     <p><em>Nessuno può dire di non aver mai sentito parlare di fenomeni paranormali in vita propria, che sia stato tramite la televisione, una vecchia storia di fantasmi raccontata sotto le coperte o, addirittura, molti, anche persone di nostra conoscenza degne di fiducia, affermano di aver avuto dirette esperienze paranormali.<br>
Il paranormale, per definizione, è un evento inspiegabile dal punto di vista fisico ed umano (es. apparizioni di fantasmi, telecinesi ecc.) la mente umana, come sappiamo, tende a catalogare in modo logico il mondo attorno a sé e, più la società e le scienze progrediscono, più questi eventi oscuri ed inspiegabili vengono considerati con ilarità come suggestioni, imbrogli, storie.<br> 
Il progresso, come è stato dimostrato di più volte da diversi studiosi delle scienze sociali in svariati campi, non è sinonimo di positività, infatti la necessità del nostro cervello di catalogare logicamente ciò che, secondo i nostri parametri, creati a tavolino, non lo è, potrebbe essere una limitazione che ci impedisce di vedere oltre, nell'oscurità delle nostre paure più recondite, quei terrori che non siamo pronti ad affrontare e che quindi vogliamo etichettare come inesistenti.<br>
Questa guida è per chi vuole conoscere l'inconoscibile, chi è pronto ad aprile la propria mente andando oltre i suoi limiti, per chi è pronto ad affrontare il mostro sotto al letto.</em></p>

   </div>

<?php
include('piepagina.php');
?>
 
 </body>

</html>
