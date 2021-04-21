<html LANG="en">
<head>
    <title>Opdtracht 3.7</title>
</head>
<body>
<?php
$afspraak = "";
$tijd = "";
$kappersagenda = array($tijd = "9.15"=> $afspraak = "Mevr. Pietersen", $tijd = "9.30"=> $afspraak = "Mevr. Willems", $tijd = "9.45"=> $afspraak = "", $tijd = "10.00"=> $afspraak = "Paul van den Broek", $tijd = "10.15"=> $afspraak = "Karel de Meeuw", $tijd = "10.30"=> $afspraak = "");
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach ($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>");
    }
}
print("</ul>");
?>
</body>
</html>


