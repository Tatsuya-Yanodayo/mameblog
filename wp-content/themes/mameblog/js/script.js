//JavaScript Document

//ローダーJquery
	$(window).on('load',function(){  // ローディング画面をフェードアウトさせる
	    $(function() { 
	        $("#loading").fadeOut();
	    });
	});

	$(window).on('load',function() {  //全ての読み込みが完了したら実行する
	    $('#loader-bg').delay(500).fadeOut(500);
	    $('#loading').delay(300).fadeOut(300);
	    $('#main-contents').css('display', 'block');
	    $('img.effect-fade').addClass('effect-scroll');

	});

//5秒で強制的にロード画面を非表示
	$(function(){
		setTimeout('stopload()',5000);
	});

	function stopload(){
		$('#main-contents').css('display', 'block');
		$('#loader-bg').delay(900).fadeOut(800);
	    $('#loading').delay(600).fadeOut(300);
	}

	






