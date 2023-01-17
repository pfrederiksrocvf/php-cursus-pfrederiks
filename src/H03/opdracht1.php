<html lang="nl">

<head><title>H2 Opdracht 2</title></head>
<body>
<table>
<?php
    $zwemclubs["De spartelkuikens"] = 25;
    $zwemclubs["De waterbuffels"] =  32;
    $zwemclubs["Plonsmderin"] = 11;
    $zwemclubs["Bommetje"] = 23;

    foreach($zwemclubs as $zwemclub => $ledenaantal) {
       echo "<tr><td>".$zwemclub."</td><td>".$ledenaantal."</td><td>";
       for($i = $ledenaantal; $i >= 5 ; $i = $i - 5){
           echo "<img src='zwemmer.png' width='45' height='45'>";
       }
       echo "</td></tr>";
    }

    ?>
</table>
</body>
</html>
