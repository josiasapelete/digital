<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div id="connexin">
        <form action="" class="form m-3" id="forulaire" method="post">
            <h1 class="text-center">connexion</h1> <br>
            <!-- <label for=""> <b>Nom d'utilisateur</b> </label> <br>
            <input type="email" name="email" placeholder="Entrez le nom d'utilisateur " required class="zonetext"> <br>

            <label for=""> <b>Mot de Passe</b></label> <br>
            <input type="password" placeholder="Entrez le mot de passe" name="userpass" required class="zonetext"> <br>
            <input type="submit" name="btlogin" value="Login" id="submit" class="submit">
            <p class="submit"><a href="../../index.php">acceuil</a></p> -->
            <div class="container">
                <div class="container">

                    <div class="col">
                        <input type="email" name="email" placeholder="Entrez le nom d'utilisateur " class="form-control" aria-label="email">
                    </div> <br>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Entrez le mot de passe" name="userpass" aria-label="password">
                    </div>
                    <input type="submit" name="btlogin" value="Login"  class="submit">
                    <p class="submit"><a href="../../index.php">acceuil</a></p>
                </div>

            </div>

            <?php
            if (isset($_POST['btlogin'])) {
                $req = "select * from staffs where email='" . $_POST['email'] . "'
                 and password='" . $_POST['userpass'] . "'";
                if ($resultat = mysqli_query($conn, $req)) {
                    $ligne = mysqli_fetch_assoc($resultat);
                    if ($ligne != 0) {

                        session_start();
                        $_SESSION['monLogin'] = $ligne['nom'];
                        $_SESSION['email'] = $ligne['email'];
                        $_SESSION['id'] = $ligne['id'];
                        header("location:acceuil.php");
                    } else {
                        //  echo "<font color='#F0001D'>Login ou password incorrect</font>";
                        echo "<script>alert('Login ou password incorrect')</script>";
                    }
                }
            }
            ?>


        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>