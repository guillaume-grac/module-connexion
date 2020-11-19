<?php
    session_start();

     if (isset($_POST['logout'])){

        session_destroy();
        header('location: php/connexion.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vikings, road to Valhalla MMORPG | Accueil</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav justify-content-center nav-head">
                <li class="nav-item"><a class="nav-link" href="php/inscription.php"><?php if (!isset($_SESSION['login'])){ echo '| Rejoinde l\'Aventure';}?></a></li>
                <li class="nav-item"><a class="nav-link" href="php/connexion.php"><?php if (!isset($_SESSION['login'])){ echo '| Connexion avec le Valhalla';}?></a></li>
                <li class="nav-item"><a class="nav-link" href="php/profil.php">| Mon Profil</a></li>
                <li class="nav-item"><a class="nav-link"><?php if (isset($_SESSION['login'])){ echo '| Bonjour <i class="fas fa-crow"></i> ' . $_SESSION['login'] . '<li><form method="POST" action="index.php"><button type="submit" name="logout"  class="btn btn-danger"><i class="fas fa-power-off"></i></button></form></li>';} ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="titre" class="container-fluid">
            <h1>Road To Valhalla</h1>
            <section id="acc-text">
                <p>Rejoignez des milliers de joueurs dans un MMORPG gigantesque en monde ouvert ...</p>
                <p>Combattez, pillez, formez des clans, et mettez vous dans la peau d'un vrai viking !</p>
            </section>  
        </section>
        <section>
            <img id="map" src="images/map.jpg" alt="map">
        </section>
    </main>
    <footer>
        <p>Vikings, Road to Valhalla 1.0.1</p>
        <a href="php/admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer>
</body>
</html>