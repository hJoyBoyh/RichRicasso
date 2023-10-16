<?php
$dsn = 'mysql:host=localhost:3306;dbname=ricassodb';
$username = 'root';
$password = '';
try {
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = "INSERT INTO user (nom,courriel,mdp,permission) VALUES ('Kenny Rigaud', 'kenny.rigaud@example.com', '1234', '1')"; $pdo->exec($sql);

 echo 'Connexion reussi';
} catch (PDOException $e) {
 echo 'Échec de la connexion : ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>