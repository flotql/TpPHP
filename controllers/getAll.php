<link rel="stylesheet" href="../views/MeP/style.css">
<div>
    <?php
        // Liaison des pages
        include('../models/animaux.php');
        include('../models/coBDD.php');


        //Instance de la class Animaux 
        $animaux = new Animaux();

        //Stockage de la methode readAll dans une variable
        $allAnimaux = $animaux->readAll();

        while($donnees = $allAnimaux->fetch()){
            echo '<p>'.$donnees['nom'].' de couleur '. $donnees['couleur'].'<p>';
        }
        include('../views/viewAll.php');
    ?>
</div>

<?php include("../views/MeP/footer.php"); ?>