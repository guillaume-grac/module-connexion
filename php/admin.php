<?php
    session_start();

     if (isset($_POST['logout'])){

        session_destroy();
        header('location: connexion.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vikings, road to Valhalla MMORPG | Accueil</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav justify-content-center nav-head">
                <li class="nav-item"><a class="nav-link" href="../index.php">| Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="inscription.php">| Rejoinde l'Aventure</a></li>
                <li class="nav-item"><a class="nav-link" href="connexion.php">| Connexion avec le Valhalla</a></li>
                <li class="nav-item"><a class="nav-link" href="profil.php">| Mon Profil</a></li>
                <li class="nav-item"><a class="nav-link"><?php if (isset($_SESSION['login'])){ echo '| Bonjour <i class="fas fa-crow"></i> ' . $_SESSION['login'] . '<li><form method="POST" action="admin.php"><button type="submit" name="logout"  class="btn btn-danger"><i class="fas fa-power-off"></i></button></form></li>';} ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        test
    </main>
    <footer>
        <p>Vikings, Road to Valhalla 1.0.1</p>
        <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer>
</body>
</html>