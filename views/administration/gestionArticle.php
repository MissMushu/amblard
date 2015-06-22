
<title>Rédaction d'un article</title>


<script src="<?php echo WEBROOT?>ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo WEBROOT?>css/article/style_creation_article.css" />


<h3>Rédiger un article</h3>

<div class="row">
	<form class="col s12" method="post" action="<?php echo WEBROOT?>article/add_article">
		<div class="row">
			<div class="input-field col s6">
				<input name="libelle_article" id="libelle_article" type="text" class="validate"> <label for="libelle_article">Libellé de l'article</label>
			</div>
		</div>

		<div id="miseEnPlaceCkeditor">
			<textarea name="contenu_article" id="contenu_article" rows="10" cols="20"></textarea>

			<script>
	                CKEDITOR.replace( 'contenu_article' );
	            </script>

		</div>
		<button class="btn waves-effect waves-light" type="submit">
			Enregistrer et Publier <i class="mdi-content-send right"></i>
		</button>

	</form>
</div>

<h3>Modifier ou supprimer un article</h3>
<?php

ArticleModel::afficherArticleAdmin();
?>


