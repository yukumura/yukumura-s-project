  <?php  
    session_start();
    
    $ip =  "0.0.0.0";
    $port = "3306";
    $user = "yukumura";
    $db = "c9";
 
    $mysqli = new mysqli();
    $mysqli->set_charset("utf8");
    $mysqli->connect($ip, $user, '', $db);

?>