<?php
	include_once("connect.php");
	// 获取数据集
	$sql ="SELECT * FROM tasks ORDER BY task_posttime DESC";
	if (!$result = mysql_query($sql)) {
		echo "查询失败!";
		exit;
	}

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
	<title>登  录</title>
	<link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page" id="page1">
		<div data-role="header"><h3>任务列表</h3></div>
		<div role="main" class="ui-content">
			<ul data-role="listview" data-count-theme="b" data-inset="true">
				<?php
					while ($row = mysql_fetch_array($result)):
				?>
				<li><a data-ajax="false" href="task_info.php?id=<?php echo $row['id']; ?>"><h2>任务标题：<?php echo $row["task_name"]; ?></h2><p>任务状态：<?php echo ($now = time()) > $row["task_end_time"]?"己结束":time2Units($row["task_end_time"]); ?></p><p>报酬:<?php echo $row["task_money"]; ?>元</p><span class="ui-li-count">12</span></a></li>
				<?php endwhile ?>
			</ul>
		</div>
		<div data-role="footer">footer</div>
	</div>
</body>
</html>