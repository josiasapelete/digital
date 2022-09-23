<?php require_once('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="image/lg.jpg" type="image/x-webp">

    <!-- Link de la police d'écriture poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Digital</title>
</head>

<body>


    <div class="container">
        <?php
        include('header.php');
        ?>
        <!-- la barre de recherche -->
        <br><br><br>



        <div class="row">
            <div class="col-12 col-md-6 ">
                <p>Nos articles</p>
            </div>
            <div class="col-12 col-md-6">
                <form class="d-flex" method="post" role="search">
                    <input class="  form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>

                </form>
            </div>

        </div>
        <?php


        if (isset($_POST['searchBtn'])) {
            $search = $_POST['search'];
            $reqSelect = "select * from articles where titre like '%$search%' ";
        } else {
            $reqSelect = "select * from articles ORDER BY id DESC";
        }
        $resultat = mysqli_query($conn, $reqSelect);
        $nbr = mysqli_num_rows($resultat);
        echo "<br> <p><b>" . $nbr . "</b> Resultats de votre recherche...</p>"; ?>
        <div class="container">

            <div class="row d-flex justify-content-center">

                <?php
                while ($ligne = mysqli_fetch_assoc($resultat)) {
                ?>
                    <!-- partie dynamique qui genere  les articles -->

                    <div class="col-12 m-2 col-md-3  col-xxl-2 shadow rounded">

                        <img src="<?= $ligne['image']; ?>" class="w-100 h-50 mb-2" alt="...">
                        
                        <div class="my-3  ">
                            <h5 class="card-title overflow-hidden"><?= $ligne['titre']; ?></h5>
                            <p class="card-text"><small class="text-muted">Last updated <?= $ligne['date']; ?></small></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <p class="text-center">
                            <!-- methode get pour ouvrir l'article dont l'id est selectionner -->
                                <a class="btn btn-primary" href="article.php?id=<?= $ligne['id']; ?>">Lire</a>
                            </p>
                        </div>

                    </div>
                <?php } ?>

            </div>

        </div>

        <!-- le footer inclue  -->

        


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>