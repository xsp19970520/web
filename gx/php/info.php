<?php
header("Content-type: text/html;charset=utf-8");

include"connect.php";
$pname = $_POST["pname"];
$title = $_POST["title"];
$remark= $_POST["remark"];
$label = $_POST["label"];
$introduction = $_POST["introduction"];

$url="../index.php";
$sql = "INSERT INTO upload (pname,title,remark,label,introduction)VALUES('$pname','$title','$remark','$label','$introduction')";

$res = $dbh->prepare($sql);
$res -> execute();


echo "上传成功";
echo "<a href=../upload.php>继续上传视频</a>";
echo "<a href=../index.php>返回主界面</a>";
echo "<a href=logout.php>退出</a><br/>"; 





