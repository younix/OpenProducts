<?php

class category_list {
	function load() {
		$sql_str = "SELECT id, name, parent_id FROM category";
		$db->
	}
}

class category
{
	public $db;
	public $sub_cat_list;

	function __construct() {
		
	}

	function load($cat_id) {
		$db = new SQLite3("database.sqlite");
		$sql_str = "SELECT parent_id, name FROM category WHERE cat_id = " . $cat_id;

	}
}

?>
