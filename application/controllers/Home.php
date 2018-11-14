<?php 

class Home extends Ci_Controller{

	function index(){
		$this->template->load('index','home');
	}
}