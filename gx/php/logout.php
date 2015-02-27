

<?php 
header("Content-type: text/html;charset=utf-8;");
session_start(); 

unset($_SESSION['username']);
unset($_SESSION['passcode']);
unset($_SESSION['userflag']);
echo "注销成功";

header("Refresh:2;url=../index.php"); 
?>
