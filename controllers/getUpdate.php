<?php session_start();?>
<link rel="stylesheet" href="../views/MeP/style.css">
<div>
    <h1>Modification des informations d'un animal</h1>
    <?php
        include('../models/animaux.php');
        include('../models/coBDD.php');
        include('../views/viewUpdate.php');
        
        if ( 
            // EXISTANCE INPUT
            !empty($_POST['nom'])
            && !empty($_POST['couleur'])
        ){
            // AJOUT DES INPUTS DANS VARIABLE ET UTILISATIONS DES METHODES POUR AJOUT DANS BDD
            $nom = $_POST['nom'];
            $couleur = $_POST['couleur'];
            $animaux = new Animaux();
            $animaux->setNom($nom);
            $animaux->setCouleur($couleur);
            $animaux->setId($_SESSION['id']);
            $animaux->setIdRace(null);
            $updateAnimal = $animaux->updateOne();

            echo "L'animal ". $_SESSION['nom']. " a bien été modifié";
        }   
    ?>
    <script src="../views/MeP/script.js"></script>
</div>

<?php include("../views/MeP/footer.php"); ?>

<?php // Version utilisation Session en tableau
            // for($i=0;$i<=$_SESSION['mesAnimaux'];$i++){
            //     if( $_SESSION['mesAnimaux'][$i]['nom'] === $_POST['nom']){
            //         $animaux = new Animaux();
            //         $animaux->setNom($nom);
            //         $animaux->setCouleur($couleur);
            //         $animaux->setId($_SESSION['mesAnimaux'][$i]['id']);
            //         $animaux->setIdRace(null);
            //         $_SESSION['mesAnimaux'][$i]['couleur'] = $_POST['couleur'];
            //         $updateAnimal = $animaux->updateOne();
            //     }
            // }
?>