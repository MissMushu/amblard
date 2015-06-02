<?php
class Home extends Controller{
	
	function index(){
		$this->render('index');
	}
	
	function calendrier()
	{
		$this->render('calendrier');
	}
	
	function date()
	{
		$this->render('date');
	}

	
	
	
}
?>