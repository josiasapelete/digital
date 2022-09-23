<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/image/LOGO.png" type="assets/image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="bootstrap.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Digital LS</title>
</head>

<body>
  <div class="container-fluid">

    <header class="mb-5">
      <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" src="assets/image/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nos services
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="#infographie">Infographie</a></li>
                  <li><a class="dropdown-item" href="#cm"> Community manager</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#web"> Conception de Site Web</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="assets/pages/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="assets/pages/login.php">admin</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
  </div>
  <div class="container-fluid my-5">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/IMG ACCEUIL 23.jpg" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/image/TEMOIN 1 (1).jpg" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/image/TEMOIN 2 (1).jpg" class="d-block w-100 h-80" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <p id="about"></p>

  <!-- About-->
  <div class="text-center my-5 ok">
    <!-- <i class="fa-solid fa-circle-question"></i> -->
    <h1 class="mt-4 text-center  d-inline">
      Qui sommes nous ?
    </h1>
  </div>
  </div>
  <div class="container">
    <div class="row gx-3">
      <div class="col-12   col-md-3">
        <img class="about w-100 h-75 " src="assets/image/about.png" alt="">
      </div>
      <div class="col-12 col-md-8 px-1 px-md-5">
        <p class="p-2">Nous sommes une <span> agence de marketing Digital basé au <b>TOGO</b> , plus précisément à <b>Lomé</b>
          </span>.</p>
        <p class="p-2">
          Nous n’avons qu’un seul objectif : faire de vous le <b>leader</b> . Pour ça nous mettons à votre disposition
          <span>les génies du digital</span> <b>(une équipe de jeunes dynamiques, innovateurs, expérimentés et
            professionnels du domaine digital).</b>
        </p>
        <p class="p-2">
          Nous travaillons avec tout acteurs de tout secteurs d’activités, petits et grands entreprises, artistes,
          influenceurs, etc…
        </p>
        <span>
          Nous travaillons avec vous pour vous.
        </span>
      </div>
    </div>
  </div>



  <div id="work">
    <div class="icon mt-3 text-center">
      <img class="w-25 " src="assets/image/ICON NOS SERVICES.png" alt="">
    </div>
    <h1 class="text-center my-5 ">Nos Services</h1>
    <br>
<br>
<br>
    <h2 id="infographie">Infographie</h2>
    <div class="container-fluid">
      <img class="w-100 " src="assets/image/IMG MKT DIGIT.jpg" alt="infographie">
    </div>
    <p class="p-2 p-md-5 mx-md-5">Faites confiance à la créativité de nos graphistes pour la réalisation de vos
      <b>affiches publicitaire, Logos, flyers, prospectus, carte de visite, carte d’invitation et autres</b>
    </p>
    <h2 id="cm">Community Manager </h2>
    <div class="container-fluid">
      <img class="w-100 " src="assets/image/SLIDES CM 1.jpg" alt="Community manager">
    </div>
    <p class="p-2 p-md-5 mx-md-5">Nous nous occupons de votre visibilité ou celle de vos produits et services sur les
      réseaux sociaux.
      Nous gérons avec professionnalisme à votre place et en totalité vos page <b>Facebook, Instagram…</b>
    </p>
    <h2 id="web">Conception de Site Web</h2>
    <div class="container-fluid"><img class="w-100" src="assets/image/SLIDE SW1.jpg" alt="site web"></div>
    <p class=" p-2 p-md-5 mx-md-5">Nos développeurs et Programmeurs sont à votre disposition pour la conception de vos
      sites web professionnels, site E-commerces, site vitrine, Blog, Boutiques en ligne et autres.</p>
  </div>



  <!-- <div class="container-fluid bg-warning">
      <div class="row">
        <div class="col-4"><img class="w-100 h-100" src="assets/image/LOGO.png" alt="Logo"></div>
        <div class="col-4"><i class="fa-solid fa-circle-phone"></i> 
        </div>
        <div class="col-4"></div>
      </div>
    </div> -->
  <!-- JavaScript Bundle with Popper -->
  <div class="container ">
    <div class="text-center">
      <img class="w-25 " src="assets/image/com.png" alt="">
    </div>
    <h2 class="text-center mb-2 ">Commander un service</h2>

  </div>
  <div class="mt-5 container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/IMG MKT DIGIT.jpg" class="d-block w-100" alt="Marketing digital">
        </div>
        <div class="carousel-item">
          <img src="assets/image/SLIDE SW1.jpg" class="d-block w-100" alt="Création de site ">
        </div>
        <div class="carousel-item">
          <img src="assets/image/SLIDES CM 1.jpg" class="d-block w-100" alt="Création">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!--============= =============== ============= ========== Form ============= ============= =============== ============ =============== ================= ============ =============== ============ ===========-->
  <div>
    <hr>
  </div>
  <div class="container" id="form">

  </div>


  <!-- ============ ================= ================ Footer ================================================================-->

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <p>Digital LS votre</p>
          <h2 class="footer-heading mt-5"><a href="#" class="logo"><img class="w-50 h-25" src="assets/image/logo1.png" alt="Logo"></a></h2>

        </div>
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <div class="row">
            <div class="col-12">
              <h3>Nos Horaires</h3>
            </div>

            <div class="col-6 ">Lundi à Vendredi :</div>
            <div class="col-6">08H00-13H00 / 14H00 - 18H00 </div>
            <div class="col-6">Samedi :</div>
            <div class="col-6">08H00-12H30</div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <h3>Commander un service</h3>
          <form action="https://formsubmit.co/f532c712f0fb01646c2efbf6c3a90b63 " method="POST" class="subscribe-form">
            <div class="form-group ">
              <input type="text" class="form-control my-2 rounded-left" placeholder="Entrez votre Nom ">
              <input type="mail" class="form-control my-2 rounded-left" placeholder="Enter email address">
              <select name="service" class="form-control my-2 rounded-left bg-ligth" id="">
                <option value="infographie">Infographie</option>
                <option value="cm">Communty Manager</option>
                <option value="csw">Conception de site Web</option>
              </select>
              <button type="submit" class="btn btn-warning">Envoyer</button>
            </div>
          </form>

        </div>
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <h3>Nous Contactez</h3>
          <ul id="reseau" class="my-5">
            <li class="list-unstyled"><a target="_blank" href="https://www.facebook.com/digitallscompany/"><i class="fa-brands fa-facebook"></i></a> <span class="ms-2">Digital LS</span> </li>
            <li class="list-unstyled my-2"><a href=""><i class="fa-brands fa-instagram"></i></a><span class="ms-2">Digital LS</span> </li>
            <li class="list-unstyled"><a href="https://wa.me/message/AETC3YQMIMAFL1"><i class="fa-brands fa-square-whatsapp"></i></a><span class="ms-2">Digital LS</span> </li>
          </ul>
        </div>
      </div>
    </div>

    <p class="copyright text-center ">
      Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script> All rights reserved |
    </p>

  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>