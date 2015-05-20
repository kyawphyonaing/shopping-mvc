<?php
class Category_Model extends Model{
	public function __construct(){
		parent::__construct();
		//$category = 'This is category';
		//echo 'good';
	}
	
	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM users');
		$sth->execute();
		return $sth->fetchAll();
	}
	public function getCategories()
	{
		$sth = $this->db->prepare("SELECT * FROM categories WHERE delete_date IS NULL ORDER BY cat_id DESC");
		$sth->execute();
		return $sth->fetchAll();
	}
	public function subCategories($type)
	{
		$sth = $this->db->prepare("SELECT * FROM categories WHERE delete_date IS NULL AND cat_type = :type ORDER BY cat_id DESC");
		$sth->execute(array(
				':type' => $type
		));
		return $sth->fetchAll();
	}
	public function delete($id)
	{
		$sth = $this->db->prepare('UPDATE categories SET delete_date=NOW() WHERE cat_id = :id');
		$sth->execute(array(
				':id' => $id
		));
	}
	public function edit($id)
	{
		//var_dump($id);exit;
		$sth = $this->db->prepare("SELECT * FROM categories WHERE cat_id = :id");
		$sth->execute(array(
				':id' => $id
		));
		return $sth->fetch();
	}
	public function imgUpdate($data ,$id)
	{
		$sth = $this->db->prepare("Update categories set
				cat_name = :cat_name,
				cat_type = :cat_type,
				cat_prize = :cat_prize,
				cat_description = :cat_description
				where cat_id = $id
				");
		$r = $sth->execute(array(
				':cat_name' => $data['cat_name'],
				':cat_type' => $data['cat_type'],
				':cat_prize' => $data['cat_prize'],
				':cat_description' => $data['cat_description']
		));
	}
}
