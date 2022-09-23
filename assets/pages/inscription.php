<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="connexion">
        <?php
            //  echo "<font color='#F0001D'>Login ou password incorrect</font>";
        ?>
        <form action="" method="post" id="formulaire" enctype="multipart/form-data" >
            <h1>Inscription</h1> <br>
            <label for=""> <b>Nom</b> </label> <br>
            <input type="text" name="nom" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> <br>
            <label for=""> <b>Prenom</b> </label> <br>
            <input type="text" name="prenom" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> <br>
            <label for=""> <b>email</b> </label> <br>
            <input type="email" name="email" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> <br>
            <label for=""> <b>Mot de Passe</b></label> <br>
            <input type="password" placeholder="Entrez le mot de passe" name="userpass" required class="zonetext"> <br>
            <label for=""> <b>Confirmer votre Mot de Passe</b></label> <br>
            <input type="password" placeholder="Confirmer le mot de passe" name="confirmpass" required class="zonetext"> <br>
            <input type="file" name="photo" value="Choisir une photo" id="submit" class="zonetext"> 
            <input type="submit" name="signIn" value="Login" id="submit" class="submit"> 
        </form>
        <?php
   
        if(isset($_POST['signIn'])){
            if($_POST['userpass']==$_POST['confirmpass']){
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $email=$_POST['email'];
                $password=password_hash($_POST['userpass'],PASSWORD_DEFAULT);
                $image=$_FILES['photo']['tmp_name'];
                $trajet="image/".$_FILES['photo']['name'];

                move_uploaded_file($image,$trajet);
                $reqadd="INSERT INTO staffs (Nom,prenom,email,password,photo) values ('$nom','$prenom','$email','$password','$trajet')";
                $resultat= mysqli_query($conn,$reqadd);
                if($resultat){
                    echo "Insertion des donnés validés";
                } else{
                    echo "Echec d'insertion de donnée";
                }
            }
        }else{
            echo "Le mot de passe n'est pas confirmé";
        }
        ?>
    </div>  
</body>
</html>