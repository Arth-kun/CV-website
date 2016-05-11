<!DOCTYPE HTML>
<html>
<head>

	<title>Arthur Cougé</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	<link rel="stylesheet" href="styles/style.css">

	<link rel="stylesheet" type="text/css" href="fonts/CODE Bold.otf">
	<link rel="stylesheet" type="text/css" href="fonts/big_noodle_titling.ttf">
	<link rel="stylesheet" type="text/css" href="fonts/coolvetica.ttf">

	<script src="scripts/jquery-2.1.4.js"></script>
	<script src="scripts/script.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->

</head>
<body>
	<div class="container">

		<header id="entete" class="row">
			<!--Header-->
			<div class="col-lg-4">
				<!--logo-->
				<img id="logo" src="img/Header/logo/logov2.png">
			</div>

			<div class="col-lg-6" id="titreh">
				<!--Titre-->
				<h1 class="titreh" id="titreh1">Développeur Web</h1>
				<h1 class="titreh" id="titreh2">En recherche de stage</h1>
				<h2 class="titreh" id="titreh3">Arthur Cougé</h2>
			</div>

			<div class="col-lg-2" id="photoh">
				<!--Photo-->
				<img id="photo" src="img/Header/Photo/photo_CV.png">
			</div>

		</header>

		<nav id="navbar" class="row">
			<!--Navbar-->
			<div class="col-lg-3" id="listComp">
				<!--Compétences en mode déroulant-->
				<h1 class="hoverComp" id="titreComp"><span>Compétences<!--FONT COOLVETICA--></a></h1>
				<ul class="visibiliti" id="competences">
					<li class="competence" id="php"><span>PHP</span></li>
					<li class="competence" id="htmlCss"><span>HTML/CSS</span></li>
					<li class="competence" id="javascript"><span>JAVASCRIPT</span></li>
					<li class="competence" id="java"><span>JAVA</span></li>
					<li class="competence" id="wordpress"><span>WORDPRESS</span></li>
					<li class="competence" id="apache"><span>APACHE</span></li>
					<li class="competence" id="linux"><span>LINUX</span></li>
					<li class="competence" id="windows"><span>WINDOWS</span></li>
					<li class="competence" id="tcpIp"><span>TCP/IP</span></li>
					<li class="competence" id="anglais"><span>ANGLAIS</span></li>
				</ul>
			</div>

			<div class="col-lg-1" id="splitComp">
				<div class=" hoverComp" id="triangle">
						<span><img src="img/Navbar/triangle.png"><span>
				</div>

				<div id="splitBarComp">
					<img src="img/Navbar/rectangle_split.png">
				</div>
			</div>

			<div class="col-lg-6" id="coordonees">
				<!--Coordonées-->
				<!--FONT COOLVETICA-->
				<h1 class="coordonee" id="tel">Tél : 06 13 41 35 31</h1>
				<h1 class="coordonee" id="mail">Mail : arthur.couge@gmail.com</h1>
			</div>

			<div class="col-lg-2" id="aboutMe">
				<!--ABOUT ME A METTRE ICI-->
				<!--FONT COOLVETICA-->
				<!--NON DEFINI :/-->
				<h1 id="titreAboutMe"><a id="lienAboutMe" href="#">ABOUT ME</a></h1>
			</div>

		</nav>

		<section id="experiences">
			<!--Experiences-->
			<h1 id="titreExp">Expériences</h1>

			<div id='bodyExp'>
				<aside id="lateralBar">
					<!--BAR LATERAL-->
				</aside>

				<article id="experience1">
					<!--TEXTE-->
					<h2 class='titreExp' id="titreExp1">Mi-juillet à mi-août 2015 :</h2>
					<p class='textExp' id="textExp1">
						<!--FONT COOLVETICA-->
						CDD d’un mois 
						à S.A.S. Intervalles groupe GAMECASH 
						à Angers.
					</p>
					<p class='textExp'>
						<span class='activite' id='activite1'>Activités :</span> Mise à jour du contenu du site 
						internet Gamecash.fr, webmarketing
						(Analytics, Twitter), gestion de concours, 
						mise à jour de base de données et création 
						d’infographie pour les magasins du réseau.
					</p>
				</article>

				<article id="experience2">
					<!--TEXTE-->
					<h2 class='titreExp' id="titreExp2">Septembre 2014 à février 2015 :</h2>
					<p class='textExp' id="textExp2">
						<!--FONT COOLVETICA-->
						Emploi de vendeur au magasin GAME CASH 
						à Angers.
					</p>
					<p class='textExp'>
						<span class='activite' id='activite1'>Activités :</span> Vente, tenu de caisse, gestion
						de stock, reconditionnement de produits,
						conseil client.
					</p>
				</article>
			</div>
			
		</section>

		<section class="row" id="formations">
			<!--Formations-->
			<h1 id="titreForma">Formations</h1>
			<article class="col-lg-5" id="enCours">
				<p id="textForm1">
					<!--EN COURS-->
					En cours : Apprentissage d’un 
					titre professionel de niveau III
					“Développeur Logiciel” à l’IMIE,
					école de la filière numérique.
				</p>
			</article>

			<div class="col-lg-2" id="middleBar">
				<!--BAR  MILLIEU-->
			</div>

			<article class="col-lg-5" id="acquis">
				<p id="textForm2">
					<!--ACQUIS-->
					Acquis : Diplôme du Baccalauréat
					général série scientifique préparé
					au lycée David D’angers à Angers
					en juin 2014.
				</p>
			</article>

		</section>

		<footer class="row" id="basPage">
			<!--Footer-->
			<article class="col-lg-6">
				<!--PROFIL OU PAS, PAS SÛR-->
			</article>

			<article class="col-lg-6" id="reseauxSociaux">
				<!--CONTACT RS-->
			</article>

		</footer>

	</div>
</body>
</html>