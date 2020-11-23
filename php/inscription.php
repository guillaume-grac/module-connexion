<?php
    $db = mysqli_connect ('localhost', 'root', '', 'moduleconnexion'); 

    $nbr_ligne = mysqli_num_rows(mysqli_query($db,"SELECT * FROM utilisateurs"));

    if($nbr_ligne == 0){
        mysqli_query($db,"ALTER TABLE utilisateurs AUTO_INCREMENT = 1");
    }
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Assassin's Creed Valhalla | Inscription</title>
        <link rel="stylesheet" href="../css/inscription.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav justify-content-center nav-head">
                    <li class="nav-item"><a class="nav-link" href="../index.php">| Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="connexion.php">| Connexion avec le Valhalla</a></li>
                    <li class="nav-item"><a class="nav-link" href="php/profil.php"><?php if (isset($_SESSION['login'])){ echo '| Mon Profil';}?></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="container-fluid">
                <form method="post" action="inscription.php"> 
                    <section id="ins-text">
                    <p>Devenez un vrai Viking ici. (Inscription)</p>
                    </section>
                    <section class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" placeholder="Votre Login" required> 
                    </section>
                    <section class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Votre Nom" required>
                    </section>
                    <section class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" required>
                    </section>
                    <section class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Votre Mot de Passe" required>
                    </section>
                    <section class="form-group">
                        <label for="confirm-password">Confirmez votre Mot de Passe</label>
                        <input type="password" class="form-control" name="confirm-password" placeholder="Confirmez votre Mot de Passe" required>
                    </section>
                    <button type="submit" name="register" class="btn btn-dark">Rejoignez la bataille !</button><br>
                    <img title="Aiguisez les haches !" id="axes" src="../images/axe.gif" alt="haches">
                </form>

                <?php

                    if (isset($_POST['register'])) {

                        $login=$_POST['login'];
                        $prenom=$_POST['prenom'];
                        $nom=$_POST['nom'];
                        $password=$_POST['password'];
                        $confirm_password=$_POST['confirm-password'];
                        $error_log = '<section class=" alert-css text-center alert alert-warning alert-dismissible fade show">
                        <strong>Mauvais mot de passe !</strong> Les mots de passe ne sont pas identiques.</section>';
                    
                        if($password === $confirm_password){

                            $requete = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login','$prenom','$nom','$password')";
                            $verification = mysqli_query($db, "SELECT login FROM utilisateurs WHERE login = '".$_POST['login']."'");

                            if(mysqli_num_rows($verification)) {
                                echo("Login \"". $_POST['login'] . "\" est déjà utilisé, veuillez en choisir un autre :-)");
                            }

                            mysqli_query($db,$requete);

                            header('Location: connexion.php');
                            exit();
                        }
                        else{
                            echo($error_log);
                        }
                    }   
                ?>
            </section>
        </main>
        <footer>
            <p><b>Assassin's Creed Valhalla</b></p>
        </footer> 
    </body>
</html>