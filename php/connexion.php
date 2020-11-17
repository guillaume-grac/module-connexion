<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vikings, road to Valhalla MMORPG | Connexion</title>
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
                <li class="nav-item"><a class="nav-link" href="profil.php">| Mon Profil</a></li>
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
                    <input type="text" class="form-control" id="login" placeholder="Votre Login" required> 
                </section>
                <section class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Votre Mot de Passe" required>
                </section>
                <section class="form-end">
                    <button type="submit" class="btn btn-dark">En route !</button><br>
                    <img id="bouclier" src="../images/bouclier.png" title="Levez les boucliers !" alt="Bouclier">
                </section>
            </form>
        </section>
    </main>
    <footer>
        <p>Vikings, Road to Valhalla 1.0.1</p>
        <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer> 
</body>
</html>