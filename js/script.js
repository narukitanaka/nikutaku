// アコーディオン
$(function(){
	$(".accordion dt").click(function(){
	    $(this).next("dd").slideToggle();
	    $(this).next("dd").siblings("dd").slideUp();
	    $(this).toggleClass("open");    
	    $(this).siblings("dt").removeClass("open");
  });
  
});  

// スライダー
var windowWidth = $(window).width();
var windowSm = 1299;
if (windowWidth <= windowSm) {
	$(function() {
		$('.planList').bxSlider({
			pagerCustom: '.custom-thumb',
			controls: false,
		});
		$('.bbqSlider').bxSlider({
			pagerCustom: '.custom-thumb',
			controls: true,
		});
		$('.areaList').bxSlider({
			pager: false,
			minSlides: 1,
			maxSlides: 1,
			moveSlides: 1,
			slideWidth: 300,
			slideMargin: 10,
		});
		$('.areaListSlider').bxSlider({
			minSlides: 2,
			maxSlides: 2,
			moveSlides: 1,
			slideWidth: 300,
			slideMargin: 10,
		});
		$('.columList').bxSlider({
			pager: false,
			minSlides: 1,
			maxSlides: 1,
			moveSlides: 1,
			slideWidth: 300,
			slideMargin: 10,
		});
	});
} else {
	$(function() {
		$('.planList').bxSlider({
			pagerCustom: '.custom-thumb',
			controls: false,
		});
		$('.bbqSlider').bxSlider({
			pagerCustom: '.custom-thumb',
			controls: true,
		});
		$('.areaList').bxSlider({
			pager: false,
			minSlides: 1,
			maxSlides: 4,
			moveSlides: 1,
			slideWidth: 220,
			slideMargin: 10,
		});
		$('.columList').bxSlider({
			pager: false,
			minSlides: 1,
			maxSlides: 3,
			moveSlides: 1,
			slideWidth: 295,
			slideMargin: 10,
		});
	});
}

// SPメニュー
(function(){
  var spNav = function(){
    var $winWidth = $(window).width();
    var $winHeight = $(window).height();
    var $navBk = $('#MenuBk');
    var $nav = $('#spMenu');
    var $openBtn = $('#openBtn');
    var $closeBtn = $('#closeBtn');

    $openBtn.on('click', function(){
      $navBk.css({
        width: $winWidth,
        height: $winHeight
      }).fadeIn();
      $nav.css({
        height: $winHeight
      }).addClass('isOpen');
    });
    var CloseTrigger = function(el){
      el.on('click', function(){
        $nav.removeClass('isOpen');
        $navBk.fadeOut();
      });
    };
    var closeTriggerBtn = new CloseTrigger($closeBtn);
    var closeTriggerBk = new CloseTrigger($navBk);

    $(window).on('resize', function(){
      var $winWidth = $(window).width();
      var $docHeight = $(document).height();
      if($winWidth > 768){
        setTimeout(function(){
          $nav.css({
            height: 'auto'
          }).removeClass('isOpen');
          $navBk.hide();
        },200);
      }else{
        setTimeout(function(){
          $nav.css({
            height: $docHeight
          });
        },200);
      }
    });

  }();

})();

// スムーススクロール
var windowWidth = $(window).width();
var windowSm = 1299;
if (windowWidth <= windowSm) {
	$(function () {
		var headerHight = 60; //ヘッダの高さ
		$('a[href^=#]').click(function(){
			var href= $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
			$("html, body").animate({scrollTop:position}, 500, "swing");
			return false;
		});
	});
} else {
	$(function(){
	    $('a[href^=#]:not(#tab li a)').click(function(){
	        var speed = 500;
	        var href= $(this).attr("href");
	        var target = $(href == "#" || href == "" ? 'html' : href);
	        var position = target.offset().top;
	        $("html, body").animate({scrollTop:position}, speed, "swing");
	        return false;
	    });
	});
}

// トップに戻るボタン
$(function(){
	var pageTop = $("#pageTop");
	pageTop.hide();
	pageTop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);  // スクロールスピード
		return false;
	});
	$(window).scroll(function () {
		if($(this).scrollTop() >= 400) {  // ボタンが現れるスクロール量（ピクセル）
			pageTop.fadeIn();
		} else {
			pageTop.fadeOut();
		}
	});
});

// 日付ピッカー
$( function() {
  if($.datepicker == null){ return; }

	$( "#datepicker" ).datepicker({
		dateFormat: 'yy/mm/dd'
  });
} );

// 表示順変更
var windowWidth = $(window).width();
var windowSm = 767;
if (windowWidth <= windowSm) {
    //横幅767px以下のとき（つまりスマホ時）に行う処理を書く
	$(function(){
		$('.designBox08.type2 .boxWrap').after($('.designBox08.type2 .imgPic'));
		$('.designBox08.type4 .boxWrap').after($('.designBox08.type4 .imgPic'));
	})
} else {
    //横幅767px超のとき（タブレット、PC）に行う処理を書く
}
