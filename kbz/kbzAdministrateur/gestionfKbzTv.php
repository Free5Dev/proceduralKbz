<?php 
	//appel de la fonction connexion à la bdd
	require_once("../connexion.inc.php");
	// gestion de l'emission
		$reqGestionKbzTv=$bdd->query("SELECT id,titre,invite FROM kbztv");
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
		<h1>Gestion  d'emission KBZ TV</h1>
		<table border="1" cellpadding="1" cellspacing="0" width="600">
			<tr>
				<th>Numéro</th>
				<th>Titre</th>
				<th>Invité</th>
				<th>Modification</th>
			</tr>
			<?php while($donneesGestion=$reqGestionKbzTv->fetch()) { ?>
			<tr>
				<td><?php echo $donneesGestion['id']; ?></td>
				<td><?php echo $donneesGestion['titre']; ?></td>
				<td><?php echo $donneesGestion['invite']; ?></td>
				<td><a href="modifKbzTv.php?ref=<?php echo $donneesGestion['id']; ?>">Modification</a></td>
			</tr>
			<?php }  $reqGestionKbzTv->closeCursor(); ?>
		</table>
	</body>
</html>