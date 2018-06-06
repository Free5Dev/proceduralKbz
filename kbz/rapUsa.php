<?php 
	//connexion à la bdd
	require_once("connexion.inc.php");
	// requete rap usa
	$reqMusiqueUsa=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=1 ORDER BY ID DESC LIMIT 5");
	// requete rap afro
	$reqMusiqueAfro=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=3 ORDER BY ID DESC LIMIT 3");
	// requete reggue
	$reqMusiqueReggue=$bdd->query("SELECT z.id,m.nom,z.nomArtiste,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.idMusiqueCategorie=4 ORDER BY ID DESC LIMIT 3");
	// top kbz tv
	$reqKbzTv=$bdd->query("SELECT k.id,k.titre,k.url,k.invite,k.realisateur,k.description,date_format(dateTv, '%d/%m/%Y à %Hh%imin%ss') as dateTv,k.url,m.nom FROM kbztv as k, membre as m where k.idMembre=m.id order by k.id desc LIMIT 1");
	$donneesKbzTv=$reqKbzTv->fetch();
	// blog
	$reqBlog=$bdd->query("SELECT b.id,b.titre,b.commentaire,b.url,date_format(dateBlog,'%d/%m/%Y à %Hh%imin%ss') as dateBlog,m.nom FROM blog as b,membre as m WHERE b.idMembre=m.id ORDER BY b.ID DESC LIMIT 1");
	$donneesBlog=$reqBlog->fetch();
	// Talent
	$reqTalent=$bdd->query("SELECT t.id,t.tire,t.nomTalent,t.biographie,t.url,date_format(dateTalent,'%d/%m/%Y à %Hh%imin%ss') as dateTalent,m.nom FROM talent as t,membre as m WHERE t.idMembre=m.id ORDER BY t.ID DESC LIMIT 3");
	$donneesTalent=$reqTalent->fetch();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
		<link rel="stylesheet" type="text/css" href="kbzTv.css">
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="kbzTv.css"/> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include('entete.inc.php'); ?>
		<?php include('menu.inc.php'); ?>
		<section id="kbzTv">
			<div class="container-fluid kbzTvContainer">
				<h1><span class="text-danger">K.B.Z</span> Rap Usa rétrouver tous les dernièrs clip des stars USA...Krah Krah  <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""></h1>
				<div class="row">
					<div class="col-md-8  col-sm-12 kbzTvGauche">
						<?php while($donneesUsa=$reqMusiqueUsa->fetch()) { ?>
						<div class="kbzTvGaucheContenu">
							<h2><span class="text-danger">Artiste(s):</span> <?php echo htmlspecialchars($donneesUsa['nomArtiste']); ?> <span class="text-danger">Titre:</span> <?php echo htmlspecialchars($donneesUsa['titre']) ; ?></h2>
							<p class="petit"><strong>Rédacteur: </strong><img src="images/man-user.png" alt=""><small><?php echo htmlspecialchars($donneesUsa['nom']) ; ?></small> <strong>Date: </strong> <img src="images/calendar-with-a-clock-time-tools.png" alt=""> <small> le <?php echo htmlspecialchars($donneesUsa['datePub']) ; ?></small></p>
							<p><iframe class="img-fluid border border-dark iframe"  src="<?php echo htmlspecialchars($donneesUsa['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
							<p><strong><a href="rapUsaCommentaire.php?ref=<?php echo $donneesUsa['id']; ?>">Commentaires</a></strong></p>

							<!-- button partage reseaux sociaux -->
							<div id="btnSociaux">
								<div class="btnSociaux">
									<div id="fb-root"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>


									<div class="fb-share-button btn btn-fluid btn-outline-info" data-href="http://localhost/phpProcedural/kbz/rapUsa.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FphpProcedural%2Fkbz%2FkbzTv.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								</div>
								<div class="btnSociaux">
									
									<a href="" class="btn btn-fluid btn-outline-primary"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
									<script type="IN/Share" data-url="http://localhost/phpProcedural/kbz/rapUsa.php" ></script></a>

									<!--  -->
									</div>
									<div class="btnSociaux">
									<div id="fb-root"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>


									<div class="fb-share-button btn btn-fluid btn-outline-secondary" data-href="http://localhost/phpProcedural/kbz/kbzTv.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FphpProcedural%2Fkbz%2FkbzTv.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								</div>
							</div>
						</div>
						<?php } $reqMusiqueUsa->closeCursor(); ?>
					</div>

					<div class="col-md-4 col-sm-12 kbzTvDroite" style="padding: 0px;">
						<div class="kbzTvDroiteContenu" >
							<h3><img src="images/blog-symbol.png"> top Afro Musique</h3>
							<?php while($donneesMusiqueAfro=$reqMusiqueAfro->fetch()) { ?>
							<p><a href="index.php"><small style=""><?php echo htmlspecialchars($donneesMusiqueAfro['titre']) ; ?></small></a></p>
							<p><a href="index.php"><iframe width="450" height="190" src="<?php echo htmlspecialchars($donneesMusiqueAfro['url']) ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><mark style="background-color: green;"> <a href="index.php" style="color: white;">Voir détails</a></mark></p><hr class="separator">
							<?php } $reqMusiqueAfro->fetch(); ?>
							<!--  -->
							<h3><img src="images/blog-symbol.png"> top reggue - dancehall</h3>
							<?php while($donneesMusiqueReggue=$reqMusiqueReggue->fetch()) { ?>
							<p><a href="index.php"><small style=""><?php echo htmlspecialchars($donneesMusiqueReggue['titre']) ; ?></small></a></p>
							<p><a href="index.php"><iframe width="450" height="190" src="<?php echo $donneesMusiqueReggue['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><mark style="background-color: green;"> <a href="index.php" style="color: white;">Voir détails</a></mark></p><hr class="separator">
							<?php } $reqMusiqueReggue->fetch(); ?>
							<!--  -->
							<h3><img src="images/play-button.png">KBZ TV</h3>
<!-- 							<h6><mark>Nouvelle Emission au tour du thé</mark></h6>
 -->							<p><a href="index.php"><small style=""><?php echo $donneesKbzTv['titre']; ?></small></a></p>
							<p><a href="index.php"><iframe width="450" height="190" src="<?php echo $donneesKbzTv['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><strong>Date:</strong><small><?php echo $donneesKbzTv['dateTv']; ?></small></p>
							<p><mark style="background-color: green;"><a href="rapUsa.php" style="color: white;">Voir tout</a></mark></p>
							<hr class="separator" style="border:1px ridge rgb(191,191,192);">
							<h3><img src="images/play-button.png">KBZ Blog</h3>
<!-- 							<h6><mark>Nouvel Blog</mark></h6>
 -->							<p><a href="index.php"><small style=""><?php echo $donneesBlog['titre']; ?></small></a></p>
							<p><a href="index.php"><iframe width="450" height="190" src="<?php echo $donneesBlog['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><strong>Date:</strong><small><?php echo $donneesBlog['dateBlog']; ?></small></p>
							<p><mark style="background-color: green;"><a href="blogCommentaire.php?ref=<?php echo $donneesBlog['id']; ?>" style="color: white;">Voir tout</a></mark></p>
							<hr class="separator" style="border:1px ridge rgb(191,191,192);">
							<h3><img src="images/play-button.png">KBZ Talent</h3>
<!-- 							<h6><mark>Nouveau talent à découvrir</mark></h6>
 -->							<p><a href="index.php"><small style=""><?php echo $donneesTalent['tire']; ?></small></a></p>
							<p><a href="index.php"><iframe width="450" height="190" src="<?php echo $donneesTalent['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><strong>Date:</strong><small><?php echo $donneesTalent['dateTalent']; ?></small></p>
							<p><mark style="background-color: green;"><a href="talentCommentaire.php?ref=<?php echo $donneesTalent['id']; ?>" style="color: white;">Voir tout</a></mark></p>
							<hr class="separator" style="border:1px ridge rgb(191,191,192);">

						</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>