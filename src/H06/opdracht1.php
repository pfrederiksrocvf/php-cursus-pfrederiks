<?php
include "../header.php";

$database = getenv("PHP_MYSQL_DBNAME");
$host = getenv("PHP_MYSQL_HOSTNAME");
$port = getenv("PHP_MYSQL_PORT");
$user = getenv("PHP_MYSQL_USER");
$passwd = getenv("PHP_MYSQL_PASSWORD");


echo "<table><thead><tr><td>cursistnr</td><td>naam</td><td>roepnaam</td><td>straat</td><td>postcode</td><td>plaats</td><td>geslacht</td><td>geb_datum</td></tr></thead><tbody>";

    try {
        $dbh = new PDO("mysql:host={$host};dbname={$database};port={$port}", $user, $passwd);
        foreach($dbh->query('SELECT * from cursist') as $row) {

            echo "<tr>";
            echo "<td>".$row["cursistnr"]."</td>";
            echo "<td>".$row["naam"]."</td>";
            echo "<td>".$row["roepnaam"]."</td>";
            echo "<td>".$row["straat"]."</td>";
            echo "<td>".$row["postcode"]."</td>";
            echo "<td>".$row["plaats"]."</td>";
            echo "<td>".$row["geslacht"]."</td>";
            echo "<td>".$row["geb_datum"]."</td";
            echo "</tr>";
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

echo "</tbody></table>";
    include "../footer.php";
?>

