<?php 
	// connexion à la bdd
	require_once("connexion.inc.php");
	if(isset($_POST['btnContact']))
	{
		if(!empty($_POST['nomPrenom'] and $_POST['email'] and $_POST['sujet'] and $_POST['message']))
		{
			$reqContact=$bdd->prepare("INSERT INTO contact SET nomPrenom=?,email=?,sujet=?,message=?,dateContact=now()");
			$reqContact->execute(array($_POST['nomPrenom'],$_POST['email'],$_POST['sujet'],$_POST['message']));
			$success="Message envoyé avec success";
		}
		else
		{
			$chps="Les champs sont obligatoires";
		}
	}
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
		<link rel="stylesheet" type="text/css" href="kbz.css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h1>Page Contact</h1>
		<p class="text-danger"><?php if(isset($chps)) echo $chps; ?></p>
		<p class="text-primary"><?php if(isset($success)) echo $success; ?></p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="nomPrenom">Nom Prenom</label>
			<input type="text" name="nomPrenom" id="nomPrenom"/><br/> 
			<label for="email">Email</label>
			<input type="email" name="email" id="email"/><br/>
			<label for="sujet">Sujet</label>
			<input type="text" name="sujet" id="sujet"/><br/>
			<label for="message" id="message">Message</label>
			<textarea name="message"></textarea><br/> 
			<button name="btnContact">Contactez !</button>
		</form>
	</body>
</html>