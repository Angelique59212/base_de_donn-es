<?php

require __DIR__ . '/classes/Config.php';
require __DIR__ . '/classes/Connect.php';
require __DIR__ . '/classes/BD1.php';

$conn = Connect::dbConnect();
$conn2 = Connect::dbConnect();

var_dump($conn);
var_dump($conn2);