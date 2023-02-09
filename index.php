<?php include("./connexion.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMMO HORIZON</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="./javascript.js"></script>
</head>

<body>
    <header class="container-fluid bg-dark fixed-top mb-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark py-2">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./logo/black.png" alt="logo" width="120">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Annonce">Annonces</a>
                            </li>
                            <li class="nav-item">
                                <a href="ajout.php" type"button" class="btn btn-outline-light"> + Ajouter une
                                    Annonce</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container-fluid pt-5">
        <section class="container pt-5">
            <h2 class="pt-5">Filtrer la liste des annonces !</h2>
            <form class="row row-cols-lg-3" action="index.php" methode="POST">
                <div class="col">
                    <h5 for="type">Categorie</h5>
                    <select class="form-select" aria-label="type" name="categorie">
                        <option value=""></option>
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                    </select>
                </div>

                <div class="col">
                    <h5>Prix : </h5>
                    <div class="d-flex gap-1">
                        <input type="number" class="form-control" placeholder="Min" name="Min" min="0">
                        <input type="number" class="form-control" placeholder="Max" name="Max" min="0">
                    </div>
                </div>

                <div class="col d-flex align-items-end">
                    <button class="btn btn-dark" type="submit" name="chercher">Chercher</button>
                </div>
            </form>
        </section>
       <!-- 1 -->

        

        <section class="container mt-5" id="Annonce">
            <h2>Liste des Annonces disponible : </h2>
            <?php
                    if($count > 0 ){
                        echo "<div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mt-5'>";
                        while ($ligne = $rest->fetch(PDO::FETCH_ASSOC)) {
                            echo("
                                <div class='col mt-2'>
                                    <div class='card'>
                                        <img src='./img/".$ligne["ImageAnnonce"]."' class='card-img-top'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>".$ligne["TitreAnnonce"]." à Louer de ".$ligne["SuperficieAnnonce"]." m²</h5>
                                            <div class='d-flex justify-content-between align-items-center'>
                                                <h5 class='text-danger fs-3'>".$ligne["MontantAnnonce"]." DH</h5>
                                            </div>
                                            <p class='card-text'>".$ligne["AdresseAnnonce"]."</p>
                                            <p class='card-text'>Publié le ".$ligne["DateAnnonce"].".</p>
                                            <form action='modification.php' method='POST'>
                                            <button class='modifierCarteId btn btn-success' value='".$ligne["IdAnnonce"]."' name='modifierCarte'>Modifier</button>
                                            </form>
                                            <form action='suppression.php' method='POST'>
                                            <button class='supprimerCarteId btn btn-danger' value='".$ligne["IdAnnonce"]."' name='supprimerCarte'>Supprimer</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div>"
                            );
                        } 
                    }
                        echo "</div>";
                ?>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>