<?php
$GLOBALS["titel"] = "H05 Opdracht 2";
include "../header.php";
$dieren = ["bee", "cat", "chameleon", "dolphin", "elephant", "koala", "lion", "pig", "snake", "turtle"];


?>

<form action="dier.php" method="GET">
<label for="">Kies een dier:</label>
<select id="dieren" name="dieren[]" multiple>
    <?php
    foreach ($dieren as $dier) {
        echo "<option value=\"".$dier."\">".$dier."</option>";
    }
    ?>
</select>
    <input type="submit" name="Kies" value="yes"/>
</form>

<a href="https://www.flaticon.com/free-icons/fauna" title="fauna icons">Fauna icons created by Freepik - Flaticon</a>

<?php
include "../footer.php";