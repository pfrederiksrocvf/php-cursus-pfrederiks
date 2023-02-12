<?php

include "header.php";
include "database.php";

?>
    <table>
        <thead>
        <tr>
            <td>Docent code</td>
            <td>Docent naam</td>
            <td>Straat</td>
            <td>Postcode</td>
            <td>Plaats</td>
            <td>Telefoon</td>
            <td>Uurloon</td>
            <td>Geboortedatum</td>
        </tr>
        </thead>
        <?php
        $pdo = initpdo();
        $rows = $pdo->query("SELECT * from `docent`");
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row["doc_code"]."</td>";
            echo "<td>".$row["doc_naam"]."</td>";
            echo "<td>".$row["straat"]."</td>";
            echo "<td>".$row["postcode"]."</td>";
            echo "<td>".$row["plaats"]."</td>";
            echo "<td>".$row["telefoon"]."</td>";
            echo "<td>".$row["uurloon"]."</td>";
            echo "<td>".$row["geb_datum"]."</td>";
            echo "</tr>";
            ;        }
        ?>
    </table>

<?php
include "footer.php";
?>