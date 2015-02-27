<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>无标题</title>
	<link href="../Css/play.css" rel="stylesheet" type="text/css" />
	<?php error_reporting(E_ERROR | E_PARSE);?>
</head>
<body>
	<div id="main">
		<div id="main_nav">
			<div id="main_nav_a">
				<ul>
					<li><a><img >主站</a></li>
					<li><a>画友</a></li>
					<li><a>游戏中心</a></li>
					<li><a>直播</a></li>
					<li><a>手机端</a></li>
					<li><div></div></li>
				</ul>
			</div>
		</div>

		<div id="pic"></div>

		<div id="main_body">
			<div id="nav">
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

			<div class="video">
				
<?php 
include"../../php/connect.php";

$photoname = $_POST["photoname"];


$sql = "SELECT * FROM upload WHERE photoname = '$photoname'";
$res = $dbh-> prepare($sql);
$res->execute();
$info = $res->fetchALL(PDO::FETCH_ASSOC);

echo $moviename = $info[0]["moviename"];

?>
<video class="video" controls="controls">
  <source src="../../movie/<?php echo $moviename?>" type="video/ogg">
  <source src="../../movie/<?php echo $moviename?>" type="video/mp4">
Your browser does not support the video tag.
</video>

			</div>

			<div id="discuss">
				<div id="word">评论</div>
				
				<form name="discuss" action="../../php/discuss.php" method="post">
					<input type="text" id="say" name="text">
					<input type="hidden" name="moviename"  value="<?php echo $moviename?>" />
					
				    <input type="submit" name="button" value="提交评论" />
				</form>
				

				<div class="people"></div>
				<hr class="line">
				<div class="people"></div>
				<hr class="line">
				<div class="people"></div>
				<hr class="line">
				<div class="people"></div>
				<hr class="line">
				<div class="people"></div>
				<hr class="line">
				<?php include"../../php/information2.php";?>
				<?php  foreach ($info as $key => $value) {?>

                  <?php $movie = $value["moviename"] ;?>       
                        <?php	

                        $sql = "SELECT * FROM discuss WHERE moviename='$movie' ";
                        $res = $dbh-> prepare($sql);
                        $res->execute();
                        $info = $res->fetchALL(PDO::FETCH_ASSOC);

                        ?>
                        
                        <?php if($info[0]["moviename"] == "$moviename"){?>

                        <input type="text" id="say" value="<?php echo $value["discuss"]?>">
                      
                        
                    <?php } ?>

                    <?php } ?>

                       
                        
                        
                  </div>





	
				
			</div>
			
			<hr class="line">


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
		</div>
</body>
</html>