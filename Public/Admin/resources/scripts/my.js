$(function(){
	// $("#main-nav li a").click(function(){
	// 	$(this).addClass("current");
	// });
	// $.datepicker.setDefaults({
	// 	changeMonth: true,
	// 	changeYear:  true,
	// 	dateFormat: 'yy年mm月dd日',
	// 	showButtonPanel: true,

	// 	clearText:  "清除",
	// 	closeText:  "关闭",
	// 	yearSuffix:  "年",
	// 	monthSuffix: "月",
	// 	/* 本地化*/ 
	// 	closeText: '关闭', 
	// 	prevText: '<上月', 
	// 	nextText: '下月>', 
	// 	currentText: '今天', 
	// 	monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', 
	// 	'七月', '八月', '九月', '十月', '十一月', '十二月'], 
	// 	monthNamesShort: ['一', '二', '三', '四', '五', '六', 
	// 	'七', '八', '九', '十', '十一', '十二'], 
	// 	dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'], 
	// 	dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'], 
	// 	dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'], 
	// 	weekHeader: '周'
	// 	// monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
	// 	// monthNames: [ "Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December" ]

	// });

	// 本地化设置

	$.datepicker.regional['zh-CN'] = { 
		changeMonth: true,
		changeYear:  true,
		showButtonPanel: true,
		closeText: '关闭', 
		prevText: '<上月', 
		nextText: '下月>', 
		currentText: '今天', 
		monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', 
		'七月', '八月', '九月', '十月', '十一月', '十二月'], 
		monthNamesShort: ['一', '二', '三', '四', '五', '六', 
		'七', '八', '九', '十', '十一', '十二'], 
		dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'], 
		dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'], 
		dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'], 
		weekHeader: '周', 
		dateFormat: 'yy-mm-dd', 
		firstDay: 1, 
		isRTL: false, 
		showMonthAfterYear: true, 
		yearSuffix: '年' 
		}; 
		$.datepicker.setDefaults($.datepicker.regional['zh-CN']); 

	// 点击“今天”直接在text 输入框中填入今天日期
	$.datepicker._gotoToday = function (id) { 
		var target = $(id); 
		var inst = this._getInst(target[0]); 
		if (this._get(inst, 'gotoCurrent') && inst.currentDay) { 
			inst.selectedDay = inst.currentDay; 
			inst.drawMonth = inst.selectedMonth = inst.currentMonth; 
			inst.drawYear = inst.selectedYear = inst.currentYear; 
		} 
		else { 
			var date = new Date(); 
			inst.selectedDay = date.getDate(); 
			inst.drawMonth = inst.selectedMonth = date.getMonth(); 
			inst.drawYear = inst.selectedYear = date.getFullYear(); 
			this._setDateDatepicker(target, date); 
			this._selectDate(id, this._getDateDatepicker(target)); 
		} 
		this._notifyChange(inst); 
		this._adjustDate(target); 
	} 
	// $.datepicker.setDefaults($.datepicker.regional['zh-CN']); 
	$("#task_start_time").datepicker();
	$("#task_end_time").datepicker();

	// 点击图片上传
	$("input[type='button']").click(function(){
		$("#layerCut").css("display", "block");
	});
});

