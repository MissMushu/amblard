	<?php
//Model_Verification::CheckDroitsAdmin ();
class Administration extends Controller {
	function index() {
		$this->render ( 'index' );
	}

	function gestionArticle() {
		$this->render ( 'gestionArticle' );
	}
	
	function gestionContenu() {
		$this->render ( 'gestionContenu' );
	}


}
?>
