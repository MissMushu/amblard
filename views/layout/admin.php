<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"
	href="<?php echo WEBROOT;?>css/layout/style_default.css" />
<meta http-equiv="Content-Type" content="application/xhtml+xml"
	charset="UTF-8" />
<script src="<?php echo WEBROOT?>ckeditor/ckeditor.js"></script>
<link type="text/css" rel="stylesheet"
	href="<?php echo WEBROOT?>materialize/css/materialize.min.css"
	media="screen,projection" />

<link rel="icon" type="image/png"
	href="<?php echo WEBROOT;?>img/favicon.png" />
<title>Lycée Professionnel Amblard des Métiers d'art
	Bijouterie-Joaillerie</title>

<script type="text/javascript"
	src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo WEBROOT?>materialize/js/materialize.min.js"></script>
</head>

<body>
	<div id="superglobal">
		<div id="global">
			<header>
				<div id="logo">
					<img src="<?php echo WEBROOT?>img/logo.png" class="logo" />
				</div>
				<div>
					<h3>Lycée Professionnel Amblard Des Métiers D'Art
						Bijouterie-Joaillerie</h3>
				</div>

				<nav style="padding-right: 20px">
					<div class="nav-wrapper" style="padding-right: 20px">
						<div menu>
							<ul id="menu_ul">
				<?php MenuModel::recupMenu();?>
				
				</ul>
							<a href="<?php echo WEBROOT?>auth/"
								class="waves-effect waves-light btn">Connexion</a>
						</div>
					</div>
				</nav>
				<div class="row" id="searchcss ">
					<form>
						<div class="input-field col s2 offset-s10">
							<input id="search" type="search" required> <label for="search"><i
								class="mdi-action-search"></i></label> <i
								class="mdi-navigation-close"></i>
						</div>
					</form>
				</div>
			</header>

			<div id="corps">
<?php
echo $content_for_layout?>
</div>

		</div>
		<div id=footer>
			<footer class="page-footer">
				<div class="container">
					<div class="row">
						<div class="col l6 s12">
							<h5 class="white-text">Contact</h5>
							<p class="grey-text text-lighten-4">
								Lycée Professionnel Amblard <br> 43 Rue Amblard, 26000 Valence <br> <i class="tiny mdi-maps-local-phone">04.75.82.12.00</i>
							</p>

							<h5 class="white-text">Liens utiles</h5>
							<ul>
								<li><a class="grey-text text-lighten-3" href="#!">Logiciel Intranet</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">Pronote</a></li>
							</ul>
						</div>
						<div class="col l6 s12">

							<div class="col l4 offset-l4 s12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.7798169131593!2d4.901198000000004!3d44.92781299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f55780d2886fe7%3A0xbfeff8b3d0c37795!2sLyc%C3%A9e+Professionnel+Amblard!5e0!3m2!1sfr!2sfr!4v1434614709892" width="350" height="200" frameborder="0" style="border: 0"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						© 2014 Copyright Morgane Le Calvez - Fakri Tis <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>
