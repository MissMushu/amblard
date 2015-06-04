<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="application/xhtml+xml"
	charset="UTF-8" />
<script src="<?php echo WEBROOT?>ckeditor/ckeditor.js"></script>
<link type="text/css" rel="stylesheet"
	href="<?php echo WEBROOT?>materialize/css/materialize.min.css"
	media="screen,projection" />


<title>Lycée Professionnel Amblard des Métiers d'art
	Bijouterie-Joaillerie</title>

</head>

<script type="text/javascript"
	src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo WEBROOT?>materialize/js/materialize.min.js"></script>
<div id="entete">
	<div id="logo">
		<img src="<?php echo WEBROOT?>img/logo.png" class="logo" />
	</div>
	<div>
		<h1>Lycée Professionnel Amblard Des Méties D'Art Bijouterie-Joaillerie</h1>
	</div>

	<div id="mon_compte">
		<p class="mon_login divlogin"></p>
	</div>
	<div></div>
</div>
<ul id="Presentation" class="dropdown-content">
	<li><a href="#!">Note de la proviseur</a></li>
	<li><a href="#!">Le lycée dans la presse</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>
<ul id="FormationsBijouterie" class="dropdown-content">
	<li><a href="#!">Candidature Bijouterie</a></li>
	<li>
		<ul id="sousmenu" >
			<li><a href="#!">Candidature Bijouterie</a></li>
			<li><a href="#!">DMA Art du Bijou et du Joyau</a></li>
			<li><a href="#!">Cap Bijouterie-Joaillerie</a></li>
			<li><a href="#!">Les olympiades des métiers</a></li>
			<li><a href="#!">Section européenne</a></li>
		</ul>
	</li>
	<li class="divider"></li>
	<li><a href="#!">On en parle jusqu'en Asie</a></li>


</ul>
<ul id="FormationsMenuiserie" class="dropdown-content">
	<li><a href="#!">one</a></li>
	<li><a href="#!">two</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>
<ul id="FormationsTertaire" class="dropdown-content">
	<li><a href="#!">one</a></li>
	<li><a href="#!">two</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>

<ul id="Secretariat" class="dropdown-content">
	<li><a href="#!">one</a></li>
	<li><a href="#!">two</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>
<nav style="padding-right: 20px">

	<div class="nav-wrapper">
		<div class="right hide-on-med-and-down">
			<a href="<?php echo WEBROOT?>auth/"
				class="waves-effect waves-light btn">Connexion</a>
		</div>
		<!--	<a href="#!" class="brand-logo">Logo</a> -->
		<ul class="right hide-on-med-and-down">
			<!--	<li><a href="sass.html">Sass</a></li>
				<li><a href="components.html">Components</a></li>-->
			<!-- Dropdown Trigger -->
			<li><a class="dropdown-button" data-constrainwidth="false" href="#!"
				data-activates="Presentation">Présentation<i
					class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<li><a class="dropdown-button" href="#!"
				data-activates="FormationsBijouterie">Les métiers de la bijouterie<i
					class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<li><a class="dropdown-button" href="#!"
				data-activates="FormationsMenuiserie">FormationsMenuiserie<i
					class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<li><a class="dropdown-button" href="#!"
				data-activates="FormationsTertaire">FormationsTertaire<i
					class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<li><a class="dropdown-button" href="#!" data-activates="Secretariat">Secretariat<i
					class="mdi-navigation-arrow-drop-down right"></i></a></li>

		</ul>




	</div>
</nav>
<body>
	<div id="corps">
<?php
echo $content_for_layout?>
</div>
</body>

</html>