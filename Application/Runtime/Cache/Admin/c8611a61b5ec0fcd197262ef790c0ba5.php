<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="/myProject/thinkphpFrame/Public/Admin/resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/myProject/thinkphpFrame/Public/Admin/resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/myProject/thinkphpFrame/Public/Admin/resources/css/invalid.css" type="text/css" media="screen" />	
<link rel="stylesheet" href="/myProject/thinkphpFrame/Public/Admin/resources/css/jquery-ui.min.css" type="text/css" media="screen" />	
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/facebox.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/my.js"></script>
<script type="text/javascript" src="/myProject/thinkphpFrame/Public/Admin/resources/scripts/layer.js"></script>
<script charset="utf-8" src="/myProject/thinkphpFrame/editor/kindeditor.js"></script>
<script charset="utf-8" src="/myProject/thinkphpFrame/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
                window.editor = K.create('#editor_id1');
        });

  //       var options = {
  //       cssPath : '/css/index.css',
  //       filterMode : true
		// };
		// var editor = K.create('textarea[name="content"]', options);
</script>

<script src="http://open.web.meitu.com/sources/xiuxiu.js" type="text/javascript"></script>
<script type="text/javascript">
window.onload=function(){
   // 剪裁尺寸
  xiuxiu.setLaunchVars("cropPresets", "640x480");
  xiuxiu.setLaunchVars("customMenu", ["edit"]);


  /*第1个参数是加载编辑器div容器，第2个参数是编辑器类型，第3个参数是div容器宽，第4个参数是div容器高*/
  xiuxiu.embedSWF("altContent",1,"100%","100%");
  //修改为您自己的图片上传接口
  // xiuxiu.setUploadURL("/myProject/thinkphpFrame/Public/xiuxiu/image_upload.php");
  xiuxiu.setUploadURL("http://localhost/myProject/thinkphpFrame/Public/xiuxiu/image_upload.php");
  xiuxiu.setUploadType(1);


  // xiuxiu.setUploadDataFieldName("upload_file");
  // xiuxiu.onInit = function ()
  // {
  //   xiuxiu.loadPhoto("http://open.web.meitu.com/sources/images/1.jpg");//修改为要处理的图片url
  // }
  xiuxiu.onUploadResponse = function (data) {
    // console.log(data);
    $("#task_img_url").val(data);
    $("#layerCut").css("display","none");  // 上传成功后关闭窗口
    $("input[type='button']").parent().find("span").css("display","inline");
  }

  xiuxiu.onClose = function(){
    $("#layerCut").css("display","none");
  }
}
</script>
</head>
<body>
<div id="layerCut" class="layerCut" style="display: none;">
	<div id="altContent"></div>
</div><!--美图秀秀弹出窗口层-->
<div id="body-wrapper" /> <!-- Wrapper for the radial gradient background -->

		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">陕西世海广告后台</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="/myProject/thinkphpFrame/Public/Admin/resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="http://localhost/myProject/test/shihai/mobile/" target="_blank" title="查看前台">查看前台</a> | <a href="<?php echo ($exit_url); ?>" title="查看前台">退出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					
	<a href="#" class="nav-top-item no-submenu current">
		更改密码
	</a>
       
				</li>
				
				<li> <!--
					<a href="#" class="nav-top-item current"> 
					会员管理
					</a>
					<ul>
						<li><a href="#">Write a new Article</a></li>
						<li><a class="current" href="/myProject/thinkphpFrame/index.php/Admin/Index/index">管理 会员</a></li> 
						<li><a href="#">Manage Comments</a></li>
						<li><a href="#">Manage Categories</a></li> 			
					</ul>-->
					
						<a href="#" class="nav-top-item"> 
						会员管理
						</a>
						<ul>
							<li><a href="/myProject/thinkphpFrame/index.php/Admin/Index/index">管理会员</a></li> 
							<!--
							<li><a href="#">Write a new Article</a></li>						
							<li><a href="#">Manage Comments</a></li>
							<li><a href="#">Manage Categories</a></li> 	-->		
						</ul>
					
				</li>
				
				<li>
					
						<a href="#" class="nav-top-item">
							任务管理
						</a>
						<ul>
							<li><a href="/myProject/thinkphpFrame/index.php/Admin/Task/index">发布任务</a></li>
							<!--
							<li><a href="#">Manage Pages</a></li> -->
							
						</ul>
					
				</li>
				
				<li>
					
						<a href="#" class="nav-top-item">
							新闻管理
						</a>
						<ul>
							<li><a href="/myProject/thinkphpFrame/index.php/Admin/News/index">发布新闻</a></li>
							<li><a href="/myProject/thinkphpFrame/index.php/Admin/News/index">新闻分类</a></li>
							<!--
							<li><a href="#">Manage Pages</a></li> -->
							
						</ul>
					
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Events Calendar
					</a>
					<ul>
						<li><a href="#">Calendar Overview</a></li>
						<li><a href="#">Add a new Event</a></li>
						<li><a href="#">Calendar Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
					<ul>
						<li><a href="#">General</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Users and Permissions</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Create a New Page
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box" id="member-manage"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">    
					<form action="/myProject/thinkphpFrame/index.php/Admin/Index/updatePass" method="post" name="task_form">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

								<p>
									<label>用户名</label>
									<input class="text-input" type="text" id="username" name="username" value="<?php echo ($admin_name); ?>" />
								</p>

								<p>
									<label>原密码</label>
									<input class="text-input" type="password" id="pass" name="pass" value="" /> 
									<span id="oldprompt"></span>
								</p>

								<p>
									<label>新密码</label>
									<input class="text-input" type="password" id="newPass" name="newPass" value="" /> 
									<span id="prompt1"></span>
								</p>

								<p>
									<label>重复密码</label>
									<input class="text-input" type="password" id="re_newPass" name="re_newPass" value="" />
									<span id="prompt2"></span>
								</p>
								
								<p>
									<input class="button" id="submit" type="submit" value="更  新" />
								</p>

								<div id="tip4"></div>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
					</form>
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>Content box left</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>Maecenas dignissim</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-right closed-box">
				
				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<h3>Content box right</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>This box is closed by default</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			
			<div class="notification attention png_bg">
				<a href="#" class="close"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<!-- End Notifications -->
<script>
	function onSuccess (data) {
		// body...
		if (data==1) {
			// alert("正确");
			$("#oldprompt").html('<span class="input-notification success png_bg">密码正确</span>');
		} else{
			// alert("错误");
			$("#oldprompt").html('<span class="input-notification error png_bg">密码错误</span>');
		};
	}

	function onError (argument) {
		// body...
	}
	
	$(function(){
		// ajax 密码验证
		$("#pass").blur(function(){
			$.ajax({
				type: 'post',
				data: {oldpassword:this.value},
				url: 'checkPass',
				success: onSuccess,
				error: onError

			});
		});

		$("#newPass").blur(function(){
			var pass1 = $("#newPass").val().length;
			if (pass1<6) {
				$("#prompt1").html('<span class="input-notification error png_bg">太短了!</span>');
			} else if(pass1>18){
				$("#prompt1").html('<span class="input-notification error png_bg">太长了!</span>');
			}else{
				$("#prompt1").html('<span class="input-notification success png_bg">可接受!</span>');
			}
		});

		$("#re_newPass").blur(function(){
			var tmp = $("#newPass").val();
			var num = $("#re_newPass").val().length;
			if ($("#re_newPass").val()!=tmp) {
				$("#prompt2").html('<span class="input-notification error png_bg">两次密码不一致!</span>');
			}else{
				if (num>=6&&num<=18) {
					$("#prompt2").html('<span class="input-notification success png_bg">正确!</span>');
				} else{
					$("#prompt2").html('<span class="input-notification error png_bg">非法!</span>');
				}
			}
		});

		// 两次输入密码是否一致
		$("#submit").click(function(){
			// // alert();
			// // return false;
			// var pass1 = $("#newPass").val();
			// var pass2 = $("#re_newPass").val();
			// // console.log(pass1+'_'+pass2);
			// // return false;
			// if (pass1 != pass2) {
			// 	// alert("两次输入密码不一致");
			// 	$("#prompt1, #prompt2").html('<span class="input-notification error png_bg">两次密码不一致</span>');
			// 	return false;
			// }else{
			// 	return true;
			// }
			var flag = true;
			var old = $("#pass").val();
			var pass1 = $("#newPass").val();
			var pass2 = $("#re_newPass").val();
			var num1 = $("#newPass").val().length;
			var num2 = $("#re_newPass").val().length;
			if (num1!=num2||num1<6||num1>18||num2<6||num2>18||pass1!=pass2) {
				flag = false;
			} else{
				flag = true;
			}
			return flag;
		});
	});

	

</script>
<inclde file="Public:footer" />