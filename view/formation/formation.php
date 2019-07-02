<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $formation->nom;?></title>
    <link rel="stylesheet" href="view/css/monstyle.css">
</head>
<body>
    
    <h1><?php echo $formation->nom;?></h1>

    <div>
        <span>Nom :</span>
        <?php echo $formation->nom;?>
    </div>
    <div>
        <span>Date :</span>
        <?php echo $formation->date;?>
    </div>
    <div>
        <span>Lieu :</span>
        <?php echo $formation->lieu;?>
    </div>
    <div>
        <span>Lieu :</span>
        <?php echo $formation->description;?>
    </div>
    
</body>
</html>