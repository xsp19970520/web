<?php
header("Content-type: text/html;charset=utf-8");
include"connect.php";

$idlog = $_POST["idlog"];
$passwardlog = $_POST["passwardlog"];//获取id，pwd


$sql = "SELECT id FROM userid";
$res = $dbh-> prepare($sql);
$res->execute();
$infor1 = $res->fetchALL(PDO::FETCH_ASSOC);
//print_r($infor1);

$sql = "SELECT passward FROM userid WHERE id = '$idlog'";
$res = $dbh-> prepare($sql);
$res->execute();
$infor2 = $res->fetchALL(PDO::FETCH_ASSOC);
//print_r($infor2);//核对信息


global $login; 
if ($passwardlog!=$infor2[0]["passward"]) 
{ 
        echo "密码错误"; 
        exit; 
} 
$login = array('idlog'=>$_POST['idlog'], 'passwardlog'=>$_POST['passwardlog']); 
session_start(); 

echo "<a href=../upload.php>上传视频</a><br/>";
echo "<a href=../text.php>主界面</a><br/>";
echo "<a href=logout.php>退出</a><br/>"; 
?>



