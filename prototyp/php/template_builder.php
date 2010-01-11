<?php

class template_builder {
	
	private $file_name;
	private $template_list;
	private $content;

	function __construct($file_name) {
		$this->file_name = $file_name;
	}

	function set_att($name, $value) {
		$this->template_list[$name] = $value;
	}
	
	function get_src() {
		$fh = fopen($this->file_name, 'r');
		$this->content = fread ($fh, filesize($this->file_name));
		fclose($fh);
		
		$this->insert_template_list();

		return $this->content;
	}

	function insert_template_list() {
		
		foreach($this->template_list as $name => $value) {
			$name = "_?" . StrToUpper($name) . "?_";
			$this->content = str_replace($name, $value, $this->content);
		}
	}
}

?>