
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require("./db/dbConnection.php");

    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM user WHERE nom='$username' AND mdp ='$password'";
$result = $pdo->query($sql);


if($result>0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo $row['nom'] . ' - ' . $row['courriel'] . '<br>';
       }
    }

    setcookie('', $username, time() + 0,'/');
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
    <?php
   

    ?>
    
</body>
</html>
