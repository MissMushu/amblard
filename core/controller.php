<?php

class Controller
{

    var $vars = array();

    var $layout = 'default';

    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    function render($filename)
    {
        if (!empty($_SESSION['droit'])) {
            if (($_SESSION['droit']) == 'utilisateur') {
                $this->layout = 'membre';
                
            }
            else if (($_SESSION['droit']) == 'administrateur') {
                $this->layout = 'admin';
            }
            else{
                $_SESSION['droit']= 'default';
            }
        }
        extract($this->vars);
        ob_start();
        require (ROOT . 'views/' . get_class($this) . '/' . $filename . '.php');
        $content_for_layout = ob_get_clean();
        if ($this->layout == false) {
            echo $content_for_layout;
            $_SESSION['panier']= array();
        } else {
            require (ROOT . 'views/Layout/' . $this->layout . '.php');
        }
    }


   
    
}
?>