<title>Rédaction d'un article</title>
<script src="<?php echo WEBROOT?>ckeditor/ckeditor.js"></script>

<div class="row">
	<form class="col s12" method="post"
		action="<?php echo WEBROOT?>intendance/add_contenu">
		<div class="row">
			<div class="input-field col s6">
				<input name="libelle_article" id="libelle_article" type="text"
					class="validate"> <label for="libelle_article">Libellé de l'article</label>
			</div>
		</div>

		<div id="miseEnPlaceCkeditor">
			<textarea name="contenu_article" id="contenu_article" rows="10"
				cols="20"></textarea>

			<script>
                CKEDITOR.replace( 'contenu_article' );
            </script>

		</div>
		<button class="btn waves-effect waves-light" type="submit">
			Enregistrer et Publier <i class="mdi-content-send right"></i>
		</button>

	</form>
</div>
<div class="row">

	<form action="#" method="post" enctype="multipart/form-data" action="<?php echo WEBROOT?>intendance/upload_file">
		<div class="file-field input-field">
			<input class="file-path validate" type="text" />
			<div class="btn">
				<span>File</span> 
				<input type="file" name="userfile"/>
			</div>
		</div>
	</form>


</div>
