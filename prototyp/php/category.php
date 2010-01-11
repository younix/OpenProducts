<?php

require_once("db_obj.php");

class category_list {
	public $cat_list;
	public $cat_main_list;

	function __construct() {
	}

	function load() {
		$sql_str = "SELECT id, parent_id, name FROM category";
		$result = sqlite_query($db, $sql_str);
		
		while($row = $result->fetchArray()) {
			$cat = new category($row["id"], $row["parent_id"], $row["name"]);
			array_push($this->cat_list, $cat);
		}
	}

	function sort_cat_list() {
		foreach($this->cat_list as $cat)
			foreach($this->cat_list as $sub_cat)
				if($cat->id == $sub_cat->parent_id)
					array_push($cat->sub_cat_list, $sub_cat);

		foreach($this->cat_list as $cat)
			if($cat->parent_id == -1)
				array_push($this->cat_main_list, $cat);
	}
}

class category {
	
	public $db;
	public $sub_cat_list;

	public $id;
	public $parent_id;
	public $name;

	function __construct($id, $parent_id, $name) {
		$this->id = $id;
		$this->parent_id = $parent_id;
		$this->name = $name;
	}

}

?>
