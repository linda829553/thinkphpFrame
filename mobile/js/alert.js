﻿	document.writeln("<style type=\"text\/css\">");
	document.writeln("");
	document.writeln(".windowBlank {");
	document.writeln("	width:100%;");
	document.writeln("	height:100%;");
	document.writeln("	position:fixed;");
	document.writeln("	display:none;");
	document.writeln("	top:0;");
	document.writeln("	left:0;");
	document.writeln("	z-index:9999998;");
	document.writeln("	background:rgba(0,0,0,0.2);");
	document.writeln("}");
	document.writeln(".window {");
	document.writeln("	width:290px;");
	document.writeln("	min-height:120px;");
	document.writeln("	padding-top:15px;");
	document.writeln("	position:fixed;");
	document.writeln("	display:none;");
	document.writeln("	top:50%;");
	document.writeln("	left:50%;");
	document.writeln("	z-index:9999999;");
	document.writeln("	margin:-63px auto 0 -145px;");
	document.writeln("	border-radius:10px;");
	document.writeln("	-webkit-border-radius:10px;");
	document.writeln("	-moz-border-radius:10px;");
	document.writeln("	background:rgba(0,0,0,0.8);");
	document.writeln("	-webkit-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);");
	document.writeln("	-moz-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);");
	document.writeln("	-o-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);");
	document.writeln("	box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);");
	document.writeln("	font:14px\/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window .title {");
	document.writeln("	background:#efece3;");
	document.writeln("	line-height: 25px;");
	document.writeln("  padding:0px 5px 0px 10px;");
	document.writeln("	color:#736b60;");
	document.writeln("	font-size:16px;");
	document.writeln("	border-radius:0.5em 0.5em 0 0;");
	document.writeln("	-webkit-border-radius:0.5em 0.5em 0 0;");
	document.writeln("	-moz-border-radius:0.5em 0.5em 0 0;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window .content {");
	document.writeln("	width:auto; clear:both;");
	document.writeln("	height:auto;");
	//document.writeln("	background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;");
	document.writeln("    color:#f0f0f0;");
	document.writeln("	border-radius: 0 0 0.6em 0.6em;");
	document.writeln("	-webkit-border-radius: 0 0 0.6em 0.6em;");
	document.writeln("	-moz-border-radius: 0 0 0.6em 0.6em;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window #txt {");
	document.writeln("	min-height:40px;font-size:15px; line-height:26px;padding:0px 10px 15px; text-align:center;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window .txtbtnBox {");
	document.writeln("	text-align: center;");
	document.writeln("	font-size: 16px;");
	document.writeln("	height:auto;");
	document.writeln("	border-top:1px solid #818181;");
	document.writeln("	overflow:hidden");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window #alertO02 {");
	document.writeln("	border-left:1px solid #909090;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window .txtbtn {");
	document.writeln("	display: inline-block;");
	document.writeln("	margin:15px 0.5%;");
	document.writeln("	cursor: pointer;");
	document.writeln("	width:47.8%;");
	document.writeln("	height:30px;");
	document.writeln("	line-height:30px;");
	document.writeln("}");
	document.writeln("");
	document.writeln(".window .title .close {");
	document.writeln("	float:right;");
	document.writeln("	font-size:24px;");
	document.writeln("	width:26px;");
	document.writeln("	height:26px;");
	document.writeln("	line-height:26px;");
	document.writeln("	color:#fff;");
	document.writeln("}");
	document.writeln("<\/style>");
	document.writeln("<div class=\"window\" id=\"windowcenter\">");
	//document.writeln("	<div id=\"title\" class=\"title\"><span class=\"close\" id=\"alertclose\">×<\/span><\/div>");
	document.writeln("	<div class=\"content\">");
	document.writeln("	 <div id=\"txt\"><\/div>");
	document.writeln("	<div class=\"txtbtnBox\">");
	document.writeln("	 <span class=\"txtbtn\" id=\"alertO01\">取&emsp;消</span>	");
	document.writeln("	 <span class=\"txtbtn\" id=\"alertO02\">确&emsp;定</span>	");
	document.writeln("	 <span class=\"txtbtn\" id=\"alert\">确&emsp;定</span>	");
	document.writeln("	  <\/div>");
	document.writeln("	<\/div>");
	document.writeln("<\/div>");
	document.writeln("<div class=\"windowBlank\"><\/div>");


function alertO(title){ 
	$(".txtbtnBox").show();
	$("#alert").hide();
	$(".txtbtn").off();
	$("#alertclose,.txtbtn").click(function(){ 
		$("#windowcenter").hide();	
		$(".windowBlank").hide();	
	}); 
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
};
function alert(title){ 	
	$(".txtbtnBox").show();
	$("#alertO01,#alertO02").hide();
	$("#alertclose,.txtbtn").click(function(){ 
		$("#windowcenter").hide();
		$(".windowBlank").hide();
		$("#alertO01,#alertO02").show();
	}); 
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
};
/**
 * 规定时间内自动消失
 * @param title//弹出内容
 * @param obj//时间
 * @returns
 */
function alertTwoVanish(title,obj){ 	
	$(".txtbtnBox").show();
	$("#alertO01,#alertO02").hide();
	$("#alertclose,.txtbtn").click(function(){ 
		$("#windowcenter").hide();
		$(".windowBlank").hide();
		$("#alertO01,#alertO02").show();
	}); 
	setTimeout(function(){
		$("#windowcenter").hide();
		$(".windowBlank").hide();
	},obj);
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
};
/**
 *  重写确定按钮的方法
 * @param title 标题
 * @param callbackfn 重写的方法
 */
function alertCallback(title,callbackfn){
	$(".txtbtnBox").show();
	$("#alert").hide();
	$(".txtbtn").off();
	$("#alertclose,#alertO01").click(function(){ 
		$("#windowcenter").hide();	
		$(".windowBlank").hide();
	});
	$('#alertO02').on("click",function(){
		if(callbackfn==undefined){
			$("#windowcenter").hide();	
			$(".windowBlank").hide();
		}else{
			$("#windowcenter").hide();	
			$(".windowBlank").hide();
			if(typeof callbackfn=='function'){
				callbackfn();
			}
			if(typeof callbackfn=='string'){
				eval(callbackfn);
			}
		}
	});
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
}
/**
 *  重写确定按钮的方法
 * @param title 标题
 * @param callbackfn 重写的方法
 */
function alertCallbackNew(title,callbackfn){
	$(".txtbtnBox").show();
	$("#alert").hide();
	$(".txtbtn").off();
	$("#alertclose,#alertO01").click(function(){ 
		$("#windowcenter").hide();	
		$(".windowBlank").hide();
		submit=false;
	});
	$('#alertO02').on("click",function(){
		if(callbackfn==undefined){
			$("#windowcenter").hide();	
			$(".windowBlank").hide();
			submit=false;
		}else{
			$("#windowcenter").hide();	
			$(".windowBlank").hide();
			if(typeof callbackfn=='function'){
				callbackfn();
			}
			if(typeof callbackfn=='string'){
				eval(callbackfn);
			}
		}
	});
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
}
/**
 *  自动消失的提示框
 * @param title 内容
 * @param callbackfn 消失后的回调函数
 * @param time 显示时间
 */
function alertTimeOut(title,callbackfn,time){
	$(".txtbtnBox").hide();
	$("#txt").css({"margin-top": "30px"});
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
	setTimeout(function(){
		$("#windowcenter").hide();
		$(".windowBlank").hide();
		$("#alertO01,#alertO02").show();
		callbackfn()
		},time)
}
function alertScanCallback(title,callbackfn){ 	
	$(".txtbtnBox").show();
	$("#alertO01,#alertO02").hide();
	$("#alertclose,.txtbtn").click(function(){ 
		$("#windowcenter").hide();
		$(".windowBlank").hide();
		$("#alertO01,#alertO02").show();
		eval(callbackfn());
	}); 
	$(".windowBlank").show();
	$("#windowcenter").fadeIn(); 
	$("#txt").html(title);
};
