<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>陕西世海广告有限公司</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/myProject/thinkphpFrame/Public/Home/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/myProject/thinkphpFrame/Public/Home/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/myProject/thinkphpFrame/Public/Home/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/myProject/thinkphpFrame/Public/Home/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

 
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">陕西世海广告</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/myProject/thinkphpFrame/index.php/Home/Index/index">首页 <span class="sr-only">(current)</span></a></li>
                <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/17">关于我们</a></li>
                <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/20">车体广告</a></li>
                <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/2">合作伙伴</a></li>
                <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/3">爱车保养</a></li>
            </ul>
            <?php $cookid = cookie('userid946'); ?>
<?php if(empty($cookid)): ?><form class="navbar-form navbar-right" method="post" action="/myProject/thinkphpFrame/index.php/Home/User/login">
    <div class="form-group">
        <input type="text" name="mobile" placeholder="手机号" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="密码" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">登 录</button>
    <a href="/myProject/thinkphpFrame/index.php/Home/User/signup" class="btn btn-success">注 册</a>
</form>
<?php else: ?>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">你好，<?php echo ($username); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">个人中心</a></li>
                  <li role="separator" class="divider"></li>              
                  <li><a href="/myProject/thinkphpFrame/index.php/Home/Home/logout">退出登录</a></li>
                </ul>
      </li>
    </ul><?php endif; ?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<!--<div class="body-top">-->
    <!--<div class="jumbotron">-->
        <!--<div class="container">-->
            <!--<h1>Hello, world!</h1>-->
            <!--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>-->
            <!--<p><a class="btn btn-primary btn-lg" href="/myProject/thinkphpFrame/index.php/Home/User/signup" role="button">立即注册 &raquo;</a></p>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<!--替换原来的大屏-->
<div class="header">
    <div class="header-bg" id="headerbg">

    </div>
</div>

<div class="container">

    <div class="body-header page-header">
        <h2>任务列表</h2>
        <p class="lead">在这里您可以查看最新的私家车车体广告招募</p>
    </div>
    <!-- 显示任务列表 -->
    <?php $__FOR_START_16529__=1;$__FOR_END_16529__=$counts + 1;for($j=$__FOR_START_16529__;$j < $__FOR_END_16529__;$j+=3){ if($j % 3 == 1): $a = $j; endif; ?>
        <div class="row">
        	<?php if(is_array($tasks)): $i = 0; $__LIST__ = array_slice($tasks,$a - 1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-4">
    	            <div class="thumbnail">
    	                <img style="height:180px; width:100%; display:block;" src="/myProject/thinkphpFrame/Public/<?php echo ($vo["task_img_url"]); ?>" alt="...">
    	                <div class="caption">
    	                    <h3><?php echo ($vo["task_name"]); ?></h3>
    	                    <p>招募时间：<?php echo (date("Y-m-d",$vo["task_start_time"])); ?>&nbsp;至&nbsp;<?php echo (date("Y-m-d",$vo["task_end_time"])); ?><br />
                                数量：<?php echo ($vo["task_car_num"]); ?>辆<br />
                                佣金：<?php echo ($vo["task_money"]); ?>元<br />
                                任务状态：<?php echo ($vo['task_state']?'报名中':'己结束'); ?><br />
                            </p>
    	                    <p>
    	                    	<?php if($vo['task_state'] == 1): ?><a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary" role="button">报名</a>
                                <?php else: ?>
                                    <a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="btn btn-default" role="button">己结束</a><?php endif; ?>
    	                    </p>
    	                </div>
    	            </div>
    	        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div><?php } ?>
    <hr>
    <div class="body-header page-header">
        <h2>经典案例</h2>
        <p class="lead">我们做过的经典案例</p>
    </div>
    <!-- 显示任务列表 -->
    <?php $__FOR_START_23542__=1;$__FOR_END_23542__=$counts_news + 1;for($j=$__FOR_START_23542__;$j < $__FOR_END_23542__;$j+=3){ if($j % 3 == 1): $a = $j; endif; ?>
        <div class="row">
            <?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,$a - 1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img style="height:180px; width:100%; display:block;" src="/myProject/thinkphpFrame/Public/<?php echo ($vo["news_img_url"]); ?>" alt="...">
                        <div class="caption">
                            <h3><?php echo ($vo["name"]); ?></h3>
                            <p>&nbsp;</p>
                            <p>
                                <a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/<?php echo ($vo["id"]); ?>/cat_id/<?php echo ($vo["cat_id"]); ?>" class="btn btn-primary" role="button">查看详情</a>
                            </p>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div><?php } ?>
    <hr>
    <div class="body-header page-header">
        <h2>会员排名</h2>
        <p class="lead">显示最新的会员排名和积分最多的会员</p>
    </div>
    <!-- 显示会员排名 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">最新会员排名</div>
                  <div class="panel-body">
                    <table class="table">
                      <thead>
                          <tr>
                              <th>会员名称</th>
                              <th>会员积分</th>
                              <th>注册时间</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php if(is_array($new_members)): $i = 0; $__LIST__ = $new_members;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo ($vo1["name"]); ?></td>
                              <td><?php echo ($vo1["jifeng"]); ?></td>
                              <td><?php echo (date('Y-m-d H:i',$vo1["posttime"])); ?></td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">会员积分排行</div>
                  <div class="panel-body">
                    <table class="table">
                      <thead>
                          <tr>
                              <th>会员名称</th>
                              <th>会员积分</th>
                              <th>注册时间</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php if(is_array($jifeng_members)): $i = 0; $__LIST__ = $jifeng_members;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo ($vo2["name"]); ?></td>
                              <td><?php echo ($vo2["jifeng"]); ?></td>
                              <td><?php echo (date('Y-m-d H:i',$vo2["posttime"])); ?></td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    

    

<a href="#top" id="toTop"></a>
    
</div> <!-- /container -->
<footer class="main-footer">
	<div class="copyright">
		<div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <span>Copyright © <a href="http://www.shihaiguanggao.com/">陕西世海广告有限公司</a></span> | 
	                <span><a href="http://www.miibeian.gov.cn/" target="_blank">陕ICP备11008151号</a></span> | 
	                <span>陕公网安备11010802014853</span>
	            </div>
	        </div>
	    </div>
	</div>
	
    
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/myProject/thinkphpFrame/Public/Home/js/jquery.scrollToTop.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/myProject/thinkphpFrame/Public/Home/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Home/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<!-- <script src="/myProject/thinkphpFrame/Public/Home/js/My97DatePicker/WdatePicker.js"></script> -->
<script src="/myProject/thinkphpFrame/Public/Home/js/ie10-viewport-bug-workaround.js"></script>
<script src="/myProject/thinkphpFrame/Public/Home/js/offcanvas.js"></script>

<script src="/myProject/thinkphpFrame/Public/Home/js/mysite.js"></script>
</body>
</html>