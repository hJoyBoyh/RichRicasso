<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/navStyle.css">
    <link rel="stylesheet" href="../style/profilStyle.css">
   
    
    <title>Profil-User</title>
</head>
<body>
<div id="content">
        <!--
        <video muted autoplay loop>
            <source src="../video/Moving Gradient Background.mp4" type="">
        </video>
        -->
        <nav>
            <div class="logo nav-li"><h1>R</h1></div>
            <li class="nav-li"> <a href="/RichRicasso">Accueil</a></li>
            <li class="nav-li"> <a href="/RichRicasso/produit" >Produit</a></li>
            <img src="../img/user2.png" alt="user" class="user-icon nav-li" >
        </nav>
        <header>
            <div id="user-parametre">
                <div class="user-connexion">
                    <li class="exit-parametre">X(close)</li>
                    <li><a href="#">Connection</a></li>
                    <li><a href="#">Deconnection</a></li>
                </div>
                <div class="user-panel">
                    <div class="user-face">
                        <img src="../img/user2.png" alt="user" class="user-icon">
                    </div>
                    <div class="user-info">
                        <p class="user-name">KeZa Ria</p>
                        <p class="user-email">email@email.com</p>
                        <p class="user-profil"><a href="/RichRicasso/profil/profil.php">Mon profil</a></p>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <h1>Mon Compte</h1>
            <div id="parametre">
                <div class="user-general">
                    <div class="user-name-img">
                    <img src="../img/user2.png" alt="" srcset="" class="user-img">
                    <p id="user-name">User name</p>
                </div>
                
                    <ul  id="user-choix">
                        <li id="btn-profil">Profil</li>
                        <li id="btn-compte-securite">Sécurité du compte</li>
                    </ul>
                </div>
                <div id="user-display">
                    <div id="user-profil-info">
                        <span>Nom Complet</span>
                        <h3 id="fullName">Kenny</h3>
                        <hr>
                        <span>Courriel:</span>
                        <h3 id="email">rigrig@gmail.com </h3>
                        <hr>


                    </div>
                    <div id="user-securite-info">
                        <h2>Pour update assurez vous de vous trouver au même endroit que vous vous êtes inscrit</h2>
                        <form action="">
                            <label for="updFullName">Nom Complet</label>
                            <input type="text" placeholder="Kenny" id="updFullName" name="updFullName">
                            <hr>
                            <label for="updEmail">Courriel</label>
                            <input type="email" placeholder="rigrig@gmail.com" id="udpEmail" name ="updEmail">
                            <hr>
                            <input type="submit" value="Update">
                        </form>


                    </div>
                    

                </div>
            </div>

        </main>
</div>


    
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="../script/profilScript.js"></script>
<script src="../main.js"></script>

</html>