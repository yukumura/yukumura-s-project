{"filter":false,"title":"creature.1.php","tooltip":"/creature.1.php","undoManager":{"mark":96,"position":96,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":371,"column":4},"action":"remove","lines":["<!DOCTYPE html>","<?php","include('cuore.php');","include('database_connect.php');","?>","<html>","  <!-- Pagina dove vengono visualizzati i racconti inseriti ordinati alfabeticamente -->","  <head>","    <meta charset=\"utf-8\"/>","    <link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\" media=\"screen\">","    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>","  </head>","","  <body>","<?php","include('intestazione.html');","?>","","<div class=\"titolo\">","     <h1>Creature</h1>","   </div>","","<div id=\"content\">","<p>","<?php","  if(isset($_SESSION['username'])) {","\techo \"Se vuoi inserire un articolo premi <a href='inseriscicreature.php'><u>Qui</u></a>\";","\t}else{","      echo \"Devi essere registrato per poter inserire un articolo. \";","      echo \"<a href='registrati.php'>Registrati</a>\";","      echo \" oppure \";","      echo \"<a href='login.php'>loggati</a>.\";","      }","      ","    //$mysqli->close();","  ?>","</p>  ","      </div>","","    <br>","    ","    <a id=\"segnalibro\"></a>","    <div class=\"segnalibro\">","    <a href=\"#A\">A</a>","    <a href=\"#B\">B</a>","    <a href=\"#C\">C</a>","    <a href=\"#D\">D</a>","    <a href=\"#E\">E</a>","    <a href=\"#F\">F</a>","    <a href=\"#G\">G</a>","    <a href=\"#H\">H</a>","    <a href=\"#I\">I</a>","    <a href=\"#J\">J</a>","    <a href=\"#K\">K</a>","    <a href=\"#L\">L</a>","    <a href=\"#M\">M</a>","    <a href=\"#N\">N</a>","    <a href=\"#O\">O</a>","    <a href=\"#P\">P</a>","    <a href=\"#Q\">Q</a>","    <a href=\"#R\">R</a>","    <a href=\"#S\">S</a>","    <a href=\"#T\">T</a>","    <a href=\"#U\">U</a>","    <a href=\"#V\">V</a>","    <a href=\"#W\">W</a>","    <a href=\"#X\">X</a>","    <a href=\"#Y\">Y</a>","    <a href=\"#Z\">Z</a>","    </div>","    ","    <div id=\"lettere\">","    <a id=\"A\"></a>","    <h1>A</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'a%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"B\"></a>","    <h1>B</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'b%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"C\"></a>","    <h1>C</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'c%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"D\"></a>","    <h1>D</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'd%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"E\"></a>","    <h1>E</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'e%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"F\"></a>","    <h1>F</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'f%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"G\"></a>","    <h1>G</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'g%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"H\"></a>","    <h1>H</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'h%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"I\"></a>","    <h1>I</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'i%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"J\"></a>","    <h1>J</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'j%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"K\"></a>","    <h1>K</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'k%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"L\"></a>","    <h1>L</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'l%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"M\"></a>","    <h1>M</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'm%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"N\"></a>","    <h1>N</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'n%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"O\"></a>","    <h1>O</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'o%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"P\"></a>","    <h1>P</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'p%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"Q\"></a>","    <h1>Q</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'q%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"R\"></a>","    <h1>R</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'r%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"S\"></a>","    <h1>S</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 's%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"T\"></a>","    <h1>T</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 't%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"U\"></a>","    <h1>U</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'u%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"V\"></a>","    <h1>V</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'v%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"W\"></a>","    <h1>W</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'w%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"X\"></a>","    <h1>X</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'x%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"Y\"></a>","    <h1>Y</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'y%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    ","    ","    <a id=\"Z\"></a>","    <h1>Z</h1> ","    <?php","    $query=\"SELECT nome FROM creature where nome like 'z%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>","    ","    </div>","    ","    <div class=\"segnalibro\">","    <a href=\"#segnalibro\">Torna su</a>","    </div>","    ","<?php","include('piepagina.php');","?>",""," </body>","","</html>","    "]},{"start":{"row":0,"column":0},"end":{"row":65,"column":7},"action":"insert","lines":["<!doctype html>","<html lang=\"en\">","<head>","<meta charset=\"utf-8\">","<title>jQuery UI Accordion - Default functionality</title>","<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">","<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>","<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>","<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">","<script>","$(function() {","$( \"#accordion\" ).accordion();","});","</script>","</head>","<body>","<div id=\"accordion\">","<h3>Section 1</h3>","<div>","<p>","Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer","ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit","amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut","odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.","</p>","</div>","<h3>Section 2</h3>","<div>","<p>","Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet","purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor","velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In","suscipit faucibus urna.","</p>","</div>","<h3>Section 3</h3>","<div>","<p>","Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.","Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero","ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis","lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.","</p>","<ul>","<li>List item one</li>","<li>List item two</li>","<li>List item three</li>","</ul>","</div>","<h3>Section 4</h3>","<div>","<p>","Cras dictum. Pellentesque habitant morbi tristique senectus et netus","et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in","faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia","mauris vel est.","</p>","<p>","Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.","Class aptent taciti sociosqu ad litora torquent per conubia nostra, per","inceptos himenaeos.","</p>","</div>","</div>","</body>","</html>"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":15},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":4,"column":2},"action":"insert","lines":["<?php","include('cuore.php');","include('database_connect.php');","?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":38},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":7},"end":{"row":19,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":12},"end":{"row":16,"column":22},"action":"remove","lines":["#accordion"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["#"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":9},"end":{"row":21,"column":18},"action":"remove","lines":["accordion"]},{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":11},"end":{"row":8,"column":62},"action":"remove","lines":["jQuery UI Accordion - Default functionality</title>"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"remove","lines":[">"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":4},"end":{"row":8,"column":97},"action":"insert","lines":["<title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":4},"end":{"row":25,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":4},"end":{"row":26,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":32,"column":14},"end":{"row":33,"column":0},"action":"insert","lines":["",""]},{"start":{"row":33,"column":0},"end":{"row":33,"column":8},"action":"insert","lines":["        "]}]}],[{"group":"doc","deltas":[{"start":{"row":33,"column":8},"end":{"row":34,"column":0},"action":"insert","lines":["",""]},{"start":{"row":34,"column":0},"end":{"row":34,"column":8},"action":"insert","lines":["        "]}]}],[{"group":"doc","deltas":[{"start":{"row":22,"column":25},"end":{"row":23,"column":8},"action":"insert","lines":["","        "]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":8},"end":{"row":23,"column":33},"action":"insert","lines":[" <div class=\"segnalibro\">"]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["#"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":28,"column":0},"end":{"row":32,"column":0},"action":"remove","lines":["Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer","ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit","amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut","odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.",""]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":11},"end":{"row":28,"column":12},"action":"insert","lines":["","            "]}]}],[{"group":"doc","deltas":[{"start":{"row":28,"column":12},"end":{"row":35,"column":10},"action":"insert","lines":["<?php","    $query=\"SELECT nome FROM creature where nome like 'a%'\";","    $result = $mysqli->query($query);","    while ($row = mysqli_fetch_row($result)) {","        $nome = $row[0];","        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";","    }","    ?>    "]}]}],[{"group":"doc","deltas":[{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":35,"column":8},"end":{"row":35,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":29,"column":8},"end":{"row":29,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":30,"column":8},"end":{"row":30,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":30,"column":12},"end":{"row":30,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":8},"end":{"row":31,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":12},"end":{"row":31,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":32,"column":8},"end":{"row":32,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":32,"column":12},"end":{"row":32,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":33,"column":12},"end":{"row":33,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":31,"column":16},"end":{"row":32,"column":0},"action":"insert","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":32,"column":16},"action":"insert","lines":["                "]}]}],[{"group":"doc","deltas":[{"start":{"row":29,"column":67},"end":{"row":29,"column":68},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":29,"column":67},"end":{"row":29,"column":68},"action":"insert","lines":["w"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":4},"end":{"row":14,"column":97},"action":"insert","lines":["link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\" media=\"screen\">","    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":4},"end":{"row":15,"column":4},"action":"remove","lines":["<title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>","    "]}]}]]},"ace":{"folds":[],"scrolltop":69,"scrollleft":0,"selection":{"start":{"row":14,"column":4},"end":{"row":14,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"start","mode":"ace/mode/php"}},"timestamp":1421684457980,"hash":"cdb8515052fe20c245c1032ab51d0a02eb37c554"}