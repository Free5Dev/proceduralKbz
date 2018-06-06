<?php 
	//connexion à la bdd
	require_once("connexion.inc.php");
	if(isset($_GET['ref']))
	{
		$reqBlog=$bdd->prepare("SELECT b.id,b.titre,b.commentaire,b.url,date_format(dateBlog,'%d/%m/%Y à %Hh%imin%ss') as dateBlog,m.nom FROM blog as b,membre as m WHERE b.idMembre=m.id and b.id=?");
		$reqBlog->execute(array($_GET['ref']));
		$donneesBlog=$reqBlog->fetch();

		// musique 
			$reqZic=$bdd->query("SELECT nomArtiste,titre,url,categorie FROM musique as m,musiquecategorie mk WHERE m.idMusiqueCategorie=mk.id ORDER BY m.ID DESC LIMIT 3");
			// top kbz tv
			require_once("connexion.inc.php");
			$reqKbzTv=$bdd->query("SELECT k.id,k.titre,k.url,k.invite,k.realisateur,k.description,date_format(dateTv, '%d/%m/%Y à %Hh%imin%ss') as dateTv,k.url,m.nom FROM kbztv as k, membre as m where k.idMembre=m.id order by k.id desc LIMIT 1");
			$donneesKbzTv=$reqKbzTv->fetch();
	}
	else
	{
		header("Location:blog.php");
	}
	$reqKbzTv=$bdd->query("SELECT k.id,k.titre,k.url,k.invite,k.realisateur,k.description,date_format(dateTv, '%d/%m/%Y à %Hh%imin%ss') as dateTv,k.url,m.nom FROM kbztv as k, membre as m where k.idMembre=m.id order by k.id desc");
	// musique usa
	$reqZicUsa=$bdd->query("SELECT nomArtiste,titre,categorie FROM musique as m,musiquecategorie mk WHERE m.idMusiqueCategorie=mk.id  and m.idMusiqueCategorie=1 ORDER BY m.ID DESC LIMIT 3");
	// musique fr
	$reqZicFr=$bdd->query("SELECT nomArtiste,titre,categorie FROM musique as m,musiquecategorie mk WHERE m.idMusiqueCategorie=mk.id  and m.idMusiqueCategorie=2 ORDER BY m.ID DESC LIMIT 3");
	// musique afro
	$reqZicAfro=$bdd->query("SELECT nomArtiste,titre,categorie FROM musique as m,musiquecategorie mk WHERE m.idMusiqueCategorie=mk.id  and m.idMusiqueCategorie=3 ORDER BY m.ID DESC LIMIT 3");
	// musique jami
	$reqZicJk=$bdd->query("SELECT nomArtiste,titre,categorie FROM musique as m,musiquecategorie mk WHERE m.idMusiqueCategorie=mk.id  and m.idMusiqueCategorie=4 ORDER BY m.ID DESC LIMIT 3");
	// blog
	$reqBlog=$bdd->query("SELECT titre,url,date_format(dateBlog,'%d/%m/%Y à %Hh%imin%ss') as dateBlog FROM blog ORDER BY ID DESC LIMIT 3");
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
				<h1><span class="text-danger">K.B.Z</span> Blog rétrouver toute les dernières actualiés du web...Krah Krah   <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""> <img src="images/laughing.png" alt=""></h1>
				<div class="row">
					<div class="col-md-9  col-sm-12 kbzTvGauche">
						<div class="kbzTvGaucheContenu">
							<h2><?php echo $donneesBlog['titre']; ?></h2>
							<p class="petit"><strong>Rédacteur: </strong><img src="images/man-user.png" alt=""><small><?php echo $donneesBlog['nom']; ?></small> <strong>Date: </strong> <img src="images/calendar-with-a-clock-time-tools.png" alt=""> <small> le <?php echo $donneesBlog['dateBlog']; ?></small></p>
							<p><iframe style="width: 900px;height: 500px;" class="img-fluid border border-dark"  src="<?php echo $donneesBlog['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
							<p><strong>Description: </strong><?php echo $donneesBlog['commentaire']; ?></p>


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


									<div class="fb-share-button btn btn-fluid btn-outline-info" data-href="http://localhost/phpProcedural/kbz/kbzTv.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FphpProcedural%2Fkbz%2FkbzTv.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								</div>
								<div class="btnSociaux">
									
									<a href="" class="btn btn-fluid btn-outline-primary"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
									<script type="IN/Share" data-url="http://localhost/phpProcedural/kbz/kbzTv.php" ></script></a>

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

								<div class="fb-comments" data-href="http://localhost/phpProcedural/kbz/blogCommentaire.php?ref=<?php echo $donneesBlog['id']; ?>" data-width="100%" data-numposts="5"></div>
							</div>



						</div>
					</div>

					<div class="col-md-3 col-sm-12 kbzTvDroite" style="padding: 0px;">
						<div class="kbzTvDroiteContenu" >
							<h3><img src="images/blog-symbol.png"> top Hits</h3>
							<?php while($donneesZic=$reqZic->fetch()) { ?>
							<p><a href="index.php"><small style=""><?php echo $donneesZic['titre']; ?></small></a></p>
							<p><a href="index.php"><iframe width="350" height="190" src="<?php echo $donneesZic['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a></p>
							<p><mark style="background-color: green;"> <a href="index.php" style="color: #fff;">Voir détails</a></mark></p><hr class="separator">
							<?php } $reqZic->fetch(); ?>
							<hr class="separator" style="border:1px ridge rgb(191,191,192);">
							
						</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>