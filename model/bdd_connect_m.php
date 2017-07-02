<?php

include_once 'database_m.php';

$bdd = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $passwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

