<?php

    session_start();

    $bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');

    if (isset($_POST['connexion'])){
        $identifiant = ($_POST['login']);
        $password = ($_POST['password']);
        $error_log = '<section class="alert alert-danger text-center" role="alert"><b>Veuillez réessayer !</b> Login ou mot de passe incorrect.</section>';

        $verification = mysqli_query($bdd, "SELECT login FROM utilisateurs WHERE login = '".$_POST['login']."'");
        $verification1 = mysqli_query($bdd, "SELECT password FROM utilisateurs WHERE password = '".$_POST['password']."'");

        $var = mysqli_fetch_array($verification);
          
            $_SESSION['login'] = $var[1];
            $_SESSION['prenom'] = $var[2];
            $_SESSION['nom'] = $var[3];
            $_SESSION['password'] = $var[4];
                
        if(mysqli_num_rows($verification) && mysqli_num_rows($verification1)){
            $_SESSION['login'] = $identifiant;
            $_SESSION['password'] = $password;
            header('Location: ../index.php');
        }
        else{       
         echo $error_log;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Assassin's Creed Valhalla | Connexion</title>
    <link rel="stylesheet" href="../css/connexion.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav justify-content-center nav-head">
                <li class="nav-item"><a class="nav-link" href="../index.php">| Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="inscription.php">| Rejoindre l'Aventure</a></li>
                <li class="nav-item"><a class="nav-link" href="php/profil.php"><?php if (isset($_SESSION['login'])){ echo '| Mon Profil';}?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container-fluid">
            <form method="post" action="connexion.php">
                <section id="co-text">
                    <p>En route pour la bataille !</p>
                </section>
                <section class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" name="login" placeholder="Votre Login" required> 
                </section>
                <section class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Votre Mot de Passe" required>
                </section>
                <section class="form-end">
                    <button type="submit" name="connexion" class="btn btn-dark">En route !</button><br>
                    <img id="bouclier" src="../images/bouclier.png" title="Levez les boucliers !" alt="Bouclier">
                </section>
            </form>
        </section>
    </main>
    <footer>
        <p>Assassin's Creed Valhalla</p>
    </footer> 
</body>
</html>