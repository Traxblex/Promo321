<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS SLAM 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">PROMO 321</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="info.php">INFO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="math.php">MATH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="anglais.php">ANGLAIS</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="francais.php">FRANCAIS</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="cejm.php">CEJM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="menu" class="py-5">
        <div class="container">
          <h2 class="text-center mb-4">COURS DE VENDREDI</h2>
          <div class="row g-4"> <!--sert a aligner les cartes avec un espacement-->
            <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_php.jpg" class="card-img-top" alt="Pizza Margherita">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">PHP</h5>
                  <p class="card-text">Langage de programmation côté serveur : il permet de générer du contenu dynamique sur les pages web.</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-outline-primary">voir le cours</button>
                  </div>
                </div>
              </div>
            </div>

          <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_bdd.jpg" class="card-img-top" alt="Pizza Margherita">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">BDD</h5>
                  <p class="card-text">Une BDD (Base de Données) est un système organisé qui permet de stocker, gérer et manipuler des informations de manière structurée.</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-outline-primary">voir le cours</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_cpp.jpg" class="card-img-top" alt="Pizza Margherita">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">C++</h5>
                  <p class="card-text">C++ est un langage de programmation compilé permettant la programmation sous de multiples paradigmes, 
                    dont la programmation procédurale, la programmation orientée objet et la programmation générique.</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-outline-primary">voir le cours</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>

     <footer class="mt-auto">
      <div class="bg-primary text-white text-center py-3 mt-4 fixed-bottom">
        &copy; 2025 BTS SLAM 1 - Promo 321
      </div>
    </footer>
</body>
</html>