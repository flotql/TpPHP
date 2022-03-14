<link rel="stylesheet" href="../views/MeP/style.css">
<div>
    <?php
        include('../models/animaux.php');
        include('../models/coBDD.php');
        include('../views/viewAdd.php');

        if (
            !empty($_POST['nom'])
            && !empty($_POST['couleur'])
        ){
            $nom = $_POST['nom'];
            $couleur = $_POST['couleur'];
        
            $animaux = new Animaux();
            $animaux->setNom($nom);  // SET  = SETTER POUR AJOUT DANS BDD
            $animaux->setCouleur($couleur);
            $animaux->setIdRace(null);
            $createAnimal = $animaux->createOne();
        }

    ?>
</div>

<?php include("../views/MeP/footer.php"); ?>