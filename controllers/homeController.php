<?php

class homeController extends controller{

public function __construct() {
	parent::__construct();

	$u = new Users();
	if($u->isLogged() == false){
		header("Location: ".BASE_URL."login");
		exit;
	}
}

public function index(){
	
	$data = array();
	

	$this->loadTemplate('home', $data);
}


}