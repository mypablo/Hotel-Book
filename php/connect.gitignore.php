<?php

define('MYSQL_USER', '/');
define('MYSQL_PASSWORD','/');
define('MYSQL_HOST','/');
define('MYSQL_DATABASE','/');


$pdoOptions = array(
    PDO::ATTR_ERROMODE => PDO::ERROMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES=>false
);

$pdo = new PDO('mysql:host='. MYSQL_HOST . 
                ";dbname=" . MYSQL_DATABASE, 
                 MYSQL_USER,
                 MYSQL_PASSWORD,
                 $pdoOptions);

                 