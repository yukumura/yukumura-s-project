{"changed":true,"filter":false,"title":"creature.php","tooltip":"/creature.php","value":"<!DOCTYPE html>\n<?php\ninclude('cuore.php');\ninclude('database_connect.php');\n?>\n<html>\n  <!-- Pagina dove vengono visualizzati i racconti inseriti ordinati alfabeticamente -->\n  <head>\n    <meta charset=\"utf-8\"/>\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\" media=\"screen\">\n    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>\n  </head>\n\n  <body>\n<?php\ninclude('intestazione.html');\n?>\n\n<div class=\"titolo\">\n     <h1>Creature</h1>\n   </div>\n\n<div id=\"content\">\n<p>\n<?php\n  if(isset($_SESSION['username'])) {\n\techo \"Se vuoi inserire un articolo premi <a href='inseriscicreature.php'><u>Qui</u></a>\";\n\t}else{\n      echo \"Devi essere registrato per poter inserire un articolo. \";\n      echo \"<a href='registrati.php'>Registrati</a>\";\n      echo \" oppure \";\n      echo \"<a href='login.php'>loggati</a>.\";\n      }\n      \n    //$mysqli->close();\n  ?>\n</p>  \n      </div>\n\n    <br>\n    \n    <a id=\"segnalibro\"></a>\n    <div class=\"segnalibro\">\n    <a href=\"#A\">A</a>\n    <a href=\"#B\">B</a>\n    <a href=\"#C\">C</a>\n    <a href=\"#D\">D</a>\n    <a href=\"#E\">E</a>\n    <a href=\"#F\">F</a>\n    <a href=\"#G\">G</a>\n    <a href=\"#H\">H</a>\n    <a href=\"#I\">I</a>\n    <a href=\"#J\">J</a>\n    <a href=\"#K\">K</a>\n    <a href=\"#L\">L</a>\n    <a href=\"#M\">M</a>\n    <a href=\"#N\">N</a>\n    <a href=\"#O\">O</a>\n    <a href=\"#P\">P</a>\n    <a href=\"#Q\">Q</a>\n    <a href=\"#R\">R</a>\n    <a href=\"#S\">S</a>\n    <a href=\"#T\">T</a>\n    <a href=\"#U\">U</a>\n    <a href=\"#V\">V</a>\n    <a href=\"#W\">W</a>\n    <a href=\"#X\">X</a>\n    <a href=\"#Y\">Y</a>\n    <a href=\"#Z\">Z</a>\n    </div>\n    \n    <div id=\"lettere\">\n    <a id=\"A\"></a>\n    <h1>A</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'a%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"B\"></a>\n    <h1>B</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'b%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"C\"></a>\n    <h1>C</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'c%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"D\"></a>\n    <h1>D</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'd%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"E\"></a>\n    <h1>E</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'e%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"F\"></a>\n    <h1>F</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'f%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"G\"></a>\n    <h1>G</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'g%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"H\"></a>\n    <h1>H</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'h%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"I\"></a>\n    <h1>I</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'i%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"J\"></a>\n    <h1>J</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'j%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"K\"></a>\n    <h1>K</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'k%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"L\"></a>\n    <h1>L</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'l%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"M\"></a>\n    <h1>M</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'm%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"N\"></a>\n    <h1>N</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'n%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"O\"></a>\n    <h1>O</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'o%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"P\"></a>\n    <h1>P</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'p%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"Q\"></a>\n    <h1>Q</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'q%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"R\"></a>\n    <h1>R</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'r%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"S\"></a>\n    <h1>S</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 's%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"T\"></a>\n    <h1>T</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 't%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"U\"></a>\n    <h1>U</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'u%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"V\"></a>\n    <h1>V</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'v%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"W\"></a>\n    <h1>W</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'w%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"X\"></a>\n    <h1>X</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'x%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"Y\"></a>\n    <h1>Y</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'y%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>    \n    \n    <a id=\"Z\"></a>\n    <h1>Z</h1> \n    <?php\n    $query=\"SELECT nome FROM creature where nome like 'z%'\";\n    $result = $mysqli->query($query);\n    while ($row = mysqli_fetch_row($result)) {\n        $nome = $row[0];\n        echo \"<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>\";\n    }\n    ?>\n    \n    </div>\n    \n    <div class=\"segnalibro\">\n    <a href=\"#segnalibro\">Torna su</a>\n    </div>\n    \n<?php\ninclude('piepagina.php');\n?>\n\n </body>\n\n</html>\n    ","undoManager":{"mark":68,"position":100,"stack":[[{"group":"doc","deltas":[{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["p"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"insert","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":[" "]},{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":43},"end":{"row":6,"column":44},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":44},"end":{"row":6,"column":45},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":45},"end":{"row":6,"column":46},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":46},"end":{"row":6,"column":47},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":48},"end":{"row":6,"column":49},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":49},"end":{"row":6,"column":50},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"insert","lines":["n"]},{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":55},"end":{"row":6,"column":56},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":56},"end":{"row":6,"column":57},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":57},"end":{"row":6,"column":58},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":58},"end":{"row":6,"column":59},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":59},"end":{"row":6,"column":60},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":60},"end":{"row":6,"column":61},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":61},"end":{"row":6,"column":62},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":62},"end":{"row":6,"column":63},"action":"insert","lines":["d"]},{"start":{"row":6,"column":63},"end":{"row":6,"column":64},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":64},"end":{"row":6,"column":65},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":65},"end":{"row":6,"column":66},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":66},"end":{"row":6,"column":67},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":67},"end":{"row":6,"column":68},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":68},"end":{"row":6,"column":69},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":69},"end":{"row":6,"column":70},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":70},"end":{"row":6,"column":71},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":71},"end":{"row":6,"column":72},"action":"insert","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":72},"end":{"row":6,"column":73},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":73},"end":{"row":6,"column":74},"action":"insert","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":74},"end":{"row":6,"column":75},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":75},"end":{"row":6,"column":76},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":76},"end":{"row":6,"column":77},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":77},"end":{"row":6,"column":78},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":78},"end":{"row":6,"column":79},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":79},"end":{"row":6,"column":80},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":80},"end":{"row":6,"column":81},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":81},"end":{"row":6,"column":82},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":82},"end":{"row":6,"column":83},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":83},"end":{"row":6,"column":84},"action":"insert","lines":["e"]},{"start":{"row":6,"column":84},"end":{"row":6,"column":85},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":85},"end":{"row":6,"column":86},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":86},"end":{"row":6,"column":87},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":87},"end":{"row":6,"column":88},"action":"insert","lines":[">"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":7},"end":{"row":37,"column":8},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":8},"end":{"row":37,"column":9},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":9},"end":{"row":37,"column":10},"action":"insert","lines":["!"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["!"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"insert","lines":["!"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":7},"end":{"row":37,"column":8},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":8},"end":{"row":37,"column":9},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":9},"end":{"row":37,"column":10},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":16},"end":{"row":37,"column":17},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":17},"end":{"row":37,"column":18},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":18},"end":{"row":37,"column":19},"action":"insert","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"insert","lines":[">"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["!"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"remove","lines":["-"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"remove","lines":[">"]}]}]]},"ace":{"folds":[],"scrolltop":432,"scrollleft":0,"selection":{"start":{"row":36,"column":6},"end":{"row":36,"column":6},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":21,"state":"start","mode":"ace/mode/php"}},"timestamp":1421609992898}