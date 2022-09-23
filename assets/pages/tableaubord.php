 <?php require_once('connexion.php');

  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css">
   <title>Document</title>
 </head>

 <body>

   <p>
   <h1><b>Liste des articles</b></h1>

   </p>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Ajouter
   </button>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog ">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Publier un nouvel article</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body ">
           <div id="container">
             <form action="" name="addform" id="formulaire" method="post" enctype="multipart/form-data">

               <label for=""> <b>titre :</b></label>
               <input type="text" placeholder="Entrez le titre" name="titre" required class="zonetext">

               <label for=""> <b>description :</b></label>
               <textarea name="description" id="" cols="30" placeholder="Entrez le description"  required  rows="10"></textarea>
               <!-- <input type="text" placeholder="Entrez le description" name="description"class="zonetext"> -->
               <label for=""><b>Photo :</b></label>
               <input type="file" name="phototext" placeholder="Choisir une photo" id="submit" class="zonetext">
               <input type="submit" name="btadd" value="Ajouter" id="submit" class="submit">
               <p class="submit"><a href="acceuil.php">Tableau de bord</a></p>
               <label style="text-align:center ;color:#960406;">
                 <?php
                  if (isset($_POST['btadd'])) {
                    $titre = $_POST['titre'];
                    $description = $_POST['description'];
                    $image=$_FILES['phototext']['tmp_name'];
                    $trajet="../image/".$_FILES['phototext']['name'];
                   
                    $id = $_SESSION['id'];
                   move_uploaded_file($image,$trajet);
                    $reqadd = "INSERT INTO articles (titre,description,image,poster_id) values ('$titre','$description','$trajet','$id')";
                    $resultat = mysqli_query($conn, $reqadd);
                    if ($resultat) {
                      echo "Insertion des donnés validés";
                      var_dump($_FILES);
                    } else {
                      echo "<script>alert('Echec d'insertion de donnée')</script>";
                    }
                  }
                  ?>
               </label>
             </form>
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
         </div>
       </div>
     </div>
   </div>
   <p><a class="add" href="ajouter.php"><img src="../image/add.png" alt=""></a></p>
   <!-- <table>
        <tr>
          
            <th>titre</th>
            <th>description</th>
            <th>photo</th>
            <th>supprimer</th>
            <th>modifier</th>
        </tr> -->
        <div class="row">
   <?php
   
   $reqselect = "SELECT * FROM articles WHERE poster_id ='" . $_SESSION['id'] . "'";

   $resultat = mysqli_query($conn, $reqselect);

   $nbr = mysqli_num_rows($resultat);

  
    while ($ligne = mysqli_fetch_assoc($resultat)) {
    ?>
    <div class="col-12 shadow m-2">
    <b>titre:
       <?php echo $ligne['titre']; ?>
    </b>
     <p><b>contenu</b>:
       <?php echo $ligne['description']; ?>
     </p>
      <div class="d-flex justify-content-center">
      <p>
       <img src="<?php echo $ligne['image']; ?>" class="vetphoto">
     </p>
     <p>
       <a class="add" href="supprimer.php?del=<?php echo $ligne['id']; ?>"><img src="../image/del.png" alt=""></a>
     </p>
     <p> 
       <a class="add" href="modifier.php?mod=<?php echo $ligne['id']; ?>"><img src="../image/edit.png" alt=""></a>
     </p>
      </div>
    </div>

     <!-- <tr>
             </tr> -->
   <?php } ?>
   </div>
   <!-- </table> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 </body>

 </html>