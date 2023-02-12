<?php
include "../header.php";

$database = getenv("PHP_MYSQL_DBNAME");
$host = getenv("PHP_MYSQL_HOSTNAME");
$port = getenv("PHP_MYSQL_PORT");
$user = getenv("PHP_MYSQL_USER");
$passwd = getenv("PHP_MYSQL_PASSWORD");

if (isset($_POST["knop"])) {
    $emailadres = $_POST["emailadres"];
    $wachtwoord = $_POST["wachtwoord"];

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $passwd);
        $stmt = $dbh->prepare("SELECT wachtwoord FROM users WHERE emailadres = ?");
        $stmt->execute([$emailadres]);
        $result = $stmt->fetch();
        if ($result && $result["wachtwoord"] == $wachtwoord) {
            echo "Welkom";
        } else {
            echo "Fout wachtwoord!";
        }
        $stmt = null;
        $dbh = null;
     } catch (PDOException $e) {
        echo $e->getMessage();
    }

} else {
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="emailadres">Emailadres</label> <input type="text" name="emailadres" value=""><br>
    <label for="wachtwoord">Wachtwoord</label> <input type="password" name="wachtwoord" value=""><br>
	<input type="submit" name="knop" value="verstuur">
</form>
<?php }

include "../footer.php";

