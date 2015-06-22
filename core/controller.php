<?php

class Controller
{
// défini un tableau
    var $vars = array();
//défini un layout défault
    var $layout = 'default';
//permet de pousser des varables $d dans un tableau
    function set($d)
    {
    	//fusionne les données qui on été envoyé avec les données qui sont dans $d
        $this->vars = array_merge($this->vars, $d);
    }
/*
 * Fonction qui inclut le fichier qui correspond au droit
 */
    function render($filename)
    {
        if (!empty($_SESSION['droit'])) {
            if (($_SESSION['droit']) == 'intendance') {
                $this->layout = 'intendance';
                
            }
            else if (($_SESSION['droit']) == 'administrateur') {
                $this->layout = 'admin';
            }
            else if (($_SESSION['droit']) == 'redacteur') {
                $this->layout = 'redact';
            }
            else if (($_SESSION['droit']) == 'gestionnaire_ministage') {
            	$this->layout = 'gestion_ministage';
            }
            else if (($_SESSION['droit']) == 'ecole') {
            	$this->layout = 'ecole';
            }
            else{
                $_SESSION['droit']= 'default';
            }
        }
        //extrait les données qui sont mis dans le tableau $vars
        extract($this->vars);
        // ob_start() : vérifie les droit avant que la page se génére
        ob_start();
        //cherche le fichier de la vue à générer
        require (ROOT . 'views/' . get_class($this) . '/' . $filename . '.php');
        //récupérer les information dans le buffer php puis les effacer
        $content_for_layout = ob_get_clean();
        // si ob_get_clean est faux on retourne les information du buffer
        //si non  il affiche le layout correspondant
        if ($this->layout == false) {
            echo $content_for_layout;
        } else {
            require (ROOT . 'views/Layout/' . $this->layout . '.php');
        }
    }
    
}
?>