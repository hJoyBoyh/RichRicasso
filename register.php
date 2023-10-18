<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$mdp = $_POST['password'];


$dsn = 'mysql:host=localhost:3306;dbname=ricassodb';
$username = 'root';
$password = '';
try {
$pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 echo 'Échec de la connexion : ' . $e->getMessage();
}


$sql = "INSERT INTO user (nom,courriel,mdp,permission) VALUES ('$name','$email','$mdp', '1')";
$pdo->exec($sql);

header("location: ./index.php");
exit();
}
?>