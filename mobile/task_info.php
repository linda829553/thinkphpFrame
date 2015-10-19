<?php 
include_once("connect.php"); 
	$sql = "SELECT * FROM tasks WHERE id =".$_GET["id"];
	// echo $sql;
	// exit;
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);

	// 显示剩余天数小时分钟数
	function time2Units($oldtime)
	{
		$now = time();
		$c = $oldtime - $now;
		$day = floor($c / 60 / 60 / 24);
		$c -= $day * 60 * 60 * 24;
		$hour = floor($c / 60 / 60);
		$c -= $hour * 60 * 60 ;
		$minute = floor($c / 60);
		$c -= $minute * 60;
		$second = $c;
		return "还剩".$day."天".$hour."小时".$minute."分钟".$second."秒";

	}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>任务详情页</title>
	<link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<style>
		.public_list .list_pic img {
		    width: 100%;
		}
		
		img {
			border:0;
			max-width: 100%;
			vertical-align: top;
		}
		
		.public_list .list_content ul{
			list-style-type: none;
		}
		
		.public_list .list_bm{
			text-align: center;
			margin-bottom: 12px;
		}

		.contents_choujin {
			margin-bottom: 10px;
		}
		
		.contents_choujin h3{
			margin: 0;
			padding: 0;
			padding-bottom: 3px;
			border-bottom: 1px solid #CCC;
		}

		.contents_choujin_con{
			padding-top: 5px;
		}
	</style>

	<script>
		$(function(){
			$("#baoming").click(function(){
				$.ajax({
					type: "post",
					url:"getClientFromCookie.php",
					success: function(msg){
						if(msg > 0){
							alert("您己经登录了!");
						}else{
							alert("您未登录!");
						}
					}
				});
			});
		});
		
	</script>
</head>
<body>
	<div data-role="page" id="page1">
		<div data-role="header"><h3>任务详情页</h3></div>
		<div role="main" class="ui-content">
			<div class="public_list">
				<div class="list_pic_cont">
					<div class="list_pic">
						<img src="../<?php echo $row['task_img_url'];?>" alt="通天河">
					</div>
					<div class="list_content">
						<ul>
	                    	<li>招募时间：<?php echo date("Y-m-d", $row["task_start_time"]) . "--" . date("Y-m-d", $row["task_end_time"]); ?></li>
	                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo ($now = time()) > $row["task_end_time"]?"己结束":time2Units($row["task_end_time"]); ?>)</li>
	                        <li>任务周期：<?php  echo $row["period"];?></li>
	                        <li>征车数量：<?php  echo $row["task_car_num"];?>辆</li>
	                        <li>车辆颜色：<?php  echo $row["car_color"];?></li>
	                        <li>任务酬金：<span><?php  echo $row["task_money"];?></span>元</li>
	                        <li>获得积分：<?php  echo $row["task_jifeng"];?>分</li>
	                        <li>贴膜材质：车贴</li>
	                        
	                    </ul>
					</div>
				</div>

				<div class="list_bm">
					<a href="#" id="baoming" class="ui-btn ui-btn-inline ui-btn-b ui-corner-all ui-shadow">我要报名</a>
					<a href="#" class="ui-btn ui-btn-inline ui-btn-b ui-corner-all ui-shadow">我要咨询</a>
				</div>
				
				<div class="contents_info">
					<div class="contents_choujin">
						<h3>酬金具体分配：</h3>
						<div class="contents_choujin_con"><?php  echo $row["money_distribute"];?></div>
					</div>
					<div class="contents_choujin">
						<h3>车辆附加要求：</h3>
						<div class="contents_choujin_con"><?php  echo $row["car_append"];?></div>
					</div>
					<div class="contents_choujin">
						<h3>商家品牌介绍：</h3>
						<div class="contents_choujin_con"><?php  echo htmlspecialchars_decode($row["brand_introduce"]);?></div>
					</div>
					<div class="contents_choujin">
						<h3>征集活动介绍：</h3>
						<div class="contents_choujin_con"><?php  echo htmlspecialchars_decode($row["collect_activity_intro"]);?></div>
					</div>
				</div>
			</div>
			
		</div>
		<div data-role="footer">footer</div>
	</div>
</body>
</html>