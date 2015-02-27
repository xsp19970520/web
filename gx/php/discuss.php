<?php
header("Content-type: text/html;charset=utf-8");
include"connect.php";
$moviename = $_POST["moviename"];
$text = $_POST["text"];


$url="../Cilicili/Html/Cilicili.php";
$sql = "INSERT INTO discuss (moviename,discuss)VALUES('$moviename','$text')";

$res = $dbh->prepare($sql);
$res -> execute();
echo "评论成功";
header("Refresh:2;url=../Cilicili/Html/Cilicili.php"); 
?>
