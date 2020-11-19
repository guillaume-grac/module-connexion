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
    <title>Vikings, road to Valhalla MMORPG | Profil</title>
    <link rel="stylesheet" href="../css/profil.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav justify-content-center nav-head">
                <li class="nav-item"><a class="nav-link" href="../index.php">| Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="php/inscription.php"><?php if (!isset($_SESSION['login'])){ echo '| Rejoinde l\'Aventure';}?></a></li>
                <li class="nav-item"><a class="nav-link" href="php/connexion.php"><?php if (!isset($_SESSION['login'])){ echo '| Connexion avec le Valhalla';}?></a></li>
                <li class="nav-item"><a class="nav-link"><?php if (isset($_SESSION['login'])){ echo '| Bonjour <i class="fas fa-crow"></i> ' . $_SESSION['login'] . '<li><form method="POST" action="profil.php"><button type="submit" name="logout"  class="btn btn-danger"><i class="fas fa-power-off"></i></button></form></li>';} ?></a></li>
            </ul>
            </ul>
        </nav>
    </header>
    <main>
        <?php 
            if (isset($_SESSION['login'])){ 
                echo '
                <section class="container-fluid">
                    <form class="formulaire" method="post" action="profil.php"> 
                        <section id="pro-text">
                            <p>Modifier vos informations.</p>
                        </section>
                        <section class="form-group">
                            <label for="Nlogin">Modifier votre Login</label>
                            <input type="text" class="form-control" id="Nlogin" placeholder="Votre nouveau Login" value="'.$_SESSION['login'].'" required> 
                        </section>
                        <section class="form-group">
                            <label for="Nprenom">Modifier votre Nom</label>
                            <input type="text" class="form-control" id="Nprenom" placeholder="Votre nouveau Nom" value="'.$_SESSION['prenom'].'" required>
                        </section>
                        <section class="form-group">
                            <label for="Nnom">Modifier votre Prénom</label>
                            <input type="text" class="form-control" id="Nnom" placeholder="Votre nouveau Prénom" value="'.$_SESSION['nom'].'" required>
                        </section>
                        <section class="form-group">
                            <label for="Npassword">Modifier votre Mot de Passe</label>
                            <input type="password" class="form-control" id="Npassword" placeholder="Votre nouveau Mot de Passe" value="'.$_SESSION['password'].'" required>
                        </section>
                        <section class="form-group">
                            <label for="NCpassword">Confirmez votre nouveau Mot de Passe</label>
                            <input type="password" class="form-control" id="NCpassword" placeholder="Votre nouveau Mot de Passe" value="'.$_SESSION['password'].'" required>
                        </section>
                        <section class="form-end">
                            <button type="submit" name="update" class="btn btn-dark">Enregistrer</button><br>
                        </section>
                    </form>
                </section>';
            }
            else 
                echo '<section class="alert alert-danger text-center" role="alert">Vous devez être connecté pour voir votre Profil : <a href="connexion.php" class="alert-link">Se connecter</a>.</section>';
        ?>       
    </main>
    <footer>
        <p>Vikings, Road to Valhalla 1.0.1</p>
        <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer> 
</body>
</html>