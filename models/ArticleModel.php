<?php

class ArticleModel extends TableObject
{

    public function display()
    {
        foreach ($this->getFields() as $rows) {
            echo $rows . "\n";
        }
        echo "\n";
    }

    /*
     * Affiche les donnée sous forme de tableau
     */
    public function toTableRow()
    {
        echo "<li>
			<div class='collapsible-header'>$this->libelle_article <div class='right'>$this->date_article</div></div>
			<div class='collapsible-body'>".htmlspecialchars_decode($this->contenu_article)."<br>
			<div class='center'>$this->id_redacteur</div></div>
			</li>";
    }

    /*
     * Affiche les données sous forme de formulaire
     */
    public function ToFormArticleAdmin()
    {
        echo '<li>
<div class="collapsible-header" id="libelle_modifie" name="libelle_modifie">' . $this->libelle_article . '</div>
<div class="collapsible-body">

	                		
		<form class="formArticleAdmin" action="' . WEBROOT . 'article/gestion_article" method="post">
		    <input type="hidden" id="id_modifie" name="id_modifie" value="' . $this->id_article . '">
		<textarea rows="10" cols="50" id="' . $this->id_article . 'contenu_modifie" name="' . $this->id_article .
             'contenu_modifie" >', $this->contenu_article, '</textarea>
					<script type="text/javascript">
						CKEDITOR.replace( "' . $this->id_article . 'contenu_modifie" );
					</script>
						    						    				<div class="row">
				 <button class="btn waves-effect waves-light green darken-1" type="submit" id="modifier" name="modifier"><i class="mdi-image-edit left"></i>Modifier</button>
				
<button class="btn waves-effect waves-ligh red darken-4 supprimer" type="submit" id="supprimer" name="supprimer"><i class="mdi-action-delete right"></i>Supprimer</button>
				</div>
				</div>
				</form>

		</li>';
    }

    public function toTableArticle()
    {
        echo '<table class="hoverable">';
        echo '<tr class="premiereligne"><th>"' . $this->libelle_article . '">/th><td class = date>' . $this->date_article . '</td></tr>';
        echo '<tr colspan="2"><td class = "contenu">' . $this->contenu_article . '</td></tr>';
        echo '</table>';
        echo '</br>';
    }

    /*
     * fonction qui permet d'afficher les articles
     */
    static public function afficherArticle()
    {
        $articlesDAO = new ArticleDAO(MyDB::getInstance());
        $article = $articlesDAO->getAll();
        echo '<ul class="collapsible" data-collapsible="accordion">';
        foreach ($article as $articles) {
            $articles->toTableRow();
        }
        echo '</ul>';
    }

    static public function afficherArticleAdmin()
    {
        $ArticleDAO = new ArticleDAO(MyDB::getInstance());
        $article = $ArticleDAO->getAll();
        echo '<table class="striped">';
        foreach ($article as $articles) {
            echo '<ul class="collapsible" data-collapsible="accordion">';
            $articles->ToFormArticleAdmin();
            echo '</ul>';
        }
        echo '</table>';
    }
    
    static function affichearticlesGraphic() {
    	$aDAO = new ArticleDAO( MyDB::getInstance () );
    	$nbArticles = $aDAO->getNbArticle ();
    
    	$parPage = 6;
    
    	$nbPage = ceil ( $nbArticles / $parPage );
    	if (isset ( $_GET ['page'] ) && $_GET ['page'] > 0 && $_GET ['page'] <= $nbPage) {
    		$cPage = $_GET ['page'];
    	} else {
    		$cPage = 1;
    	}
    	$parPage = 6;
    
    	$nbPage = ceil ( $nbarticles / $parPage );
    	$articles = $aDAO->getAllForPagination ( ($cPage - 1) * $parPage, $parPage );
       	$numero = "";
    	if (! isset ( $_GET ['page'] )) {
    		$numero = 1;
    	} else {
    		$numero = $_GET ['page'];
    	}
    
    	echo ' <ul class="pagination>
        <li>
        <a href=' . WEBROOT . '?page=';
    	if ($numero != 1) {
    		$precedent = $numero - 1;
    		echo $precedent;
    	} else {
    		echo 1;
    	}
    	echo ' aria-label="Previous">
    
        <span aria-hidden="true">&laquo;</span>
        </a>
        </li>';
    
    	for($i = 1; $i <= $nbPage; $i ++) 		// On fait notre boucle
    	{
    			
    		echo '<li><a href=' . WEBROOT . '?page=' . $i . '>' . $i . '</a></li>';
    	}
    
    	if ($numero < $nbPage) {
    		$suivant = $numero + 1;
    		echo '<li> <a href=' . WEBROOT . '?page=' . $suivant . ' aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
        </ul>';
    	}
    }

    public function afficherRedacteur()
    {
        $ArticleDAO = new ArticleDAO(MyDB::getInstance());
        $redacteur = $ArticleDAO->redacteur();
    }
}
?>