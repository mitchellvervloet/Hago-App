<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '';
$db_database = 'hago';

$db = mysqli_connect($db_host, $db_user, $db_password, $db_database) or die(mysqli_connect_error());
