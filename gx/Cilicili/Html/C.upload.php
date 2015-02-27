<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>视频上传</title>
	<link href="../Css/upload.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div class="top" id="tops">
		<div class="topL">
			<ul>
				<li>img</li>
				<li>主站</li>
				|
				<li>画友</li>
				|
				<li>游戏中心</li>
				|
				<li>直播</li>
				|
				<li>手机端</li>
			</ul>
		</div>
		<div class="topR">
			<ul>
				<li>收藏夹/历史</li>|<li>投稿</li>|<li>信息</li>|<li>pic</li>
			</ul>
		</div>
	</div>

	<div class="pic">
		<span class="picL"></span>
		<span class="picR"></span>
	</div>
<form action="../../php/up.php" method="post" enctype="multipart/form-data">
	<div id="main">
		<div class="mainLeft"></div>
		<div class="mainRight">
			<div id="mainT" calss="mainTitle">投稿</div>
			<hr>
			<div class="tip">请正确填写投稿相关信息</div>

			<hr class="Sline">

			<hr class="line">
				<div id="fengmian">
					<div id="fengmianL"  class="left">
						<ul>
							<li class="Rtip">封面图</li>
							<br>
							<li>点击图片上传</li>
							<br>
							<li>至少240*150</li>
							<br>
							<li>支持高清封面720*450</li>
						</ul>
					</div>

					<div id="fengmianR" class="right">

								<input type="hidden" name="MAX_FILE_SIZE" value="2000000000000000000000"> 
								<input type="file" name="photo" id="shangchuantupian"/>
								

						</div>
					      
					</div>
					
				</div>

				<hr class="line">

				<div id="biaoti">
					<div id="biaotiL"  class="left">
						<ul>
							<li class="Rtip">标题</li>
							<br>
							<li>40字以内</li>
							<br>
							<li>请尽量使用中文</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>

					<input type="text" id="biaotiR" name="title" class="right">
				</div>
            
				<hr class="line">
 
				<div id="beizhu">
					<div id="beizhuL" class="left">
						<ul>
							<li class="Rtip">备注</li>
							<br>
							<li>可填原名称</li>
							<br>
							<li>请勿随意填写备注名</li>
							<br>
							<li>（选填）</li>
						</ul>
					</div>
					<input type="text" id="beizhuR" name="remark" class="right">
				</div>
            
				<hr class="line">
            
				<div id="biaoqian">
					<div id="biaoqianL" class="left">
						<ul>
							<li class="Rtip">标签（tag）</li>
							<br>
							<li>半角逗号隔开</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>
					<div class="right" id="biaoqianR">
						<input type="text" name="list" >
						<input type="checkbox">
						<span id="biaoR">允许其他人增加</span>
					</div>
				</div>

				<hr class="line">

				<div id="lishulanmu" >
					<div id="lishulanmuL" class="left">
						<ul>
							<li class="Rtip">隶属栏目</li>
							<br>
							<li>请按号入座</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>
					<div id="lishulanmuR" class="right">
					
							<select name="label">
								<option value="请选择" selected="selected">请选择</option>
								<option value="动画">动画</option>
								<option value="音乐">音乐</option>
								<option value="游戏">游戏</option>
								<option value="娱乐">娱乐</option>
								<option value="电视剧">电视剧</option>
								<option value="番剧">番剧</option>
								<option value="电影">电影</option>
								<option value="科技">科技</option>
								<option value="鬼畜">鬼畜</option>
								<option value="舞蹈">舞蹈</option>
							</select>
						
					</div>
				</div>

				<hr class="line">

				<div id="huodongxiangmu" >
					<div id="huodongxiangmuL"class="left">
						<ul>
							<li class="Rtip">活动项目</li>
							<br>
							<li>填写后不可修改，需要</li>
							<br>
							<li>参加活动时选择</li>
						</ul>
					</div>
					<input type="text" class="right">
				</div>

				<hr class="line">

				<div id="tougaoleixin">
					<div id="tougaoleixinL" class="left">
						<ul>
							<li class="Rtip">投稿类型</li>
							<br>
							<li>若非本人自制原创</li>
							<br>
							<li>请勿选择自制</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>
					<div id="tougaoleixinR" class="right">
						<div id="leixin">转载</div>
						<div id="leixin">自制</div>
						<div id="leixin">补档</div>
					</div>
				</div>

				<hr class="line">

				<div id="shipinchuchu">
					<div id="shipinchuchuL" class="left">
						<ul>
							<li class="Rtip">视频出处</li>
							<br>
							<li>请填入来源/二次创作等</li>
							<br>
							<li>Nico转载请注明sm号</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>
					<input type="text" id="shipinchuchuR" class="right">
				</div>

				<hr class="line">
  
				<div id="jianjie">
					<div id="jianjieL" class="left">
						<ul>
							<li class="Rtip">简介</li>
							<br>
							<li>200字以内</li>
							<br>
							<li>分P备注不填</li>
							<br>
							<li>则默认引用简介</li>
							<br>
							<li class="must">（必填）</li>
						</ul>
					</div>
					<input type="text" id="jianjieR" name="introduction" class="right">
				</div>
           
				<hr class="line">

				<div id="tougaoneirong">
					<div id="tougaoneirongL" class="left">
						<ul>
							<li class="Rtip">投稿内容</li>
							<br>
							<li>视频源支持</li>
							<br>
							<li>新浪，腾讯</li>
							<br>
							<li>多P模式按住</li>
							<br>
							<li>列表项可拖动调整顺序</li>
							<br>
							<li>点击查看帮助</li>
							<br>
							<li class="must">（必填）</li>
							<br>
							<li>代码模式</li>
						</ul>	
					</div>
					<div id="tougaoneirongR" class="right">
						<div id="Tgtop">
							<div id="p0">来源</div>
							<div id="p1">视频源地址</div>
							<div id="P2">分P名（不填则默认）</div>
							<div id="p3">分P备注（选填，播放页优先显示备注）</div>
						</div>

						<hr class="line">

						<div id="Tgbody">
							<span>直传</span>
							
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000000000000000000"> 
								<input type="file" name="file" />
								<input type="button" name="submit" value="视频上传">
								<input type="text" name="pname" placeholder="分P名">
							
						</div>
					</div>

					<hr class="line">

				</div>


				<div id="foot">
					<ul>
						<li>★任何一名优秀的UP主，都应该拒绝投稿渣画质视频！★</li>
						<li>本站所有投稿必须遵守《互联网电子公告服务管理规定》，不得发表诽谤他人；侵犯他人隐私；侵犯他人知识产权；传播病毒；政治言论；</li>
						<br>
						<li>商业讯息；低俗内容等信息，恶意违反规定者将导致您的账号被封停。</li>
						<br>
						<li>为了避免投稿视频撞车（即，视频重复）投稿前请仔细搜索有无您想投稿的视频。</li>
						<br>
						<li>如果您的投稿视频被退回,那么说明您投稿中的相关内容不完整或投稿代码模式没有按照范例的标准进行填写。</li>
					</ul>
				</div>
			
			<input type="submit" value="提交" id="tijiao">
			
		</div>
	</div>
</form>
	<div id="end">
		<ul>
			<li>广播电视节目制作经营许可证：（沪）字第510号     网络文化经营许可证：沪网文【2011】0602-063</li>
			<br>
			<li>互联网ICP备案：沪ICP备13002172号-3    信息网络传播视听节目许可证：0910417</li>
		</ul>
	</div>
</body>
</html>