 <?php
    include "../header.php";
    require "database.php";
    if (isset($_POST["inschrijven"])) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $pdo = initpdo();
        // $cursistnr=$_POST["cursistnr"];
        // $naam=$_POST["naam"];
        // $roepnaam=$_POST["roepnaam"];
        // $straat=$_POST["straat"];
        // $postcode=$_POST["postcode"];
        // $plaats=$_POST["plaats"];
        // $geslacht=$_POST["geslacht"];
        // $geb_datum=$_POST["geb_datum"];

        // SQL INJECTION in geb_datum:
        // 1982-01-14');UPDATE docent SET uurloon=500 WHERE doc_code='MO'; --
        // $result =  $pdo->exec(
        //    "INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
        //              VALUES ($cursistnr, '$naam', '$roepnaam', '$straat', '$postcode', '$plaats', '$geslacht', '$geb_datum')");
        // prepared statement is wel veilig
        // $stmt = $pdo->prepare("INSERT INTO cursist  (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
        //                     VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        // $stmt->execute([$cursistnr, $naam, $roepnaam, $straat, $postcode, $plaats, $geslacht, $geb_datum]);
        // $result = $stmt->rowCount();

        $stmt = $pdo->prepare("INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
                                     VALUES (:cursistnr, :naam, :roepnaam, :straat, :postcode, :plaats, :geslacht, :geb_datum)");
        unset($_POST['inschrijven']);
        $stmt->execute($_POST);
        $result = $stmt->rowCount();

        if ($result == 1) {
            echo "<p>Cursist is toegevoegd!";
        } else {
            echo "<p>Er ging iets mis</p>";
        }

    } else {
        echo "<p>Geen gegevens ontvangen.</p>";
    }

    include "../footer.php";
 ?>



