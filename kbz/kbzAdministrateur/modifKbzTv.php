<?php 
	//appel de la fonction connexion à la bdd
	require_once("../connexion.inc.php");
	if(!isset($_GET['ref']))
	{
		header("Location:gestionfKbzTv.php");
	}
	// recuperage des params via get
		$reqGet=$bdd->prepare("SELECT * FROM kbztv WHERE id=?");
		$reqGet->execute(array($_GET['ref']));
		$donneesGet=$reqGet->fetch();
		if(isset($_POST['btnModif']))
		{
			if(!empty($_POST['titre'] and $_POST['invite'] and $_POST['urlVideo'] and $_POST['realisateur'] and $_POST['description'] and $_POST['membre']))
			{
				$reqUpdateKbzTv=$bdd->prepare("UPDATE kbztv SET titre=?,invite=?,url=?,realisateur=?,description=?,idMembre=?");
				$reqUpdateKbzTv->execute(array($_POST['titre'],$_POST['invite'],$_POST['urlVideo'],$_POST['realisateur'],$_POST['description'],$_POST['membre']));
				header("Location:gestionfKbzTv.php");
		}
			else
			{
				echo "Les champs sont  vides";
			}
		}	
	//requete du menu déroulant dynamique
	$reqMenu=$bdd->query("SELECT  id,nom FROM membre LIMIT 3");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1"/>
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../kbz.css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h1>formulaire d'ajout d'emission KBZ TV</h1>
		<p class="text-danger"><?php if(isset($chps)) echo $chps; ?></p>
		<p class="text-primary"><?php if(isset($success)) echo $success; ?></p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="id">ID:</label>
			<input type="hidden" name="id" id="id" value="<?php if(isset($_GET['ref'])) echo $donneesGet['id']; ?>"/><?php if(isset($_GET['ref'])) echo $donneesGet['id']; ?><br/>
			<label for="titre">Titre</label>
			<input type="text" name="titre" id="titre" value="<?php if(isset($_GET['ref'])) echo $donneesGet['titre']; ?>"/><br/>
			<label for="invite">Invité</label>
			<input type="text" name="invite" id="invite" value="<?php if(isset($_GET['ref'])) echo $donneesGet['invite']; ?>"/><br/>
			<label for="urlVideo">Url video</label>
			<iframe width="560" height="315" src="<?php if(isset($_GET['ref']))  echo $donneesGet['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<input type="text" name="urlVideo" id="urlVideo" value="<?php if(isset($_GET['ref'])) echo $donneesGet['url']; ?>"/><br/>
			<label for="realisateur">Réalisateur</label>
			<input type="text" name="realisateur" id="realisateur" value="<?php if(isset($_GET['ref'])) echo $donneesGet['realisateur']; ?>"/><br/>
			<label for="description">Description de l'émission</label>
			<textarea name="description"><?php if(isset($_GET['ref'])) echo $donneesGet['description']; ?></textarea><br/>
			<label for="membre">Présentateur Emission</label>
			<select name="membre">
				<optgroup label="Présentateur">
					<?php while($donneesMenu=$reqMenu->fetch()) { ?>
					<option <?php if(!isset($_GET['ref'])) $donneesGet['idMembre']=1;  if(($donneesGet['idMembre'])==$donneesMenu['id']) echo "selected='selected'"; ?> value="<?php  echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['nom']; ?></option>
					<?php } $reqMenu->closeCursor(); ?>
				</optgroup>
			</select><br/>
			<button type="submit" name="btnModif" class="btn btn-primary">Modifier</button>
		</form>
	</body>
</html>