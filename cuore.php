  <?php  
    session_start();
    
    $ip =  "0.0.0.0";
    $port = "3306";
    $user = "cicilloniAlberto";
    $pass = "scimmia454";
 
    $mysqli = new mysqli();
    $mysqli->set_charset("utf8");
    $mysqli->connect($ip, $user, $pass,'');

?>