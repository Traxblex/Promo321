<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS SLAM 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
      .carousel-img {
        height: 300px;
        object-fit: cover;
      }
      @media (max-width: 576px) {
        .carousel-img { height: 180px; }
      }
    </style>
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PROMO 321</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="matiere/info.php">INFO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="matiere/math.php">MATH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="matiere/anglais.php">ANGLAIS</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="matiere/francais.php">FRANCAIS</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="matiere/cejm.php">CEJM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
 <main class="container mt-4">
   <div class="container text-center" style="border-radius: .5rem; margin-bottom: 4rem;">
      <h1>Bienvenue sur la place des services PROMO 321</h1>
      <p>Découvrez ici l'ensemble des cours de BTS SIO SLAM de la Promo 321 du CFA INSTA. Si vous etes perdu dans vos révisions, vous êtes au bon endroit.</p>
      <p>Utilisez la barre de navigation pour accéder aux différentes matières.</p>
  </div>
    <section>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/image1carrousel.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 1">
          </div>
          <div class="carousel-item">
            <img src="img/image2carrousel.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 2">
          </div>
          <div class="carousel-item">
            <img src="img/image3carrousel.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 3">
          </div>
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


    <hr class="my-5">

    <section>
      <div class="container text-center" style="background: rgba(13, 51, 224, 0.85); padding: 2rem; border-radius: .5rem; margin-bottom: 4rem;">
        <h2 class="display-5">ELEVES PROMO 321</h2>
        <p class="lead">Retrouver la liste des élèves de la promo en cliquant sur le bouton</p>
        <a href="eleve.php" class="btn btn-primary btn-lg">Liste d'Elèves</a>
      </div>
    </section>
  </main>
    <footer class="mt-auto">
      <div class="bg-primary text-white text-center py-3 mt-4 fixed-bottom">
        &copy; 2025 BTS SLAM 1 - Promo 321
      </div>
    </footer>
</body>
</html>