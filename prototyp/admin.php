<?php

include_once("header.inc.php");
require_once("php/category.php");

$content = new template_builder("template/admin.html");
$src_content = $content->get_src();

include_once("body.inc.php");

?>
