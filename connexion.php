<?php ob_start();?>
<?php require_once('inc/init.inc.php')?>

<?php
//DECONNEXION :
if( isset($_GET['action']) && $_GET['action'] == 'deconnexion' ){
	//Si il y a une 'action' dans l'URL et que celle-ci est égale à 'deconnexion', alors on détruit la session
	session_destroy();
	header('location:index.php');
	exit();
}
//---------------------------------------------------------------------

if( userConnect() ){ //Si l'internaute est connecté redirection l'en-tête de la machine pas du site.
	//Envoie un en-tête HTTP brut

	header('location:index.php');
	exit();
}

//---------------------------------------------------------------------
if( $_POST ){ //Si on a cliquer sur le bouton submit

	$r = execute_requete("SELECT * FROM user WHERE login = '$_POST[login]' ");

	//Si il y a une correspondance d'un login dans la table 'user', $r renverra '1' ligne de résultat 
	if( $r->rowCount() >= 1 ){

		$user = $r->fetch(PDO::FETCH_ASSOC);
		debug($user);

		//Cryptage - Vérification du mot de passe : si le mot de passe est correct, on renseigne des informations dans notre fichier de session
		if( password_verify( $_POST['password'], $user['password'] ) ){

			$_SESSION['user']['id_user'] = $user['id_user'];
			$_SESSION['user']['login'] = $user['login'];
            $_SESSION['user']['password'] = $user['password'];
			$_SESSION['user']['prenom'] = $user['prenom'];
			$_SESSION['user']['nom'] = $user['nom'];
			$_SESSION['user']['email'] = $user['email'];
			$_SESSION['user']['roles'] = $user['roles'];

			$content .= '<div class="alert alert-success" role="alert">Connexion OK</div>';
			//Redirection vers la page profil :
			header('location:view/admin/admin.php');
            ob_end_flush();
		}
		else{
			$content .= '<div class="alert alert-danger" role="alert">Erreur password</div>';
		}
	}
	else{
		$content .= '<div class="alert alert-danger" role="alert">Erreur login</div>';
	}
}

//__________________________________________________________________________
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulaire de connexion</title>
	<!-- CDN Bootstrap -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!-- CDN -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/style-connexion.css">
  </head>

	<body id="LoginForm">
		<div class="container">
			<h1 class="form-heading">
			</h1><br><br>
				<div class="login-form">
					<div class="main-div">
						<div class="panel">
							<h2>Connexion de l'administrateur
							</h2>
							<p>Veuillez entrer votre pseudo et votre mot de passe
							</p>
						</div>

	<?= $content ?>
	<form method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="login" id="login" placeholder="Entrez votre pseudo">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Entrez votre mot de passe">
		</div>
		<!-- 
		<div class="forgot">
		<a href="reset.html">Vous avez oublié votre mot de passe</a>
		</div>
		-->
		<button type="submit" class="btn btn-primary">Connexion</button>
	</form>
</div>
<p class="botto-text"> Designed by Sunil Rajput</p>
				</div>
			</div>
		</div>
	</body>
</html>

