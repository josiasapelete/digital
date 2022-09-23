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
    <div id="connexin">
        <form action="" class="form m-3" id="forulaire" method="post">
            <h1 class="text-center">connexion</h1> <br>
            <label for=""> <b>Nom d'utilisateur</b> </label> <br>
            <input type="email" name="email" placeholder="Entrez le nom d'utilisateur " required class="zonetext"> <br>

            <label for=""> <b>Mot de Passe</b></label> <br>
            <input type="password" placeholder="Entrez le mot de passe" name="userpass" required class="zonetext"> <br>
            <input type="submit" name="btlogin" value="Login" id="submit" class="submit"> 
            <p class="submit"><a href="../../index.php">acceuil</a></p>

        
            <?php
            if(isset($_POST['btlogin'])){
                $req= "select * from staffs where email='".$_POST['email']."'
                 and password='".$_POST['userpass']."'";
                if($resultat= mysqli_query($conn,$req)){
                 $ligne= mysqli_fetch_assoc($resultat);
                 if($ligne!=0){
                  
                     session_start();
                     $_SESSION['monLogin']=$ligne['nom'];
                     $_SESSION['email']=$ligne['email'];
                     $_SESSION['id']=$ligne['id'];
                     header("location:acceuil.php");
                 } else{
                    //  echo "<font color='#F0001D'>Login ou password incorrect</font>";
                     echo "<script>alert('Login ou password incorrect')</script>";
                 }
            }
            
        }
            ?>
        
        
        </form>
    </div>

</body>
</html>