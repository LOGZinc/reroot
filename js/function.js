/*=================================
		TOPページ用
=================================*/

/*スクロールで表示されるナビゲーション*/
$(function(){
	$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if(scroll >= 700){
		$(".nav_scroll").css("opacity", "1");
	}else{
		$(".nav_scroll").css("opacity", "0");
	}
});
});

/*スマホメニューの縦サイズをウィンドウサイズと同じにする*/
$(function(){
	var H = $(window).height();
	$(".smartphone_menu").css("height", H + "px");

	$(window).resize(function(){
		var H = $(window).height();
		$(".smartphone_menu").css("height", H + "px");
	});
});

/*ハンバーガーメニューを押すとスマホメニューが表示*/
$(function(){
	$(".nav_btn span").click(function(){
		$(".smartphone_menu,.smartphone_menu span").fadeIn("slow");
	});
	$(".smartphone_menu_close_btn").click(function(){
		$(".smartphone_menu,.smartphone_menu span").fadeOut("slow");
	});
});

/*=================================
		カリキュラムページ用
=================================*/
/*タブの切り替え*/
$(function(){
	$("#carriculum_content_menu_root").click(function(){
		$("#carriculum_content_root").show();
		$("#carriculum_content_menu_root").css("background-color", "#f19319");
		$("#carriculum_content_menu_root").css("color", "#FFF");
		$("#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("background-color", "#FFF");
		$("#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("color", "#f19319");
		$("#carriculum_content_interview,#carriculum_content_training,#carriculum_content_Job_hunting,#carriculum_content_counseling").hide();
	});
	$("#carriculum_content_menu_interview").click(function(){
		$("#carriculum_content_interview").show();
		$("#carriculum_content_menu_interview").css("background-color", "#f19319");
		$("#carriculum_content_menu_interview").css("color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("background-color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("color", "#f19319");
		$("#carriculum_content_root,#carriculum_content_training,#carriculum_content_Job_hunting,#carriculum_content_counseling").hide();
	});
	$("#carriculum_content_menu_training").click(function(){
		$("#carriculum_content_training").show();
		$("#carriculum_content_menu_training").css("background-color", "#f19319");
		$("#carriculum_content_menu_training").css("color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("background-color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_Job_hunting,#carriculum_content_menu_counseling").css("color", "#f19319");
		$("#carriculum_content_root,#carriculum_content_interview,#carriculum_content_Job_hunting,#carriculum_content_counseling").hide();
	});
	$("#carriculum_content_menu_Job_hunting").click(function(){
		$("#carriculum_content_Job_hunting").show();
		$("#carriculum_content_menu_Job_hunting").css("background-color", "#f19319");
		$("#carriculum_content_menu_Job_hunting").css("color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_counseling").css("background-color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_counseling").css("color", "#f19319");
		$("#carriculum_content_root,#carriculum_content_interview,#carriculum_content_training,#carriculum_content_counseling").hide();
	});
	$("#carriculum_content_menu_counseling").click(function(){
		$("#carriculum_content_counseling").show();
		$("#carriculum_content_menu_counseling").css("background-color", "#f19319");
		$("#carriculum_content_menu_counseling").css("color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting").css("background-color", "#FFF");
		$("#carriculum_content_menu_root,#carriculum_content_menu_interview,#carriculum_content_menu_training,#carriculum_content_menu_Job_hunting").css("color", "#f19319");
		$("#carriculum_content_root,#carriculum_content_interview,#carriculum_content_training,#carriculum_content_Job_hunting").hide();
	});
});