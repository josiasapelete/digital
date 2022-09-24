 <?php require_once('connexion.php');

  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css">
   <title>Document</title>
 </head>

 <body>

   <p>
   <h1><b>Liste des articles</b></h1>

   </p>

   <p><a class="add" href="ajouter.php"><img src="../image/add.png" alt=""></a></p>
   
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
       <a class="add" href="supprimer.php?del=<?php echo $ligne['id']; ?>"><i class="fa-solid fa-trash"></i></a>
     </p>
     <p> 
       <a class="add" href="modifier.php?mod=<?php echo $ligne['id']; ?>"><i class="fa-solid fa-file-pen"></i></a>
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