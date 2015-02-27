<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>

<title>视频上传</title>

</head>

<body>

<form action="php/up.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000000000000000000"> 
    <input type="file" name="file" />
    <input type="button" name="submit" value="视频上传"></br>
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000000000000000000"> 
    <input type="file" name="photo" />
    <input type="button" name="submit" value="封面上传"></br>


	<input type="text" name="pname" placeholder="分P名"></br>
	<input type="text" name="title" placeholder="标题"></br>
	<input type="text" name="remark" placeholder="备注"></br>
	<input type="text" name="label" placeholder="标签"></br>
	<input type="text" name="introduction" placeholder="简介"></br>

	<input type="submit" value="提交" />
</form>
<?php echo "<a href=php/logout.php>退出</a><br/>"; ?>

</body>

</html>