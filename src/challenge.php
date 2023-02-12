<?php

$arr = array();

$arr[] = "kip";

$arr[] = "koe";

$arr[] = "geit";

$arr[] = "zee-egel";

$arr[] = "dolfijn";

$arr[] = "schaap";

$arr[] = "eend";

$arr[] = "ezel";

$arr[] = "zeehond";

$arr[] = "wilg";

$arr[] = "spar";

$arr[] = "den";

$arr[] = "eik";

/**
 * RESTRICTIES:
 *
 *
 * * functie mag NIET meer als 2 regels inhoud hebben
 * als de functie aangeroepen word met username: henk moet de functie alle planten teruggeven
 * als de functie aangeroepen word met username: kees moet de functie oceaan dieren terug geven
 * als de functie aangeroepen word met username: piet moet de functie alles terug geven alfabetisch (reversed) dus van z naar a
 *
 *
 * * functie mag geen externe code aanroepen dus geen classes en geen functies
 * er mag niet meer als 1 statement (regel code) per regel
 */

function sort_per_user($username, $_ = null) {
  return [fn()=>array_slice($_,9),fn()=>[$_[3],$_[4],$_[8]],fn()=>arsort($_)?$_:$_][strpos("henkkeespiet",$username)/4]();
}
//function sort_per_user($username, $_ = null)
//{
//$functions = array(
//    "henk" => fn () => array_slice($_, 9),
//    "kees" => fn () => array($_[3], $_[4], $_[8]),
//    "piet" => fn () => arsort($_) ? $_ : $_
//);
//return $functions[$username]();
//}
?>
<!DOCTYPE html>
<html lang="nl">
<head><title>Challlenge</title></head>
<body>
<h1>Henk</h1>
<ul>
<?php

    $results = sort_per_user("henk", $arr);
    foreach($results as $result) {
        echo "<li>".$result."</li>";
    }
    ?>
</ul>
<h1>Kees</h1>
<ul>
    <?php
    $results = sort_per_user("kees", $arr);
    foreach ($results as $result) {
        echo "<li>".$result."</li>";
    }
    ?>
</ul>
<h1>Piet</h1>
<ul>
<?php
    $results = sort_per_user("piet", $arr);
    foreach ($results as $result) {
        echo "<li>".$result."</li>";
    }
?>
</ul>

</body>
</html>

