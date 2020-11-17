<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Vikings, road to Valhalla MMORPG | Inscription</title>
        <link rel="stylesheet" href="../css/inscription.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav justify-content-center nav-head">
                    <li class="nav-item"><a class="nav-link" href="index.php">| Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="connexion.php">| Connexion avec le Valhalla</a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.php">| Mon Profil</a></li>
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

                    //On récupère les valeurs entrées par l'utilisateur :
                    $login=$_POST['login'];
                    $prenom=$_POST['prenom'];
                    $nom=$_POST['nom'];
                    $password=$_POST['password'];
                    $confirm_password=$_POST['confirm-password'];

                    //On se connecte
                    $db = mysqli_connect ('localhost', 'root', '', 'moduleconnexion'); 
                    
                    //On prépare la commande sql d'insertion
                    $sql = "INSERT INTO utilisateurs (id, login, prenom, nom, password) VALUES (NULL,'$login','$prenom','$nom','$password')";
                    mysqli_query($db, $sql);
                    }
                ?>

            </section>
        </main>
        <footer>
            <p>Vikings, Road to Valhalla 1.0.1</p>
            <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
        </footer> 
    </body>
</html>