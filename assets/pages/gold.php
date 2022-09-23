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

 <?php
  $reqselect = "select * from staffs" ;

  $resultat = mysqli_query($conn, $reqselect);

  $nbr = mysqli_num_rows($resultat);
  echo "<p> Total <b>" . $nbr . "</b> vetements...</p>";

  ?>
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
       <form action="" method="post" id="formulaire" enctype="multipart/form-data" >
            <h1>Inscription</h1> 
            <label for=""> <b>Nom</b> </label> 
            <input type="text" name="nom" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> 
            <label for=""> <b>Prenom</b> </label> 
            <input type="text" name="prenom" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> 
            <label for=""> <b>email</b> </label>
            <input type="email" name="email" placeholder="Entrez le nom d'utilisateur" required class="zonetext"> 
            <label for=""> <b>Mot de Passe</b></label> 
            <input type="password" placeholder="Entrez le mot de passe" name="userpass" required class="zonetext"> 
            <label for=""> <b>Confirmer votre Mot de Passe</b></label> 
            <input type="password" placeholder="Confirmer le mot de passe" name="confirmpass" required class="zonetext"> 
            <input type="file" name="photo" value="Choisir une photo" id="submit" class="zonetext"> 
            <input type="submit" name="signIn" value="Login" id="submit" class="submit"> 
        </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>
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
 <!-- <p><a class="add" href="ajouter.php"><img src="../image/add.png" alt=""></a></p> -->

      <div class="row">
 <?php
  while ($ligne = mysqli_fetch_assoc($resultat)) {
  ?>
  <div class="col-12 shadow m-2">

  <b>titre:
     <?php echo $ligne['Nom']; ?>
     <?php echo $ligne['prenom']; ?>
  </b>
   <p class="text-wrap"><b>contenu</b>:
     <?php echo $ligne['email']; ?>
    </p>
    <p class="text-break">

        <?php echo $ligne['password']; ?>
    </p>
    <div class="d-flex justify-content-center">
    <p>
     <img src="../<?php echo $ligne['image']; ?>" class="vetphoto">
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