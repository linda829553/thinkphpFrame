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
                <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/index">首页 <span class="sr-only">(current)</span></a></li>
                <?php switch($_GET['id']): case "17": ?><li class="active"><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/17">关于我们</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/20">车体广告</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/2">合作伙伴</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/3">爱车保养</a></li><?php break;?>
                  <?php case "20": ?><li class="active">
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/17">关于我们</a></li>
                    <li class="active"><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/20">车体广告</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/2">合作伙伴</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/3">爱车保养</a></li><?php break;?>
                  <?php default: ?>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/17">关于我们</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage/id/20">车体广告</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/2">合作伙伴</a></li>
                    <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/showPage1/cat_id/3">爱车保养</a></li><?php endswitch;?>
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

 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>陕西世海广告公司</h1>
            <p>达客车友会，专业专注宝鸡私家车车身广告代言</p>
          </div>

          <!-- 路径导航 -->
          <div class="mybread">
            <ol class="breadcrumb">
              <li><a href="/myProject/thinkphpFrame/index.php/Home/Index/index">首页</a></li>
              <!-- <li><a href="/myProject/thinkphpFrame/index.php/Home/User/showPage1/cat_id/3">爱车保养</a></li> -->
              <li class="active"><?php echo ($data["task_name"]); ?></li>
            </ol>
          </div>
          
          <!-- 左边主体部分 -->
          <div class="row">
            <div class="news-body col-xs-12 col-lg-12">
              <div class="col-sm-9"> <!--.col-sm-9 -->
              <div class="left-content">
                  <div class="login">
                    <h2>登录</h2>
                    <div class="form-wrap">
                      <form class="form-horizontal" role="form" method="post" action="/myProject/thinkphpFrame/index.php/Home/User/login">
                        <div class="form-group">
                          <label for="inputMobile" class="col-sm-2 control-label">手机号</label>
                          <div class="col-sm-10">
                            <input type="num" name="mobile" class="form-control" id="inputMobile" placeholder="请输入您的手机号">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                          <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="请输入您的密码">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">登&nbsp;录</button>
                          </div>
                        </div>
                      </form>
                    </div>             
                </div>
                <br>
                <div class="signup">
                  
                    <h2>注册</h2>
                    <div class="form-wrap">
                      <form class="form-horizontal" role="form" method="post" action="/myProject/thinkphpFrame/index.php/Home/User/insert">
                        <div class="form-group">
                          <label for="inputMobile" class="col-sm-2 control-label">手机号</label>
                          <div class="col-sm-10">
                            <input type="tel" name="mobile" class="form-control" id="inputMobile" placeholder="请输入您的手机号">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1" class="col-sm-2 control-label">密码</label>
                          <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="请输入您的密码">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword2" class="col-sm-2 control-label">确认密码</label>
                          <div class="col-sm-10">
                            <input type="password" name="re_password" class="form-control" id="inputPassword2" placeholder="请再一次输入您的密码">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputCarNum" class="col-sm-2 control-label">车牌号</label>
                          <div class="col-sm-10">
                            <input type="text" name="carnumber" class="form-control" id="inputCarNum" placeholder="如：陕C·00001">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputCartype" class="col-sm-2 control-label">车型</label>
                          <div class="col-sm-10">
                            <input type="text" name="cartype" class="form-control" id="inputCartype" placeholder="如：东风标致508">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputCarcolor" class="col-sm-2 control-label">颜色</label>
                          <div class="col-sm-10">
                            <input type="text" name="carcolor" class="form-control" id="inputCarcolor" placeholder="如：白色">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputHomeaddress" class="col-sm-2 control-label">家庭住址</label>
                          <div class="col-sm-10">
                            <input type="text" name="homeaddress" class="form-control" id="inputHomeaddress" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWorkaddress" class="col-sm-2 control-label">单位地址</label>
                          <div class="col-sm-10">
                            <input type="text" name="workaddress" class="form-control" id="inputWorkaddress" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="datetimepicker" class="col-sm-2 control-label">审车时间</label>
                          <div class="col-sm-10">
                             <div class="input-group date form_datetime" data-date="" data-date-format="yyyy年mm月dd日" data-link-field="dtp_input1" data-link-format="yyyy年mm月dd日">
                              <input class="form-control" type="text" value="" readonly>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                             </div>
                            <input type="hidden" id="dtp_input1" name="cartime" value="" /><br/>
                          </div>
                        </div>

                        <!-- <div class="form-group">
                          <label for="inputCartime" class="col-sm-2 control-label">审车时间</label>
                          <div class="col-sm-10">
                            <input id="inputCartime" type="text" name="cartime" class="form-control" onClick="WdatePicker()"/>
                          </div>
                        </div> -->
                        <div class="form-group">
                          <div class="col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">注&nbsp;册</button>
                          </div>
                        </div>
                      </form>
                    </div>          
                </div> <!-- /.signup-->
              </div>
              </div><!--.col-sm-9 -->
                  <div class="col-sm-3"></div>
            </div><!--/.col-xs-12.col-lg-12-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
        
        <!-- 右边列表组 -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <!-- <?php if(is_array($topTasks)): $i = 0; $__LIST__ = $topTasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_GET['id']== $vo['id']): ?><a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="list-group-item active"><?php echo (mb_substr($vo["task_name"],0,16,"utf-8")); ?></a>
              <?php else: ?>
                <a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="list-group-item"><?php echo (mb_substr($vo["task_name"],0,16,"utf-8")); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
            <?php if(is_array($topTasks)): $i = 0; $__LIST__ = $topTasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_GET['id']== $vo['id']): ?><a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="list-group-item active"><?php echo (mb_substr($vo["task_name"],0,16,"utf-8")); ?>
                  <?php if($vo['task_state'] == 1): ?><span class="label label-success">可报名</span><?php endif; ?>
                </a>
              <?php else: ?>
                <a href="/myProject/thinkphpFrame/index.php/Home/Index/showTask/id/<?php echo ($vo["id"]); ?>" class="list-group-item"><?php echo (mb_substr($vo["task_name"],0,16,"utf-8")); ?>
                  <?php if($vo['task_state'] == 1): ?><span class="label label-success">可报名</span><?php endif; ?>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">联系我们</h3>
            </div>
            <div class="panel-body">
              <div class="contact_list">
                  <ul class="contact_list_ul">            
                      <li class="contact_list_li"><img src="/myProject/thinkphpFrame/Public/Home/images/tel_zc.jpg" width="190" height="50"></li>    
                      <li class="contact_list_li"> <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=362374490&amp;site=qq&amp;menu=yes" target="_blank"><img src="/myProject/thinkphpFrame/Public/Home/images/qq_2.jpg" width="110" height="40"></a></li>    
                      <li class="contact_list_li">
                        <p><strong>地址：</strong>西安市南门外中贸广场5号楼1单元2707室</p>
                      </li>       
                  </ul>
              </div>
            </div>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>
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