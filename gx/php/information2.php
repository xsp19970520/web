<?php
header("Content-type: text/html;charset=utf-8");
include"connect.php";

$sql = "SELECT * FROM discuss";

$res = $dbh-> prepare($sql);
$res->execute();
$info = $res->fetchALL(PDO::FETCH_ASSOC);

