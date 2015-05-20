<?php

class Newproduct extends Controller {

	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->view->getnewproduct = $this->model->getnewproduct();
		$this->view->render('newproduct/index');
	}
	public function special(){
		$this->view->getspecialproduct = $this->model->getspecialproduct();
		$this->view->render('newproduct/special');
	}
}