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
<?php
//variable qui contient l'id de l'article choisi
    $modifier= $_GET['mod'];
//selectionnner l'article pour que les inputs soit préremplis avant la modification
 $sql="SELECT * FROM articles WHERE id ='$modifier'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
if(isset($_POST['btmod'])){
    $titre=$_POST['titre'];
    $description=$_POST['description'];


    $image=$_FILES['phototext']['tmp_name'];
    
    

     var_dump($row);
    $trajet= "../image/".$_FILES['phototext']['name'];
    move_uploaded_file($image,$trajet);
    $requp= "UPDATE articles SET titre='$titre', description='$description',image='$trajet' WHERE id='$modifier'";

    $resultat= mysqli_query($conn,$requp);
    if($resultat){
        echo "Mise à jour éffectuée avec Succès...";
    } else {
        echo "Echec de modification des données...";

    }
}

?>
    <div class="container">
        <form method="post" class="d-flex flex-column" enctype="multipart/form-data">
            <h2 style="text-align: center;">Mettre à jour un article</h2>
            <label for=""> <b>titre :</b></label> <br>
            <input type="text" placeholder="Entrez le titre" value="<?= $row['titre']; ?>" name="titre" required class="zonetext"> <br>
            <label for=""> <b>description :</b></label> <br>
            <textarea name="description" id=""  placeholder="Entrez le description"  required  ><?= $row['description']; ?></textarea> <br>
            <label for=""> <b>Photo</b></label> <br>
            <input type="file" placeholder="Choissez une image" name="phototext" required class="zonetext"> <br>

            <input type="submit" class="submit" name="btmod" value="Mettre à jour">

            <p class="submit"><a href="acceuil.php">Tableau de bord</a></p>
            <label style="text-align:center ;color:#960406;">

               
        </form>
    </div>    

</body>
</html>