<?php

$dsn = 'mysql:host=localhost;dbname=web';
$username = 'root';
$passwd = '';

$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
