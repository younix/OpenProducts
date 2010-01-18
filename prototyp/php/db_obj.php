<?php

/*
 * TODO: Create a database object, which fits serveral Databases for example sqlite, postgresql, mysql...
 * at the moment this file is for SQLite
 */

require_once("config.inc.php");

class db_object {
	
	private $filename_sql_init;
	private $db_filename;
	private $db = NULL;
	
	public function __construct($filename) {
		$this->db_filename = 
		$this->db = sqlite_open($this->db_filename, 0666, $sql_error);
		
		if(!$this->db)
			die($sql_error);
	}

	public function init_database() {
		if($this->db == NULL)
			die("DB session is not initilized.");

		$fh = fopen($this->filename_sql_init, 'r');
		$sql_str = fread($fh);
		$fclose($fh);
		
		if(sqlite_exec($this->db, $sql_str, $sql_error))
			return true;
		else
			die($sql_error);
	}

	public function query($sql_str) {
		return sqlite_query($this->db, $sql_str);
	}
	
}

?>
