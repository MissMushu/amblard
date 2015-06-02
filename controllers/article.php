<?php
class Article extends Controller {
function add_article(){
	
	
	if (!empty($_POST['libelle_article']) && !empty($_POST['contenu_article'])){
		setlocale ( LC_TIME, 'fra_fra' );
		$date = strftime ( '%Y-%m-%d' );
		$aDAO = new ArticleDAO (MyDB::getInstance());
		
	$nouveau = new ArticleModel(array(
				"libelle_article" => $_POST["libelle_article"],
				"date_article" => $date,
				"contenu_article" => $_POST["contenu_article"],
				"id_redacteur"=> "moi"
				));
		print_r ( $nouveau );
		$aDAO->insert($nouveau);
	};

	
}
function index(){
    $this->render('index');
}

}
?>