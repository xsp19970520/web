<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>

<title>视频播放</title>

</head>

<body>



<?php 
include"php/connect.php";

$photoname = $_POST["photoname"];
echo $photoname;

$sql = "SELECT * FROM upload WHERE photoname = '$photoname'";
$res = $dbh-> prepare($sql);
$res->execute();
$info = $res->fetchALL(PDO::FETCH_ASSOC);

echo $moviename = $info[0]["moviename"];

?>
<video width="320" height="240" controls="controls">
  <source src="movie/<?php echo $moviename?>" type="video/ogg">
  <source src="movie/<?php echo $moviename?>" type="video/mp4">
Your browser does not support the video tag.
</video>

<form name="discuss" action="php/discuss.php" method="post">
	<input type="hidden" name="moviename"  value="<?php echo $moviename?>" />
	<input type="text" name="discuss" placeholder="请输入评论">
	<input type="submit" value="提交" />
</form>

<?php echo "<a href=php/logout.php>退出</a><br/>"; ?>

</body>

</html>