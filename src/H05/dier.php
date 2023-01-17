<?php
$GLOBALS["titel"] = "Geselecteerd dier";
include "../header.php";

$dieren = $_GET["dieren"];
foreach($dieren as $dier) {
    echo "<img src='../img/" . $dier . ".png' width='200' height='200'>";
}

include "../footer.php";