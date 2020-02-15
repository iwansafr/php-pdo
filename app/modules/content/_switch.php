<?php

switch($route->task())
{
	case 'list':
		include $mod_path.'index.php';
	break;
	case 'edit':
		include $mod_path.'edit.php';
	break;
	default:
		include $mod_path.'index.php';
	break;
}