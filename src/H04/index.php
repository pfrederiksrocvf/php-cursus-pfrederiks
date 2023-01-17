<html lang="en">
<head><title>H4 opdracht</title></head>

<body>
<?php

function f2c($tempinfahrenheit) {
    $tempincelcius = floor(($tempinfahrenheit - 32) * (5/9));
    return $tempincelcius;
}

echo "<p>100 graden fahrenheit=".f2c(100)."C</p>";
echo "<p>32 graden fahrenheit=".f2c(32)."C</p>";

function div3($num){
    if ($num % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

echo "div3(9)";
var_dump(div3(9));
echo "div3(11)";
var_dump(div3(11));
echo "div3(12)";
var_dump(div3(12));

function reversestr($str) {
    $rev = "";
    $len = strlen($str);
    for($pos=$len-1; $pos>-1; $pos = $pos - 1) {
        $rev = $rev . $str[$pos];
    }
    return $rev;
}

echo "pastalepel=".reversestr("pastalepel")."<br/>";
echo "houmous=".reversestr("houmous")."<br/>";
echo "macaroni=".reversestr("macaroni")."<br/>";


?>

</body>

        </html>
