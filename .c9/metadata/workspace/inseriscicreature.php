{"changed":true,"filter":false,"title":"inseriscicreature.php","tooltip":"/inseriscicreature.php","value":"<!DOCTYPE html>\n<html>\n<?php\n    include('cuore.php');\n    include('database_connect.php');\n?>\n    <head>\n        <meta charset=\"utf-8\"/>\n        <link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\" media=\"screen\">\n    </head>\n<body>\n\n<div id=\"form_creature\">\n     <form method=\"POST\" action=\"mostroinserito.php\">\n      \n       <label for=\"titolo\">Titolo/Nome creatura</label>\n          <input type=\"text\" name=\"titolo\" value=\"\"/>\n\n        <label for=\"descrizione\">Descrizione</label>\n        <textarea rows=\"80\" cols=\"150\"\n        name=\"descrizione\">Inserisci qui la tua storia</textarea> \n\n\t<input type=\"submit\" name=\"inserisci\" value=\"Inserisci\">\n     </form>\n</div>\n</body>\n</html>","undoManager":{"mark":2,"position":5,"stack":[[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":27},"action":"remove","lines":["//include('cuore.php');"]},{"start":{"row":3,"column":4},"end":{"row":3,"column":36},"action":"insert","lines":["include('database_connect.php');"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":5},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":21},"action":"insert","lines":["include('cuore.php');"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":5},"end":{"row":3,"column":5},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1419785880774}