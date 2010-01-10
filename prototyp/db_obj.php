<?php

class db_obj {
	public $db;

	function __constuct($db_file) {
		$this->db = new SQLite3($db_file);
	}

	function query($sql_str) {
		$this->db->query();
	}
}

?>
