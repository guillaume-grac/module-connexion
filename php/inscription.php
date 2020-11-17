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
                    <input type="text" class="form-control" id="login" placeholder="Votre Login" required> 
                </section>
                <section class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre Nom" required>
                </section>
                <section class="form-group">
                    <label for="login">Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Votre Prénom" required>
                </section>
                <section class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Votre Mot de Passe" required>
                </section>
                <section class="form-group">
                    <label for="password">Confirmez votre Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Confirmez votre Mot de Passe" required>
                </section>
                <button type="submit" class="btn btn-dark">Rejoignez la bataille !</button><br>
                <img title="Aiguisez les haches !" id="axes" src="../images/axe.gif" alt="haches">
            </form>
        </section>
    </main>
    <footer>
        <p>Vikings, Road to Valhalla 1.0.1</p>
        <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer> 
</body>
</html>