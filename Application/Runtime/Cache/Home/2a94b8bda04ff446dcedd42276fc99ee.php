<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0048) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="私家车广告,济南私家车广告,私家车车体广告,以车养车,赚油钱">
	<meta name="description" content="七十二变,私家车广告,济南私家车广告,私家车车体广告,以车养车,赚油钱">
    <title>汽十二变</title>
        <script charset="utf-8" src="/myProject/thinkphpFrame/Public/Home/js/bian72/v.js"></script><script src="/myProject/thinkphpFrame/Public/Home/js/bian72/hm.js"></script><script src="/myProject/thinkphpFrame/Public/Home/js/bian72/hm(1).js"></script><script src="/myProject/thinkphpFrame/Public/Home/js/bian72/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script>
	var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?8cf0b3aa7bc327b5c18b941457d47140";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>

		<script type="text/javascript">
				$(function () {
				     newsTab();
				})
				 function newsTab() {
				    $(".slide-t a").mouseover(function () {
				        var index = $(this).index();
				        $(this).addClass("slide-ton").siblings().removeClass("slide-ton");
				        $(".slide-cc").eq(index).show().siblings(".slide-cc").hide();
				    }).eq(0).trigger("mouseover");
				} 
				
        </script>
        <style type="text/css"></style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
<body>
	<div class="page">
	







    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="application-name" content="爱生活,爱汽十二变,让车主赚钱的网站">
    <meta name="description" content="汽十二变-一个让车主赚钱的网站,私家车车体广告标准缔造者,通过汽十二变代言广告任务赚取酬劳">
    <meta name="keywords" content="汽十二变,七十二变,私家车广告,车身代言,车主赚钱,车友惠">
    <link rel="shortcut icon" href="http://www.i72bian.com/static/website/images/favicon.ico">
    <link href="http://www.i72bian.com/static/website/css/style.css" rel="stylesheet">
    <link href="http://www.i72bian.com/static/website/css/active.css" rel="stylesheet">
    <title>汽十二变</title>
	<script>

	var _hmt = _hmt || [];
	
	(function() {
	
	  var hm = document.createElement("script");
	
	  hm.src = "//hm.baidu.com/hm.js?6d21eb4c74050f598dc79bc9db3b3ea3";
	
	  var s = document.getElementsByTagName("script")[0];
	
	  s.parentNode.insertBefore(hm, s);
	
	})();

</script>
    <script type="text/javascript">
			$(function () {
				focus();
			});
			
			
			
			function showCode(){
				$("#imgverycode").attr("src", $("#verycode_url").val()+new Date());
				imageCaptchaFlag=0;
				$("#getcaptcha").hide();
			}
/////生成登录注册
function login(num) {
	$(".pop").hide();
    if (num == 1) {
		if($(".pop-reg").length>0){
			$(".pop-reg").show();
		}else{
		var obj =
		'<div class="pop pop-reg">' +
			'<div class="login-box">' +
				'<div class="login">' +
					'<div class="lgn-t">用户注册</div>' +
					'<div class="lgn-row lgn-row4">' +
						'<label class="lgn-lab">手机号</label>' +
						'<input id="mobile" class="lgn-txt" type="text" value="请输入您的手机号码" maxlength="11" />' +
					'</div>' + ' <input type="hidden" id="verycode_url" value="/login/genverycode.htm?" />' +
					'<div class="lgn-row lgn-row4">' +
						'<label class="lgn-lab">密码</label>' +
						'<input id="registerPassword"  class="lgn-txt" type="password" maxlength="20" />' +
					'</div>' + 
					'<div id="passstrength"><div>弱</div><div>中</div><div>强</div></div>' +
					'<div class="lgn-row lgn-row4">' +
						'<label class="lgn-lab">确认密码</label>' +
						'<input id="registerAffirmPassword" class="lgn-txt" type="password" maxlength="20" />' +
					'</div>' + 
					'<div class="lgn-row lgn-row2">' +
						'<label class="lgn-lab">验证码</label>' +
						'<input id="imageCaptcha" class="lgn-txt" type="text" value="请输入图片验证码" maxlength="4" />' +
					'</div>' +
					'<img id="imgverycode" onclick="showCode()" class="lgn-yzm" src="/login/genverycode.htm" />' +
					'<div class="lgn-row lgn-row2">' +
						'<label class="lgn-lab">手机验证码</label>' +
						'<input  id="captcha" class="lgn-txt" type="text" value="请输入手机验证码" maxlength="4" />' +
					'</div>' +
					'<a id="getcaptcha" class="lgn-btn lgn-get">获取验证码</a>' +
					
					'<div  class="lgn-error"><span id="error_span2" style="float:left; color:#f00; font-size:16px;"></span><span id="" style="float:right;"><a href="/question/memberregister.htm">《汽十二变会员注册协议》</a></span></div>' +
					'<div class="lgn-row lgn-row3">' +
						'<a id="register" class="lgn-zc">同意协议并注册</a>' +
					'</div>' +
				'</div>' +
				'<div class="lgnright">' +
					'<div class="lgnlogo"></div>'+
					'<a class="lgn-btn lgn-dl" href="javascript:login(0)">登 录</a>' +
				'</div>' +
				'<div class="lgn-close"></div>' +
			'</div>' +
			'<div class="popbg"></div>' +
		'</div>';
		$("body").append(obj);
		}
		check1();
    } else if (num == 0) {
		if($(".pop-lgn").length>0){
			$(".pop-lgn").show();
		}else{
		var obj =
		'<div class="pop pop-lgn">' +
			'<div class="login-box">' +
				'<div class="login">' +
					'<div class="lgn-t">用户登录</div>' +
					'<div class="lgn-row">' +
						'<label class="lgn-lab">用户名</label>' +
						'<input id="username" class="lgn-txt" type="text" value="请输入您的手机号码/车牌号" maxlength="11" />' +
					'</div>' +
					'<div class="lgn-row">' +
						'<label class="lgn-lab">密 码</label>' +
						'<input id="password" class="lgn-txt" type="password" value="" maxlength="20" />' +
					'</div>' +
					'<div class="lgn-error">' +
                    /////新修改 添加记住密码 忘记密码
                    '<span id="error_span" style="float:left;"></span>'+
                    '<div style="float:right;"><a href="/login/forget.htm">忘记密码？</a></div>'+
                '</div>' +
					'<div class="lgn-row lgn-row3">' +
						'<a id="landed" class="lgn-zc">登 录</a>' +
					'</div>' +
				'</div>' +
				'<div class="lgnright">' +
					'<div class="lgnlogo"></div>'+
					'<a class="lgn-btn lgn-dl" href="javascript:login(1)">注 册</a>' +
				'</div>' +
				'<div class="lgn-close"></div>' +
			'</div>' +
			'<div class="popbg"></div>' +
		'</div>';
		$("body").append(obj);
		}
    } else if (num == 2) {  /////新添加注册成功页面
        var obj =
            '<div class="pop pop-success">' +
                '<div class="login-box">' +
                    '<div class="login">' +
                        '<div class="lgn-t" style="text-align:center; margin-top:10px;">恭喜您，注册成功！</div>' +
                        '<div class="lgn-success">' +
                            '<p>恭喜您，您已经成功注册为汽十二变会员</p>' +
                            '<p>马上完善<a id="toOwner" title="跳转到认证信息页面">账户信息</a> 去 抢任务吧</p>' +
                        '</div>' +
                        '<div class="lgn-row">' +
    						'<a id="toPersonal" class="lgn-zc">完善信息</a>' +
    					'</div>' +
                    '</div>' +
                    '<div class="lgnright">' +
                    '</div>' +
                    '<div class="lgn-close"></div>' +
                '</div>' +
                '<div class="popbg"></div>' +
            '</div>';
            $("body").append(obj);
        }    
    check0();
    popClick();
    textChange(".lgn-txt");
    submitOk();
}
/////pop里面的click focus等事件
function popClick() {
    $(".lgn-close").hover(function () {
        $(this).addClass("turn360");
    }, function () {
        $(this).removeClass("turn360");
    })
    $(".lgn-txt").focus(function () {
        $(this).parent().css({ "border": "1px solid #fd8459", "box-shadow": "0 0 6px rgba(247,83,26,0.8)" });
    })
    $(".lgn-txt").blur(function () {
        $(this).parent().css({ "border": "1px solid #dfdfdf", "box-shadow": "none" });
    })
    $(".lgn-close").click(function () {
        $(this).parents(".pop").remove();
    })
}
/////注册成功
var Mobile_phone="";
function submitOk(){
	$("#toOwner").click(function (){
		$.post("/login/landed.htm",{"username":Mobile_phone,"password":$("#registerPassword").val()},
			function(e){
	     	   if(e=="1"){
	    		   location.href = "/personal/toOwner.htm";
	    	   }else{
	    		   location.href = "/index.htm";
	    	   }
			}
		);
	});
	$("#toPersonal").click(function (){
		$.post("/login/landed.htm",{"username":Mobile_phone,"password":$("#registerPassword").val()},
			function(e){
	     	   if(e=="1"){
	    		   location.href = "/personal/toPersonal.htm";
	    	   }else{
	    		   location.href = "/index.htm";
	    	   }
			}
		);
	});
}
/////input focus blur事件
function textChange(textClass) {
    var obj = $(textClass);
    obj.each(function () {
        var text = $(this).val();
        $(this).focus(function () {
            if ($(this).val() == text) {
                $(this).val("");
            }
        })
        $(this).blur(function () {
            if ($(this).val() == "") {
                $(this).val(text);
            }
        })
    })
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//注册
var i=30;
var telTemp=0;
var imageTemp=0;
var imageCaptchaFlag=0;//图片验证码正确标志位,不正确
function check1(){
	$("#getcaptcha").hide();
	var getcaptchaFlag=1;
	var floatU=0;//手机号码正确标志位,不正确
	var floatP=0;
	var registerPasswordFlag=0;//密码格式，错误
	var registerAffirmPasswordFlag=0;//确认密码正确，错误
	$("#registerPassword").blur(function (){
		if($(this).val()==""){
			registerPasswordFlag=0;
			//$("#error_span2").html("");
			return false;
		}
		if(check_password($(this).val())){
			registerPasswordFlag=1;
		}else{
			$("#error_span2").html("密码格式错,应为6-20位字母数字");
			registerPasswordFlag=0;
			return false;
		}
		if($(this).val()==$("#registerAffirmPassword").val()){
			registerAffirmPasswordFlag=1;
			//$("#error_span2").html("两次密码相同");
		}else{
			registerAffirmPasswordFlag=0;
			$("#error_span2").html("请输入与密码相同的确认密码");
		}
	});
	
	$("#registerAffirmPassword").blur(function (){
		if($("#registerPassword").val()==""||$("#registerAffirmPassword").val()==""){
			registerAffirmPasswordFlag=0;
			return false;
		}
		if($(this).val()==$("#registerPassword").val()){
			registerAffirmPasswordFlag=1;
			//$("#error_span2").html("两次密码相同");
		}else{
			registerAffirmPasswordFlag=0;
			$("#error_span2").html("两次密码输入不一致!");
		}
	});
	
	
	$("#imageCaptcha").focus(function (){
		imageCaptchaFlag=0;//错
		$("#getcaptcha").hide();
	});
	
	$("#imageCaptcha").blur(function (){
	var mobileNow = $("#mobile").val();
		if(check_mobile(mobileNow)){
			$.post("/login/checkUserName.htm",{"username":mobileNow},function(e){
				if(e!="0"){
					$("#getcaptcha").hide();
					$("#error_span2").html("该手机号码已被注册!");
					return false;
				}
		
				
			});
		}else{
			$("#error_span2").html("手机号码格式不正确");
			//getcaptchaFlag=0;
		}
		var imageVal=$("#imageCaptcha").val();
		if(imageVal==""){
			return false;
		}
		$.post("/login/checkImageCode.htm",{"ImageCode":imageVal},function (e){
			if(e=="yes"){
				imageCaptchaFlag=1;//正确
				if(getcaptchaFlag==1&&floatU==1){
					$("#getcaptcha").show();
				}
			}
			if(e=="no"){
			$("#error_span2").html("验证码不正确");
				imageCaptchaFlag=0;//错
				$("#getcaptcha").hide();
			}else{
				$("#error_span2").html("");
			}
		});
	});
	
	
	$("#mobile").focus(function (){
		var val=$(this).val();
		if(val=="请输入您的手机号码"){
			$(this).val("");
		}
		floatU=0;//错
		$("#getcaptcha").hide();
	});
	
	$("#mobile").blur(function (){
		if($(this).val()==""){
			$(this).val("请输入您的手机号码");
			$("#error_span2").html("");
			floatU=0;
			return false;
		}
		if(check_mobile($(this).val())){
			$.post("/login/checkUserName.htm",{"username":$(this).val()},function(e){
				if(e!="0"){
					$("#error_span2").html("该手机号码已被注册!");
					floatU=0;
					$("#getcaptcha").hide();
				}else{
					/* $("#error_span2").html("该手机号码可以使用"); */
					$("#error_span2").html("");
					floatU=1;
					if(getcaptchaFlag==1&&imageCaptchaFlag==1){
						$("#getcaptcha").show();
					}
				}
			});
		}else{
			$("#error_span2").html("手机号码格式不正确");
			$("#getcaptcha").hide();
			floatU=0;
		}
		
	});
	
	/* $("#captcha").focus(function (){
		if($(this).val()=="请输入手机验证码"){
			$(this).val("");
		}
	}); */
	
	$("#captcha").blur(function (){
		var captcha = $(this).val();
		if(captcha==""){
			$(this).val("请输入手机验证码");
		}
		if($(this).val()=="请输入手机验证码"){
		//	$("#error_span2").html("");
			return false;
		}
		if(check_captcha(captcha)){
			//$("#error_span2").html("验证码格式正确");
			$("#error_span2").html("");
			floatP=1;
		}else{
			$("#error_span2").html("验证码格式不正确");
			floatP=0;
		}
	});
	
	$("#getcaptcha").click(function (){
		if(getcaptchaFlag==0){
			return false;
		}
		var mobileNow = $("#mobile").val();
		imageTemp=$("#imageCaptcha").val();
		telTemp=mobileNow;
		if(check_mobile(mobileNow)){
			$.post("/login/checkUserName.htm",{"username":mobileNow},function(e){
				if(e!="0"){
					$("#getcaptcha").hide();
					$("#error_span2").html("该手机号码已存在");
					return false;
				}
		
				$.post("/login/testGetCode.htm",{"Mobile_phone":mobileNow,"ImageCode":imageTemp},function(){
					i=30;
					timer();
					getcaptchaFlag=0;
					$("#getcaptcha").hide();
					setTimeout(function(){
						getcaptchaFlag=1;
						if(imageCaptchaFlag==1&&floatU==1){
							$("#getcaptcha").val("获取验证码");
							$("#getcaptcha").show();
						}else{
							$("#getcaptcha").val("获取验证码");
							$("#getcaptcha").hide();
						}
						
					},30000);
				});
			});
		}else{
			$("#error_span2").html("手机号码格式不正确");
			//getcaptchaFlag=0;
		}
	});
	
	$("#register").click(function (){  //lt修改
		if($("#mobile").val()==""||$("#mobile").val()=="请输入您的手机号码"){
			$("#error_span2").html("手机号不能为空");
			return false;
		}
		////////////////////////lt增加代码/////////////////////////////////
		var mobileNow = $("#mobile").val();
		if(check_mobile(mobileNow)){
			$.post("/login/checkUserName.htm",{"username":mobileNow},function(e){
				if(e!="0"){
					$("#getcaptcha").hide();
					$("#error_span2").html("该手机号码已被注册!");
					return false;
				}
		
				
			});
		}else{
			$("#error_span2").html("手机号码格式不正确");
			//getcaptchaFlag=0;
		}
		if($("#captcha").val()==""){
			$("#error_span2").html("请输入手机验证码!");
			return false;
		}else{
		
		var imageVal=$("#imageCaptcha").val();
		if(imageVal==""){
			return false;
		}
		$.post("/login/checkImageCode.htm",{"ImageCode":imageVal},function (e){
			if(e=="yes"){
				imageCaptchaFlag=1;//正确
				if(getcaptchaFlag==1&&floatU==1){
					$("#getcaptcha").show();
				}
			}
			if(e=="no"){
			$("#error_span2").html("验证码不正确");
				imageCaptchaFlag=0;//错
				$("#getcaptcha").hide();
				return false;
			}
		});
		}
		
		////////////////////////lt增加代码/////////////////////////////////
		if($("#error_span2").html()=="该手机号码已被注册!"){
			return false;
		}
		
		if($("#registerPassword").val()==""){
			$("#error_span2").html("密码不能为空");
			return false;
		}
		
		if($("#registerAffirmPassword").val()==""){
			$("#error_span2").html("确认密码不能为空");
			return false;
		}
		
		if(registerPasswordFlag==0){
			$("#error_span2").html("密码密码格式错,应为6-20位字母数字");
			return false;
		}
		
		if(registerAffirmPasswordFlag==0){
			$("#error_span2").html("两次密码不相同");
			return false;
		}
	
		if($("#captcha").val()==""||$("#captcha").val()=="请输入手机验证码"){
			//$("#captcha").val("请输入手机验证码");
			$("#error_span2").html("请输入手机验证码");
			floatP=0;
			return false;
		}
		if(!check_captcha($("#captcha").val())){
			$("#error_span2").html("验证码格式不正确");
			floatP=0;
			return false;
		}
		
		
		
		if(!(floatU==1&&floatP==1)){
			$("#error_span2").html("请输入正确的手机号码或验证码");
			return false;
		}
		
		
		if(telTemp!=$("#mobile").val()){
			$("#error_span2").html("请输入申请验证码的手机号");
			$("#mobile").val("请输入您的手机号码");
			return false;
		}
		$.post("/login/register.htm",{"captcha":$("#captcha").val(),"Mobile_phone":$("#mobile").val(),"password":$("#registerPassword").val()},
			function(e){
	     	   if(e=="1"){
	    		   location.href = "javascript:login(2)";
	    		   $("#captcha").val("");
	    		   $("#mobile").val("");
	    		   Mobile_phone=telTemp;
	    	   }else if(e=="3"){
	    		   $("#error_span2").html("该手机号码已存在");
	    	   }else{
	    	   		$("#error_span2").html("手机验证码错误");
	    	   }
			}
		);
		
	});
	/* $(document).keypress(function(e) { 
    // 回车键事件 
       if(e.which == 13) { 
   			jQuery("#register").click(); 
       } 
	}); */
}
	function timer(){
		i--;
		if(i<0){
			 return false;
		}
		$("#error_span2").html(i+"秒后可以重发");
		if(i==0){
			$("#error_span2").html("");
		}
		setTimeout(timer,1000);
	}
//登陆
function check0(){
	$('#registerPassword').keyup(function(e) {
	     var strongRegex = new RegExp("^(?=.{8,})(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");//大小写字母，数字，除"_"特殊符号
	     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[a-z])(?=.*\\W))|((?=.*[0-9])(?=.*\\W))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
	     if (false == enoughRegex.test($(this).val())) {
	             $('#passstrength div').css("background","#ccc");
	     } else if (strongRegex.test($(this).val())) {
	             $('#passstrength').className = 'ok';
	             $('#passstrength div').css("background","#ccc").eq(0).css("background","#f98e69").end().eq(1).css("background","#f97749").end().eq(2).css("background","#f7531a");
	     } else if (mediumRegex.test($(this).val())) {
	             $('#passstrength').className = 'alert';
	             $('#passstrength div').css("background","#ccc").eq(0).css("background","#f98e69").end().eq(1).css("background","#f97749")
	     } else {
	             $('#passstrength').className = 'error';
	             $('#passstrength div').css("background","#ccc").eq(0).css("background","#f98e69");
	     }
	     return true;
	});

	
	
	$("input").focus(function(){
		var val=$(this).val();
		if(val=="请输入您的手机号码/车牌号"||val=="请输入登录密码"){
			$(this).val("");
		}
	});
	
	var floatU=0;
	var floatP=0;
	$("#username").blur(function (){
		$(this).val($(this).val().toUpperCase());
		$(this).val($.trim($(this).val()));
		if($(this).val()==""){
			$(this).val("请输入您的手机号码/车牌号");
			return false;
		}
		var username = $(this).val();
		if(check_mobile(username)||check_Plate(username)){
			$("#error_span").html("");
			floatU=1;
		}else{
			$("#error_span").html("用户名格式不正确");
			floatU=0;
		}
		
	});
	
	/* $("#password").blur(function (){
		var password = $(this).val();
		if(check_password(password)){
			$("#error_span").html("密码格式正确");
			floatP=1;
			}else{
			$("#error_span").html("密码格式错,应为6-8位字母数字");
			floatP=0;
			return false;
			}
	}); */
	
	$("#landed").click(function (){
		if($("#username").val()==""){
			$("#username").val("请输入您的手机号码/车牌号");
			return false;
		}
		if($("#username").val()=="请输入您的手机号码/车牌号"){
			return false;
		}
		var password = $("#password").val();
		if(check_password(password)){
			//$("#error_span").html("密码格式正确");
			$("#error_span").html("");
			floatP=1;
			}else{
			$("#error_span").html("密码格式错,应为6-20位字母数字");
			floatP=0;
			return false;
			}
		if(!(floatU==1&&floatP==1)){
			$("#error_span").html("请输入正确的手机号码或密码");
			return false;
		}
		$.post("/login/landed.htm",{"username":$("#username").val(),"password":$("#password").val()},
			function(e){
	     	   if(e=="1"){
	     		   //检查是否要记录密码
	     		  /*  if($("#remember").checked){
	     			   $.post("/login/rememberPassword.htm",{"username":$("#username").val(),"password":$("#password").val()},function (){
	     				   
	     			   });
	     		   } */
	     		   location.reload();//登陆成功后刷新当前页面
	     		   
	    		  // location.href =document.referrer; //"/index.htm";
	    	   }else if(e=="freeze"){
	    	   		$("#error_span").html("该用户已被冻结");
	    	   }else{
	    		   $("#error_span").html("用户名或密码错误");
	    	   }
			}
		);
		
	});
	$(document).keypress(function(e) { 
    // 回车键事件 
       if(e.which == 13) { 
   			jQuery("#landed").click(); 
       } 
	}); 
	
}

//检查手机号码
function check_mobile(mobile){
	mobile=mobile.replace(/(^\s*)|(\s*$)/g, "");
	if(mobile.length != 11 || isNaN(mobile)){
		return false;
	}
	mobile = mobile.substr(0,3);
	//号段
	var hd = new Array('130','131','132','133','134','135','136','137','138','139','150','151','152','153','154','155','156','157','158','159','180','181','182','183','184','185','186','187','188','189');
	var i = hd.length;
	while (i--) {
		if (hd[i] == mobile) {
			return true;
		}   
	}   
	return false;
}

//检查车牌号
function check_Plate(plate) {
    return /(^[\u4E00-\u9FA5]{1}[A-Z0-9]{6}$)|(^[A-Z]{2}[A-Z0-9]{2}[A-Z0-9\u4E00-\u9FA5]{1}[A-Z0-9]{4}$)|(^[\u4E00-\u9FA5]{1}[A-Z0-9]{5}[挂学警军港澳]{1}$)|(^[A-Z]{2}[0-9]{5}$)|(^(08|38){1}[A-Z0-9]{4}[A-Z0-9挂学警军港澳]{1}$)/.test(plate);
}


//检查密码
function check_password(password){
	var v = password;
	if(v.length>=6 && v.length<=20){
		var h =0;
		var pat1=new RegExp("[a-zA-Z]");
		var pat2=new RegExp("[0-9]");
		if(pat1.test(v)){
			h++;
		}
		if(pat2.test(v)){
			h++;
		}
		
		if(h>=1){
			return true;
		}
	}
	return false;
}

//检查验证码
function check_captcha(captcha){
	var c=captcha;
	var pat=new RegExp("[0-9]");
	if(pat.test(c) && c.length==4){
		return true;
	}
	return false;
}

////焦点图 12.22日添加
function focus() {
    var i = 0;
    $(".focus-c li").eq(0).show();
    var len = $(".focus-c li").length;
    if (len < 2) {
        $(".focus-r,.focus-l,.focus-num").remove();
    }
    for (var n = 0; n < len; n++) {
        $(".focus-num").append("<span></span>");
    }
    $(".focus-num span:eq(0)").addClass("focus-on");
    $(".focus-r").click(function () {
        if (i < (len - 1)) {
            i++;
        } else {
            i = 0;
        }
        showPic(i);
    })
    $(".focus-l").click(function () {
        if (i > 0) {
            i--;
        } else {
            i = len - 1;
        }
        showPic(i);
    })
    $(".focus-num span").click(function () {
        i = $(this).index();
        showPic(i);
    })
    $(".focus").hover(function () {
        clearInterval(picTimer);
    }, function () {
    if(len>1){
        picTimer = setInterval(function () {
            i += 1;
            if (i == len) { i = 0 }
            showPic(i);
        }, 5000);
        }
    }).trigger("mouseleave");
}
////焦点图 12.22日添加
function showPic(i) {
    $(".focus-c li").fadeOut();
    $(".focus-c li").eq(i).fadeIn();
    $(".focus-num span").eq(i).addClass("focus-on").siblings().removeClass("focus-on");
}
			
function loginOut(){
	
	delCookie("certificationRemindTemp");
	location.href="/loginOut.htm";
}
//删除cookies
		function delCookie(name)
		{
			var exp = new Date();
			exp.setTime(exp.getTime() - 1);
			var cval=getCookie(name);
			if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
		} 
		function getCookie(name)
		{
			var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
			if(arr=document.cookie.match(reg)) return unescape(arr[2]);
			else return null;
		} 
        </script>
    

		
    <div class="head">
    	<div class="headbg"></div>
    	<div class="headc">
        <div class="head-l">
            <a class="logo" href="/myProject/thinkphpFrame/Public/Home/images/index.html"><img src="/myProject/thinkphpFrame/Public/Home/images/1421050709273.png"></a>
            <div class="city">
                 
               <!--  <div class="city-change">切换城市</div> -->
            </div>
        </div>
         
         
	        <div class="head-r">
	        	 <a class="head-dl" href="javascript:login(0)">登 录</a>
	            <a class="head-zc" href="javascript:login(1)">注 册</a>
	        </div>
          
        <div class="nav">
                     
            
            
	           	 <a class="nav-on" href="/myProject/thinkphpFrame/Public/Home/images/index.html">首页</a>
	            <a href="http://www.i72bian.com/task/index.htm?checkflag=task">车养我</a>
	            
	                <a href="http://www.i72bian.com/detect/index.htm?secondFlag=a1">我养车</a> 
	           
	            
	            
		        <a href="http://www.i72bian.com/merchantWebsite/toLogin.htm">商家中心</a>
		        		        
	           
            
            
            
            
             

        </div>
   	</div>
    </div>
<!-- <script>window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "16" }, "slide": { "type": "slide", "bdImg": "8", "bdPos": "right", "bdTop": "201.5" } }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script> -->

	 <div class="focus-area">
        <div class="focus">
            <ul class="focus-c">
                 
                <li style="display: list-item;"><a href="http://www.i72bian.com/question/announcementdetail.htm?id=15"><img src="/myProject/thinkphpFrame/Public/Home/images/1436786733800.jpg"></a></li>
			

               
            </ul>
            
            
            
        </div>
    </div>
  
    <div class="content2" style="position:relative;">
    	  <div class="con-dh">
            <a class="con-dha con-dha1" href="#tt-cyw"></a>
            <a class="con-dha con-dha2" href="#tt-xc"></a>
            <a class="con-dha con-dha3" href="#tt-mr"></a>
            <a class="con-dha con-dha4" href="#tt-by"></a>
            <a class="con-dha con-dha5" href="#tt-wx"></a>
        </div> 
         <div class="deal">
            <div class="cyw">
                <div class="cywt">
                    <a class="cywt-a1" id="tt-cyw"></a>
                    <a class="cywt-a2">更多福利等你来抢！</a>
                    <a class="cywt-a3" href="http://www.i72bian.com/task/index.htm">更多&gt;</a>
                </div>
                
                <div class="cywc">
                    <a class="cywc-a" href="http://www.i72bian.com/task/taskdetails.htm?id=7">
                        <img src="/myProject/thinkphpFrame/Public/Home/images/00041439281848739.png">
                    </a>
                    <a class="cywc-at" href="http://www.i72bian.com/task/taskdetails.htm?id=7">【济南】银座健身（天桥店）车后窗代言</a>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">酬金：</span>
                        <span class="cywc-s2">￥<b>3984</b></span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">地点：</span>
                        <span class="cywc-s3">济南市</span>
                    </div>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">招募：</span>
                        <span class="cywc-s3">300辆</span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">周期：</span>
                         
                        <span class="cywc-s3">3个月</span>
                    </div>
                </div>
   				
                <div class="cywc">
                    <a class="cywc-a" href="http://www.i72bian.com/task/taskdetails.htm?id=8">
                        <img src="/myProject/thinkphpFrame/Public/Home/images/1231231439811876690.jpg">
                    </a>
                    <a class="cywc-at" href="http://www.i72bian.com/task/taskdetails.htm?id=8">【济南】 携车网上门保养 后窗代言</a>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">酬金：</span>
                        <span class="cywc-s2">￥<b>500</b></span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">地点：</span>
                        <span class="cywc-s3">济南市</span>
                    </div>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">招募：</span>
                        <span class="cywc-s3">500辆</span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">周期：</span>
                         
                        <span class="cywc-s3">1个月</span>
                    </div>
                </div>
   				
                <div class="cywc">
                    <a class="cywc-a" href="http://www.i72bian.com/task/taskdetails.htm?id=6">
                        <img src="/myProject/thinkphpFrame/Public/Home/images/xixi1436855051298.jpg">
                    </a>
                    <a class="cywc-at" href="http://www.i72bian.com/task/taskdetails.htm?id=6">【福利】懒人有懒福，喜喜送福来</a>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">酬金：</span>
                        <span class="cywc-s2">￥<b>190</b></span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">地点：</span>
                        <span class="cywc-s3">济南市</span>
                    </div>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">招募：</span>
                        <span class="cywc-s3">50辆</span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">周期：</span>
                         
                        <span class="cywc-s3">1个月</span>
                    </div>
                </div>
   				
                <div class="cywc">
                    <a class="cywc-a" href="http://www.i72bian.com/task/taskdetails.htm?id=5">
                        <img src="/myProject/thinkphpFrame/Public/Home/images/23333331432523381442.jpg">
                    </a>
                    <a class="cywc-at" href="http://www.i72bian.com/task/taskdetails.htm?id=5">【济南】千品饮诺 千车代言 车后窗代言</a>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">酬金：</span>
                        <span class="cywc-s2">￥<b>670</b></span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">地点：</span>
                        <span class="cywc-s3">济南市</span>
                    </div>
                    <div class="cywc-d cywc-d2">
                        <span class="cywc-s1">招募：</span>
                        <span class="cywc-s3">1000辆</span>
                    </div>
                    <div class="cywc-d">
                        <span class="cywc-s1">周期：</span>
                         
                        <span class="cywc-s3">3个月</span>
                    </div>
                </div>
   				
            </div>
            <div class="deal-pic">
                <a href="http://www.i72bian.com/carService/detail.htm?pid=3193"><img src="/myProject/thinkphpFrame/Public/Home/images/1437613936062.gif"></a>
            </div>
           
            <div class="wyc">
                <div class="wyct">
                    <a class="cywt-a1 cywt-a1-2" id="tt-xc"></a>
                    <!-- <a class="cywt-a2 cywt-a2-2">您还为洗车排队而发愁吗？汽十二变千里眼，决胜千里之外！</a> -->
                    <div class="wyct-r">
                      <!--   <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>-->
                        <a class="cywt-a3" href="http://www.i72bian.com/carService/index.htm?checkflag=carService&&checkflagFirst=1">更多&gt;</a>
                    </div> 
                </div>
                <div class="deal-box">
                    
                    <div class="deal-li">
                    
                        <img class="deal-tag" src="/myProject/thinkphpFrame/Public/Home/images/myy.png">
                      
                      <!--   <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3164">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435224254689.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3164">
                                <span class="deal-s1">【历下区】百维阳光</span>
                                <span class="deal-s2">单次洗车5元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥5.00</em><span>门店价：</span><i>￥25.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3164">立即购买</a>
                        </div>
                    </div>
                    
                    <div class="deal-li">
                    
                        <img class="deal-tag" src="/myProject/thinkphpFrame/Public/Home/images/myy.png">
                      
                      <!--   <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3122">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435224509945.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3122">
                                <span class="deal-s1">【历城区】黄帽子美车会所</span>
                                <span class="deal-s2">SUV单次洗车20元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥20.00</em><span>门店价：</span><i>￥40.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3122">立即购买</a>
                        </div>
                    </div>
                    
                    <div class="deal-li">
                    
                        <img class="deal-tag" src="/myProject/thinkphpFrame/Public/Home/images/myy.png">
                      
                      <!--   <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3128">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435138564769.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3128">
                                <span class="deal-s1">【历城区】宇通汽车服务中心</span>
                                <span class="deal-s2">SUV单次洗车20元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥20.00</em><span>门店价：</span><i>￥25.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3128">立即购买</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="wyc">
                <div class="wyct">
                    <a class="cywt-a1 cywt-a1-3" id="tt-mr"></a>
                    <a class="cywt-a2 cywt-a2-2">天天开新车，天天好心情...</a>
                  <div class="wyct-r">
                      <!--     <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>
                        <a>二级栏目</a>-->
                        <a class="cywt-a3" href="http://www.i72bian.com/carService/index.htm?checkflag=carService&&checkflagFirst=2">更多&gt;</a>
                    </div> 
                </div>
                <div class="deal-box">
                    
                    <div class="deal-li">
                         
                       <!--  <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3102">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435738460625.jpg">
                          <!--   <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3102">
                                <span class="deal-s1">【历城区】运发车饰</span>
                                <span class="deal-s2">750元艾琳手编坐垫，只需630元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥630.00</em><span>门店价：</span><i>￥750.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3102">立即购买</a>
                        </div>
                    </div>
                    
                    <div class="deal-li">
                        
                        	<img class="deal-tag" src="/myProject/thinkphpFrame/Public/Home/images/myy.png">
                    	  
                       <!--  <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3168">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435134525117.jpg">
                          <!--   <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3168">
                                <span class="deal-s1">【历下区】兰博士汽车服务有限公司</span>
                                <span class="deal-s2">环保内饰清洁套餐268元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥268.00</em><span>门店价：</span><i>￥298.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3168">立即购买</a>
                        </div>
                    </div>
                    
                    <div class="deal-li">
                        
                        	<img class="deal-tag" src="/myProject/thinkphpFrame/Public/Home/images/myy.png">
                    	  
                       <!--  <a class="deal-qly"><img src="images/qly.png" /></a> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carService/detail.htm?pid=3118">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1435902796031.jpg">
                          <!--   <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carService/detail.htm?pid=3118">
                                <span class="deal-s1">【历下区】梅特莱斯国际汽车美容连锁</span>
                                <span class="deal-s2">波兰天子镀膜2号400元</span>
                            </a>
                        </h3>
                        <p><span>会员价：</span><em>￥400.00</em><span>门店价：</span><i>￥800.00</i></p>
                        <div class="deal-pl deal-plgm">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		  <span class="deal-s4">已有<em>5</em>分</span>
	                    	
	                    	
                           <!--  <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span> -->
                            <a class="deal-gm" href="http://www.i72bian.com/carService/buy.htm?id=3118">立即购买</a>
                        </div>
                    </div>
                     
                </div>
            </div>
            <div class="deal-pic">
                <a><img src="/myProject/thinkphpFrame/Public/Home/images/1436858101984.jpg"></a>
            </div>
            <div class="wyc wyc2">
                <div class="wyct">
                    <a class="cywt-a1 cywt-a1-4" id="tt-by"></a>
                    <a class="cywt-a2 cywt-a2-2">正品保证，假一赔十！</a>
                    <div class="wyct-r">
                       <!--  <a>斯柯达汽车保养馆 </a>
                        <a>爱美美汽车保养</a>
                        <a>美乐乐汽车保养</a> -->
                        <a class="cywt-a3" href="http://www.i72bian.com/carMaintenance/index.htm?checkTypeflag=a3">更多&gt;</a>
                    </div>
                </div>
                <div class="deal-box">
                	
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=206">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1437981820266.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=206">
                                <span class="deal-s1">洗车人家（水屯北路店）</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=205">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1438139184188.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=205">
                                <span class="deal-s1">大龙爱刷汽车美容</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1" href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=204">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1437981270936.jpg">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carMaintenance/merchantdetail.htm?mid=204">
                                <span class="deal-s1">洗车人家（牛旺庄）</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="wyc wyc2">
                <div class="wyct">
                    <a class="cywt-a1 cywt-a1-5" id="tt-wx"></a>
                    <a class="cywt-a2 cywt-a2-2">诚信商家，值得信赖！</a>
                    <div class="wyct-r">
                       <!--  <a>斯柯达汽车保养馆 </a>
                        <a>爱美美汽车保养</a>
                        <a>美乐乐汽车保养</a> -->
                        <a class="cywt-a3" href="http://www.i72bian.com/carRepair/index.htm?checkTypeflag=a4">更多&gt;</a>
                    </div>
                </div>
                <div class="deal-box">
                   
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1437981820266.jpg" href="/carRepair/merchantdetail.htm?mid=206">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carRepair/merchantdetail.htm?mid=206">
                                <span class="deal-s1">洗车人家（水屯北路店）</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1438139184188.jpg" href="/carRepair/merchantdetail.htm?mid=205">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carRepair/merchantdetail.htm?mid=205">
                                <span class="deal-s1">大龙爱刷汽车美容</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                    <div class="deal-li">
                      <!--   <img class="deal-tag" src="images/myy.png" /> -->
                        <a class="deal-a1">
                            <img src="/myProject/thinkphpFrame/Public/Home/images/1437981270936.jpg" href="/carRepair/merchantdetail.htm?mid=204">
                           <!--  <span class="deal-dz">
                                <span></span>地址：济南市历城区二环东路与华龙路交界口路南。
                            </span> -->
                        </a>
                        <h3>
                            <a href="http://www.i72bian.com/carRepair/merchantdetail.htm?mid=204">
                                <span class="deal-s1">洗车人家（牛旺庄）</span>
                            </a>
                        </h3>
                        <div class="deal-brand">
                            <span>服务品牌：</span>
                                
                        	  <em>奥迪</em>
                        	   
                        	  <em>比亚迪</em>
                        	   
                        	  <em>别克</em>
                        	   
                        	  <em>长城</em>
                        	   
                        	  <em>长安</em>
                        	   
                        	  <em>大众</em>
                        	   
                        	  <em>福特</em>
                        	   
                        	  <em>起亚</em>
                        	   
                        	  <em>现代</em>
                        	   
                        	  <em>雪佛兰</em>
                        	
                        </div>
                        <div class="deal-pl">
                        	
	                       		  <span class="deal-score"><span class="deal-score-c" style="width: 100%"></span></span>
	                       		   <span class="deal-s4">已有<em>5</em>分</span>
	                       		  <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>0</em>人评论</span>
	                    	
	                    	
                          <!--   <span class="deal-score"><span class="deal-score-c"></span></span>
                            <span class="deal-s4"><em>5分</em></span>
                            <span class="deal-s4" style="float:right; margin-right:10px;">已有<em>163</em>人评论</span> -->
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <div class="deal-pic">
                <a><img src="/myProject/thinkphpFrame/Public/Home/images/1436858089982.jpg"></a>
            </div>
        </div>
        <div class="slide" style="margin-top:0;">
            <div class="slide-box3">
                <div class="slide-c">
                    <div class="slide-t">
                        <a class="slide-ton">公 告</a>
                      	<a class="slide-box-tr" href="http://www.i72bian.com/question/announcementindex.htm" style="float:right;">更多&gt;</a>
                    </div>
                    <div class="slide-cc">
                    	
                    		 <a href="http://www.i72bian.com/question/announcementdetail.htm?id=25">8月29日银座健身广告登记证下载</a>
                    	
                    		 <a href="http://www.i72bian.com/question/announcementdetail.htm?id=24">千品饮诺 水票领取通知</a>
                    	
                    		 <a href="http://www.i72bian.com/question/announcementdetail.htm?id=20">6月7号、27号贴广告的车主领水票啦</a>
                    	
                    		 <a href="http://www.i72bian.com/question/announcementdetail.htm?id=19">6月27日车贴广告相关文件</a>
                    	
                    		 <a href="http://www.i72bian.com/question/announcementdetail.htm?id=18">6月7日贴广告的车主领水票啦</a>
                    	
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <a href="http://i72bian.com/question/announcementdetail.htm?id=1"><img src="/myProject/thinkphpFrame/Public/Home/images/1422611253732.jpg"></a>
            </div>
            <div class="slide-box2">
                <div class="slide-box-t">
                    <div class="slide-box-tl">最新评论</div>
                </div>
                <div class="slide-pl">
                
               
                
                	<div class="slide-plc">
                        <span class="slide-tx"></span>
                        <div class="slide-plr">
                            <p><em>15****59</em>说：</p>
                            <p title="这样的车体广告非常不错会让用户得到了实惠">这样的车体广告非常不错会让用户得到了实惠</p>
                            <p><span>2015-10-04</span></p>
                        </div>
                    </div>
                	<!-- </a> -->
                
               
                
                	<div class="slide-plc">
                        <span class="slide-tx"></span>
                        <div class="slide-plr">
                            <p><em>13****46</em>说：</p>
                            <p title="物超所值！">物超所值！</p>
                            <p><span>2015-10-02</span></p>
                        </div>
                    </div>
                	<!-- </a> -->
                
               
                
                	<div class="slide-plc">
                        <span class="slide-tx"></span>
                        <div class="slide-plr">
                            <p><em>15****91</em>说：</p>
                            <p title="时间比较随便很方便，这个活动很好">时间比较随便很方便，这个活动很好</p>
                            <p><span>2015-10-02</span></p>
                        </div>
                    </div>
                	<!-- </a> -->
                
                    <div class="slide-line"></div>
                </div>
            </div>
            <div class="slide-box2">
                <div class="slide-box-t">
                    <div class="slide-box-tl">联系我们</div>
                </div>
                <div class="slide-c slide-lx">
					<p>400客服：400-080-7272</p>
					<p><span>在线客服：</span><img src="/myProject/thinkphpFrame/Public/Home/images/qqicon.png" width="20"><a href="http://wpa.qq.com/msgrd?v=3&uin=3189488317&site=qq&menu=yes">汽十二变</a></p>
                </div>
            </div>
           <!--  <div class="slide-box2">
                <div class="slide-box-t">
                    <div class="slide-box-tl">最近浏览</div>
                    <a class="slide-box-tr" href="#">清空</a>
                </div>
                <ul class="sview">
                    <li>
                        <a class="sview-a1" href="#"><img src="" width="105" /></a>
                        <a class="sview-a2" href="#">此处要限制字数，大约16字</a>
                        <span><em class="sview-em1">￥50</em><em class="sview-em2">￥80</em></span>
                    </li>
                    <li>
                        <a class="sview-a1" href="#"><img src="" width="105" /></a>
                        <a class="sview-a2" href="#">此处要限制字数，大约16字</a>
                        <span><em class="sview-em1">￥50</em><em class="sview-em2">￥80</em></span>
                    </li>
                    <li>
                        <a class="sview-a1" href="#"><img src="" width="105" /></a>
                        <a class="sview-a2" href="#">此处要限制字数，大约16字</a>
                        <span><em class="sview-em1">￥50</em><em class="sview-em2">￥80</em></span>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    
		
		
		
        <div class="footer">
        <div class="foot">
            <div class="footl">
                <div class="footl-d1"><img src="/myProject/thinkphpFrame/Public/Home/images/logo3.png"></div>
                <div class="footl-d2">
                    <div class="footl-dh1">400客服热线电话</div>
                    <div class="footl-dh2">400-080-7272</div>
                    <div class="footl-dh1">周一至周五 9:00-21:00</div>
                </div>
            </div>
            <div class="footc">
                <div class="foot-row">
                    <div class="foot-t"><a href="http://www.i72bian.com/">合作通道</a></div>
                    <div class="foot-c">
                    	<a href="http://www.i72bian.com/merchantWebsite/toManage.htm">商家中心</a>
                       
                    </div>
                </div>
                <div class="foot-row">
                    <div class="foot-t"><a href="http://www.i72bian.com/question/aboutcarindex.htm">常见问题</a></div>
                    <div class="foot-c">
                        <!---->
                        <a href="http://www.i72bian.com/question/aboutcarindex.htm">关于车主</a>
                        <a href="http://www.i72bian.com/question/aboutmerchantindex.htm">关于商家</a>
                        <a href="http://www.i72bian.com/novice/guide.htm">新手上路</a>
                    </div>
                </div>
                <div class="foot-row">
                    <div class="foot-t"><a href="http://www.i72bian.com/question/memberregister.htm">平台规则</a></div>
                    <div class="foot-c">
                        <a href="http://www.i72bian.com/question/memberregister.htm">会员注册协议</a>
                        <a href="http://www.i72bian.com/question/ad.htm">广告发布标准</a>
                        <a href="http://www.i72bian.com/question/businessagreement.htm">车友惠商家合作协议</a>
                    </div>
                </div>
                <div class="foot-row">
                    <div class="foot-t"><a href="http://www.i72bian.com/index.htm">汽十二变</a></div>
                    <div class="foot-c">
                        <a href="http://www.i72bian.com/question/qindex.htm">关于我们</a>
                        <a href="http://www.i72bian.com/question/announcementindex.htm">网站公告</a>
                        <a target="_blank" href="http://search.51job.com/jobsearch/search_result.php?fromJs=1&jobarea=000000%2C00&funtype=0000&industrytype=00&keyword=%E6%B1%BD%E5%8D%81%E4%BA%8C%E5%8F%98%E7%BD%91%E7%BB%9C%E7%A7%91%E6%8A%80%EF%BC%88%E5%8C%97%E4%BA%AC%EF%BC%89%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8&keywordtype=0&lang=c&stype=2&postchannel=0000&fromType=1">招贤纳士</a>
                    </div>
                </div>
               <div class="foot-row">
                    <div class="foot-t"><a>汽十二变微信公众号</a></div>
                    <div class="foot-c"><img src="/myProject/thinkphpFrame/Public/Home/images/wx.jpg" width="120" style="margin-left:17px"></div>
                    <!--<div class="foot-c">
                        <div class="foot-xz"><span></span><em>Android</em><div class="foot-ewm"><img src="/static/website/images/erweima.jpg" /></div></div>
                        <div class="foot-xz foot-xz2"><span></span><em>iPhone</em><div class="foot-ewm"><img src="/static/website/images/erweima.jpg" /></div></div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="footb">
            <div>
                <a href="/myProject/thinkphpFrame/Public/Home/images/index.html">首页</a>|
                <a href="http://www.i72bian.com/task/index.htm?checkflag=task">任务大厅</a>|
                <a href="http://www.i72bian.com/priviege/index.htm?checkflag=priviege">车友惠</a>|
                <a href="http://www.i72bian.com/question/aboutcarindex.htm">常见问题</a>|
                <a href="http://www.i72bian.com/merchantWebsite/toLogin.htm">商家中心</a>
            </div>
            <p>© 2014 汽十二变   京ICP备15003967号  公司邮箱：info@i72bian.com </p>
        </div>
       <div class="sidebar">
        <div class="sidebar-bg"></div>
        <div class="sidebar-c">
            
           
            <div class="side-mod side-need">
                <a onclick="showRepair()"></a>
                <span class="side-infor">我要保养</span>
            </div>
            <div class="side-mod side-collect">
                <a onclick="showCollect()"></a>
                <span class="side-infor">我的收藏</span>
            </div>
        </div>
        <div class="sidebar-c2">
            <div class="side-mod side-yijian">
                <a href="http://www.i72bian.com/question/preuserfeedback.htm"></a>
                <span class="side-infor">意见反馈</span>
            </div>
            <div class="side-mod side-back">
                <a href="#"></a>
                <span class="side-infor">返回顶部</span>
            </div>
        </div>
    </div>
    </div>
<script>
$(function(){
	//getCartNum();
	$(window).scroll(function(){
		if ($(window).scrollTop() > "200") {
			$(".rightsid").fadeIn();
		}else{
			$(".rightsid").fadeOut();
		}
	});
	$(".gotop").click(function(){
		$("html,body").animate({ "scrollTop": 0 }, 500);
	});
});
function getCartNum(){
    		  $.ajax( {    
			      type : "POST",    
			       url : "/cart/getCartNum.htm",    
			       data : "",
			       dataType: "json",    
			       success : function(data) {
			      	  $("#cartNum").html(data.num);
			       }    
			   });   
    }
    function showCollect(){
    	 
          
           
        	 login(0);
        
           
    	
    }
     function showRepair(){
    	 
          
           
        	 login(0);
        
           
    	
    }
</script>
<div class="hpop" style="display: none">
    <div class="hpop-bg"></div>
    <div class="hpop-c">
        <div class="hpop-close"></div>
        <div class="hpop-t">汽十二变<em>百元大礼包</em></div>
        <div class="hpop-cc"><img src="/myProject/thinkphpFrame/Public/Home/images/libao.jpg"></div>
        <div class="hpop-btn"><a onclick="getCoupon()">立即领取</a></div>
    </div>
</div>
<script>
//是否显示领取优惠券
	// 
	  $.ajax( {    
			      type : "POST",    
			       url : "/couponinfo/isGetCoupon.htm",    
			       dataType: "json",    
			       success : function(data) {
			      	  if(data>0){
			      	  	$(".hpop").show();
			      	  }
			       }    
			   }); 
    $(".hpop-close").click(function () {
        $(".hpop").hide();
    })
    function getCoupon(){
    	 $.ajax( {    
			      type : "POST",    
			       url : "/couponinfo/getCoupon.htm",    
			       dataType: "json",    
			       success : function(data) {
			      	  alert("领取成功!");
			      	 location.href="/preson/coupons/list.htm";
			       }    
			   });
    }
</script>
    </div>

<script>
    $(".deal-li").hover(function () {
        $(this).find(".deal-dz").stop(true,true).slideDown();
    }, function () {
        $(this).find(".deal-dz").slideUp();
    })
    $(window).scroll(function () {
        if ($(this).scrollTop() > 370) {
            $(".con-dh").addClass("con-dh2");
        } else {
            $(".con-dh").removeClass("con-dh2");
        }
    })
</script>

</body></html>