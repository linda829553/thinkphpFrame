/**
 * Created by Administrator on 2015/9/30.
 */
$(function(){
    $("a[id^='cat2_']").click(function(){
      var id = this.id;
      var arr_id = id.split('_');
      id = arr_id["1"];
      console.log('合作商铺'+id);
      $("#mymodal").modal({
      	// remote: "getDetail.php?id="+this.id
      	remote: "../../getDetail/id/"+id
      });
    });

    $("#mymodal").on("hidden.bs.modal", function() {
    	$(this).removeData("bs.modal");
	});

    // 回到顶部
    $("#toTop").scrollToTop(1000);

    // ajax 检查任务状态-报名
    // $("#baoming").click(function(){
    //   var tid = $(this).attr("tid");
    //   $.ajax({
    //     type: "GET",
    //     url: "../../checkBaoMing/id/"+tid,
    //     // data: {id:this.tid},
    //     success: function(data){
    //       // alert(data);
    //       if (data==0) {
    //         alert("任务己经过期或名额己满!");
    //       }else{
    //         // 跳转到报名页面
    //         location.href="../../baoMing/id/"+tid;
    //       }
    //     }
    //   });
    //   return false;
    // });

  $(".form_date").datetimepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayBtn: true,
        startDate: "2013-02-14 10:00",
        minuteStep: 10
  });

  $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        pickerPosition: "bottom-left"
    });
});