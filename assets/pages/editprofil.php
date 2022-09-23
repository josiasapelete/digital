<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body{
            scroll-behavior: auto;
            overflow: scroll;
        }
    </style>
</head>
<body>
    <div id="container">
        <form method="post" id="formulaire" enctype="multipart/form-data">
            <h2 style="text-align: center;">Modifier votre profil</h2>
            <label for=""> <b>Login</b></label> <br>
            <input type="text" placeholder="Entrez votre login" name="login" required class="zonetext"> <br>
        
            <label for=""> <b>Mot de passe</b></label> <br>
            <input type="password" placeholder="Mot de passe" name="pass" required class="zonetext"> <br>
            <label for=""> <b>Confirmer le mot de passe</b></label> <br>
            <input type="password" placeholder="Confirmer le mot de passe" name="passconfirm" required class="zonetext"> <br>
            <label for=""> <b>Ajouter une image</b></label> <br>
            <input type="file" placeholder="Choissez une image" name="photo"  class="zonetext"> <br>

            <input type="submit" class="submit" name="bteditprofil" value="Modifier">

            
            <label style="text-align:center ;color:#960406;">

                <?php

                        if(isset($_GET['id'])){
                            $modifier= $_GET['id'];

                            $login= $_POST['login'];
                            $pass= $_POST['pass'];
                            $passconfirm= $_POST['passconfirm'];
                            if($pass==$passconfirm){

                            $image=$_FILES['photo']['tmp_name'];

                            $trajet= "image/".$_FILES['photo']['name'];
                            move_uploaded_file($image,$trajet);
                            $requp= "UPDATE users SET login='$login', password='$pass', myPhoto='$trajet' WHERE id=$modifier ";

                            $resultat= mysqli_query($conn,$requp);
                            if($resultat){
                                echo "Mise à jour éffectuée avec Succès...";
                            } else {
                                echo "Echec de modification des données...";

                            }
                        } else{
                            echo "Mot de passe non conforme";
                        }
                    }
                ?>
        </form>
    </div>    

</body>
</html>