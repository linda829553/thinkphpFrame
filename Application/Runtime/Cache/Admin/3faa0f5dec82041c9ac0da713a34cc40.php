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
					<a href="/myProject/thinkphpFrame/index.php/Admin/Index/changeAdminPass" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
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
					
	<a href="#" class="nav-top-item current">
		会员管理
	</a>
	<ul>
		<li><a href="/myProject/thinkphpFrame/index.php/Admin/Index/index">管理会员</a></li>
		<li><a class="current" href="#">编辑会员</a></li>
		<!--
		<li><a href="#">Manage Pages</a></li> -->
		
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
						Image Gallery
					</a>
					<ul>
						<li><a href="#">Upload Images</a></li>
						<li><a href="#">Manage Galleries</a></li>
						<li><a href="#">Manage Albums</a></li>
						<li><a href="#">Gallery Settings</a></li>
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
						<li><a href="javascript:history.go(-1)">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2" class="default-tab">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>任务标题</th>
								   <th>招募时间</th>
								   <th>周期</th>
								   <th>佂车数量</th>
								   <th>车色</th>
								   <th>任务酬金</th>
								   <th>任务积分</th>
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<?php echo ($page); ?>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td><input type="checkbox" /></td>
									<td><?php echo (substr($vo["task_name"],0,72)); ?></td>
									<td><?php echo (date('Y-m-d',$vo["task_start_time"])); ?>--<?php echo (date('Y-m-d',$vo["task_end_time"])); ?></td>
									<td><?php echo ($vo["period"]); ?></td>
									<td><?php echo ($vo["task_car_num"]); ?></td>
									<td><?php echo ($vo["car_color"]); ?></td>
									<td><?php echo ($vo["task_money"]); ?></td>
									<td><?php echo ($vo["task_jifeng"]); ?></td>
									<td>
										<!-- Icons -->
										 <a href="/myProject/thinkphpFrame/index.php/Admin/Index/show_edit/id/<?php echo ($vo["id"]); ?>" title="Edit"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="/myProject/thinkphpFrame/index.php/Admin/Index/delete/id/<?php echo ($vo["id"]); ?>" title="Delete"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/cross.png" alt="Delete" /></a> 
										 <a href="#" title="Edit Meta"><img src="/myProject/thinkphpFrame/Public/Admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content default-tab" id="tab2">
					
						<form action="/myProject/thinkphpFrame/index.php/Admin/Index/update_member" method="post" name="task_form">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

								<p>
									<label>姓名</label>
									<input class="text-input" type="text" id="name" name="name" value="<?php echo ($data["name"]); ?>" /> 
									<input class="text-input medium-input" type="hidden" id="id" name="id" value="<?php echo ($data["id"]); ?>" /> 
								</p>


<!-- 								<p>
									<label>招募时间</label>
										<input class="text-input" type="text" id="task_start_time" name="task_start_time" value="<?php echo (date("Y-m-d",$data["task_start_time"])); ?>" />
									-
										<input class="text-input" type="text" id="task_end_time" name="task_end_time" value="<?php echo (date("Y-m-d",$data["task_end_time"])); ?>" /> 
								</p> -->

								<p>
									<label>卡号</label>
									<input class="text-input" type="text" id="card_num" name="card_num" value="<?php echo ($data["card_num"]); ?>" /> 
								</p>

								<p>
									<label>手机号</label>
									<input class="text-input" type="text" id="mobile" name="mobile" value="<?php echo ($data["mobile"]); ?>" /> 
								</p>

								<p>
									<label>车号</label>
									<input class="text-input" type="text" id="carnumber" name="carnumber" value="<?php echo ($data["carnumber"]); ?>" /> 
								</p>

								<p>
									<label>车型</label>
									<input class="text-input" type="text" id="cartype" name="cartype" value="<?php echo ($data["cartype"]); ?>" /> 
								</p>

								<p>
									<label>车色</label>
									<input class="text-input" type="text" id="carcolor" name="carcolor" value="<?php echo ($data["carcolor"]); ?>" /> 
								</p>

								<p>
									<label>审车时间</label>
									<input class="text-input" type="text" id="cartime" name="cartime" value="<?php echo ($data["cartime"]); ?>" /> 
								</p>

								<p>
									<label>积分</label>
									<input class="text-input" type="text" id="jifeng" name="jifeng" value="<?php echo ($data["jifeng"]); ?>" /> 
								</p>

								<p>
									<label>注册时间</label>
										<input class="text-input" type="text" id="posttime" name="posttime" value="<?php echo (date("Y-m-d",$data["posttime"])); ?>" />
								</p>

								<p>
									<label>家庭住址</label>
										<input class="text-input medium-input" type="text" id="homeaddress" name="homeaddress" value="<?php echo ($data["homeaddress"]); ?>" />
								</p>


								<p>
									<label>单位地址</label>
										<input class="text-input medium-input" type="text" id="workaddress" name="workaddress" value="<?php echo ($data["workaddress"]); ?>" />
								</p>

								<p>
									<input class="button" type="submit" value="更  新" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
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

<inclde file="Public:footer" />