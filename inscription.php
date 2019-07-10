<?php require_once('inc/adminHeader.inc.php');

if( $_POST ){ //Si on clique sur le bouton 'submit'

	//debug( $_POST );

	//Déclaration d'une variable : 
	$erreur = '';

	if( strlen($_POST['login']) <=3 || strlen($_POST['login']) >=20 ){ //Si le login est inférieur ou égal à 3 OU qu'il est supérieur ou égal à 20

		$erreur .= '<div class="alert alert-danger" role="alert">Erreur taille login</div>';
	}

	//Test si le login est disponible, si le login renvoie au moins 1 résultat, c'est que le login est déjà attribué
	$r = execute_requete("SELECT * FROM user WHERE login = '$_POST[login]' ");

	if( $r->rowCount() >=1 ){

		$erreur .= '<div class="alert alert-danger" role="alert">login indisponible</div>';
	}

	//Boucle sur les saisies afin de les passer dans la fonction addslashes() :
	foreach ($_POST as $key => $value) {
		
		$_POST[$key] = addslashes($value);
	}

	//Cryptage du mot de passe :
	$_POST['password'] = password_hash( $_POST['password'],PASSWORD_DEFAULT );

	if( empty($erreur) ){ //Si ma variable $erreur est vide

		execute_requete("INSERT INTO user(login, password, prenom, nom, email) VALUES('$_POST[login]','$_POST[password]','$_POST[prenom]','$_POST[nom]','$_POST[email]') ");

		echo '<div class="alert alert-success" role="alert">Inscription validée ! <a href="'. URL .'connexion.php">Cliquez ici pour vous connecter</a></div>';
	}
	//Affichage des erreurs:
	$content .= $erreur;
}
//____________________________________________________________________
?>
<h1>INSCRIPTION</h1>

<?= $content ?>
<form method="post">
	<label for="login">login</label><br>
	<input type="text" name="login" id="login" class="form-control"><br>
	<label for="password">Mot de Passe</label><br>
	<input type="text" name="password" id="password" class="form-control"><br>
	<label for="prenom">Prenom</label><br>
	<input type="text" name="prenom" id="prenom" class="form-control"><br>
	<label for="nom">Nom</label><br>
	<input type="text" name="nom" id="nom" class="form-control"><br>
	<label for="email">Email</label><br>
	<input type="text" name="email" id="email" class="form-control"><br>
	<input type="submit" class="btn btn-secondary" value="S'inscrire">
</form>

<?php require_once('inc/adminFooter.inc.php'); ?>