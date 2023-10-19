<?php
$dsn = 'mysql:host=localhost:3306;dbname=RicassoDb';
$username = 'root';
$password = '';
try {
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 echo 'Connexion reussi';
} catch (PDOException $e) {
 echo 'Échec de la connexion : ' . $e->getMessage();
}
/*
$sql = "SELECT * FROM user";
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
 echo $row['nom'] . ' - ' . $row['courriel'] . '<br>';
}
*/