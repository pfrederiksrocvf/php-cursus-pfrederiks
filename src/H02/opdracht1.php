<html>
<head><title>H02 Opdracht 1</title></head>

<body>
<h1>Busreis</h1>
<p>
<?php
$leeftijd = $_GET["leeftijd"] ?? 20;
$basistarief = 10;
$bedrag = 0;

if ($leeftijd > 65) {
    $bedrag = $basistarief * 0.5;
 } elseif ($leeftijd <= 12 ) {
    $bedrag = $basistarief * 0.5;
} elseif ($leeftijd < 3 ) {
    $bedrag = 0;
} else {
    $bedrag = $basistarief;
}


echo "<pre>Basistarief: ".$basistarief."</pre>";
echo "<pre>Leeftijd: ".$leeftijd."</pre>";
echo "<pre>Bedrag: ".$bedrag."</pre>";
    ?>
</p>
</body>
</html>