<?php
date_default_timezone_set('US/Central');
require_once './animal.php';
require_once './user.php';


$results = $user->get_all();
echo json_encode($results);