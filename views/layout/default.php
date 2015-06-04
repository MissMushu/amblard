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
		<h3>Lycée Professionnel Amblard Des Métiers D'Art Bijouterie-Joaillerie</h3>
	</div>

</div>
<div id="menu">
	<ul id="Presentation" class="dropdown-content">
		<li><a href="#!">Présentation du lycée</a></li>
		<li class="divider"></li>
		<li><a href="#!">Note de la proviseur</a></li>
		<li class="divider"></li>
		<li><a href="#!">Le lycée dans la presse</a></li>


	</ul>
	<ul id="FormationsBijouterie" class="dropdown-content">
		<li><a href="#!">Candidature Bijouterie</a></li>
		<li class="divider"></li>		
		<li><a href="#!">DMA Art du Bijou <br> et du Joyau</a></li>
		<li class="divider"></li>
		<li><a href="#!">Cap Bijouterie-Joaillerie</a></li>
		<li class="divider"></li>
		<li><a href="#!">Les Olympiades <br> des Métiers</a></li>
		<li class="divider"></li>
		<li><a href="#!">Section européenne</a></li>
		<li class="divider"></li>
		<li><a href="#!">On en parle jusqu'en Asie</a></li>


	</ul>
	<ul id="FormationsMenuiserie" class="dropdown-content">
		<li><a href="#!">Bac Pro TFBMA</a></li>
		<li class="divider"></li>
		<li><a href="#!">Des réalisations de<br>nos élèves de Bac</a></li>
		<li class="divider"></li>
		<li><a href="#!">Cap Menuisier<br>Fabricant</a></li>
		<li class="divider"></li>
		<li><a href="#!">Section<br>Européenne</a></li>
	</ul>
	<ul id="FormationsTertaire" class="dropdown-content">
		<li><a href="#!">Bac Pro Vente</a></li>
		<li class="divider"></li>
		<li><a href="#!">Bac Pro Commerce</a></li>
		<li class="divider"></li>
		<li><a href="#!">Bac Pro<br>Acceuil-Relation<br>Clients et Usagers</a></li>
		<li class="divider"></li>
		<li><a href="#!">Cap Employé de<br>Commerce<br>Multi-Spécialités</a></li>
		<li class="divider"></li>
		<li><a href="#!">Section Européenne</a></li>
	</ul>

	<ul id="Secretariat" class="dropdown-content">
		<li><a href="#!">Service Intendance<br>Présentation</a></li>
		<li class="divider"></li>
		<li><a href="#!">Restauration</a></li>
		<li class="divider"></li>
		<li><a href="#!">Stages en entreprise</a></li>
		<li class="divider"></li>
		<li><a href="#!">Document à télécharger</a></li>
	</ul>

	<ul id="vieScolaire" class="dropdown-content">
		<li><a href="#!">Mini Stage</a></li>
		<li class="divider"></li>
		<li><a href="#!">Entreprise</a></li>
		<li class="divider"></li>
		<li><a href="#!">Internat</a></li>
		<li class="divider"></li>
		<li><a href="#!">UNSS</a></li>
		<li class="divider"></li>
		<li><a href="#!">Mobilité</a></li>
	</ul>
</div>
<nav style="padding-right: 20px">

	<div class="nav-wrapper" style="padding-right: 20px">
		<div class="right hide-on-med-and-down"
			style="bottom: 45px; right: 24px;">
			<a href="<?php echo WEBROOT?>auth/"
				class="waves-effect waves-light btn">Connexion</a>
		</div>
		<div class="nav-wra" style="padding-right: 155px">
			<ul class="right hide-on-med-and-down">
				<!--	<li><a href="sass.html">Sass</a></li>
				<li><a href="components.html">Components</a></li>-->
				<!-- Dropdown Trigger -->
				<li><a class="dropdown-button" data-constrainwidth="false" href="#!"
					data-activates="Presentation">Présentation<i
						class="mdi-navigation-arrow-drop-down right"></i></a></li>
				<li><a class="dropdown-button" href="#!"
					data-activates="FormationsBijouterie">Métiers de la Bijouterie<i
						class="mdi-navigation-arrow-drop-down right"></i></a></li>
				<li><a class="dropdown-button" href="#!"
					data-activates="FormationsMenuiserie">Métiers du Bois<i
						class="mdi-navigation-arrow-drop-down right"></i></a></li>
				<li><a class="dropdown-button" href="#!"
					data-activates="FormationsTertaire">Métiers du Tertaire<i
						class="mdi-navigation-arrow-drop-down right"></i></a></li>
			
				<li><a class="dropdown-button" href="#!"
					data-activates="vieScolaire">Vie Scolaire<i
						class="mdi-navigation-arrow-drop-down right"></i>
				</a></li>
				<li><a class="dropdown-button" href="#!"
					data-activates="Secretariat">Secretariat-Intendance<i
						class="mdi-navigation-arrow-drop-down right"></i></a></li>
			</ul>
		</div>




	</div>
</nav>
<body>
	<div id="corps">
<?php
echo $content_for_layout?>
</div>
</body>

</html>
