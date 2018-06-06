<?php 
	//appel de la fonction connexion à la bdd
	require_once("../connexion.inc.php");
	if(isset($_POST['btnEmission']))
	{
		if(!empty($_POST['titre'] and $_POST['invite'] and $_POST['urlVideo'] and $_POST['realisateur'] and $_POST['description'] and $_POST['membre']))
		{
			$reqInsertKbzTv=$bdd->prepare("INSERT INTO kbztv SET titre=?,invite=?,url=?,realisateur=?,description=?,dateTv=NOW(),idMembre=?");
			$reqInsertKbzTv->execute(array($_POST['titre'],$_POST['invite'],$_POST['urlVideo'],$_POST['realisateur'],$_POST['description'],$_POST['membre']));
			$success="L'émission a été ajouté avec succès";
		}
		else
		{
			$chps="Les champs sont obligatoires";
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
			<label for="titre">Titre</label>
			<input type="text" name="titre" id="titre"/><br/>
			<label for="invite">Invité</label>
			<input type="text" name="invite" id="invite"/><br/>
			<label for="urlVideo">Url video</label>
			<input type="text" name="urlVideo" id="urlVideo"/><br/>
			<label for="realisateur">Réalisateur</label>
			<input type="text" name="realisateur" id="realisateur"/><br/>
			<label for="description">Description de l'émission</label>
			<textarea name="description"></textarea><br/>
			<label for="membre">Présentateur Emission</label>
			<select name="membre">
				<optgroup label="Présentateur">
					<?php while($donneesMenu=$reqMenu->fetch()) { ?>
					<option value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['nom']; ?></option>
					<?php } $reqMenu->closeCursor(); ?>
				</optgroup>
			</select><br/>
			<button type="submit" name="btnEmission" class="btn btn-primary">Ajouter</button>
		</form>
	</body>
</html>