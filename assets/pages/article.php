<?php
require_once('connexion.php');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location:index.php');
} else {
    // code pour Sélectionner l'article qui est cliqué
    $id = $_GET['id'];
    $req = "SELECT * FROM articles WHERE id=$id";
    $resultat = mysqli_query($conn, $req);
    $ligne = mysqli_fetch_assoc($resultat);
    extract($_GET);
    $id = strip_tags($id);

    if (!empty($_POST)) { 

        extract($_POST);
        // code pour sécuriser l'entrer
        $auteur = strip_tags($auteur);
        $comment = strip_tags($comment);

        // code pour afficher les erreurs
        $errors = array();
        if (empty($auteur)) {
            array_push($errors, "Vous devez entrez votre Pseudo");
        }
        if (empty($comment)) {
            array_push($errors, "Vous devez entrez votre commentaire");
        }
        if (count($errors) == 0) {
            $req = "INSERT INTO commentaires (articleId,autor,comment,date) VALUES ('$id','$auteur','$comment',NOW())";
            $resultat = mysqli_query($conn, $req);
            if ($resultat) {
                $succes = 'Votre commentaire a été publié';

                echo $succes;
            }
            unset($auteur);
            unset($comment);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?= $ligne['titre']; ?></title>
</head>

<body>
    <div class="container">
        <a class="btn btn-secondary" href="blog.php">Retour aux articles</a>
        <!-- Partie dynamique qui génère les infos du post -->
        <div class="row">
            <div class="offset-md-3 col-12 col-md-6"><img class="w-100 " src="<?= $ligne['image']; ?>" alt="Image du post"></div>
            <div class="offset-md-3 col-md-6 my-3 ">
                <!-- <div class=" d-flex">
                    <div id="profil" class="profil mx-3">
                        <img src="<?= $ligne['photoAd']; ?> " alt="Photo de l'admin">
                    </div>
                    <div class="info">
                        <b><?= $ligne['admin']; ?> </b>
                        <p><?= $ligne['date']; ?> </p>
                    </div>
                </div> -->
                <div class="text-justify my-md-4">
                    <b><?=$ligne['poster_id'];?></b>
                    <h2><?= $ligne['titre']; ?></h2>
            <p><?= $ligne['description']; ?> </p>

                    <!-- <div class="likebar">
                        <?php
                        // code pour afficher le nombre de commentaire
                        $req = "SELECT * FROM commentaires WHERE articleId=$id";
                        $result = mysqli_query($conn, $req);
                        $nbr = mysqli_num_rows($result);

                        ?>
                        <h4><?= $nbr . " commentaires" ?></h4>
                    </div> -->
                </div>
            </div>

        </div>
        <div class="container
        mt-3">
            <p><?= $ligne['description']; ?> </p>
            <h3></h3>
        </div>
    </div>
    <div class="container">


        <?php

        if (isset($succes)) {
            echo $succes;
        }
        if (!empty($errors)) : ?>
            <?php foreach ($errors as $error) : ?>

                <div class="row">
                    <div class="col-md-6">
                        <p class="alert alert-danger"><?= $error; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-6">
                <!-- Partie pour commentaire  -->
                <form action="article.php?id=<?= $ligne['id']; ?>" method="post">
                    <p>
                        <label for="auteur">Pseudo</label> <br>
                        <input class="form-control" type="text" name="auteur" value="<?php if (isset($auteur)) echo $auteur; ?>" id="auteur">
                    </p>
                    <p><label for="comment">commentaire:</label><br>
                        <textarea name="comment" id="comment" cols="30" rows="8" class="form-control"><?php if (isset($comment)) echo $comment; ?></textarea>
                    </p>
                    <button class="btn btn-success" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
        <h2>Commentaires :</h2>
        <!-- Code pour afficher les commentaires -->
        <?php
        $req = "SELECT * FROM commentaires WHERE articleId=$id ORDER BY id DESC";
        $resultat = mysqli_query($conn, $req);
        while ($ligne = mysqli_fetch_assoc($resultat)) {

        ?>
            <p>
                <b><?= $ligne['autor']; ?> </b>
                <time><?= $ligne['date']; ?> </time>
            </p>
            <p><?= $ligne['comment']; ?> </p>

        <?php }; ?>
    </div>
</body>

</html>