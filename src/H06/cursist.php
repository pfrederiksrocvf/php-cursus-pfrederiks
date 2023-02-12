<?php include "../header.php"; ?>
<h1>Inschrijving nieuwe cursist</h1>
<form action="inschrijving.php" method="post">
    <label for="cursistnr">Cursistnummer</label><br>
    <input type="number" id="cursistnr" name="cursistnr"><br>
    <label for="naam">Achternaam:</label><br>
    <input type="text" id="naam" name="naam"><br>
    <label for="roepnaam">Roepnaam:</label><br>
    <input type="text" id="roepnaam" name="roepnaam"><br>
    <label for="straat" >Straat:</label><br>
    <input type="text" id="straat" name="straat"><br>
    <label for="postcode">Postcode:</label><br>
    <input type="text" id="postcode" name="postcode"><br>
    <label for="plaats">Plaats:</label><br>
    <input type="text"  id="plaats" name="plaats"><br>
    <label for="geslacht">Geslacht:</label><br>
    <select id="geslacht" name="geslacht">
        <option value="M">Man</option>
        <option value="V">Vrouw</option>
        <option value="N">Anders</option>
    </select><br>
    <label for="geb_datum">Geboortedatum (YYYY-MM-DD)</label><br>
    <input type="text" id="geb_datum" name="geb_datum" size="80"><br>
    <input type="submit" name="inschrijven" value="Inschrijven">
</form>
<?php include "../footer.php"; ?>