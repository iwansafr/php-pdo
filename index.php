<?php
foreach(glob('sys/helper/*.php') as $file){
	include $file;
}
include 'app/config/db.php';
include 'sys/db/config.php';
include 'sys/db/connection.php';
include 'sys/route/route.php';
if(!empty($route->module()))
{
	$mod_path = 'app/modules/'.$route->module().'/';
	include 'app/modules/'.$route->module().'/_switch.php';
}