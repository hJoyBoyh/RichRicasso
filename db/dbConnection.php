<?php
$dsn = 'mysql:host=localhost:3306;dbname=ricassodb';
$username = 'root';
$password = '';
try {
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 echo 'Connexion reussi';
} catch (PDOException $e) {
 echo 'Échec de la connexion : ' . $e->getMessage();
}
