<html>

  <head>
    <meta http-equiv="refresh" content="10">
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Logout</title>
  </head>
  
  <body>
        <div id="formattazione_testo">
        <h4>
        <?php
            function termina_sessione(){
                $_SESSION= array();
        
            if(session_id()!="" || isset($_COOKIE[session_name()]))
                setcookie(session_name(), '', time() - 2592000, '/');
                session_destroy();
            }
        
            termina_sessione();
        
            echo "Log out avvenuto con successo.";
            echo "<form><input type=\"button\" onclick=\"window.location='index.php'\" value=\"Ritorna alla Home\"></form>";
            header("refresh:3;url='home.php'");
        ?>
        </h4>
        </div>
    </body>
</html>