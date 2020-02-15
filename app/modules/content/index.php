<?php

$data = [];
$extra = '';
if(!empty($_GET['keyword'])){
	$keyword = $_GET['keyword'];
	$extra = " WHERE title LIKE '%?%' OR description LILKE '%?%'";
	$extra = " WHERE title = ?";
	$data = [$keyword];
}

$data = $db->query('SELECT * FROM content '.$extra, $data);

include $mod_path.'index.tpl.php';