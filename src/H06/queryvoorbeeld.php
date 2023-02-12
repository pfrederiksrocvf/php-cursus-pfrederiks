<?php
include "../header.php";

$database = getenv("PHP_MYSQL_DBNAME");
$host = getenv("PHP_MYSQL_HOSTNAME");
$port = getenv("PHP_MYSQL_PORT");
$user = getenv("PHP_MYSQL_USER");
$passwd = getenv("PHP_MYSQL_PASSWORD");

$dbh = new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$stmt = $dbh->query("SELECT 1+1");
$rows = $stmt->fetchAll();
foreach ($rows as $row){
    echo ($row["1+1"]);
};
echo "<br>";
$stmt = $dbh->query("SELECT 1+1");
while ($row = $stmt->fetch()) {
    echo ($row["1+1"]);
}
$injectie = "'';UPDATE docent SET uurloon=100 WHERE doc_code='MO'; -- ";
$stmt = $dbh->query("SELECT * FROM cursist WHERE naam=$injectie");
$cursisten = $stmt->fetchAll();
echo "<pre>";
print_r($cursisten);
echo "</pre>";
include "../footer.php";