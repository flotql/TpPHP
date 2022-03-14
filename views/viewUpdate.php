<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/getUpdate.php" method="post" id="formulaireUpdate">
        <p>
            <label for="nom">Nom: </label>
            <input type="text" name ="nom" value="<?php echo $_SESSION['nom']; ?>" >
        </p>
        <p>
            <label for="couleur">Couleur:</label>
            <input type="text" name="couleur" value="<?php echo $_SESSION['couleur']; ?>" >
        </p>
        <!-- <p>
            <label for="race">Race:</label>
            <input type="text" name="race" value="<?php $donnees['idRace'] ?>">
        </p> -->
        <p>
            <input type="submit" name="Envoyer" id="">
        </p>
    </form>
</body>
</html>