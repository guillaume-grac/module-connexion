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
    <title>Assassin's creed Valhalla | Accueil</title>
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
            <h1>Assassin's Creed Valhalla</h1>
            <section id="acc-text">
                <p>Assassin's Creed Valhalla est un RPG en monde ouvert se déroulant pendant l'âge des vikings.<br>
                 Vous incarnez Eivor, un viking du sexe de votre choix qui a quitté la Norvège pour trouver la fortune et la gloire en Angleterre.<br> 
                 Raids, construction et croissance de votre colonie, mais aussi personnalisation du héros ou de l'héroïne sont au programme de cet épisode.</p>
            </section>  
        </section>
        <section>
            <img id="map" src="images/map.gif" alt="map">
        </section>
    </main>
    <footer>
        <p>Assassin's Creed Valhalla</p>
        <a href="php/admin.php"><?php if (isset($_SESSION['login'])){ if($_SESSION['login']==='admin') { echo '<i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i>';}}?></a>
    </footer>
</body>
</html>