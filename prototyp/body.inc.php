<?php

require_once("php/template_builder.php");

$page = new template_builder("template/main.html");
$page->set_att("content", "Hallo Welt!");

echo $page->get_src();

?>
