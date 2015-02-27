<?php

include"connect.php";
$id = $_POST["id"];
$passward = $_POST["passward"];

$url="../index.php";
$sql = "INSERT INTO userid (id,passward)VALUES('$id','$passward')";

$res = $dbh->prepare($sql);
$res -> execute();
?>
<head>
	<meta http-equiv="refresh" content="0;url=<?php echo $url;?>">//刷新界面
</head>
<body>
</body>
</html>
