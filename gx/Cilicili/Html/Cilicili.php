<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Cilicili</title>
	<link href="../Css/Cilicili.css" rel="stylesheet" type="text/css" />
<?php error_reporting(E_ERROR | E_PARSE);?>

</head>
<body>
	<div class="main">
		<div class="main_nav">
			<div class="main_nav_a">
				<ul>
					<li><a><img >主站</a></li>
					<li><a>画友</a></li>
					<li><a>游戏中心</a></li>
					<li><a>直播</a></li>
					<li><a>手机端</a></li>
					<div></div>
					<a>注册</a>
				</ul>
			</div>
		</div>

		<div class="pic"></div>

		<div class="main_body">
			<div class="nav">
				<ul>
					<li>首页</li>
					<li>动画</li>
					<li>番剧</li>
					<li>音乐</li>
					<li>舞蹈</li>
					<li>游戏</li>
					<li>科技</li>
					<li>娱乐</li>
					<li>鬼畜</li>
					<li>电影</li>
					<li>电视剧</li>
					<li>排行</li>
					<div class="search"></div>
				</ul>
			</div>


			<div class="top">
				<div class="hot">
					<div class="roll">
						<ul>
							<li class="cycle"></li>
							<li class="cycle"></li>
							<li class="cycle"></li>
							<li class="cycle"></li>
							<li class="cycle"></li>
							<li class="cycle"></li>
						</ul>
					</div>
				</div>
				<div class="area">
					<div class="block">
						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php


                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        

                        
                        <input type="image" class="img" name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>


				</div>
			</div>

			<hr class="line1">

			<div class="popularize">
				<div class="pop-l">
					<div>
						<span class="smalltitle">推广</span>
						<a>壁纸</a>
					</div>
					<div class="block"></div>
					<div class="block"></div>
					<div class="block"></div>
					<div class="block"></div>
				</div>
				<div class="pop-r"></div>
			</div>

			<div class="cartoon">动画
				<div class="l-head">

				</div>
				<div class="car-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "动画"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					

					<div class="more">查看更多></div>
				</div>
			
			</div>

			<div class="bangumi">番剧
				<div class="ban-l">
					<div class="block">

						<form name="get" action=".php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "番剧"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					
					<div class="more">查看更多></div>
				</div>


				<div class="ban-twor"></div>
			</div>

			<div class="music">音乐
				<div class="mus-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/connect.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "音乐"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
	
			</div>

			<div class="dance">舞蹈
				<div class="dan-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "舞蹈"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="game">游戏
				<div class="gam-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "游戏"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="technology">科技
				<div class="tec-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "科技"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="ent">娱乐
				<div class="ent-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "娱乐"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="kichiku">鬼畜
				<div class="kic-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "鬼畜"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="movie">电影
				<div class="mov-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "电影"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="teleplay">电视剧
				<div class="tel-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php	

                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "电视剧"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>
				
			</div>

			<div class="blogroll">blogroll
				<div class="blo-l">
					<div class="block">

						<form name="get" action="C.play.php" method="post">

                        <?php include"../../php/information.php";?>
                        <?php  foreach ($info as $key => $value) {?>

                        <?php $photoname = $value["photoname"] ;?>
                        <?php


                        $sql = "SELECT label FROM upload WHERE photoname = '$photoname'";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php if($info[0]["label"] == "blogroll"){?>
                        
                        <input type="image" class="img"name="photoname"  value="<?php echo $value["photoname"]?>" src="../../photo/<?php echo $value["photoname"]?>  " />
                    </div>
                        <?php } ?>

                        <?php } ?>
					<div class="more">查看更多></div>
				</div>

			</div>

			<div class="special">special
				<div class="spe-l">
					<div class="block"></div>
					<div class="block"></div>
					<div class="block"></div>
					<div class="block"></div>
					<div class="block"></div>
				</div>
				<div class="spe-r"></div>
			</div>

			<div class="link">
				<ul>
					<li>
						<a>关于哔哩哔哩动画</a>
						<br>
						<a>联系我们</a>|<a>加入我们</a>
						<br>
						<span>官方微博：</span><a>新浪微博</a>|<a>腾讯微博</a>
						<br>	
						<a>资源免责声明</a>
					</li>
					|
					<li>
						<a>弹幕测试</a>|<a>高级弹幕</a>
						<br>
						<a>全站使用说明</a>|<a>常见问题（FAQ）</a>
						<br>
						<a>建议和BUG汇报</a>
						<br>
						<a>侵权申诉</a>	
					</li>
				</ul>
			</div>

			<div class="end"></div>
		</div>
	</div>
</body>
</html>		