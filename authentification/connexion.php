<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form.css">
   <link rel="stylesheet" href="../style/navStyle.css">
    <title>Connexion</title>
</head>
<body>
    <main>
    <div class="logoHolder">
    <div class="logo nav-li"><h1>R</h1></div>
    </div>
    <div class="formHolder">
        <form action="/signin" id="formConnexion" method="post">
           <h1>Connnexion</h1>
        <div>
            <label for="email" style="display: none;"></label>
           <input type="email" placeholder="Courriel" id="email1" name="email">
           <hr>
        </div>
        <div>
            <label for="password" style="display: none;"></label>
           <input type="password" placeholder="Mot de passe" id="password1" name="password">
           <hr>
        </div>
        <div class="submit-holder">
            <input type="submit" value="Se connecter" class="submit">
        </div>
        <div>
            <p>ou <a href="../MotDePasseOublie">mot de passe oublié</a></p>
        </div>
        <hr>
        <span><a href="../Inscprition">S'inscrire</a></span>

        </form>


    </div>
    </main>
    
</body>
</html>