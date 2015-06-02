<?php

function add_article(){
	$newDAO = new DAO (myDB::getInstance());
	if (!empty($_POST['libelle_article']) && !empty($_POST['contenu_article'])){
		setlocale ( LC_TIME, 'fra_fra' );
		$date = strftime ( '%Y-%m-%d %H:%M:%S' );
		$nouveauArticle = articleModel(array(
				"libelle_article" => $_POST["libelle_article"],
				"date_article" => $date,
				"contenu_article" => $_POST["contenu_article"]
		));
		print_r ( $nouveauArticle );
		$newDAO->insert ( $nouveauArticle );
	};

	
}

?>