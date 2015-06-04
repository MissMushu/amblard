<?php
class Intendance extends Controller {
	function upload_file(){
		$stock = WEBROOT.files;	
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $stock.$_FILES['userfile']['name']))
		{
			echo "Le fichier ".$_FILES['userfile']['name'].
			" a été téléchargé avec succès dans ".$stock;
		}
		
	}
	
	function add_contenu(){
		
	}
	
	function gestionContenu(){
		$this->render("gestionContenu");
	}
}
?>
