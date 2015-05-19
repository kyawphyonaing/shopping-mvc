<?php

class Newproduct_Model extends Model {
	function __construct() {
		parent::__construct();
	}
	public function getnewproduct()
	{
		$sth = $this->db->prepare("SELECT * FROM categories where delete_date IS NULL and DATE_FORMAT(regist_date, '%Y%m') = date_format(now(),'%Y%m') ORDER BY cat_id DESC");
		$sth->execute();
		return $sth->fetchAll();
	}
	public function getspecialproduct()
	{
		$sth = $this->db->prepare("SELECT * FROM categories where delete_date IS NULL and remark IS NOT NULL ORDER BY cat_id DESC");
		$sth->execute();
		return $sth->fetchAll();
	}
}