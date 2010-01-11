<?php

class template_builder {
	
	private $file_name;
	private $template_list = array();
	private $content;

	public function __construct($file_name) {
		$this->file_name = $file_name;
	}

	public function set_att($name, $value) {
		$this->template_list[$name] = $value;
	}
	
	public function get_src() {
		$fh = fopen($this->file_name, 'r');
		$this->content = fread ($fh, filesize($this->file_name));
		fclose($fh);
		
		$this->insert_template_list();

		return $this->content;
	}

	private function insert_template_list() {
		
		foreach ($this->template_list as $name => $value) {
			$name = "_?" . StrToUpper($name) . "?_";
			$this->content = str_replace($name, $value, $this->content);
		}
	}
}

?>
