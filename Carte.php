<?php 
if($count > 0 ){
    echo "<div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mt-5'>";
    while ($ligne = $rest->fetch(PDO::FETCH_ASSOC)) {
        echo("
            <div class='col mt-2'>
                <div class='card'>
                    <img src='./img/".$ligne["ImageAnnonce"]."' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$ligne["TitreAnnonce"]." à ".$ligne["TypeAnnonce"]." de ".$ligne["SuperficieAnnonce"]." m²</h5>
                        <div class='d-flex justify-content-between align-items-center'>
                            <h5 class='text-danger fs-3'>".$ligne["MontantAnnonce"]." DH</h5>
                        </div>
                        <p class='card-text'>".$ligne["AdresseAnnonce"]."</p>
                        <p class='card-text'>Publié le ".$ligne["DateAnnonce"].".</p>
                        
                        <a class='modifierCarteId btn btn-success' name='modifierCarte' href='./modification.php?id=".$ligne["IdAnnonce"]."'>Modifier</a>
                        
                        
                        <a class='supprimerCarteId btn btn-danger' name='supprimerCarte' href='./suppression.php?id=".$ligne["IdAnnonce"]."'>Supprimer</a> 
                        
                    </div>
                </div>
            </div>"
        );
    } 
}
    echo "</div>";
?>