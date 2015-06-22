<?php
class Article extends Controller {
	function add_article() {
		if (! empty ( $_POST ['libelle_article'] ) && ! empty ( $_POST ['contenu_article'] )) {
			setlocale ( LC_TIME, 'fra_fra' );
			$date = strftime ( '%Y-%m-%d %H:%M:%S' );
			$aDAO = new ArticleDAO ( MyDB::getInstance () );
			
			$nouveau = new ArticleModel ( array (
					"libelle_article" => $_POST ["libelle_article"],
					"date_article" => $date,
					"contenu_article" => htmlspecialchars($_POST ["contenu_article"]),
					"id_redacteur" => "1" 
			) );
			print_r ( $nouveau );
			$aDAO->insert ( $nouveau );
		//	header ( "location: " . WEBROOT . "administration/gestionArticle" );
		}
		;
	}
	function gestion_article() {
		$aDAO = new ArticleDAO ( MyDB::getInstance () );
		if(isset($_POST['modifier'])){
		$a_modifier = $aDAO->getOne($_POST['id_modifie']);
		$modifie = new ArticleModel ( array (
				"id_article" => $a_modifier->id_article,
				"libelle_article" => $a_modifier->libelle_article,
				"date_article" => $a_modifier->date_article,
				"contenu_article" => htmlspecialchars($_POST [''.$a_modifier->id_article.'contenu_modifie']),
		        "id_redacteur" => $a_modifier->id_redacteur,
		) );
		print_r($modifie);
		$aDAO->update ( $modifie );
		header ( "location: " . WEBROOT . "administration/gestionArticle" );
		}else if (isset ( $_POST ['supprimer'] )) {
			
			$delete = $aDAO->getOne($_POST['id_modifie']);
			
			$aDAO->delete ( $delete );
			header ( "location: " . WEBROOT . "administration/gestionArticle" );
		}
		
		function index() {
			$this->render ( 'index' );
		}
	}
}
?>