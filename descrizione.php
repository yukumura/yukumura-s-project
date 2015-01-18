<!DOCTYPE html>
<?php
//include('cuore.php');
if (!isset($_SESSION)) {
      session_start();
    }else echo "sessione già aperta";
include ('database_connect.php');
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
     <h1>Descrizione progetto</h1>
   </div>

    <div id="content">
     <p><em>
             Il sito non è altro che una semplice raccolta online di qualsiasi racconto inserito dall'utente per quanto riguarda argomenti sovrannaturali. I racconti inseriti possono essere visualizzati da tutti, ma possono essere modificati solo ed esclusivamente dall'autore del racconto. In fondo alla pagina, dopo aver effettuato il login, è possibile sapere quanti racconti sono stati inseriti.<br>
             Attraverso il sito si può accedere effettuando il login dalla sezione apposita, oppure in fondo alla pagina è possibile trovare il login "veloce".
         <br>Nel sito è possibile:
    <div class="prog">
         <li>Registrarsi</li>
         <li>Accedere al sito</li>
         <li>Visualizzare i racconti presenti sul sito</li>
         <li>Aggiungere e/o modificare un racconto</li>

        <br>Requisiti rispettati:

    <li>Utilizzo di HTML e CSS</li>
    <li>Utilizzo di PHP e MySQL</li>
    <li>Almeno due ruoli (indicare quali sono): Utente registrato e semplice visitatore</li>
    <li>Almeno una transazione: nel file "registrazione.php" è possibile notare la transazione per quanto riguarda l'inserimento nel database di un nuovo utente</li>
    <li>Almeno una funzionalità ajax: Sono presenti diversi bottoni che utilizzano javascript per ritornare nelle pagine precedenti</li>
    <li>Credenziali di autenticazione e link alla homepage:<br> account: yukumura<br>password: asdasdasd<br>Tuttavia è possibile registrare un nuovo account e avere i privilegi di inserimento e/o modificazione di un racconto.</li>
    Tool utilizzati: piattaforma cloud9 e Mozilla Firefox come browser.
    </div>
    <?php
include('piepagina.php');
?>
 
 </body>

</html>
