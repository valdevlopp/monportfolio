<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $competence->nom;?></title>
    <link rel="stylesheet" href="view/css/monstyle.css">
</head>
    <body>
        <!-- Affiche la liste de chaque compétence -->
        <h1><?php echo $competence->nom;?></h1>
        <div>
            <span>Nom :</span>
            <?php echo $competence->nom;?>
        </div>
        <div>
            <span>Niveau :</span>
            <?php echo $competence->niveau;?>
        </div>
        <div>
            <span>Logo :</span>
            <?php echo $competence->description;?>
        </div>
    </body>
</html>