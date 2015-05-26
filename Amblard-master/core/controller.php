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
		
	}
	
	
	
}