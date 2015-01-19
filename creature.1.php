<!doctype html>
<?php
include('cuore.php');
include('database_connect.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guide e strategie per combattere ogni tipo di essere soprannaturale - Creature</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <script>
    $(function() {
        $(".segnalibro").accordion();});
    </script>
</head>

<body>
  <?php
    include('intestazione.html');
    ?>

    <div id="segnalibro">
     <div class="segnalibro">

        <h3>Section 1</h3>
        <div>
        <p>
            <?php
                $query="SELECT nome FROM creature where nome like 'w%'";
                $result = $mysqli->query($query);
                
                while ($row = mysqli_fetch_row($result)) {
                $nome = $row[0];
                echo "<li><a href='visualizzazione.php?id=$nome'>$row[0]</a></li>";
        }
            ?>    
        </p>
        </div>
        
        
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
</p>
</div>
</div>
</body>
</html>