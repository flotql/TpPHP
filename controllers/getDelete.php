<?php session_start(); ?>
<link rel="stylesheet" href="../views/MeP/style.css">
<div>
    <?php
        include('../models/animaux.php');
        include('../models/coBDD.php');
        include('../views/viewDelete.php');

        $animaux = new Animaux();
        $animaux->setId($_SESSION['id']);
        $deleteAnimal = $animaux->deleteOne();
        
        echo "l'animal " . $_SESSION['nom']. " est supprimé de la base de données";
        echo '<a href="../index.php">Retour accueil</a>';
    ?>
</div>

<?php include("../views/MeP/footer.php"); ?>