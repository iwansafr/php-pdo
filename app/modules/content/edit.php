<?php

$db->formName('content_edit');
if(!empty($_POST) && !empty($db->formName))
{
	if($db->formName == 'content_edit')
	{
		$data = $_POST;
		$id = @intval($_GET['id']);
		if(empty($id))
		{
			$query = 'INSERT INTO ';
		}else{
			$query = 'UPDATE ';
		}
		$query .= " content SET title = '".$data['title']."', description = '".$data['description']."'";
		$db->insert($query);
	}

}

include $mod_path.'edit.tpl.php';