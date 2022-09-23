<?php require_once('connexion.php');
session_start();
?>
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

     <!-- enctype="multipart/form-data"  utiliser pour pouvoir telecharger les medias -->
         <form action="" name="addform" id="formulaire" method="post" enctype="multipart/form-data">
              <h2 style="text-align:center ;">Ajouter un nouveau article</h2>
              
            <label for=""> <b>titre :</b></label> <br>
            <input type="text" placeholder="Entrez le titre" name="titre" required class="zonetext"> <br>
            
            <label for=""> <b>description :</b></label> <br>
            <textarea name="description" id="" cols="30" placeholder="Entrez le description"  required  rows="10"></textarea>

            <label for=""><b>Photo :</b></label>
            <input type="file" name="phototext" placeholder="Choisir une photo" id="submit" class="zonetext"> 
            <input type="submit" name="btadd" value="Ajouter" id="submit" class="submit">
            <p class="submit"><a href="acceuil.php">Tableau de bord</a></p>
            <label style="text-align:center ;color:#960406;">
            <?php 
            if(isset($_POST['btadd'])){
                $titre=$_POST['titre'];
                $description=$_POST['description'];
                $image=$_FILES['phototext']['tmp_name'];
                $trajet= "../image/".$_FILES['phototext']['name'];
                $sql="SELECT * FROM staffs";
                $id=$_SESSION['id'];
                //foonctiion pour uploader l'image
                  if(!move_uploaded_file($image,$trajet)){
                    echo "<script>alert('telechargement échouer')</script>";

                  }
                $reqadd="INSERT INTO articles (titre,description,image,poster_id) values ('$titre','$description','$trajet','$id')";
                $resultat= mysqli_query($conn,$reqadd);
                if($resultat){
                    echo "Insertion des donnés validés";
                } else{
                    echo "Echec d'insertion de donnée";
                }

            }
             ?>
             </label>
         </form>
     </div>
</body>
</html>