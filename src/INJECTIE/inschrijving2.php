<?php
include "header.php";
include "database.php";
if (isset($_POST["inschrijven"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $pdo = initpdo();
    $cursistnr = $_POST["cursistnr"];
    $naam = $_POST["naam"];
    $roepnaam = $_POST["roepnaam"];
    $straat = $_POST["straat"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $geslacht = $_POST["geslacht"];
    $geb_datum = $_POST["geb_datum"];

    // prepared statement is wel veilig
    // $stmt = $pdo->prepare("INSERT INTO cursist  (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
    //                     VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->execute([$cursistnr, $naam, $roepnaam, $straat, $postcode, $plaats, $geslacht, $geb_datum]);
    // $result = $stmt->rowCount();

    $stmt = $pdo->prepare("INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
                                 VALUES (:cursistnr, :naam, :roepnaam, :straat, :postcode, :plaats, :geslacht, :geb_datum)");
    unset($_POST["inschrijven"]);
    $stmt->execute($_POST);
    $result = $stmt->rowCount();

    if ($result == 1) {
        echo "<p>Cursist is toegevoegd</p>";
    } else {
        echo "<p>Er ging iets mis</p>";
    }
    echo "<p><a href='cursisten.php'>Cursistenoverzicht</a></p>";

} else {
    include "inschrijvingsformulier.php";
    // echo 'hola!';
}

include "footer.php";
?>