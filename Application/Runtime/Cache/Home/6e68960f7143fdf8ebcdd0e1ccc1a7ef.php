<?php if (!defined('THINK_PATH')) exit();?> <?php echo "你好！header"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>[title]</title>
<meta name="keywords" content="[keywords]" />
</head>
 	<?php if(is_array($list)): foreach($list as $key=>$vo): echo ($vo["id"]); ?>:<?php echo ($vo["data"]); endforeach; endif; ?>
 </html>