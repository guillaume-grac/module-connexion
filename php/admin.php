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
    <title>Assassin's Creed Valhalla | Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
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
                <li class="nav-item"><a class="nav-link" href="profil.php">| Mon Profil</a></li>
                <li class="nav-item"><a class="nav-link"><?php if (isset($_SESSION['login'])){ echo '| Bonjour <i class="fas fa-crow"></i> ' . $_SESSION['login'] . '<li><form method="POST" action="admin.php"><button type="submit" name="logout"  class="btn btn-danger"><i class="fas fa-power-off"></i></button></form></li>';} ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="affichage container-fluid">
            <table>
                <thead>
                    <?php
                        
                        $db = mysqli_connect ('localhost', 'root', '', 'moduleconnexion'); 
                        $affichage = mysqli_query($db, "SELECT * FROM utilisateurs");
                        /* $affichage2 = mysqli_query ($db, 'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME=\'utilisateurs\'');

                        while (( $nom = mysqli_fetch_assoc($affichage2))  != NULL){

                            foreach ( $nom as $key => $value){
                                
                                echo  '<th>'.$value.'</th>';
                            }
                        }    
                        Code en suspens, marchait avant envoie, ne marche plus après envoie */

                        echo ( "<th>Id</th><th>Login</th><th>Prenom</th><th>Nom</th><th>Password</th>");

                        while (( $all_result = mysqli_fetch_assoc($affichage))  != NULL){
                            
                            echo '<tr>'; 

                            foreach ( $all_result as $key => $value){
                                
                                echo  '<td>'.$value.'</td>';
                            }
                        
                            echo '</tr>';
                        }        
                    ?>
                </thead>
            </table>
        </section>
    </main>
    <footer>
        <p><b>Assassin's Creed Valhalla</b></p>
        <a href="admin.php"><i id="gate" class="fas fa-dungeon" title="Le royaume des dieux"></i></a>
    </footer>
</body>
</html>