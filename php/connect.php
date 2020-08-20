<?php

define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD','12345678');
define('MYSQL_HOST','hotel.collegelink.localhost');
define('MYSQL_DATABASE','hotel');


$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES=>false
);

$pdo = new PDO('mysql:host='. MYSQL_HOST . 
                ";dbname=" . MYSQL_DATABASE, 
                 MYSQL_USER,
                 MYSQL_PASSWORD,
                 $pdoOptions);

                 