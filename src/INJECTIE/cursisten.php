<?php

include "header.php";
include "database.php";

?>
<table>
    <thead>
    <tr>
        <td>Cursistnummer</td>
            <td>Achternaam</td>
            <td>Roepnaam</td>
            <td>Straat</td>
            <td>Postcode</td>
            <td>Plaats</td>
            <td>Geslacht</td>
            <td>Geboortedatum</td>
    </tr>
    </thead>
    <?php
        $pdo = initpdo();
        $rows = $pdo->query("SELECT * from `cursist`");
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row["cursistnr"]."</td>";
            echo "<td>".$row["naam"]."</td>";
            echo "<td>".$row["roepnaam"]."</td>";
            echo "<td>".$row["straat"]."</td>";
            echo "<td>".$row["postcode"]."</td>";
            echo "<td>".$row["plaats"]."</td>";
            echo "<td>".$row["geslacht"]."</td>";
            echo "<td>".$row["geb_datum"]."</td>";
            echo "</tr>";
;        }
    ?>
</table>

<?php
include "footer.php";
?>