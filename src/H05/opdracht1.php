<html lang="nl">
<head><title>Registratiepagina</title></head>
<body>
<?php
    if (isset($_POST["firstname"])) {
        echo "<h1>Welkom ".$_POST["firstname"]."</h1><p>";

        if (!empty($_POST["surname"])) {
            echo "Naam: " . $_POST["firstname"] . " " . $_POST["surname"] . "<br>";
        } else {
            echo "<b style='color: red'>Achternaam onbreekt!</b><br>";
        }
        if (!empty($_POST["username"])) {
            echo "Gebruikersnaam: " . $_POST["username"] . "<br>";
        } else {
            echo "<b style='color: red'> Gebruikersnaam ontbreekt!<b><br>";
        }
        if (!empty($_POST["email"])) {
            echo "Email adres: " . $_POST["email"] . "<br";
        } else {
            echo "<b style='color: red'>Email adres ontbreekt!</b><br>";
        }

        echo "</p></body></html>";
        exit;
    }
?>
<h1>Registratie gebruiker</h1>
<form action="opdracht1.php" method="POST">
    Voornaam:<input type="text" name="firstname">
    Achternaam:<input type="text" name="surname">
    Gebruikersnaam:<input type="text" name="username">
    Wachtwoord:<input type="text" name="password">
    E-mail adres:<input type="text" name="email">

    <input type="submit" name="Registreer" value="bevestig">
</form>
</body>
</html>