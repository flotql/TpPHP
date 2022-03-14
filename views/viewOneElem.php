<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./MeP/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Element</title>
</head>
<header>
    <h1>Recherche d'un animal</h1>
</header>
<body>
    <form action="#" method="post">
        <p>
            <label for="nom">Nom de l'animal: </label>
            <input type="text" name="nom">
            <input type="submit" value="Envoyer">
        </p>
    </form>
    <form action="" method="" id="modifSuppr">
        <button><a href="../controllers/getUpdate.php">Modifier</a></button>
        <button><a href="../controllers/getDelete.php">Supprimer</a></button>
    </form>
</body>
</html>