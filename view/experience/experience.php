<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $experience->nom;?></title>
    <link rel="stylesheet" href="view/css/monstyle.css">
</head>
<body>
    
    <h1><?php echo $experience->nom;?></h1>

    <div>
        <span>Nom :</span>
        <?php echo $experience->nom;?>
    </div>
    <div>
        <span>Date :</span>
        <?php echo $experience->date;?>
    </div>
    <div>
        <span>Lieu :</span>
        <?php echo $experience->lieu;?>
    </div>
    <div>
        <span>Description :</span>
        <?php echo $experience->description;?>
    </div>
    <div>
        <span>Photo :</span>
        <?php echo $experience->photo;?>
    </div>
    
</body>
</html>