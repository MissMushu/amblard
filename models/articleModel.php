<?php
class articleModel extends tableObject{
	public function display(){
		foreach ($this->getFields() as $rows){
			echo $rows . "\n";
		}
		echo "\n";
	}
	
	public function toTableRow(){
		echo "<tr>
			<td>$this->libelle_article</td>	
			<td>$this->date_article</td>	
			<td>$this->contenu_article</td>
			<td>$this->id_redacteur</td>	
			</tr>";
	}
	
	public function ToFormArticleAdmin(){
		echo '<form class="col s12">
		<div class="row">
		<div class="input-field col s6">
		<input placeholder="Placeholder" id="libelle_modifie" name="libelle_article" value="$this->libelle_article" type="text" class="validate">
		<label for="libelle_article">Libelle</label>
		</div>
		<div class="input-field col s6">
		<input id="date_article" name="date_article" value="$this->date_article" type="text" class="validate">
		<label for="date_article">Date</label>
		</div>
		<div class="input-field col s12">
			<textarea id="contenu_article" class="materialize-textarea" value="$this->contenu_article"></textarea>
        	<label for="textarea1">Textarea</label>
		</div>
		</div>
		</form>';
	}
	
	public function toTableArticle(){
		
		echo '<table class="hoverable">';
		echo '<tr class="premiereligne"><th>"' . $this->libelle_article . '">/th><td class = date>' . $this->date_article . '</td></tr>';
		echo '<tr colspan="2"><td class = "contenu">' . $this->contenu_article . '</td></tr>';
		echo '</table>';
		echo '</br>';
		
			
	}
	
	static public  function afficherArticle(){
		$articlesDAO = new articleDAO(myDB::getInstance());
		$article = $articlesDAO->getAll();
		
		foreach ($article as $articles){
			$articles->toTableRow();
		}
	}
	
	static public function afficherArticleAdmin(){
		$articlesDAO = new articleDAO(myDB::getInstance());
		$article = $articlesDAO->getAll();
		echo '<table class="striped">';
		foreach ( $article as $articles ) {
			echo '<div class="row">';
			$articles->ToFormArticleAdmin();
			echo '</div>';
		}
	}
	
	
}