<?php 
            try{
                $dbco = new PDO("mysql:host=127.0.0.1;dbname=gestion_immobilier;charset=utf8mb4;", 'root', '');
                $requeteS ="SELECT IdAnnonce,ImageAnnonce,TitreAnnonce,TypeAnnonce,SuperficieAnnonce,MontantAnnonce,AdresseAnnonce,DateAnnonce FROM annonce";
                $rest = $dbco->prepare($requeteS);
                $rest->execute();
                $count = $rest->rowCount(); //nbre de ligne d'une requete

               
                
            }

            catch(PDOException $e){
              echo 'Erreur : ' . $e->getMessage();
            }

    ?>
