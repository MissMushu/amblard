	<?php
//Model_Verification::CheckDroitsRedac ();
class Administration extends Controller {
	//les fonctions affichent les vues appropriées 
	function index() {
		$this->render ( 'index' );
	}

	function gestionArticle() {
		$this->render ( 'gestionArticle' );
	}
	
	function gestionContenu() {
		$this->render ( 'gestionContenu' );
	}
	
	function gestionDroit() {
		$this->render ( 'gestionDroit' );
	}

	function gestionMenu() {
		$this->render ( 'gestionMenu' );
	}

}
?>
