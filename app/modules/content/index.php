<?php

$data = $db->query('SELECT * FROM content');

include $mod_path.'index.tpl.php';