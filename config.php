<?php

$db_name = 'nethelp';
$db_host = 'localhost';
$db_user = 'nethelp';
$db_password = 'nethelp';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
