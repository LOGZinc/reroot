jQuery(document).ready(function($) {
//bxslider
$('').bxSlider({
	auto: true,
	mode: 'fade',
	speed: 2000,
	pause: 6000,
	pager: true,
	touchEnabled: true,
	responsive: true
});


$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400;// ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


//page top scroll
$('').click(function(){
	$('html, body').animate({'scrollTop': 0 }, 1500, 'easeOutQuint');
	return false;
});

//gnav scroll
$('').click(function(event){
	event.preventDefault();
	var url = this.href;
	var parts = url.split('#');
	var target = parts[1];
	var target_offset = $('#'+target).offset();
	var target_top = target_offset.top - 60;
	$('html, body').animate({scrollTop:target_top}, 1500, 'easeOutQuint');
});

//rollover fade
$('').hover(
	function(){
		$(this).stop().fadeTo(200, 0.6);
	},
	function(){
		$(this).stop().fadeTo(200, 1.0);
});

//colorbox
$('').colorbox({
	maxWidth:'90%',
	maxHeight:'90%'
});

});

  $(function(){
    $("#menuButton").click(function(){
  $(this).toggleClass("active"); //メニューボタンの切り替え
        return false;
    });


$(function(){
    $("#menuButton").click(function(){
  $("#header_bottom").slideToggle("slow"); //メニューボタンの切り替え
        return false;
    });
});
});
  <script>
  //グローバルナビ変化
  $(function(){
    $("#menuButton").click(function(){
  $(this).toggleClass("active"); //メニューボタンの切り替え
        return false;
    });


$(function(){
    $("#menuButton").click(function(){
  $("#header_bottom").slideToggle("slow"); //メニューボタンの切り替え
        return false;
    });
});
});
$(function() {
    if (!isPhone())
        return;

    $('span[data-action=call]').each(function() {
        var $ele = $(this);
        $ele.wrap('<a href="tel:' + $ele.data('tel') + '"></a>');
    });
});

function isPhone() {
    return (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0);
}
$(document).ready(function() {
  var pagetop = $('#to_top_btn');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
</script>
