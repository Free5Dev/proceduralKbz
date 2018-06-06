<?php 
	// appel de la fonction de connexion 
	require_once("connexion.inc.php");
	// requete rap usa
	$reqMusiqueUsa=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=1 ORDER BY ID DESC LIMIT 3");
	// requete rap fr
	$reqMusiqueFr=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=2 ORDER BY ID DESC LIMIT 3");
	// requete rap afro
	$reqMusiqueAfro=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=3 ORDER BY ID DESC LIMIT 3");

	// requete reggue
	$reqMusiqueReggue=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=4 ORDER BY ID DESC LIMIT 3");
	// top kbz tv
	$reqKbzTv=$bdd->query("SELECT k.id,k.titre,k.url,k.invite,k.realisateur,k.description,date_format(dateTv, '%d/%m/%Y à %Hh%imin%ss') as dateTv,k.url,m.nom FROM kbztv as k, membre as m where k.idMembre=m.id order by k.id desc");
	// blog
	$reqBlog=$bdd->query("SELECT b.id,b.titre,b.commentaire,b.url,date_format(dateBlog,'%d/%m/%Y à %Hh%imin%ss') as dateBlog,m.nom FROM blog as b,membre as m WHERE b.idMembre=m.id ORDER BY b.ID DESC LIMIT 3");
	// Talent
	$reqTalent=$bdd->query("SELECT t.id,t.tire,t.nomTalent,t.biographie,t.url,date_format(dateTalent,'%d/%m/%Y à %Hh%imin%ss') as dateTalent,m.nom FROM talent as t,membre as m WHERE t.idMembre=m.id ORDER BY t.ID DESC LIMIT 3");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8/">
		 <meta name="viewport" content="width=device-width, initial-scale=1"/>
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="accueil.css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</head>
	<body>
		<!-- entete -->
		<?php include("entete.inc.php"); ?>
		<!-- end entete -->
		<!-- inclution du menu -->
		<?php include("menu.inc.php"); ?>
		<!-- fin inclution -->
		


		<!-- section de la page -->
		<section id="kbzPage">
			<h1 style="text-align: center;text-transform: uppercase;color: #fff; font-size: 1.2em;font-family: 'Kaushan Script', cursive;"><span class="text-danger">K.B.Z</span> vous souhaite la bienvenue ...Krah Krah  <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""></h1>
			<section class="container-fluid kbzContenu">
					<!-- rap usa -->
					<h2><mark><a href="RapUsa.php">Top Rap Usa</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center; padding-bottom:0px;">
						<?php while($donneesMusique=$reqMusiqueUsa->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="rapUsaCommentaire.php?ref=<?php echo htmlspecialchars($donneesMusique['id']); ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Artiste(s):</strong><?php echo htmlspecialchars($donneesMusique['nomArtiste']); ?> <strong class="text-danger">Origine:</strong> <?php echo htmlspecialchars($donneesMusique['origine']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe" src="<?php echo htmlspecialchars($donneesMusique['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Date(s):</strong><?php echo htmlspecialchars($donneesMusique['datePub']) ; ?> <strong class="text-danger">Rédacteur:</strong> <?php echo htmlspecialchars($donneesMusique['nom']) ; ?></small></p>
								<h5><?php echo htmlspecialchars($donneesMusique['titre']) ; ?></h5>
							</a>
						</div>
						<?php } $reqMusiqueUsa->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="rapUsa.php" style="color: #fff; font-size: 1.2em;">Voir tout rap USA</a>
						</div>
						
					</div>
					<!-- end rap usa -->
			</section>


			<!-- rap fr-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="RapFr.php">Top Rap Fr</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesMusique=$reqMusiqueFr->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="rapFrCommentaire.php?ref=<?php echo htmlspecialchars($donneesMusique['id']);  ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Artiste(s):</strong><?php echo htmlspecialchars($donneesMusique['nomArtiste']) ; ?> <strong class="text-danger">Origine:</strong> <?php echo htmlspecialchars($donneesMusique['origine']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe"  src="<?php echo htmlspecialchars($donneesMusique['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Date(s):</strong><?php echo htmlspecialchars($donneesMusique['datePub']) ; ?> <strong class="text-danger">Rédacteur:</strong> <?php echo htmlspecialchars($donneesMusique['nom']) ; ?></small></p>
								<h5><?php echo htmlspecialchars($donneesMusique['titre']) ; ?></h5>
							</a>
						</div>
						<?php } $reqMusiqueFr->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">
							<a href="rapFr.php" style="color: #fff;">Voir tout rap Fr</a>
						</div>
					</div>
					
			</section>
			<!-- end rap fr -->

			<!-- rap afro-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="Afro.php"> Top Afro Musique</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesMusique=$reqMusiqueAfro->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="AfroCommentaire.php?ref=<?php echo htmlspecialchars($donneesMusique['id']) ; ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Artiste(s):</strong><?php echo htmlspecialchars($donneesMusique['nomArtiste']) ; ?> <strong class="text-danger">Origine:</strong> <?php echo htmlspecialchars( $donneesMusique['origine']); ?></small></p>
								<iframe class="img-fluid border border-dark iframe"  src="<?php echo htmlspecialchars($donneesMusique['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Date(s):</strong><?php echo htmlspecialchars($donneesMusique['datePub']) ; ?> <strong class="text-danger">Rédacteur:</strong> <?php echo htmlspecialchars($donneesMusique['nom']) ; ?></small></p>
								<h5><?php echo htmlspecialchars($donneesMusique['titre']) ; ?></h5>
							</a>
						</div>
						<?php } $reqMusiqueAfro->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="Afro.php" style="color: #fff;">Voir  Afro musique</a>
						</div>
					</div>
					
			</section>
			<!-- end rap Afro -->

			<!-- reggue-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="reggueDancehall.php">Top Reggue Dancehall</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesMusique=$reqMusiqueReggue->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="reggueDancehallCommentaire.php?ref=<?php echo htmlspecialchars($donneesMusique['id']) ; ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Artiste(s):</strong><?php echo htmlspecialchars($donneesMusique['nomArtiste']) ; ?> <strong class="text-danger">Origine:</strong> <?php echo htmlspecialchars($donneesMusique['origine']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe" src="<?php echo htmlspecialchars($donneesMusique['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Date(s):</strong><?php echo htmlspecialchars($donneesMusique['datePub']) ; ?> <strong class="text-danger">Rédacteur:</strong> <?php echo htmlspecialchars($donneesMusique['nom']) ; ?></small></p>
								<h5><?php echo htmlspecialchars( $donneesMusique['titre']); ?></h5>
							</a>
						</div>
						<?php } $reqMusiqueReggue->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="reggueDancehall.php" style="color: #fff;">Voir tout Reggue Dancehall</a>
						</div>
					</div>
					
			</section>
			<!-- end regggue -->

						

			<!-- top kbz tv-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="kbzTv.php">Top KBZ TV</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesKbzTv=$reqKbzTv->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="kbzTvCommentaire.php?ref=<?php echo htmlspecialchars($donneesKbzTv['id']); ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Présentatrice:</strong><?php echo htmlspecialchars($donneesKbzTv['nom']) ; ?> <strong class="text-danger">Invité(s):</strong> <?php echo htmlspecialchars($donneesKbzTv['invite']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe" src="<?php echo htmlspecialchars($donneesKbzTv['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Date(s):</strong><?php echo htmlspecialchars($donneesKbzTv['dateTv']) ; ?> <strong class="text-danger">Réalisateur:</strong> <?php echo htmlspecialchars($donneesKbzTv['realisateur']) ; ?></small></p>
								<h5><?php echo htmlspecialchars($donneesKbzTv['titre']); ?></h5>
							</a>
						</div>
						<?php } $reqKbzTv->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="kbzTv.php" style="color: #fff;">Voir tout KBZ TV au tour du thé</a>
						</div>
					</div>
					
			</section>
			<!-- end kbz tv -->

			<!-- top Blog-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="blog.php">Top blog</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesBog=$reqBlog->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="blogCommentaire.php?ref=<?php echo htmlspecialchars($donneesBog['id']) ; ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Rédacteur:</strong><?php echo htmlspecialchars($donneesBog['nom']) ; ?> <strong class="text-danger">Date:</strong> <?php echo htmlspecialchars($donneesBog['dateBlog']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe" src="<?php echo htmlspecialchars($donneesBog['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Titre:</strong><?php echo htmlspecialchars($donneesBog['titre']) ; ?> <strong class="text-danger"></strong></small></p>
								<h5><?php echo htmlspecialchars($donneesKbzTv['titre']) ; ?></h5>
							</a>
						</div>
						<?php } $reqBlog->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="blog.php" style="color: #fff;">Voir tous les blog sur KBZ BLOG</a>
						</div>
					</div>
					
			</section>
			<!-- end blog -->

			<!-- top talent-->
			<section class="container-fluid kbzContenu">
					
					<h2><mark><a href="talent.php">Top Talent</a></mark></h2>
					<div class="row" style="display: flex;justify-content:center;">
						<?php while($donneesTalent=$reqTalent->fetch()) { ?>
						<div class="col-md-4 col-sm-12 leftContenu">
							<a class="a" href="talentCommentaire.php?ref=<?php echo htmlspecialchars($donneesTalent['id']) ; ?>" title="clique pour voir en détails">
								<p class="premierP"><small><strong class="text-danger">Nom:</strong><?php echo htmlspecialchars($donneesTalent['nomTalent']) ; ?> <strong class="text-danger">Date:</strong> <?php echo htmlspecialchars($donneesTalent['dateTalent']) ; ?></small></p>
								<iframe class="img-fluid border border-dark iframe" src="<?php echo htmlspecialchars($donneesTalent['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="secondP"><small><strong class="text-danger">Lire:</strong><?php echo htmlspecialchars($donneesTalent['tire']) ; ?> <strong class="text-danger"></strong></small></p>
								<h5><?php echo htmlspecialchars($donneesKbzTv['titre']) ; ?></h5>
							</a>
						</div>
						<?php } $reqTalent->fetch(); ?>
						<div class="bas" style="border:1px solid rgb(51,51,51);display: inline-block;width: 100%; text-align: center; margin-bottom:-5px;background-color: rgba(51,51,51,0.5);">	
							<a href="talent.php" style="color: #fff;">Voir tous les talent</a>
						</div>
					</div>
					
			</section>
			<!-- end blog -->
		</section>
	</body>
</html>