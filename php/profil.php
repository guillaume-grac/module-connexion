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
                <li class="nav-item"><a class="nav-link" href="inscription.php">| Rejoindre l'Aventure</a></li>
                <li class="nav-item"><a class="nav-link" href="connexion.php">| Connexion avec le Valhalla</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container-fluid">
            <form method="post" action="profil.php"> 
                <section id="pro-text">
                    <p>Modifier vos informations.</p>
                </section>
                <section class="form-group">
                    <label for="login">Modifier votre Login</label>
                    <input type="text" class="form-control" id="login" placeholder="Votre nouveau Login" required> 
                </section>
                <section class="form-group">
                    <label for="nom">Modifier votre Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre nouveau Nom" required>
                </section>
                <section class="form-group">
                    <label for="login">Modifier votre Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Votre nouveau Prénom" required>
                </section>
                <section class="form-group">
                    <label for="password">Modifier votre Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Votre nouveau Mot de Passe" required>
                </section>
                <section class="form-group">
                    <label for="password">Confirmez votre nouveau Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Votre nouveau Mot de Passe" required>
                </section>
                <section class="form-end">
                    <button type="submit" class="btn btn-dark">Enregistrer</button><br>
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