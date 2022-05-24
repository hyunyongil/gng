/* 
http://www.ybyin.com 
2018-03-02
*/


function speed_home_fc1(a){
	//alert(a);
	$(".speed_home_tbl1 ul").css("display","none");
	$(".speed_home_tbl1 ul:eq("+ a +")").css("display","block");

}

function speed_home_fc2(a){
	//alert(a);
	$(".speed_home_tbl2 ul").css("display","none");
	$(".speed_home_tbl2 ul:eq("+ a +")").css("display","block");

}

function speed_home_fc3(a){
	//alert(a);
	$(".speed_home_tbl3 .ul").css("display","none");
	$(".speed_home_tbl3 .ul:eq("+ a +")").css("display","block");

}

$(function(){
	
	speed_home_fc1(0);
	$('.speed_home_b1 a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".speed_home_b1 a").removeClass('cur');
		}else{
			$(".speed_home_b1 a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});
	
	speed_home_fc2(0);
	$('.speed_home_b2 a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".speed_home_b2 a").removeClass('cur');
		}else{
			$(".speed_home_b2 a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});
	
	speed_home_fc3(0);
	$('.speed_home_b3 a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".speed_home_b3 a").removeClass('cur');
		}else{
			$(".speed_home_b3 a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});

});

  
  
$(function(){
	$('.sns_bg').hide();
	$(".sns_on").click(function(){
		$(".sns_bg").fadeIn(200);
	})
	$(".sns_off").click(function(){
		$(".sns_bg").fadeOut(200);
	})
});



$(function(){
	$("#pp2").click(function(){
		abc = "※ 현재 도매매에서 제공하고 있는 모든 솔루션에서 구간별배송료추가 기능을 지원하지 않습니다 \n 구간별배송료추가상품 제외 체크 해지 시, 도매매 기준 첫번째 구간의 배송료를 기준으로 적용됩니다";
	

		if(!$("input[type='checkbox']").is(':checked')){

			alert(abc);

		}


	})
})
/*---------------------------- 제품 갤러리형 리스트형  -------------------------------------*/
function SetListGallery(abc){
	/**/
	if(abc==1){
		$("#SetListGallery_1").attr("src","img/prod/btn1_on.jpg");
		$("#SetListGallery_2").attr("src","img/prod/btn2.jpg");


		$(".sub_cont_bane1").addClass('sub_cont_bane1_SetListGallery');

	}else{
		$("#SetListGallery_1").attr("src","img/prod/btn1.jpg");
		$("#SetListGallery_2").attr("src","img/prod/btn2_on.jpg");
		
		$(".sub_cont_bane1").removeClass('sub_cont_bane1_SetListGallery');
	}

	image_bai_fc_hide();
	image_bai_fc_black();
	


}



$(function(){

	$(".sub_cont_bane_n1").hover(function(){

		//if($(this).hasClass('sub_cont_bane1_SetListGallery')){

		//}else{
			$(">.sub_cont_bane1_over:not(:animated)",this).show();
			$(">.bane_brd2:not(:animated)",this).addClass("bane_brd2_over");

		//};
		
	},
	function(){
		$(">.sub_cont_bane1_over",this).hide();
		$(">.bane_brd2",this).removeClass("bane_brd2_over");
	})





	$(".sub_cont_bane2").hover(function(){

		//if($(this).hasClass('sub_cont_bane1_SetListGallery')){

		//}else{
			$(">.sub_cont_bane2_over:not(:animated)",this).show();
			//$(">.bane_brd2:not(:animated)",this).addClass("bane_brd2_over");

		//};
		
	},
	function(){
		$(">.sub_cont_bane2_over",this).hide();
		//$(">.bane_brd2",this).removeClass("bane_brd2_over");
	})
/*
	$(".sub_cont_bane2_tr").hover(function(){

		//if($(this).hasClass('sub_cont_bane1_SetListGallery')){

		//}else{
			$("td >.sub_cont_bane2_over:not(:animated)",this).show();
			//$(">.bane_brd2:not(:animated)",this).addClass("bane_brd2_over");

		//};
		
	},
	function(){
		$("td >.sub_cont_bane2_over",this).hide();
		//$(">.bane_brd2",this).removeClass("bane_brd2_over");
	})
*/





});


function image_bai_fc_hide(abc){
	i=1;
	for(i=1; i<=10; i++){
		$("#image_bai_hide_div"+ i).css({"display":"none"});
	}
	$("#image_bai_hide_div"+abc).css({"display":"block"});
	//$(".image_bai_btn2_re").css({"display":"inline-block"});
	if(!abc){

		$(".image_bai_btn1_re").css({"display":"inline-block"});
	}

	


}

function image_bai_fc_black(abc){
	i=1;
	for(i=1; i<=20; i++){
		$("#image_bai_black_div"+ i).css({"display":"none"});
	}
	$("#image_bai_black_div"+abc).css({"display":"block"});
	//$(".image_bai_btn2_re").css({"display":"inline-block"});
	if(!abc){

		$(".image_bai_btn1_re").css({"display":"inline-block"});
	}

	


}







$(function(){


	$(".image_bai_btn1_re").click(function(){
		image_bai_fc_hide();
		image_bai_fc_black();
		$(this).css({"display":"none"});


	})


	$(".sub3_p_click").click(function(){
		sub3_1_pup_fc();
		$("> .sub3_p_s1_ip",this).addClass('sub3_p_click_on');
		$("> .exit_btn",this).show();


	})

	$(".sub3_p_click .exit_btn").click(function(){
		//$(this).parent(".sub3_1_pup_input1").val("");
		$(this).parent().find(".sub3_p_s1_ip").val("");


	})



	$(".sub3_p_click_select").click(function(){
		sub3_1_pup_fc();
		$("> .sub3_p_select",this).show();


	})




});



function sub3_1_pup_fc(){
	$(".sub3_p_s1_ip").removeClass('sub3_p_click_on');
	$(".exit_btn").hide();


	
	$(".sub3_p_select").hide();

}
















/*---------------------------- 해외직배송관  -------------------------------------*/


function body_bar1(){

	//$("body").css("overflow-y","hidden");

}

function body_bar2(){

	//$("body").css("overflow-y","scroll");

}



/*---------------------------- 해외직배송관  -------------------------------------*/


$(function(){


	$(".hai_style1 li").hover(function(){
		$(".hai_style1 li").removeClass("cur");
		$(this).addClass("cur");

		s_img_length = $(this).index()+1;
		
		for(i=0; i<=6; i++){
			$(".hai_style1_images_bn" + i ).fadeOut();
		}

		$(".hai_style1_images_bn" + s_img_length ).fadeIn();
	},
	function(){

	})


});


/*---------------------------- 버튼 클릭시  -------------------------------------*/


$(function(){

		$(".main_btn1").click(function(){

			if($(this).hasClass('on')){
				$(this).removeClass('on');
				$("> img",this).attr("src","img/sub/ic1.jpg");

			}else{
				$(this).addClass('on');
				$("> img",this).attr("src","img/sub/ic1_on.jpg");


			};

		})




		$(".cont_img_btn").click(function(){

			if($(this).hasClass('on')){
				$(this).removeClass('on');
				$("> img",this).attr("src","img/haiwai/cont_img_btn1.jpg");

			}else{
				$(this).addClass('on');
				$("> img",this).attr("src","img/haiwai/cont_img_btn1_on.jpg");


			};

		})


});



/*---------------------------- index_btn_tab 버튼클릭시  -------------------------------------*/


$(function(){

	number = 7;
	function img_fc(a){
		for(i=1; i<=number; i++){
			$("#m"+ i).attr("src","img/index/cont_btn"+ i +"_off.jpg");
			$("#m"+ a).attr("src","img/index/cont_btn"+ a +"_on.jpg");


			$("#b" +i).removeClass('tab_on');
			$("#b" +a).addClass('tab_on');



			$("#sub"+ i).css({"display":"none"});
			$("#sub"+ a).css({"display":"block"});


		}


	}



	for(i=1; i<=number; i++){
		$("#b" + i).click(function(){
			img_fc(this.id.substr(1));

		
		})
	}

	
});







/*---------------------------- main_cont_btn1_click 버튼클릭시 -------------------------------------*/
$(function(){
		   
		   
		   
	


		$(".cont_btn3").click(function(){
			if($(this).hasClass('cont_btn3_on')){
				$(this).removeClass('cont_btn3_on');
				//$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cont_btn3_on');
				//$(this).css({"background":"#454545","color":"#fff"});

			};

		})

		/*
		//1
		$(".cbtn_a1").click(function(){
			if($(this).hasClass('cur')){
				$(this).removeClass('cur');
				$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cur');
				$(this).css({"background":"#454545","color":"#fff"});

			};
		});
		//2
		$(".cbtn_a2").click(function(){
			if($(this).hasClass('cur')){
				$(this).removeClass('cur');
				$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cur');
				$(this).css({"background":"#00c63b","color":"#fff"});

			};
		});
		//3
		$(".cbtn_a3").click(function(){
			if($(this).hasClass('cur')){
				$(this).removeClass('cur');
				$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cur');
				$(this).css({"background":"#949494","color":"#fff"});

			};
		});
		//4
		$(".cbtn_a4").click(function(){
			if($(this).hasClass('cur')){
				$(this).removeClass('cur');
				$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cur');
				$(this).css({"background":"#e6a320","color":"#fff"});

			};
		});
		//5
		$(".cbtn_a5").click(function(){
			if($(this).hasClass('cur')){
				$(this).removeClass('cur');
				$(this).css({"background":"","color":""});
			}else{
				$(this).addClass('cur');
				$(this).css({"background":"#83553e","color":"#fff"});

			};
		});
		*/
		
		   
		   
		   
	

		$(".btn_a1").click(function(){
			$(".btn_a1").addClass('button_2_on');
			$(".btn_a2").removeClass('button_2_on');

			$(".btn_a1 img").attr("src","img/main/bu4.png");
			$(".btn_a2 img").attr("src","img/main/bu4_on.png");

		})

		$(".btn_a2").click(function(){
			$(".btn_a1").removeClass('button_2_on');
			$(".btn_a2").addClass('button_2_on');

			$(".btn_a1 img").attr("src","img/main/bu4_on.png");
			$(".btn_a2 img").attr("src","img/main/bu4.png");

		})

		



	$(".main_cont_btn1_click").click(function(){
		if($(this).hasClass('main_cont_btn1_click_cur')){
			$(this).removeClass('main_cont_btn1_click_cur');
			//$("> img",this).attr("src","img/index/btn1_on.png");

		}else{
			$(this).addClass('main_cont_btn1_click_cur');
			//$("> img",this).attr("src","img/index/btn1_off.png");


		};
	})

	
});

/*----------------------------  footer_btn1 메인 이미지 오버효과 -------------------------------------*/
$(function(){


	
	$(".footer_btn1").click(function(){
		$(".footer_position2_bg").animate({"bottom": -70},"100");
		$(".footer_position2_bg2").animate({"bottom": 0},"100");
		$("#totop img").css({"display":"block"});
	})	
	$(".footer_btn2").click(function(){
		$(".footer_position2_bg2").animate({"bottom": -70},"100");
		$(".footer_position2_bg").animate({"bottom": 0},"100");
		$("#totop img").css({"display":"none"});
	})
	
	
});

/*----------------------------  hai_table 해외직배송오버 이미지 오버효과 -------------------------------------*/
$(function(){


	
	$(".hai_table td").hover(function(){
		$(">.hai_table_bane1_over:not(:animated)",this).show();
	},
	function(){
		$(">.hai_table_bane1_over",this).hide();
	})
	
	
});

/*----------------------------  main_cont_bane1 메인 이미지 오버효과 -------------------------------------*/
$(function(){
	


	
	$(".main_cont_bane_n1").hover(function(){
		$(">.main_cont_bane1_over:not(:animated)",this).show();
		$(">.bane_brd2:not(:animated)",this).addClass("bane_brd2_over");
	},
	function(){
		$(">.main_cont_bane1_over",this).hide();
		$(">.bane_brd2",this).removeClass("bane_brd2_over");
	})
	$(".main_cont_bane2").hover(function(){
		$(">.main_cont_bane2_over:not(:animated)",this).show();
		$(">.bane_brd2:not(:animated)",this).addClass("bane_brd2_over");
	},
	function(){
		$(">.main_cont_bane2_over",this).hide();
		$(">.bane_brd2",this).removeClass("bane_brd2_over");
	})
	
	
});

/*----------------------------  main_cont_images_text5  mouse over 영역 -------------------------------------*/
$(function(){


	
	$(".main_cont_images_text5").hover(function(){
		$("+ .main_cont_images_text5_over",this).show();
	},
	function(){
		//$(".main_cont_images_text5_over").hide();
	})
	
	$(".main_cont_images_text5_over").hover(function(){
		//$("+ .main_cont_images_text5_over",this).show();
	},
	function(){
		$(".main_cont_images_text5_over").hide();
	})
	
});
/*----------------------------  s_index_select -------------------------------------*/
$(function(){


	
	$(".index4_sousou").hover(function(){
		$(".index4_sousou_pup").show();
	},
	function(){
		$(".index4_sousou_pup").hide();
	})
	
});



/*----------------------------  s_index_select -------------------------------------*/
$(function(){



	$('.s_index_select').bind('mouseenter', function(){
		$('.s_index_select_ul').slideDown(200);
	}).bind('mouseleave', function(){
		$('.s_index_select_ul').slideUp(100);
	});
	
});


function s_index_select_html(a){
	//alert(a);
	$(".s_index_select_btn a").html(a);
}






$(function(){
	/*---------------------------- top 제일위 이미지 삭제 -------------------------------------*/
	$(".gnb_gb").click(function(){
		$("#gnb_img").slideUp("slow");
		
		// 상단 이미지 없어질때 오른쪽날개 위로이동
		kmh = 'ok' ;
		$("#lDomeggookHeaderRWingWrap").animate({"top": 253-80},"slow");
		
	});
	
	//최상단 메뉴바 오른쪽 영역에서 서브메뉴를 내리는데 사용하는 자바스크립트입니다.
	
	$('li.subMenu').bind('mouseenter', function(){
		$(this).find('ul').show();
	}).bind('mouseleave', function(){
		$(this).find('ul').hide();
	});

	
	/*---------------------------- 메인노출선택 버튼 -------------------------------------*/

	$(".header_menu_head > a").click(function(){
		if($(".header_menu_head > a > span").hasClass("up"))
		{			
			$(".header_menu_body").slideUp("fast");
			$(".header_menu_head > a > span").removeClass("up");
		} else {
			$(".header_menu_body").slideDown("fast");
			$(".header_menu_head > a > span").addClass("up");
		};
		
	});
	
	$(".header_menu_head").bind('mouseleave', function(){
		$(".header_menu_body").slideUp("fast");
		$(".header_menu_head > a > span").removeClass("up");
	});
	
});


function main_cont_tab3_fc(a){
	//alert(a);
	$(".main_cont_tab3_tbl").css("display","none");
	$(".main_cont_tab3_tbl:eq("+ a +")").css("display","block");
}

$(function(){
	
	main_cont_tab3_fc(0);
	$('.main_cont_tab3 a').bind('click', function(){
		if($(this).hasClass('on')){
			$(".main_cont_tab3 a").removeClass('on');
		}else{
			$(".main_cont_tab3 a").removeClass('on');	
			$(this).addClass('on');	
		}
		
	});

});







/*                 index5.html                    */

$(function(){
	$(".top_guan").click(function(){
		$('#time_img').slideUp(600);
		//$('#time_img').hide();
		$("#lDomeggookHeaderRWing").animate({"margin-top":"0px"},600);
	});
	
	
	$(".right_guan").click(function(){
		if($(this).hasClass('right_guan_cur')){
			right_show();
		}else{
			right_hide();
			
		}
		//$('#time_img').hide();
	});
	
	
	
	
	
	function right_hide(){
	
	   $('.quick_menu').animate({"right":"-360px"});
		$('.quick_menu').css("box-shadow","0px 0px 0px #888888");
		$(".right_guan").addClass("right_guan_cur");
		
		clearInterval(time);
	}
	
	function right_show(){
	
		$('.quick_menu').animate({"right":"0"});
		$('.quick_menu').css("box-shadow","0px 0px 10px #888888");
		$(".right_guan").removeClass("right_guan_cur");
		
		clearInterval(time);
	}

	time=setInterval(right_hide,3000);

	
	
	
	
});






/*								s_index.html     ***/



$(function(){
	$('.s_class_button1').bind('click', function(){
		if($(this).hasClass('s_class_button1_on')){
			$(this).removeClass("s_class_button1_on");
		}else{
			$(this).addClass("s_class_button1_on");
		}
	})
	$('.s_class_button2').bind('click', function(){
		if($(this).hasClass('s_class_button2_on')){
			$(this).removeClass("s_class_button2_on");
		}else{
			$(this).addClass("s_class_button2_on");
		}
	})
	$('.s_class_button3').bind('click', function(){
		if($(this).hasClass('s_class_button3_on')){
			$(this).removeClass("s_class_button3_on");
		}else{
			$(this).addClass("s_class_button3_on");
		}
	})
});

$(function(){
	/*      이런교육은 어때요?   */
	$('.s_image_tbls_over').hide();
	$(".s_image_tbls").hover(function(){
		$(">.s_image_tbls_over:not(:animated)",this).show();
	},
	function(){
		$(">.s_image_tbls_over",this).hide();
	})
	
	
	
	/*      동영상 교육   */
	
	$('.s_image_tbls_mtv_over').hide();
	$(".s_image_tbls").hover(function(){
		$(">.s_image_tbls_mtv_over:not(:animated)",this).show();
	},
	function(){
		$(">.s_image_tbls_mtv_over",this).hide();
	})

});












	//풋터 패밀리사이트 표시관련[클릭으로 해당 부분을 표시한다.]
$(function(){
	$('#familySite').bind('click', function(){
		$('.dropdownSingle > ul').show();
	});
	$('#familySite').bind('mouseleave', function(){
		$('.dropdownSingle > ul').hide();
	});

});

/* shope3.html Shopee연동채널확인 */
$(function(){
	$('#Shopee_site').bind('click', function(){
		$('.drop_Shopee_site > ul').show();
	});
	$('#Shopee_site').bind('mouseleave', function(){
		$('.drop_Shopee_site > ul').hide();
	});

});

/* ---------------------------------------- faq qna 시작  ----------------------------------------  */

function faq_fc(a){
	//alert(a);
	$(".faq_tr1 , .faq_tr2 , .faq_tr3 , .faq_tr4 , .faq_tr5").hide();
	$(".faq_tr"+ a).show();
}





$(function(){
	//$(".faq_box dd:not(:first)").css("display","none");
	$(".faq_box dd").css("display","none");

	function faq_vo(){
		$("dt").css("font-weight","normal");
		$("dt").removeClass("over1");
		$("dt").removeClass("over2");	
	}
	$("dl dt").click(function(){
							  
		faq_vo();
		if($("+dd",this).css("display")=="none"){
			
			$(this).siblings("dd").slideUp("slow");			
			$("+dd",this).slideDown("slow");
			//$(this).css("font-weight","bold");
			$(this).addClass("over1");
		}else{
			$("+dd",this).slideUp("slow");
			
			$("dt").addClass("over2");
			
			}
	});
});

function faq_btn(a){
	//alert(a);
	$(".faq_box1").css("display","none");
	$(".faq_box1:eq("+ a +")").css("display","block");
}

function qna_btn(a){
	//alert(a);
	$(".qna_btn1").css("display","none");
	$(".qna_btn1:eq("+ a +")").css("display","block");
}

$(function(){
	faq_btn(0);
	$('.faq_btn a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".faq_btn a").removeClass('cur');
		}else{
			$(".faq_btn a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});
	
	qna_btn(0);
	$('.qna_btn a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".qna_btn a").removeClass('cur');
		}else{
			$(".qna_btn a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});

});



/* ---------------------------------------- faq qna 끝  ----------------------------------------  */



/* ---------------------------------------- main_cont_images  메인 이미지 테스트 변경  ----------------------------------------  */
function text_go(a){
	$(".main_cont_images_over_text").html(a)
	
}

$(function(){
	$('.main_cont_images_btn').bind('click', function(){
		//$(this).parent().find(".main_cont_images_over").css("display","block");
		$(this).siblings(".main_cont_images_over").css("display","block");
		
		
	});
	
	$(".main_cont_images_over").hover(function(){
	
	},
	function(){
		 $(".main_cont_images_over").css("display","none");
	})

});







$(function(){
	$('.best_btn a').bind('click', function(){
		if($(this).hasClass('cur')){
			$(".best_btn a").removeClass('cur');
		}else{
			$(".best_btn a").removeClass('cur');	
			$(this).addClass('cur');	
		}
		
	});

});

function best_tbl(a){
	//alert(a);
	$(".best_tbl > .best_tbl_p").css("display","none");
	$(".best_tbl > .best_tbl_p:eq("+ a +")").css("display","block");
	
	$(".best_tbl > .best_tbl_m").css("display","none");
	$(".best_tbl > .best_tbl_m:eq("+ a +")").css("display","block");
}

/* ---------------------------------------- 전체 카테고리  ----------------------------------------  */

function manNav_fc(abc){	
		$(".quan_mm2").css("display",abc);
		//$(".s_quan_mm2").css("display",abc);

}

function manNav_fc1(abc){	
		$(".quan_mm3").css("display",abc);
		$(".s_quan_mm3").css("display",abc);

}

/* ------- index5_menu1 메뉴스타일 ----- */

function index5_menu_fc(abc){
		$(".index5_menu1").css("display","none");
		$(".index5_menu2").css("display","none");
		
		$(".index5_menu" + abc).css("display","block");
		
		
		
		$(".index5_menu1_tbl").css("display","none");
		$(".index5_menu2_tbl").css("display","none");
		
		$(".index5_menu" + abc + "_tbl").css("display","block");
		
		

}
/*
function manNav_fc(abc){	
		$(".quan_mm").css("display",abc);
		if(abc=="block"){
			$(".manNav2  a").addClass('cur');
		}else{
			$(".manNav2  a").removeClass('cur');
		}

}


$(function(){
	
	$(".manNav2").hover(function(){
	
	},
	function(){
		manNav_fc('none')
	})

});


*/

/*

$(window).scroll(function(){
	var st = $(this).scrollTop();
	var top_menu = $(".header").offset().top;
	if(st>=top_menu){
		$(".p_tap").css({'position':'fixed' , 'top':'0px'});
		
	}else{
		$(".p_tap").css({'position':''});
	}
})
*/


/* ---------------------------------------- 동의버튼  ----------------------------------------  */

$(function(){
	var apd = "true";
	$(".ybyin_b").click(function(){
		if(apd == "true")
		{
			$(this).css("background","#e70012")
			apd = "false";
		}else{
			$(this).css("background","")
			apd = "true";
		}
	})
});

/* ---------------------------------------- 상단메뉴  ----------------------------------------  */

$(function(){
	$('.dropMenu').hide();
	$("ul.manNav > li").hover(function(){
		$(">.dropMenu:not(:animated)",this).slideDown();
	},
	function(){
		$(">.dropMenu",this).slideUp();
	})

});

$(function(){
	$('.dropMenu').hide();
	$("ul.manNav_p > li").hover(function(){
		$(">.dropMenu:not(:animated)",this).show();
		$(this).find("a").addClass('cur');	
	},
	function(){
		$(">.dropMenu",this).hide();
		$("> a",this).removeClass('cur');	
	})

});
/* ---------------------------------------- qmenu  

$(window).scroll(function(){
	var st = $(this).scrollTop();
	if(st>=187){
		$(".qmenu").css({'position':'fixed' , 'top':'50px'});
	}else{
		$(".qmenu").css({'position':'absolute' , 'top':'233px'});
	}
})
----------------------------------------  */

/* ---------------------------------------- 이미지 오버  ----------------------------------------  */



$(function(){
	$("img.rollover").mouseover(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)_off(\.[a-z]+)$/, "$1_on$2"));
	}).mouseout(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/, "$1_off$2"));
	});
});




function manNav_nr(abc){	
		$(".nr_v").css("display",abc);
}





/* ---------------------------------------- 파업창  ----------------------------------------  */

/* 
<a href="mypage3_pup.html" target="_blank" onclick="popup(this.href, '1050','1100');return false"></a> 
javascript:window.close();
*/
function popup(url, width, height, scbr){
	window.open(url, '_popup', 'height=' + height + ',resizable=no,scrollbars='+scbr+', width=' + width);
	 return false;
}

function popup1(url, pup, width, height, scbr){
	window.open(url, pup, 'height=' + height + ',resizable=no,scrollbars='+scbr+', width=' + width);
	 return false;
}
  
  


/* ---------------------------------------- scroll top ----------------------------------------  */



function goto(id) {
	$("#" + id).ScrollTo(800);
}

$(function() {
	var speed = 500 ;

	$(".gotop").click(function(){
		$("html,body").animate({scrollTop: 0}, speed);
	});
	$(".totop_m2").click(function(){
		$("html,body").animate({ scrollTop: document.body.clientHeight }, speed);
	});
	
});


$(function() {
	$(window).ready(function(options) {
		var defaults = {
			showHeight : 500,
			speed : 500 
		};
		var options = $.extend(defaults,options);
		//$("body").prepend("<div id='totop'><a>top</a></div>");
		
		var $top = $("#totop");
		var $to_hide = $(".to_hide");
		
		$(this).scroll(function(){
			var scrolltop=$(this).scrollTop();		
			if(scrolltop>=options.showHeight){		
				$top.show();
				$to_hide.show();
			}else{
				$top.hide();
				$to_hide.hide();
			}
		});	
		
		$("#totop .btn_top").click(function(){
			$("html,body").animate({scrollTop: 0}, options.speed);
		});
	});
});












function go_listv_off (){
	$(".go_listv").css("display","block");
	$("html").css("overflow-y","hidden");
	
}

function go_listv_on (){
	$(".go_listv").css("display","none");
	$("html").css("overflow-y","scroll");
}










$(function(){

	function over_fc(abc){
		$('#Shopee1_pup').stop().animate({left : abc}, {queue : true,easing:"easeInQuart",duration : 350,
			complete: function(){
			}
		});

		
	
		return false;
	}

	function over_fc_end(){
		if($('#Shopee1_pup').offset().left <= -1200){
			$("#Shopee1_pup").css("display","none");

			clearInterval(over_fc_end_time);

		}

		
	}

	$('.shopee_btn1').bind('click', function(event) {
		over_fc(0);
		$("#Shopee1_pup").css("display","block");
	});

	$('.shopee_btn2').bind('click', function(event) {
		over_fc(-1200);
		over_fc_end_time=setInterval(over_fc_end,200);
	});


})


