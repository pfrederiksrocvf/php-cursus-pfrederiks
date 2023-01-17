<?php
$GLOBALS["title"] = "H05 opdracht 3";
include "../header.php";
$passwds = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl"=> "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201");
function login($username, $password) {
    global $passwds;
    if (isset($passwds[$username]) AND $passwds[$username] == $password) {
       return true;
    } else {
       return false;
    }
}

if (!isset($_POST["login"])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Naam: <input type="text" name="username">
        Wachtwoord: <input type="text" name="password">
        <input type="submit" name="login" value="accept">
    </form>
<?php
} else {

    if (login($_POST["username"], $_POST["password"])) {
        echo "Access Granted.";
    } else {
        echo "Access Denied.";
    }

}

include "../footer.php";