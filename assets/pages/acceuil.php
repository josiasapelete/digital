<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Digital LS</title>
</head>

<body>
    <div class="container">
        <div id="row">
            <div class="col-12 col-md-3">
                <?php

                //debut de session (personne connecter)
                session_start();
               
                echo "  Bonjour et Bienvenu(e) <strong>" . $_SESSION['monLogin'] . "</strong><br>";
                $req = "select * from staffs where id ='" . $_SESSION['id'] . "'";
                $resultat = mysqli_query($conn, $req);
                $ligne = mysqli_fetch_assoc($resultat);
                // var_dump($ligne);
                ?>
                <b>Bonjour et bienvenue <?php echo $ligne['Nom'] ?> </b>

                <button><a href="editprofil.php?id= n <?= $ligne['id']; ?>">Modifier le profil</a></button>



                <a href="deconnexion.php">Déconnexion</a>
            </div>
        </div>
        <div id="col-12 col-md-9">
            <?php include('tableaubord.php') ?>
        </div>
    </div>
</body>

</html>