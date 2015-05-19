<?php

class Index extends Controller {
	
	function __construct(){
		parent::__construct();
		//Session::init();
		//$logged = Session::get('loggedIn');
		//if ($logged == false){
		//	Session::destroy();
		//	header('location: ../index');
		//	header('location: ' . URL . 'index');
		//	exit;
		//}
		//print_r($_SESSION);

		require 'models/category_model.php';
		$this->model = new Category_Model();
	}
	function index(){
		//echo "INDEX INDEX INDEX";
		
		$this->view->getcategories = $this->model->getCategories();
		
		$this->view->userlist = $this->model->userList();
		
		$this->view->render('index/index');
		
	}
	public function edit($id = Null)
	{
		$id = $_GET['id'];	
		$this->view->edit = $this->model->edit($id);
		$this->view->render('index/edit');
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'index');
	}
	
	function imgUpdate()
	{
		$id = $_POST['id'];
	//echo $id;exit;
		$data['cat_name'] = $_POST['cat_name'];
		$data['cat_type'] = $_POST['cat_type'];
		$data['cat_prize'] = $_POST['cat_prize'];
		$data['cat_description'] = $_POST['cat_description'];
	
		$this->model->imgUpdate($data, $id);
		header('location: ' . URL . 'index');
		
	}
	function sub($type = Null){
	//	echo "sub";
		$type = $_GET['type'];
	//	echo $type;exit;
		$this->view->subcategories = $this->model->subCategories($type);
		$this->view->render('index/sub');
	}
	function email(){
		$this->view->render('index/email');	
	}
	function send_mail(){
		$webmaster_email = "kokyawphyonaing@gmail.com";


		$email_address = $_POST['email_address'] ;
		$comments = $_POST['comments'] ;

		//echo $email_address .  $comments;exit;
		if (!isset($_POST['email_address'])) {
			header('location: ' . URL . 'index/email');
		}

		elseif (empty($email_address) || empty($comments)) {
			header('location: ' . URL . 'error/index');
		}
		else {
		mail( "$webmaster_email", "Feedback Form Results",
 		$comments, "From: $email_address" );
 	//  mail('kokyawphyonaing@gmail.com', 'my sub', $comments);
		//echo "sucess";exit;
		header('location: ' . URL . 'index');
		}
	}
}