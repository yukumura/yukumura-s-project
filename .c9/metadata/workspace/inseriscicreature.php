{"changed":true,"filter":false,"title":"inseriscicreature.php","tooltip":"/inseriscicreature.php","value":"<!DOCTYPE html>\n<html>\n<?php\n    //include('cuore.php');\n?>\n    <head>\n        <meta charset=\"utf-8\"/>\n        <link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\" media=\"screen\">\n    </head>\n<body>\n\n<div id=\"form_creature\">\n     <form method=\"POST\" action=\"mostroinserito.php\">\n      \n       <label for=\"titolo\">Titolo/Nome creatura</label>\n          <input type=\"text\" name=\"titolo\" value=\"\"/>\n\n        <label for=\"descrizione\">Descrizione</label>\n        <textarea rows=\"80\" cols=\"150\"\n        name=\"descrizione\">Inserisci qui la tua storia</textarea> \n\n\t<input type=\"submit\" name=\"inserisci\" value=\"Inserisci\">\n     </form>\n</div>\n</body>\n</html>","undoManager":{"mark":-1,"position":1,"stack":[[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["/"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":6},"end":{"row":3,"column":6},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":216,"mode":"ace/mode/php"}},"timestamp":1419779551671}