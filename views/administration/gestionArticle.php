<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Rédaction d'un article</title>
<link type="text/css" rel="stylesheet"
	href="../../materialize/css/materialize.min.css"
	media="screen,projection" />

<script src="../../ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/article/style_creation_article.css"/>

</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
      
    <div class="row">  
	<form class="col s12" >
	<div class="row">
	<div class="input-field col s6">
          <input id="libelle_article" type="text" class="validate">
          <label for="libelle_article">Libellé de l'article</label>
     </div>
     </div>
     
		<div id="miseEnPlaceCkeditor">
			<textarea name="redactionArticle" id="redactionArticle" rows="10" cols="20"></textarea>

			<script>
                CKEDITOR.replace( 'redactionArticle' );
            </script>
            
		</div>
		  <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer et Publier
    		<i class="mdi-content-send right"></i>
  		</button>
   
	</form>
</div>
	<div><?php articleModel::afficherArticleAdmin()?></div>
	
	</body>
</html>