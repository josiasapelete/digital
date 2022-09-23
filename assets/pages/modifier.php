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
    <div id="container">
        <form method="post" id="formulaire" enctype="multipart/form-data">
            <h2 style="text-align: center;">Mettre à jour un vetement</h2>
            <label for=""> <b>Titre</b></label> <br>
            <input type="text" placeholder="Entrez la marque" name="titre" required class="zonetext"> <br>
        
            <label for=""> <b>Prix</b></label> <br>
            <input type="number" placeholder="Entrez le prix unitaire" name="prixtext" required class="zonetext"> <br>

            <label for=""> <b>Photo</b></label> <br>
            <input type="file" placeholder="Choissez une image" name="phototext" required class="zonetext"> <br>

            <input type="submit" class="submit" name="btmod" value="Mettre à jour">

            <p class="submit"><a href="acceuil.php">Tableau de bord</a></p>
            
            <label style="text-align:center ;color:#960406;">

                <?php

                        if(isset($_POST['btmod'])){
                            $titre= $_POST['titre'];
                            $prix= $_POST['prixtext'];

                            $modifier= $_GET['mod'];

                            $image=$_FILES['phototext']['tmp_name'];

                            $trajet= "image/".$_FILES['phototext']['name'];
                            move_uploaded_file($image,$trajet);
                            $requp= "UPDATE articles SET titre='$titre', prix='$prix',photo='$trajet' WHERE id='$modifier'";

                            $resultat= mysqli_query($conn,$requp);
                            if($resultat){
                                echo "Mise à jour éffectuée avec Succès...";
                            } else {
                                echo "Echec de modification des données...";

                            }
                        }

                ?>
        </form>
    </div>    

</body>
</html>