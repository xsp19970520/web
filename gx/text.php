<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>

<title>主界面</title>

</head>

<body>


<form name="get" action="movie.php" method="post">

<?php include"php/information.php";?>
<?php  foreach ($info as $key => $value) {?>

<?php $photoname = $value["photoname"] ;
echo $photoname;?>
<?php	

$sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
$res = $dbh-> prepare($sql);
$res->execute();
$info = $res->fetchALL(PDO::FETCH_ASSOC);
 print_r($info)
?>

<?php if($info[0]["label"] == 4124){?>
<input type="image" name="photoname"  value="<?php echo $value["photoname"]?>" src="photo/<?php echo $value["photoname"]?>" type="width:160px;
	height:100px;"/>
<?php } ?>

<?php } ?>



</form>
<?php echo "<a href=php/logout.php>退出</a><br/>"; ?>
</body>

</html>