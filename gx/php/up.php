<?php
include"connect.php";
header("Content-type: text/html;charset=utf-8");
    if(!empty($_FILES)){
        if($_FILES["file"]["error"] == 0){
            move_uploaded_file($_FILES["file"]["tmp_name"],"../movie/" . $_FILES["file"]["name"]);
            echo $_FILES['file']['name'].' upload success'; 
        }
    }
$moviename = $_FILES["file"]["name"];
echo $moviename;

    if(!empty($_FILES)){
        if($_FILES["photo"]["error"] == 0){
            move_uploaded_file($_FILES["photo"]["tmp_name"],"../photo/" . $_FILES["photo"]["name"]);
            echo $_FILES['photo']['name'].' upload success'; 
        }
    }

$photoname = $_FILES["photo"]["name"];
echo $photoname;



$pname = $_POST["pname"];
$title = $_POST["title"];
$remark= $_POST["remark"];
$label = $_POST["label"];
$introduction = $_POST["introduction"];


$sql = "INSERT INTO upload (moviename,photoname,pname,title,remark,label,introduction)VALUES('$moviename','$photoname','$pname','$title','$remark','$label','$introduction')";

$res = $dbh->prepare($sql);
$res -> execute();


echo "上传成功</br>";
echo "<a href=../upload.php>继续上传视频</a></br>";
echo "<a href=../text.php>返回主界面</a></br>";



