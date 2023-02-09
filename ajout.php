<?php include("./connexion.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMMO HORIZON | Ajout</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
                                <li class="nav-item">
                                    <a href="./index.php"class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <main class="container-fluid pt-5">
            <section class="container pt-5">
                <h2 class="py-3 text-center">Ajouter une nouvelle annonce !</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-6 border">
                        <form action='' method='POST' enctype="multipart/form-data">
                            <div class='mb-3'>
                                <label for='titre' class='form-label'>Titre d'annonce :</label>
                                <input type='text' class='form-control' id='titre' name='titre'>
                            </div>
                            <div class='mb-3'>
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control"  type="file" id="image" name="image">
                            </div>
                            <div class='mb-3'>
                                <label for='Description' class='form-label'>Description : </label>
                                <textarea type='text' class='form-control' id='Description' name='description'></textarea>
                            </div>
                            <div class='mb-3'>
                                <label for='Adresse' class='form-label'>Adresse : </label>
                                <input type='text' class='form-control' id='Adresse' name='adresse'>
                            </div>
                            <div class='row mb-3'>
                                <div class='col'>
                                    <label for='Superficie' class='form-label'>Superficie : </label>
                                    <input type='number' class='form-control' id='Superficie' name='superficie'>
                                </div>
                                <div class='col'>
                                    <label for='Montant' class='form-label'>Montant : </label>
                                    <input type='number' class='form-control' id='Montant' name='montant'>
                                </div>
                                <div class='col'>
                                    <label for='Adresse' class='form-label'>Date : </label>
                                    <input type='date' class='form-control' id='Date' name='date'>
                                </div>
                            </div>
                            <div class='mb-3'>
                                <label for='Type' class='form-label'>Type d'annonce : </label>
                                <select class='form-select' aria-label='type' id='Type' name='type'>
                                    <option value="Selectionnez un choix">Selectionnez un choix</option>
                                    <option value='Location'>Location</option>
                                    <option value='Vente'>Vente</option>
                                </select>
                            </div>
                            <div class='mb-3'>
                                <button class="btn btn-dark w-100" type="submit" name="ajouter">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
        
            </section>
        </main>
           
<?php 
 if(isset($_POST['ajouter'])){
    $titre =$_POST["titre"];
    $desc = $_POST["description"];
    $sup =$_POST["superficie"];
    $add = $_POST["adresse"];
    $montant = $_POST["montant"];
    $date = $_POST["date"];
    $type = $_POST["type"];

    //image
    $img = $_FILES["image"]["name"];
    $fileExtension = explode('.', $img);     
    $fileExtension = end($fileExtension);     
    $allowedExtensions = array('jpg', 'png', 'jpeg','jfif');
    $img = uniqid('', true). ".$fileExtension"; 
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "./img/" . $img;
    move_uploaded_file($tempname, $folder);

    if(!empty($titre && $img && $desc && $sup && $add && $montant && $date && $type))
    { 
        if(strlen($titre) < 200 && strlen($desc) > 3  && strlen($add) > 3 && $sup > 0 && $montant > 0){
            echo "L'ajout avec succées";
            $requeteAjout = "INSERT INTO `annonce` (`TitreAnnonce`, `ImageAnnonce`, `DescriptionAnnonce`, `SuperficieAnnonce`, `AdresseAnnonce`, `MontantAnnonce`, `DateAnnonce`, `TypeAnnonce`) VALUES ('$titre', '$img', '$desc', '$sup', '$add','$montant', '$date', '$type')";
            $dbco->exec($requeteAjout);   
        }
    }
  
    //
    
}

?>
        






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>