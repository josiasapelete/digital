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
        <form name="formdel" id="formulaire">
        <p class="submit"><a href="acceuil.php">Tableau de bord</a></p>

<?php
    if(isset($_GET['del'])){
        $sup= $_GET['del'];
        $reqdel= "DELETE FROM vetement WHERE id=$sup";
        $resultat= mysqli_query($conn,$reqdel);
    }
    if($resultat){
        echo "<label style='text-align:center ;color:#960406;'>
        La suppression a été correctement effectuée......</label>";
    } else{
        echo "<label style='text-align:center ;color:#960406;'>
        La suppression a échoué......</label>";
    }
?>
    </form>
    </div>
</body>
</html>