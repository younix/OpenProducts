<?php

/*
 * TODO: Create a database object, witch fits serveral Databases for example sqlite, postgresql, mysql...
 * at the moment this file is for SQLite
 */

require_once("config.inc.php");

class db_object {
	
	private $filename_sql_init;
	private $db_filename;
	private $db;
	
	function __construct() {
		$this->db = sqlite_open($this->db_filename, 0666, $sql_error);
		
		if(!$this->db)
			die($sql_error);
	}

	function init_database() {
		$fh = fopen($this->filename_sql_init, 'r');
		$sql_str = fread($fh);
		$fclose($fh);


	}
}

?>
