<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

require("./db/dbConnection.php");

$email_infolettre = $_POST['email_infolettre'];

$sql = "INSERT INTO InfoLettre (courriel) VALUES ('$email_infolettre')";
$pdo->exec($sql);

header("location: ./index.php");
exit();
}
?>
