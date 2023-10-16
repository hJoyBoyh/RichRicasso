<?php
$dsn = 'mysql:host=localhost:3306;dbname=RicassoDb;charset=utf8';
try {
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 echo 'Échec de la connexion : ' . $e->getMessage();
}
?>