<?php

require_once("php/template_builder.php");

$page = new template_builder("template/main.html");
$page->set_att("content", $src_content);

echo $page->get_src();

?>
