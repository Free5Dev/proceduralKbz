<?php 
	//connexion à la bdd
	require_once("connexion.inc.php");
	if(isset($_GET['ref']))
	{
		// requete rap usa
		$reqMusiqueUsa=$bdd->prepare("SELECT z.id,m.nom,z.nomArtiste,z.description,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.id=?");
		$reqMusiqueUsa->execute(array($_GET['ref']));
		$donneesMusiqueUsa=$reqMusiqueUsa->fetch();

		// musique  mm
			$reqMusiqueUsaMm=$bdd->prepare("SELECT z.id,m.nom,z.nomArtiste,z.description,z.titre,c.categorie,z.url,z.origine,date_format(datePub, '%d/%m/%Y à %Hh%imin%ss') as datePub FROM musique as z,membre as m,musiquecategorie as c WHERE z.idMembre=m.id and z.idMusiqueCategorie=c.id and z.id!=? and `idMusiqueCategorie`=1 ORDER BY ID DESC LIMIT 3");
			$reqMusiqueUsaMm->execute(array($_GET['ref']));
	}
	else
	{
		header("Location:rapUsa.php");
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
				<h1><span class="text-danger">K.B.Z</span> Rap Usa Commentaires rétrouver tous les clip des stars Usa...Krah Krah   <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""></h1>
				<div class="row">
					<div class="col-md-9  col-sm-12 kbzTvGauche">
						<div class="kbzTvGaucheContenu">
							<h2><?php echo $donneesMusiqueUsa['titre']; ?></h2>
							<p class="petit"><strong>Rédacteur: </strong><img src="images/man-user.png" alt=""><small><?php echo $donneesMusiqueUsa['nom']; ?></small> <strong>Date: </strong> <img src="images/calendar-with-a-clock-time-tools.png" alt=""> <small> le <?php echo $donneesMusiqueUsa['datePub']; ?></small></p>
							<p><iframe style="width: 900px;height: 500px;" class="img-fluid border border-dark"  src="<?php echo $donneesMusiqueUsa['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
							<p><strong>Description: </strong><?php echo nl2br(htmlspecialchars($donneesMusiqueUsa['description'])); ?></p>


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


									<div class="fb-share-button btn btn-fluid btn-outline-info" data-href="http://localhost/phpProcedural/kbz/rapUsaCommentaire.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FphpProcedural%2Fkbz%2FrapUsaCommentaire.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								</div>
								<div class="btnSociaux">
									
									<a href="" class="btn btn-fluid btn-outline-primary"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
									<script type="IN/Share" data-url="http://localhost/phpProcedural/kbz/rapUsaCommentaire.php" ></script></a>

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


									<div class="fb-share-button btn btn-fluid btn-outline-secondary" data-href="http://localhost/phpProcedural/kbz/rapUsaCommentaire.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FphpProcedural%2Fkbz%2FrapUsaCommentaire.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								</div>
							</div>


							<!-- bloc commentaire -->
							<div id="commentaire">
								<h1 class="text-primary">commentaire</h1>
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>

								<div class="fb-comments" data-href="http://localhost/phpProcedural/kbz/rapUsaCommentaire.php?ref=<?php echo $donneesMusiqueUsa['id']; ?>" data-width="100%" data-numposts="5"></div>
							</div>



						</div>
					</div>

					<div class="col-md-3 col-sm-12 kbzTvDroite" style="padding: 0px;">
						<div class="kbzTvDroiteContenu" >
							<h3><img src="images/blog-symbol.png"> Mêmes catégories</h3>
							<?php while($donneesMusiqueUsaMm=$reqMusiqueUsaMm->fetch()) { ?>
							<p><a href="rapUsaCommentaire.php?ref=<?php echo $donneesMusiqueUsaMm['id']; ?>"><small style=""><?php echo $donneesMusiqueUsaMm['titre'] ?></small></a></p>
							<p><a href="rapUsaCommentaire.php?ref=<?php echo $donneesMusiqueUsaMm['id']; ?>"><iframe width="350" height="190" src="<?php echo $donneesMusiqueUsaMm['url'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><mark style="background-color: green;"> <a href="rapUsaCommentaire.php?ref=<?php echo $donneesMusiqueUsaMm['id'] ?>" style="color: #fff;">Voir détails</a></mark></p><hr class="separator">
							<hr class="separator" style="border:1px ridge rgb(191,191,192);">
							<?php } $reqMusiqueUsaMm->closeCursor(); ?>
						</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>