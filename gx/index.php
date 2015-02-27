<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>

<title>用户登陆</title>

</head>

<body>
//注册
<form name="register" action="php/register.php" method="post">
	<input type="text" name="id" placeholder="请输入用户名">
	<input type="text" name="passward" placeholder="请输入密码">
	<input type="submit" value="注册" />
</form>
//登陆
<form name="login" action="php/login.php" method="post">
	<input type="text" name="idlog" placeholder="请输入用户名">
	<input type="text" name="passwardlog" placeholder="请输入密码">
	<input type="submit" value="登陆" />
</form>



<?php echo "<a href=php/logout.php>退出</a><br/>"; ?>

</body>

</html>