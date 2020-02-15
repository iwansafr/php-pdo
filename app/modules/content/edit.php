<?php

$db->formName('content_edit');
$id = @intval($_GET['id']);
$current_data = [];

if(!empty($_POST) && !empty($db->formName))
{
	if($db->formName == 'content_edit')
	{
		$data = $_POST;
		$where = '';
		$ext_data = [$data['title'],$data['description']];
		if(empty($id))
		{
			$query = 'INSERT INTO ';
		}else{
			$query = 'UPDATE ';
			$where = ' WHERE id = ?';
			$ext_data[] = $id;
		}
		$query .= ' content SET title = ?, description = ? '.$where;
		$db->save($query, $ext_data);
	}
}
if(!empty($id)){
	$current_data = $db->query('SELECT * FROM content WHERE id = ?', [$id]);
	if(!empty($current_data)){
		$current_data = $current_data[0];
	}
}

include $mod_path.'edit.tpl.php';