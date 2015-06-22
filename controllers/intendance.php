<?php
class Intendance extends Controller {
	//permet de uploader un fichier
	function upload_file(){
		$stock = WEBROOT.files;	
		//le fichier userfile sera stocker dans $stock, donc dans le dossier files
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
	function gestionMenu(){
		$this->render("gestionMenu");
	}
	
	
	
	
	
	
	
	
	
	
	
}
?>
