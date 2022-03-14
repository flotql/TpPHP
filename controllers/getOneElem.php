<?php session_start(); ?>
<link rel="stylesheet" href="../views/MeP/style.css">
<div id="oneelem">
    <div>
        <?php
                require('../models/animaux.php');
                include('../models/coBDD.php');
                include ('../views/viewOneElem.php');

                $animaux = new Animaux();
                
                if (isset($_POST['nom'])){
                    $animaux->setNom($_POST['nom']);
                    $unAnimal = $animaux->readSingle();
                    $data = $unAnimal->fetch();
                    $_SESSION['nom'] = $data['nom'];  // AJOUT SESSION
                    $_SESSION['couleur'] = $data['couleur']; // PRESELECTION PAGES SUPPR
                    $_SESSION['id'] = $data['id_animal']; // ET MODIF 
                    if ($data['nom']){
                        echo 'Voici '. $data['nom'].' qui est un/une '. $data['id_race']. ' de couleur '. $data['couleur']; 
                    }else if(empty($_POST['nom'])){
                        echo '<p>Veuillez remplir le champ svp!</p>';
                    }else{
                        echo "<p>Non existant dans la BDD!</p>";
                    }
                }else {
                    echo "<p>Saissisez un nom svp</p>";
                }
        ?>
    </div>
    <div>
        <?php

            //Instance de la class Animaux 
            $animaux = new Animaux();

            //Stockage de la methode readAll dans une variable
            $allAnimaux = $animaux->readAll();
            echo '<h3> Liste des animaux </h3>';
            $mesAnimaux = [];
            while($donnees = $allAnimaux->fetch()){
                $oneAnimal = array('id'=>$donnees['id_animal'],'nom'=>$donnees['nom'],'couleur'=>$donnees['couleur']);
                array_push($mesAnimaux,$oneAnimal);
                echo '<p>'.$donnees['nom'].'<p>';
            }
            $_SESSION['mesAnimaux'] = $mesAnimaux;
        ?>
    </div>
</div>

<!-- MaJ CSS (cette page ayant une disposition différente)  -->
<style> 
    #oneelem{
    display: flex;
    flex-direction: row;
    margin: auto;
    }
</style>


<?php include("../views/MeP/footer.php"); ?>