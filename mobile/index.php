<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>陕西世海广告传媒有限公司</title>
  <link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery.mobile-1.4.5.min.js"></script>
  <script src="js/alert.js"></script>

  <style>
    /*.ui-header .ui-title { overflow: visible;}*/
    .my-title {text-align: center;}
    .ui-footer .footer-back{
      text-align: center;

    }
  </style>
  <script>
  // 倒计时跳转
  function jump(count){
    window.setTimeout(function(){
      count--;
      if (count > 0) {
        $("#num").html("<b>&nbsp;"+count+"&nbsp;<b>");
        jump(count);
      } else{
        location.href="http://m.qy.u-kor.cn/36237";
      };
    },1000);

  }

  function onSuccess(data, status)
  {
      if(data == 1){
        // alert("注册成功！");
        name = $("#name").val();
        $prompt = "<h4 style='text-align:center;color:red'>注册成功！</h4><br /><p style='color:blue;text-align:center'><span style='color:red'>"+name+"</span>，恭喜您己经成为陕西世海广告会员!</p><br /><p style='text-align:center'>页面将在3秒后跳转...<br />还剩<span style='color:red;font-weight:bold' id='num'>&nbsp;3&nbsp;</span>秒</p>";
        $("div[role='main']").html($prompt);
        jump(3);
      }else{
        // alert("注册失败！");
      }
      // data = $.trim(data);
      // $("#notification").text(data);
  }

  function onError()
  {

  }

  $(function(){
    $("input[type='button']").click(function(){
      if(valid()){

        var formData = $("#membersignup").serialize();

        $.ajax({
          type: "POST",
          url: "saveMember.php",
          cache: false,
          data: formData,
          success: onSuccess,
          error: onError
        });

        return false;
      }
        
    });
  });

  // 表单验证
  function valid(){
      var validate = true;
      $("input[type!='button']").each(function(){
          $this = $(this);
          var str = $this.val();
          str = str.replace(/s/g,'');
          $this.val(str);
          if($this.val() == ""){
            alert($this.attr("t")+",不能为空")
            validate = false;
            return false;
          }

      }); 
      
      return validate;
  }
    
  //渲染时间控件
  var mobiscroll;
  var _t;
  function loadMobiscroll(t){
          var date=new Date();
            var opt = {
                 width:40,
                 height:60,
                 headerText:"请滑动选择您的审车时间",
                 dateOrder:"yymmdd", 
         preset : 'date',
         minDate: new Date(2000,0,0), 
         maxDate: new Date(date.getFullYear()+10,date.getMonth()+10,date.getDay()+10), 
         stepMinute: 1,
         lang:'zh',
         dateFormat:"yy年mm月dd日"
            }
            //做缓存处理
          if(_t==t){
            if(mobiscroll){
               mobiscroll.show();
          }else{
             mobiscroll=$(t).mobiscroll(opt);
          }
          }else{
             mobiscroll=$(t).mobiscroll(opt);
          }
         _t=t;
  }

  </script>
</head>
<body>
  <div data-role="page" id="page1">
    <div data-role="header" data-position="fixed">
      <h3>陕西世海广告传媒有限公司</h3>
    </div>
    <div role="main" class="ui-content">
      <h4 class="my-title">会员注册</h4>
      <link rel="stylesheet" type="text/css" href="css/mobiscroll.custom-2.6.2.min.css">
      <script type="application/javascript" src="js/mobiscroll.custom-2.6.2.min.js"></script>

      <form method="post" action="" id="membersignup" class="validate">
        <div data-role="fieldcontain">
          <label for="name">你的姓名:</label>
          <input type="text" t="你的姓名" name="name" id="name" class="required">
        </div>

        <div data-role="fieldcontain">
          <label for="carnumber">车牌号:</label>
          <input type="text" t="车牌号" name="carnumber" placeholder="如：陕C·00001" id="carnumber">
        </div>

        <div data-role="fieldcontain">
          <label for="cartype">车型:</label>
          <input type="text" t="车型" name="cartype" placeholder="如：东风标致508" id="cartype">
        </div>

        <div data-role="fieldcontain">
          <label for="carcolor">颜色:</label>
          <input type="text" t="颜色" name="carcolor" placeholder="如：白色" id="carcolor">
        </div>

        <div data-role="fieldcontain">
          <label for="mobile">手机号码:</label>
          <input type="tel" t="手机号码" name="mobile" id="mobile">
        </div>

        <div data-role="fieldcontain">
          <label for="homeaddress">家庭住址:</label>
          <input type="text" t="家庭住址" name="homeaddress" id="homeaddress">
        </div>

        <div data-role="fieldcontain">
          <label for="workaddress">单位地址:</label>
          <input type="text" t="单位地址" name="workaddress" id="workaddress">
        </div>

        <div data-role="fieldcontain">
          <label for="cartime">审车时间:</label>
          <input type="text" t="审车时间" data-clear-btn="true" name="cartime" placeholder="如：2015年6月5日" readonly="readonly" onfocus="loadMobiscroll(this)" id="cartime">
        </div>
        

        <input type="button" id="submit" value="注   册">

      </form>

    </div>
    <div data-role="footer" data-position="fixed">
      <div class="footer-back">
        <a href="http://m.qy.u-kor.cn/36237" class="ui-btn ui-corner-all ui-btn-inline ui-mini ui-btn-icon-right ui-icon-back">返回陕西世海广告首页</a>
      </div>
    </div>
  </div>
</body>
</html>s