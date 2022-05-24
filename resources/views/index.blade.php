<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" http-equiv="Content-Type" content="text/html; charset=utf-8;  width=1600px;"/>
    <title>도매매 :: 배송대행B2B서비스 – 도매매</title>
    <link rel="shortcut icon" href="{{ _url_('web/img/120c.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ _url_('web/img/120c.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ _url_('web/img180c.png') }}">
    <link rel="stylesheet" href="{{ _url_('web/css/top.css') }}" title="no" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ _url_('web/css/middle.css') }}" title="no" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ _url_('web/css/footer.css') }}" title="no" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ _url_('web/css/bbs.css') }}" title="no" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ _url_('web/css/new.css') }}" title="no" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ _url_('web/css/style.css') }}" title="no" type="text/css" media="screen">
    <script src="{{ _url_('web/js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ _url_('web/js/common.js') }}"></script>


    <!--[if lt IE 9]>
    <script src="html5shivml5shiv.min.js') }}">
        <
        script
        src = "respond/respond.min.js') }}" >
    <![endif]-->


    <!-- wAdminMenu 그룹웨어 -->
    <link rel="stylesheet" href="wAdminMenu/wAdminMenu.css') }}" title="no" type="text/css" media="screen">
    <script src="wAdminMenu/wAdminMenu.js') }}"></script>

    <!--Family_site-->
    <script type="text/javascript" src="Family_site/updown.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="Family_site/updown.css') }}"/>

    <!-- FlexSlider -->
    <link rel="stylesheet" href="{{ _url_('css_2/flexslider.css') }}" type="text/css" media="screen"/>
    <script defer src="js_2/jquery.flexslider.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            /* top_slider 이미지 */
            $('.top_slider , .index4_cust1 , .index4_cust2 , .index4_cust3').flexslider({
                animation: "slide",//fade slide
                controlNav: true,
                //   animationLoop: false,
                slideshow: true,
                slideshowSpeed: 8000,
                //  sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });

            $('.qmenu_slider').flexslider({
                animation: "fade",//fade slide
                controlNav: true,
                //   animationLoop: false,
                slideshow: true,
                slideshowSpeed: 8000,
                //  sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
            /*
				$('.l_fixed_slides').flexslider({
					animation: "fade",//fade slide
					controlNav: true,
					//   animationLoop: false,
					slideshow: true,
					slideshowSpeed: 8000,
					//  sync: "#carousel",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});

*/


        });
    </script>
    <script type="text/javascript">
        $(function () {
            /* top_slider 이미지 */
            $('.t_slider').flexslider({
                animation: "fade",//fade slide
                controlNav: true,
                //animationLoop: false,
                slideshow: true,
                slideshowSpeed: 8000,
                //  sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });

        });
    </script>
</head>
<body>


<div id="wAdminMenu">
    <!-- 닫기 버튼 -->
    <div class="sectionLeft"
         style="position:relative; top:-8px; padding:4px 8px; background-color:#333; font-size:16px; font-weight:700; font-family:'Dotum','돋움';">
        <a href="#" onClick="setHideAdminLayout();" style="color:#fff;">관리자화면끄기 &times;</a>
    </div>

    <!-- 관리자 메뉴 -->
    <div class="sectionLeft">
        <!--<b>관리자메뉴</b>
				<a href="#" target="_blank">관리도구</a>
				|
				<a href="#" target="_blank">상담도구</a>
				|-->
        <a href="http://intra.gngco.co.kr:57080/intra/?cid=naggama" target="_blank">그룹웨어</a>
    </div>
</div>
<div id="intraReportButton"></div>
<script src="http://intra.ggook.com:57080/intra/include/inc_reportButton.php" charset="euc-kr"></script>


<script type="text/javascript">
    $(function () {


    });
    $(window).scroll(function () {
        var st = $(document).scrollTop();
        var lDome_y = $("#lDomeggookHeaderRWingWrap").offset().top;

        if (st >= lDome_y) {
            $("#lDomeggookHeaderRWing").css({'position': 'fixed', 'top': '0px'});

        } else {
            $("#lDomeggookHeaderRWing").css({'position': '', 'top': ''});
        }
    });
    /*
			$(window).scroll(function(){
				var st = $(document).scrollTop();

				var lDome_h = $("#containes").height();

				var lDome_y = $("#containes").offset().top;

				if(lDome_h > 10)
				{
					 if(lDome_y > 10){

						if(st > 380+51){
							$("#lDomeggookHeaderRWing").css({'position':'fixed' , 'top':'0px'});
						}else{

							$("#lDomeggookHeaderRWing").css({'position':'' , 'top':''});
						}

					}else{




						if(st > 380){
							$("#lDomeggookHeaderRWing").css({'position':'fixed' , 'top':'0px'});
						}else{

							$("#lDomeggookHeaderRWing").css({'position':'' , 'top':''});
						}




					}

				}else{



					 if(lDome_y > 10){

						if(st > 380-106+51){
							$("#lDomeggookHeaderRWing").css({'position':'fixed' , 'top':'0px'});
						}else{

							$("#lDomeggookHeaderRWing").css({'position':'' , 'top':''});
						}

					}else{




						if(st > 380-106){
						$("#lDomeggookHeaderRWing").css({'position':'fixed' , 'top':'0px'});
					}else{

						$("#lDomeggookHeaderRWing").css({'position':'' , 'top':''});
					}




					}


				}
				//var sl = this.body.scrollLeft;
				//var top = Math.max(140-st,0);
				//$("#left").css('top',top+'px');







			})


*/


</script>


<!--내용start -->
<div id="containes">


    <!-- 1time start -->
    <div id="time_img">
        <div class="container">
            <a href="javascript:vo()" class="top_guan"><img src="{{ _url_('web/img/qmenu/top_guan.png') }}"
                                                            alt=""/></a>
            <a href="page_1.html" target="_self"><img src="{{ _url_('web/img/index/img1.png') }}" alt=""/></a><a
                href="http://gngnetwork.cn/~domeme/gongsi_daigou/cha_sub2.html" target="_blank"><img
                    src="{{ _url_('web/img/index/img2.png') }}" alt=""/></a><a href="cha_sub2.html"
                                                                                      target="_blank"><img
                    src="{{ _url_('web/img/index/img3.png') }}" alt=""/></a>
        </div>
    </div>

    <div class="t_slider hide">
        <div class="container" style="z-index:1111111111111111;"><a href="javascript:vo()" class="top_guan"><img
                    src="{{ _url_('web/img/qmenu/top_guan.png') }}" alt=""/></a></div>
        <div class="flexslider">
            <ul class="slides">
                <li style="background:url('img/index/time_bg.jpg') center top;">
                    <div class="container"><a href="#"><img src="{{ _url_('web/img/index/s_4_img1.png') }}"
                                                            alt=""/></a><a href="#"><img
                                src="{{ _url_('web/img/index/s_4_img2.jpg') }}" alt=""/></a></div>
                </li>
                <li style="background:#9CF;">
                    <div class="container"><a href="#"><img src="{{ _url_('web/img/index/s_4_img1.png') }}"
                                                            alt=""/></a><a href="#"><img
                                src="{{ _url_('web/img/index/s_4_img2.jpg') }}" alt=""/></a></div>
                </li>
            </ul>
            <div class="cb"></div>
        </div>


    </div>


</div>


<!-- QUICK  MENU -->
<div class="quick_menu">
    <div class="container">
        <div class="right_guan_div">
            <a href="javascript:vo()" class="right_guan"></a>
            <a href="javascript:vo()" class="gotop"><img src="{{ _url_('web/img/qmenu/top.jpg') }}" alt=""/></a>
        </div>

        <div class="t20"></div>
        <div class="quick_tit"><span>QUICK  MENU</span></div>
        <div class="t10"></div>
        <ul class="ufl quick_text">
            <li><a href="login_2.html"><img src="{{ _url_('web/img/qmenu/quick_image1.jpg') }}" alt=""/>
                    <div>회원가입</div>
                </a></li>
            <li class="l10"><a href="#"><img src="{{ _url_('web/img/qmenu/quick_image2.jpg') }}" alt=""/>
                    <div>공지사항</div>
                </a></li>
            <li class="l10"><a href="sub2_2.html"><img src="{{ _url_('web/img/qmenu/quick_image4.jpg') }}"
                                                       alt=""/>
                    <div>My 도매매</div>
                </a></li>
            <li class="l10"><a href="#"><img src="{{ _url_('web/img/qmenu/quick_image6.jpg') }}" alt=""/>
                    <div>고객센터</div>
                </a></li>
        </ul>
        <div class="cb t10">
            <a href="#" class="quick_btn1">엑셀주문등록 <img src="{{ _url_('web/img/index/qb1.jpg') }}" class="vm"
                                                       alt=""></a>
            <a href="#" class="quick_btn2">상품DB 다운로드 <img src="{{ _url_('web/img/index/qb2.jpg') }}" class="vm"
                                                          alt=""></a></div>

        <div class="cb"></div>
    <!--
					<div class="quick_tit"><span>상품DB 엑셀다운로드</span></div>
					<div class="t10"><a href="#" target="_blank"><img src="{{ _url_('web/img/qmenu/image11.jpg') }}" alt="" /></a></div>
					-->


        <div class="cb t20"></div>
        <div class="quick_tit"><span>이달의 교육</span></div>
        <div class="t10"><a href="http://campus.domeggook.com/offline/view/no/571" target="_blank"><img
                    src="{{ _url_('web/img/qmenu/image17.jpg') }}" alt=""/></a></div>
        <div class="t05"><a href="http://campus.domeggook.com/offline/view/no/537" target="_blank"><img
                    src="{{ _url_('web/img/qmenu/image18.jpg') }}" alt=""/></a></div>
        <div class="t05"><a href="http://campus.domeggook.com/offline/view/no/560" target="_blank"><img
                    src="{{ _url_('web/img/qmenu/image19.jpg') }}" alt=""/></a></div>


        <div class="cb t20"></div>
        <div class="quick_tit"><span>최근 본 상품</span></div>
        <div class="t10"></div>


        <div class="cb t30"></div>
        <div class="line1 t30"></div>

        <img src="{{ _url_('web/img/qmenu/image9.jpg') }}" alt=""/>
        <div class="t05"><a href="s_sub7.html" target="_blank"><img
                    src="{{ _url_('web/img/qmenu/image10.jpg') }}" alt=""/></a></div>
        <div class="t05"><a href="#" target="_blank"><img src="{{ _url_('web/img/qmenu/image16.jpg') }}" alt=""/></a>
        </div>

        <div class="cb"></div>
    </div>
</div>
<!-- //QUICK  MENU -->


<!-- gnb start -->
<div class="gnb">
    <div class="container" style="z-index:9999!important ;">
        <div class="fl">
            <a href="http://domeggook.com/main/board/boardList.php?mode=inNB&amp;no=2643" target="_black">앱다운로드 <img
                    src="{{ _url_('web/img/menu/gnb1_btn1.jpg') }}" class="vm" alt=""></a>
            <a href="http://domeggook.com/main/" target="_black"><img
                    src="{{ _url_('web/img/menu/top_bu1.svg') }}" class="t05" alt=""/> 도매꾹</a>
            <a href="http://naggama.com/main/item/itemList.php" target="_black"><img
                    src="{{ _url_('web/img/menu/top_bu2.svg') }}" class="t05" alt=""/> 나까마</a>
            <a href="http://campus.domeggook.com/" target="_black"><img
                    src="{{ _url_('web/img/menu/top_bu3.svg') }}" class="t05" alt=""/> 교육센터</a>
            <a href="https://eggdome.ggook.com/" target="_blank"><img
                    src="{{ _url_('web/img/menu/top_bu4.svg') }}" class="t05" alt=""/> 에그돔</a>
        </div>
        <div class="fr">
            <ul id="rightMenu">

                <li class="login"><a href="{{ '/login' }}" title="로그인">로그인</a>&nbsp;</li>

                <li><a href="login_2.html" title="회원가입">회원가입</a>&nbsp;</li>

                <li class="subMenu">

                    <a href="sub2_2.html" title="마이페이지">마이페이지 <img
                            src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm" alt=""/></a>

                    <ul class="ul">

                        <li style="width:100px;"><a href="#" title="주문전체목록">주문전체목록</a></li>

                        <li style="width:100px;"><a href="#" title="e-money">e-money</a></li>

                        <li style="width:100px;"><a href="#" title="관심상품">관심상품</a></li>
                        <li style="width:100px;"><a href="#" title="상품문의">상품문의</a></li>
                        <li style="width:100px;"><a href="#" title="회원정보수정">회원정보수정</a></li>
                        <li style="width:100px;"><a href="#" title="쇼피상품정보수정">쇼피상품정보수정</a></li>

                        <li style="width:100px;"><a class="lastSubMenu" href="#" title="더보기 >">더보기 ></a></li>
                    </ul>
                </li>

                <li><a href="#" title="장바구니"><img src="{{ _url_('web/img/top/gnb_bu3.jpg') }}" alt="cart"
                                                  title="cart" style="vertical-align:-1px;"/> 장바구니</a>&nbsp;
                </li>

                <li class="subMenu">

                    <a href="#" title="구매관리">구매관리 <img src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm"
                                                       alt=""/></a>

                    <ul class="ul">

                        <li><a href="#" title="전체구매목록">전체구매목록</a></li>

                        <li><a href="#" title="흥정하기">흥정하기</a></li>

                        <li><a href="#" title="관심상품목록">관심상품목록</a></li>

                        <li><a href="#" title="상품문의관리">상품문의관리</a></li>

                        <li><a class="lastSubMenu" href="#" title="더보기 >">더보기 ></a></li>
                    </ul>
                </li>

                <li class="subMenu">

                    <a href="#" title="판매관리">판매관리 <img src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm"
                                                       alt=""/></a>

                    <ul class="ul">

                        <li><a href="#" title="무료상품등록">무료상품등록</a></li>

                        <li><a href="#" title="상품발송예정">신규주문확인</a></li>

                        <li><a href="#" title="상품발송예정">배송예정주문</a></li>

                        <li><a href="#" title="흥정하기">흥정하기</a></li>

                        <li><a href="#" title="등록상품관리">등록상품관리</a></li>

                        <li><a href="#" title="광고신청하기">광고신청하기</a></li>

                        <li><a href="#" title="전체문의글">전체문의글</a></li>

                        <li><a href="#" title="구매후기관리">구매후기관리</a></li>

                        <li><a class="lastSubMenu" href="#" title="더보기 >">더보기 ></a></li>
                    </ul>
                </li>

                <li class="subMenu">

                    <a href="#" title="판매관리" class="b" style="color:#f26820;">스피드고전송기 <img
                            src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm" alt=""/></a>

                    <ul class="ul">
                        <li style="width:125px;"><a href="speed_home.html" title="">스피드고전송기홈</a></li>
                        <li style="width:125px;">
                            <a href="market1.html" title="">스마트스토어전송<span>></span></a>
                            <ul class="s_subMenu">
                                <li><a href="market1.html">스마트스토어전송홈</a></li>
                                <li><a href="market2.html">주문관리</a></li>
                                <li><a href="market3.html">전송관리</a></li>
                                <li><a href="market5.html">마켓문의</a></li>
                                <li><a href="market4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="coupang1.html" title="">쿠팡전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px;">
                                <li><a href="coupang1.html">쿠팡전송홈</a></li>
                                <li><a href="coupang2.html">주문관리</a></li>
                                <li><a href="coupang3.html">전송관리</a></li>
                                <li><a href="coupang5.html">마켓문의</a></li>
                                <li><a href="coupang4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="11st1.html" title="">11번가전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px;">
                                <li><a href="11st1.html">11번가전송홈</a></li>
                                <li><a href="11st2.html">주문관리</a></li>
                                <li><a href="11st3.html">전송관리</a></li>
                                <li><a href="11st5.html">마켓문의</a></li>
                                <li><a href="11st4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="kakao1.html" title="">카카오전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px;">
                                <li><a href="kakao1.html">카카오전송홈</a></li>
                                <li><a href="kakao2.html">주문관리</a></li>
                                <li><a href="kakao3.html">전송관리</a></li>
                                <li><a href="kakao5.html">마켓문의</a></li>
                                <li><a href="kakao4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="ssg1.html" title="">SSG닷컴전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px; top:100px;">
                                <li><a href="ssg1.html">SSG닷컴전송홈</a></li>
                                <li><a href="kakao2.html">주문관리</a></li>
                                <li><a href="kakao3.html">전송관리</a></li>
                                <li><a href="kakao5.html">마켓문의</a></li>
                                <li><a href="kakao4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="lotte1.html" title="">롯데ON전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px; top:100px;">
                                <li><a href="lotte1.html">롯데ON전송홈</a></li>
                                <li><a href="lotte2.html">주문관리</a></li>
                                <li><a href="lotte3.html">전송관리</a></li>
                                <li><a href="lotte5.html">마켓문의</a></li>
                                <li><a href="lotte4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="wemap1.html" title="">위메프전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px; top:190px;">
                                <li><a href="wemap1.html">위메프전송홈</a></li>
                                <li><a href="wemap2.html">주문관리</a></li>
                                <li><a href="wemap3.html">전송관리</a></li>
                                <li><a href="wemap5.html">마켓문의</a></li>
                                <li><a href="wemap4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="shope1.html" title="">쇼피전송<span>></span></a>
                            <ul class="s_subMenu" style="width:100px; top:210px;">
                                <li><a href="shope1.html">쇼피전송홈</a></li>
                                <li><a href="shope2.html">주문관리</a></li>
                                <li><a href="shope3.html">전송관리</a></li>
                                <li><a href="shope5.html">마켓문의</a></li>
                                <li><a href="shope4.html">템플릿관리</a></li>
                            </ul>
                        </li>
                        <li style="width:125px;"><a href="https://store.cafe24.com/apps/3032" target="_blank" title="">카페24전송</a>
                        </li>
                        <li style="width:125px;"><a href="market1_shezhi.html" title="">마켓계정관리</a></li>
                    </ul>
                </li>
                <li class="subMenu">

                    <a href="market1.html" title="판매관리">상품공급사센터 <img
                            src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm" alt=""/></a>

                    <ul>

                        <li><a href="http://domeme.domeggook.com/main/mySell/register/my_sellSelectForm.php"
                               title="무료상품등록" target="_blank">무료상품등록</a></li>

                        <li><a href="shope_2.html" title="쇼피상품관리">쇼피상품관리</a></li>

                        <li><a href="http://domeme.domeggook.com/main/mySell/sell/my_sellList.php?mode=WAITCHK"
                               title="신규주문확인" target="_blank">신규주문확인</a></li>
                        <li><a href="http://domeme.domeggook.com/main/mySell/sell/my_sellList.php?mode=WAITDELI"
                               title="배송예정주문" target="_blank">배송예정주문</a></li>


                        <li><a href="http://domeme.domeggook.com/main/mySell/register/my_sellList.php" title="등록상품관리"
                               target="_blank">등록상품관리</a></li>

                        <!--                        <li><a href="http://domeme.domeggook.com/main/mySell/adv/my_advAdd.php" title="광고신청하기"-->
                        <!--                               target="_blank">광고신청하기</a></li>-->

                        <li><a href="http://domeme.domeggook.com/main/mySell/support/my_itemSupport.php" title="전체문의글"
                               target="_blank">전체문의글</a></li>

                        <li><a href="http://domeme.domeggook.com/main/mySell/support/my_sellResult.php" title="구매후기관리"
                               target="_blank">구매후기관리</a></li>

                        <li><a class="lastSubMenu" href="http://domeme.domeggook.com/main/mySell/my_sellMain.php"
                               title="더보기 >" target="_blank">더보기 &gt;</a></li>

                    </ul>

                </li>
            <!--
                            <li class="subMenu">

                                <a href="market1.html" title="판매관리" class="b" style="color:#f26820;">스마트전송기 <img src="{{ _url_('web/img/menu/gnb1_btn3.jpg') }}" class="vm" alt="" /></a>

                                <ul>
                                    <li><a  href="market2.html" title="">주문관리</a></li>
                                    <li><a  href="market3.html" title="">전송리스트</a></li>
                                    <li><a  href="market5.html" title="">마켓문의</a></li>
                                    <li><a  href="market4.html" title="">템플릿관리</a></li>
                                    <li><a class="lastSubMenu" href="#" title="더보기 >">더보기 ></a></li>

                                </ul>

                            </li>
-->
                <li><a href="#" title="1:1상담">고객센터</a></li>

                <div class="cb"></div>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
</div>


<!-- 로고 메뉴 -->


<div class="container" style="z-index:1000;">
    <h1><a href="index.html"><img src="{{ _url_('web/img/menu/logo3.jpg') }}" alt=""/></a></h1>

    <div class="fl t35 l50">
        <div class="top_input">
            <div class="s_index_select">
                <div class="s_index_select_btn">
                    <div class="fl"><a href="javascript:vo()">상품명</a></div>
                    <div class="fr t20"><img src="{{ _url_('web/img/s_index/down.png') }}" alt=""/></div>
                    <div class="cb"></div>
                </div>
                <ul class="s_index_select_ul">
                    <li><a href="javascript:s_index_select_html('상품명')">상품명</a></li>
                    <li><a href="javascript:s_index_select_html('상품번호')">상품번호</a></li>
                    <li><a href="javascript:s_index_select_html('판매자ID')">판매자ID</a></li>
                    <li><a href="javascript:s_index_select_html('닉네임')">닉네임</a></li>
                </ul>
            </div>

            <input type="text" title="검색" name="검색" class="" value="매일매일 신상! [엔젤드레스]" onFocus="this.value='';"/>
            <a href="#" class="fr"><img src="{{ _url_('web/img/menu/top_input_btn.jpg') }}" alt=""/></a></div>
        <div class="cb"></div>
        <div class="index4_sousou">
            <div class="index4_sousou_tit fl">인기검색어</div>
        <!--
		<script type="text/javascript">
			$(function(){
				/* 인기검색어 */
				$('#searchPopularKwds').flexslider({
					animation: "slide",//fade slide
					controlNav: true,
					//   animationLoop: false,
					slideshow: true,
					controlNav: true,
					direction: 'vertical',//设置滑动方向:左右horizontal或者上下vertical,需设置animation: "slide",默认horizontal
					directionNav: false,//是否显示左右控制按钮
					controlNav:false,//是否显示底部切换按钮
					slideshowSpeed: 1000,
					//  sync: "#carousel",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});

			});
		</script>
								<div id="searchPopularKwds" style="width:160px;" class="fr t05">
									<div class="flexslider">
										<ul class="slides">
											<li><div class="index4_sousou_bane" ><span>1</span>양말<font><img src="{{ _url_('web/img/top/sousou_bu1.jpg') }}" class="vm" alt="" />1</font></div></li>
											<li><div class="index4_sousou_bane" ><span>2</span>양말<font><img src="{{ _url_('web/img/top/sousou_bu2.jpg') }}" class="vm" alt="" />1</font></div></li>
										</ul>
										<div class="cb"></div>
									</div>
								</div>

-->
            <div class="fr t08" style="width:160px;">
                <iframe src="popularKWViewExample2.html" name="iframe" frameborder='0' scrolling='no'
                        style="width:100%; height:20px; ">iFrame
                </iframe>
            </div>

            <div class="index4_sousou_pup hide">
                <div class="fr index4_sousou_pup_btn1"><a href="#">더보기 <img
                            src="{{ _url_('web/img/top/sousou_btn1.jpg') }}" class="vm" alt=""/></a></div>

                <div class="cb t05"></div>

                <!-- 인기검색어 -->

                <style type="text/css">

                    ul#gKeyWordLists {
                        list-style-type: disc;
                        padding-left: 10px;
                    }

                    ul#gKeyWordLists li {
                        list-style-type: none;
                        padding: 0px;
                        margin: 0px;
                        border: 0px;
                        clear: both;
                    }

                    .popMark {
                        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
                        width: 12px;
                        float: left;
                        padding: 0px 2px;
                        background-color: #aaaaaa;
                        color: #ffffff;
                        font-size: 11px;
                        text-align: center;
                        margin-top: 4px;
                        margin-left: 0px;
                        font-weight: bold;
                    }

                    .popKwd {
                        float: left;
                        font-size: 13px;
                        line-height: 21px;
                        padding: 0px 10px;
                    }

                    .popKwd a {
                        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
                        font-size: 12px;
                        font-weight: 600;
                        color: #747474;
                        text-decoration: none;
                    }

                    .popRank {
                        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
                        font-size: 12px;
                        color: #747474;
                        float: right;
                        height: 21px;
                        line-height: 6px;
                        padding: 0px 10px;
                        text-align: center;
                        position: relative;
                    }

                    .popRanks {
                        position: absolute;
                        width: 30px;
                        top: 3px;
                        left: -22px;
                        text-align: right;
                        font-weight: bold;
                    }

                </style>

                <!-- 상품인기검색어를 표시할 요소 -->
                <ul id="gKeyWordLists"></ul>

                <!-- 콜백함수 정의 -->
                <script type="text/javascript">
                    function showKeyWordLists(res) {
                        var o = document.getElementById('gKeyWordLists');
                        var link = 'http://domeggook.com/main/item/itemList.php?sf=ttl&sw=';
                        var src = 'img/header/';

                        var li, divMark, divKwd, divRank, a, span, img, tmp, rankFileName, rankNum;

                        for (var i = 0; i < res.length; i++) {
                            li = document.createElement('li');

                            divMark = document.createElement('div');
                            divMark.appendChild(document.createTextNode(res[i].rank));
                            divMark.classList.add('popMark');

                            divKwd = document.createElement('div');
                            a = document.createElement('a');
                            a.setAttribute('href', link + res[i].uword);
                            a.appendChild(document.createTextNode(res[i].word));
                            divKwd.appendChild(a);
                            divKwd.classList.add('popKwd');

                            divRank = document.createElement('div');
                            tmp = document.createElement('div');

                            if (res[i].diff1 > 0) {
                                rankFileName = 'ico_rankUp.png';
                                rankNum = res[i].diff1;
                            } else if (res[i].diff1 < 0) {
                                rankFileName = 'ico_rankDown.png';
                                rankNum = res[i].diff1 * -1;
                            } else {
                                rankFileName = 'ico_rank.png';
                                rankNum = '';
                            }

                            img = document.createElement('img');
                            img.setAttribute('src', src + rankFileName);
                            span = document.createElement('span');
                            span.innerHTML = rankNum;
                            tmp.appendChild(img);
                            tmp.appendChild(span);
                            tmp.classList.add('popRanks');

                            divRank.appendChild(tmp);
                            divRank.classList.add('popRank');

                            li.appendChild(divMark);
                            li.appendChild(divKwd);
                            li.appendChild(divRank);

                            o.appendChild(li);
                        }
                    }
                </script>

                <!-- callback 파라미터에 콜백함수 이름을 입력 하여 요구 데이타를 추출 -->
                <script type="text/javascript"
                        src="https://domeggook.com/main/common/jscript/js_jsonpKeyWordLists.php?callback=showKeyWordLists"></script>


                <!--// 인기검색어 -->

                <div class="cb"></div>
            </div>
        </div>
    </div>

    <!-- top_slider 상단 이미지 -->
    <div class="top_slider">

        <div class="flexslider">
            <ul class="slides">
                <li><a href="notice1.html" target="_blank"><img
                            src="{{ _url_('web/img/notice/top_banner01.png') }}" alt=" "></a></li>
                <li><a href="http://campus.domeggook.com/offline/view/no/502" target="_blank"><img
                            src="{{ _url_('web/img/index/top_image1.jpg') }}" alt=" "></a></li>
                <li><a href="http://campus.domeggook.com/offline/list" target="_blank"><img
                            src="{{ _url_('web/img/index/top_image2.jpg') }}" alt=" "></a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div class="cb"></div>
</div>


<div class="top_menu">


    <!-- ----- 상단 메뉴 --- -->
    <div class="container">
        <div class="quan_mm2">
            <a href="javascript:manNav_fc('none')" class="quan_guan"><img
                    src="{{ _url_('web/img/menu/quan_mm.png') }}" alt=""/></a>
            <div class="section">
                <h2>패션잡화/화장품</h2>

                <ul>
                    <li><a href="prod_1.html">패션소품/액세서리</a></li>
                    <li><a href="prod_1.html">주얼리/보석/시계</a></li>
                    <li><a href="prod_1.html">신발/구두/운동화</a></li>
                    <li><a href="prod_1.html">지갑/벨트/가방</a></li>
                    <li><a href="prod_1.html">화장품/바디/헤어</a></li>
                </ul>
            </div>

            <div class="section">
                <h2>의류/언더웨어</h2>

                <ul>
                    <li><a href="prod_1.html">여성의류(상의)</a></li>
                    <li><a href="prod_1.html">여성의류(하의/원피스)</a></li>
                    <li><a href="prod_1.html">여성언더웨어/운동복</a></li>
                    <li><a href="prod_1.html">남성의류/정장</a></li>
                    <li><a href="prod_1.html">남성언더웨어/운동복</a></li>
                </ul>
            </div>

            <div class="section">
                <h2>출산/유아동/완구</h2>

                <ul>
                    <li><a href="prod_1.html">임부복/출산준비물</a></li>
                    <li><a href="prod_1.html">모유/분유수유/이유용품</a></li>
                    <li><a href="prod_1.html">목욕용품</a></li>
                    <li><a href="prod_1.html">위생/건강용품</a></li>
                    <li><a href="prod_1.html">분유/기저귀/물티슈</a></li>
                    <li><a href="prod_1.html">유아스킨케어/생활용품</a></li>
                    <li><a href="prod_1.html">아기띠/외출용품</a></li>
                    <li><a href="prod_1.html">유아안전용품</a></li>
                </ul>
            </div>

            <div class="section">
                <h2>가구/생활/취미</h2>

                <ul>
                    <li><a href="prod_1.html">가구/DIY</a></li>
                    <li><a href="prod_1.html">침구/홈패션/인테리어</a></li>
                    <li><a href="prod_1.html">생활/수납/욕실/청소</a></li>
                    <li><a href="prod_1.html">주방/조리기구/식기</a></li>
                    <li><a href="prod_1.html">애완/취미/꽃</a></li>
                </ul>
            </div>

            <div class="section">
                <h2>스포츠/건강/식품</h2>

                <ul>
                    <li><a href="prod_1.html">레저/스포츠</a></li>
                    <li><a href="prod_1.html">헬스/건강/성인용품</a></li>
                    <li><a href="prod_1.html">자동차용품</a></li>
                    <li><a href="prod_1.html">식품/농수축산물</a></li>
                    <li><a href="prod_1.html">선물세트</a></li>
                </ul>
            </div>

            <div class="section">
                <h2>가전/휴대폰/산업</h2>

                <ul>
                    <li><a href="prod_1.html">가전/디지털제품</a></li>
                    <li><a href="prod_1.html">컴퓨터/소모품</a></li>
                    <li><a href="prod_1.html">핸드폰/액세서리</a></li>
                    <li><a href="prod_1.html">택배/포장/운반용품</a></li>
                    <li><a href="prod_1.html">산업용품/공구/원단</a></li>
                </ul>
            </div>
        </div>


        <div class="fl">
            <a href="javascript:manNav_fc('block')" style="padding-left:0px;">
                <img src="{{ _url_('web/img/main/menu_bu1.jpg') }}" alt=""/>
                <strong>전체카테고리</strong> </a>
        <!--
                                <a href="javascript:vo()" onClick="document.getElementById('quan_menu').style.display='block';" style="padding-left:0px;">
	                                <img src="{{ _url_('web/img/main/menu_bu1.jpg') }}" alt="" />
	                                <strong>전체카테고리</strong>
                                </a>
                                -->
        </div>


        <div class="fl">


            <a href="{{ _url_('posts') }}" style="color:#247b4b">상품검색</a>
            <a href="sub3_6.html">상품DB보관함</a>
            <a href="sub3_2.html">엑셀다운로드</a>
            <a href="sub3_11.html">엑셀일괄주문</a>
            <a href="sub3_7.html">상품기획전</a>
            <a href="sub3_12.html">제휴기획전</a>
            <a href="sub3_7_8.html">알뜰폰</a>
            <a href="hai_index.html" style="color:#2650b6; padding-left:15px;">해외직배송상품관</a> |
            <a href="hai_sub1.html" style="color:#2650b6">해외직수입관</a>
        </div>


        <div class="cb"></div>
    </div>


</div>


<div>
    <div class="container">


        <!--         우측 큐배너        -->


        <!-- r_fixed 메뉴 -->
        <div id="lDomeggookHeaderRWingWrap">

            <div id="lDomeggookHeaderRWingBg" class="hide"></div>

            <div id="lDomeggookHeaderRWing">
                <script type="text/javascript">
                    $(function () {


                        $('.top_menu_slider').flexslider({
                            animation: "fade",//fade slide
                            controlNav: true,
                            //   animationLoop: false,
                            slideshow: true,
                            slideshowSpeed: 4000,
                            //  sync: "#carousel",
                            start: function (slider) {
                                $('body').removeClass('loading');
                            }
                        });

                    });
                </script>
                <div class="t05"></div>
                <div class="qmenu">
                    <ul>
                        <li class="l10"><strong>구매완료상품수</strong></li>
                        <li class="t05">
                            <div class="top_menu_slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>오늘(현재) <br><strong>3,295,436</strong> 상품</li>
                                        <li>지난주 <br><strong>3,295,436</strong> 상품</li>
                                    </ul>
                                    <div class="cb"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="t05 l10 r10">
                        <div class="line1 t05"></div>
                    </div>

                    <ul>
                        <li class="l10"><strong>고객센터</strong></li>
                        <li class="t05 l10"><span class="bold" style="color:#ff643c">1588-0628</span></li>
                    </ul>
                    <div class="t05 l10 r10">
                        <div class="line1 t05"></div>
                    </div>

                    <ul class="l10">
                        <li>
                            <a href="http://domeme.domeggook.com/main/cs/cs_supportWrite.php?from=%2Fmain%2FmyPage%2Fsupport%2Fmy_supportWrite.php"
                               target="_blank" onclick="popup(this.href, '1000','900');return false">1:1문의하기</a></li>
                        <li><a href="https://domeme.domeggook.com/main/cs/cs_supportChk.php?from=%2Fmain%2Findex.php"
                               target="_blank" onclick="popup(this.href, '680','400');return false">1:1문의내역</a></li>
                    </ul>
                    <div class="t10 l10 r10">
                        <div class="line1"></div>
                    </div>

                </div>

                <div class="ac">

                    <a href="notice3.html"><img src="{{ _url_('web/img/top/l_fixed_btn3.png') }}" alt=""/></a>
                    <div class="t05"><a href="http://campus.domeggook.com/dataroom/view/no/26" target="_blank"><img
                                src="{{ _url_('web/img/top/l_fixed_btn10.png') }}" alt=""/></a></div>
                    <div class="t05"><a href="index_pup2.html" target="_blank"
                                        onClick="popup(this.href, '800','900','yes');return false"><img
                                src="{{ _url_('web/img/top/l_fixed_btn8.png') }}" alt=""/></a></div>
                <!--
                <div class="t05"><a href="index_pup.html" target="_blank" onClick="popup(this.href, '800','900','yes');return false"><img src="{{ _url_('web/img/top/l_fixed_btn5.png') }}" alt="" /></a></div>
-->
                    <div class="t05"><a href="https://cafe.naver.com/b2bhub" target="_blank"><img
                                src="{{ _url_('web/img/top/l_fixed_btn6.png') }}" alt=""/></a></div>
                    <div class="t05"><a href="pup3.html" target="_blank"><img
                                src="{{ _url_('web/img/top/lite.jpg') }}" alt=""/></a></div>
                    <div class="t05"><a href="http://domeme.com/main/" target="_blank"><img
                                src="{{ _url_('web/img/top/l_fixed_btn7.png') }}" alt=""/></a></div>
                </div>

                <div class="t20"></div>

                <div id="right_bane2" class="hide">
                    <div class="right_bane2_tit">오늘본상품</div>

                    <!-- qmenu_slider 상단 이미지 start -->
                    <div class="qmenu_slider">

                        <div class="flexslider">
                            <ul class="slides" id="gRecentlyItems">
                            <!--
										<li>

											<ul>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
											</ul>





										</li>

										<li>

											<ul>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
												<li>
													<div class="text_over">뽀로로수저&하드케이스세트
													<br /> <font>260</font>원</div>
													<a href="#"><img src="{{ _url_('web/img/main/img1.jpg') }}" alt=" "></a>
												</li>
											</ul>

										</li>
										-->
                            </ul>
                            <div class="cb t20"></div>
                        </div>

                        <div class="quick_text" id="qmenu_slider_text">&nbsp; / <span class="r_leg ar">0</span></div>
                    </div>


                    <!-- qmenu_slider 상단 이미지 end-->


                    <!-- 콜백함수 정의 -->
                    <script type="text/javascript">


                        $(function () {


                            $("#gRecentlyItems li a").hover(function () {
                                    $(">.text_over:not(:animated)", this).show();
                                },
                                function () {
                                    $(".text_over").hide();
                                })


                        });


                        function showRecentlyItems(res) {
                            var o = document.getElementById('gRecentlyItems');
                            var li, a1, img1, a2, img2;
                            var r_leg = Math.ceil(res.length / 3);


                            for (var i = 0; i <= res.length; i = i + 3) {
                                li = document.createElement('li');


                                if (res.length < 3) {
                                    aaaaa = res.length;

                                    var abc = document.getElementById('qmenu_slider_text');
                                    abc.style.display = 'none';

                                } else {
                                    aaaaa = 3

                                }
                                for (var k = 1; k <= aaaaa; k++) {
                                    this["a" + k] = document.createElement('a');
                                    this["a" + k].setAttribute('href', res[i + (k - 1)].url);

                                    this["img" + k] = new Image();
                                    this["img" + k].src = res[i + (k - 1)].thumb;
                                    this["img" + k].width = 80;
                                    this["img" + k].height = 80;


                                    this["a" + k].appendChild(this["img" + k]);


                                    /* over 효과 부분*/
                                    this["b" + k] = document.createElement('div');

                                    this["b" + k].setAttribute("class", "text_over");

                                    this["b" + k].appendChild(document.createTextNode(res[i + (k - 1)].title.substr(0, 25)))

                                    //this["b" + k].innerHTML += "<br /><font>*****</font>원";


                                    this["a" + k].appendChild(this["b" + k]);


                                    li.appendChild(this["a" + k]);

                                }

                                o.appendChild(li);
                                $(".r_leg").html(r_leg);
                            }

                        }
                    </script>

                    <!-- 로그인 정보획득 스크립트를 임베드하면서 callback 파라미터에 콜백함수 이름을 입력 -->
                    <script type="text/javascript"
                            src="https://domeggook.com/main/common/jscript/js_jsonpRecentlyItems.php?market=supply&cnt=20&callback=showRecentlyItems"></script>

                    <!--
		<script type="text/javascript">
	showRecentlyItems([
		{"no":"6240936","title":"[\uc6d4\ub4dc\uc628]\ubbf8\ub7ec\ucf00\uc774\uc2a4 \uade0\uc77c\uac00 \uc544\uc774\ud3f0x g7 \ub178\ud2b89 S9 i8","thumb":"http:\/\/211.43.195.137\/upload\/item\/2015\/04\/14\/142899711910AD4EDF10A025F13B9D1F\/142899711910AD4EDF10A025F13B9D1F_stt_150.png') }}","url":"http:\/\/domeggook.com\/s\/6240936"},
		{"no":"6240936","title":"[\uc6d4\ub4dc\uc628]\ubbf8\ub7ec\ucf00\uc774\uc2a4 \uade0\uc77c\uac00 \uc544\uc774\ud3f0x g7 \ub178\ud2b89 S9 i8","thumb":"http:\/\/211.43.195.137\/upload\/item\/2015\/04\/14\/142899711910AD4EDF10A025F13B9D1F\/142899711910AD4EDF10A025F13B9D1F_stt_150.png') }}","url":"http:\/\/domeggook.com\/s\/6240936"},
		{"no":"6240936","title":"[\uc6d4\ub4dc\uc628]\ubbf8\ub7ec\ucf00\uc774\uc2a4 \uade0\uc77c\uac00 \uc544\uc774\ud3f0x g7 \ub178\ud2b89 S9 i8","thumb":"http:\/\/211.43.195.137\/upload\/item\/2015\/04\/14\/142899711910AD4EDF10A025F13B9D1F\/142899711910AD4EDF10A025F13B9D1F_stt_150.png') }}","url":"http:\/\/domeggook.com\/s\/6240936"},
		{"no":"6240936","title":"[\uc6d4\ub4dc\uc628]\ubbf8\ub7ec\ucf00\uc774\uc2a4 \uade0\uc77c\uac00 \uc544\uc774\ud3f0x g7 \ub178\ud2b89 S9 i8","thumb":"http:\/\/211.43.195.137\/upload\/item\/2015\/04\/14\/142899711910AD4EDF10A025F13B9D1F\/142899711910AD4EDF10A025F13B9D1F_stt_150.png') }}","url":"http:\/\/domeggook.com\/s\/6240936"},
		{"no":"6240936","title":"[\uc6d4\ub4dc\uc628]\ubbf8\ub7ec\ucf00\uc774\uc2a4 \uade0\uc77c\uac00 \uc544\uc774\ud3f0x g7 \ub178\ud2b89 S9 i8","thumb":"http:\/\/211.43.195.137\/upload\/item\/2015\/04\/14\/142899711910AD4EDF10A025F13B9D1F\/142899711910AD4EDF10A025F13B9D1F_stt_150.png') }}","url":"http:\/\/domeggook.com\/s\/6240936"}])
	</script>	-->
                </div>
                <div class="ac t20 hide">
                    <a href="javascript:vo();" class="gotop"><img src="{{ _url_('web/img/top/ico_top.png') }}"
                                                                  alt="화면 최상단으로 이동합니다" title="화면 최상단으로 이동합니다"/></a>
                    <div class="t20"></div>
                </div>
            </div>
        </div>


        <!--         //우측 큐배너        -->


        <script type="text/javascript">
            $(function () {
                $('.main_cust_slider').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    pauseOnHover: true, //鼠标糊上去是否暂停
                    slideshow: true,
                    controlNav: true,
                    direction: 'vertical',//设置滑动方向:左右horizontal或者上下vertical,需设置animation: "slide",默认horizontal
                    directionNav: true,//是否显示左右控制按钮
                    controlNav: false,//是否显示底部切换按钮
                    slideshowSpeed: 2500,
                    animationSpeed: 500,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div id="l_fixed">

            <div class="ar hide">
                <button class="l_fixed_button" type="submit"
                        onClick="document.getElementById('l_fixed_pup').style.display='none';">전체보기
                </button>
            </div>
            <div class="t15"></div>


            <div id="l_fixed_pup">
                <div class="l_fixed_pupbg"></div>
                <div class="t100"></div>
                <div class="container">
                    <a href="javascript:vo" onClick="document.getElementById('l_fixed_pup').style.display='none';"
                       class="l_fixed_button3">배너닫기 X</a></div>
            </div>

            <script src="js_2/jquery.Xslider.js') }}"></script>


            <script type="text/javascript">
                $(window).load(function () {
                    /* slider 배너3*/
                    $("#slider3").Xslider({
                        speed: 3000,
                        space: 5000
                    });
                });
            </script>

            <style type="text/css">
                #slider3 {
                    position: relative;
                    z-index: 1;
                    top: 0px;
                    height: 180px;
                    background: #fff;
                }

                #slider3 .conbox li {
                    position: absolute;
                }

                #slider3 .switcher {
                    position: absolute;
                    z-index: 2;
                    top: -20px;
                    width: 100%;
                    text-align: right;
                }

                #slider3 .switcher a {
                    margin: 0px 0px;
                    display: inline-block;
                    background: #dddddd;
                    border-radius: 10px;
                    width: 14px;
                    height: 14px;
                    opacity: 1;
                }

                #slider3 .switcher a:hover, #slider3 .switcher a.cur {
                    background: #34373e;
                    opacity: 1;
                }


            </style>


            <div id="slider3" class="flexslider">

                <ul class="conbox">
                    <li><a href="page_1.html"><img src="{{ _url_('web/img/main/5da6e6b81c29b_T1.png') }}"
                                                   alt=""/></a></li>
                    <li><a href="http://campus.domeggook.com/offline/view/no/548" target="_blank"><img
                                src="{{ _url_('web/img/main/main_img1.png') }}" alt=""/></a></li>
                    <li><a href="http://domeme2.domeggook.com/main/item/itemDbdownList.php?fromOversea=1"
                           target="_blank"><img src="{{ _url_('web/img/main/main_img5.png') }}" alt=""/></a></li>
                </ul>

                <div class="switcher">
                    <a href="javascript:vo(0)" class="cur"></a>
                    <a href="javascript:vo(0)"></a>
                    <a href="javascript:vo(0)"></a></div>
                <div class="cb"></div>
            </div>
        <!--
				<div class="l_fixed_slides">
                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href="page_1.html"><img src="{{ _url_('web/img/main/5da6e6b81c29b_T1.png') }}" alt="" /></a></li>
                            <li><a href="http://campus.domeggook.com/offline/view/no/548" target="_blank"><img src="{{ _url_('web/img/main/main_img1.png') }}" alt="" /></a></li>
                            <li><a href="http://domeme2.domeggook.com/main/item/itemDbdownList.php?fromOversea=1" target="_blank"><img src="{{ _url_('web/img/main/main_img5.png') }}" alt="" /></a></li>

                        </ul>
                        <div class="cb"></div>
                    </div>
    			</div>
-->
            <div class="l_fixed_btn">
                <div class="fl">하루동안 이 창 보이지않기</div>
                <div class="fr">
                    <button class="l_fixed_button2" type="submit"
                            onClick="document.getElementById('l_fixed').style.display='none';">창닫기
                    </button>
                </div>
                <div class="cb"></div>
            </div>


            <div class="t20">
                <a href="http://domeggook.com/6452378?advcnt=dumping" target="_blank"><img
                        src="{{ _url_('web/img/main/main_img6.png') }}" alt=""/></a></div>
            <div class="l_fixed_btn">
                <div class="fl">하루동안 이 창 보이지않기</div>
                <div class="fr">
                    <button class="l_fixed_button2" type="submit"
                            onClick="document.getElementById('l_fixed').style.display='none';">창닫기
                    </button>
                </div>
                <div class="cb"></div>
            </div>
        </div>
    </div>


    <div style="background:#f4f4f4;">


        <script type="text/javascript">
            $(function () {
                /* top_slider 이미지 */
                $('.index4_cust4 ').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 8000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


                $('.index4_cust4 .flex-control-paging li a').html("")

            });


        </script>
        <style type="text/css">


            .index4_cust4 .flex-control-paging li a:after {
                content: "무점포/무재고 오픈마켓창업";
                padding-left: -100px;

            }

            .index4_cust4 .flex-control-paging li:nth-child(2) a:after {
                content: "해외직배송 상품전";

            }

            .index4_cust4 .flex-control-paging li:nth-child(3) a:after {
                content: "해외직배송상품판매준비사항";

            }


            .index4_cust4 .flex-control-paging li:nth-child(4) a:after {
                content: "샤오미스마트웹캠";

            }


            .index4_cust4 .flex-control-paging li:nth-child(5) a:after {
                content: "엑셀일괄주문";

            }


            .index4_cust4 .flex-control-paging li:nth-child(6) a:after {
                content: "상품DB다 운로드";

            }

        </style>


        <div class="index4_cust4 hide">
            <div class="flexslider">
                <ul class="slides">
                    <li><a href="http://campus.domeggook.com/offline/view/no/470" target="_blank"><img
                                src="{{ _url_('web/img/index/index_image1.jpg') }}" alt=""/></a></li>
                    <li><a href="#"><img src="{{ _url_('web/img/index/index_image1_1.jpg') }}"/></a></li>
                    <li><a href="http://domeme.domeggook.com/main/information/info_list.php?mode=inDMM&no=4526"
                           target="_blank"><img src="{{ _url_('web/img/index/index_image1_2.jpg') }}"/></a></li>
                    <li><a href="http://campus.domeggook.com/offline/view/no/470" target="_blank"><img
                                src="{{ _url_('web/img/index/index_image1.jpg') }}" alt=""/></a></li>
                    <li><a href="#"><img src="{{ _url_('web/img/index/index_image1_1.jpg') }}"/></a></li>
                    <li><a href="http://domeme.domeggook.com/main/information/info_list.php?mode=inDMM&no=4526"
                           target="_blank"><img src="{{ _url_('web/img/index/index_image1_2.jpg') }}"/></a></li>
                </ul>
                <div class="cb"></div>
            </div>


        </div>

    <!--
	<link rel="stylesheet" type="text/css" href="jquery_plan_item/plan_item.css') }}" />


	<script src="jquery_plan_item/plan_item.js') }}"></script>

	<script type="text/javascript">
			$(function(){

				$('.ybyin_item .plan_btn_box .btn_plan').html("무점포/무재고 오픈마켓창업")
				$('.ybyin_item .plan_btn_box .btn_plan:eq(1)').html("해외직배송 상품전")
				$('.ybyin_item .plan_btn_box .btn_plan:eq(2)').html("해외직배송상품판매준비사항")
				$('.ybyin_item .plan_btn_box .btn_plan:eq(3)').html("샤오미스마트웹캠")
				$('.ybyin_item .plan_btn_box .btn_plan:eq(4)').html("엑셀일괄주문")
				$('.ybyin_item .plan_btn_box .btn_plan:eq(5)').html("상품DB다 운로드")


			});



	</script>

<div class="ybyin_item">
	<ul class="plan_in_list">
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1.jpg') }}" alt="" /></li>
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1_1.jpg') }}" alt="" /></li>
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1_2.jpg') }}" alt="" /></li>
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1.jpg') }}" alt="" /></li>
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1_1.jpg') }}" alt="" /></li>
		<li class="plan_in_item"><img src="{{ _url_('web/img/index/index_image1_2.jpg') }}" alt="" /></li>
	</ul>
	<div class="plan_btn_box" value="0"></div>
</div>

-->


        <div class="cb"></div>


    </div>


    <!-- index_iframe.html start -->
    <script src="js_2/pageSwitch.js') }}"></script>
    <style type="text/css">

        .main_banner_contbox {
            position: relative;
            overflow: hidden;
            height: 330px;
            text-align: center;
            z-index: 1
        }

        #mb_back {
            position: absolute;
            width: 100%;
            height: 340px;
            overflow: hidden;
            z-index: 0
        }

        #mb_back .active {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0
        }

        .main_b {
            width: 100%;
            height: 340px
        }

        /*
#mb_imgs.visible{overflow:visible;}
#mb_imgs div{overflow:hidden;}
#mb_imgs img{width:100%;height:100%;display:block;}
*/


        #mb_navs {
            z-index: 10;
            position: absolute;
            width: 1200px;
            left: 50%;
            bottom: 0px;
            margin-left: -600px;
            background: url('img/main/mb_navs_bg.png');
        }

        #mb_navs a {
            float: left;
            display: inline-block;
            border: 1px solid #dfdfdf;

            text-align: center;
            width: 16.50%;
            height: 47px;

            font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
            font-size: 14px;
            color: #454545;
            line-height: 46px;
        }

        /*
#mb_navs .active{background:#151244;border:1px solid white;color:white; background-color: rgba( 21, 18, 68, 1 )}
*/
        #mb_navs .active {

            color: #f26820;
            font-weight: 600;


            border: 1px solid #dfdfdf;
            border-top: 3px solid #f27935;
            height: 45px;
            line-height: 42px;
        }


    </style>


    <div class="" style="width:100%;">

        <!-- ?ㅽ겕濡?諛곕꼫 ?쒖꽦??-->


        <div class="main_banner_contbox">
            <div id="mb_back">
                <div id="main_b_1" class="main_b"></div>
                <div id="main_b_2" class="main_b"></div>
                <div id="main_b_3" class="main_b"></div>
                <div id="main_b_4" class="main_b"></div>
                <div id="main_b_5" class="main_b"></div>
                <div id="main_b_6" class="main_b"></div>
            </div>
            <div id="mb_imgs">
                <div id="main_1"></div>
                <div id="main_2"></div>
                <div id="main_3"></div>
                <div id="main_4"></div>
                <div id="main_5"></div>
                <div id="main_6"></div>
            </div>
            <div id="mb_navs">
                <a href="javascript:;" class="active" id="main_mt_1"></a>
                <a href="javascript:;" id="main_mt_2"></a>
                <a href="javascript:;" id="main_mt_3"></a>
                <a href="javascript:;" id="main_mt_4"></a>
                <a href="javascript:;" id="main_mt_5"></a>
                <a href="javascript:;" id="main_mt_6"></a>
            </div>

            <!-- Wrapper for slides -->
            <div class="main_category_warp">
                <!-- <ul id="ul_category">
          <li class="category_li_out" data="1">臾멸뎄/?꾩꽌</li>
          <li class="category_li_out" data="2">怨듦뎄/?곗뾽?⑺뭹/?먮룞李?/li>
          <li class="category_li_out" data="3">而댄벂???붿???媛??/li>
          <li class="category_li_out" data="4">?ㅽ룷痢??덉졇?⑺뭹/痍⑤?</li>
          <li class="category_li_out" data="5">?⑥뀡?섎쪟/?≫솕/酉고떚</li>
          <li class="category_li_out" data="6">異쒖궛/?좎븘???λ궃媛?/li>
          <li class="category_li_out" data="7">?앺뭹/?앺솢/媛援?/li>
        </ul>  -->
            </div>
        </div>
    </div>
    <script>
        function shuffle(d) {
            for (var c = d.length - 1; c > 0; c--) {
                var b = Math.floor(Math.random() * (c + 1));
                var a = d[c];
                d[c] = d[b];
                d[b] = a;
            }
        }


        var banner = new Array();
        banner[0] = '<a href="javascript:vo" style="cursor:default;"><img src="{{ _url_('web/img/index/m9.png') }}" bcolor="#ff3c4e" alt=""  border="0" usemap="#Map1" title="상품DB다운로드" /></a>';
        banner[1] = '<a href="#"><img src="{{ _url_('web/img/index/m2.jpg') }}" bcolor="#5080ef" alt="" title="최저가상품DB다운로드" /></a>';
        banner[2] = '<a href="#"><img src="{{ _url_('web/img/index/m3.jpg') }}" bcolor="#d4eaf8" alt="" title="상품기획전DB다운로드" /></a>';
        banner[3] = '<a href="#"><img src="{{ _url_('web/img/index/m4.jpg') }}" bcolor="#b5cff2" alt="" title="인기상품DB다운로드" /></a>';
        banner[4] = '<a href="#"><img src="{{ _url_('web/img/index/m5.jpg') }}" bcolor="#dfecff" alt="" title="신규상품DB다운로드" /></a>';
        banner[5] = '<a href="#"><img src="{{ _url_('web/img/index/m8.png') }}" bcolor="#c6e7ff" alt="" title="도매매 전문셀러 FAQ 자료집" /></a>';

        shuffle(banner);

        $('#main_1').html(banner[0]);
        $('#main_2').html(banner[1]);
        $('#main_3').html(banner[2]);
        $('#main_4').html(banner[3]);
        $('#main_5').html(banner[4]);
        $('#main_6').html(banner[5]);

        $('#main_b_1').css('background-color', $('#main_1').find('a > img').attr('bcolor'));
        $('#main_b_2').css('background-color', $('#main_2').find('a > img').attr('bcolor'));
        $('#main_b_3').css('background-color', $('#main_3').find('a > img').attr('bcolor'));
        $('#main_b_4').css('background-color', $('#main_4').find('a > img').attr('bcolor'));
        $('#main_b_5').css('background-color', $('#main_5').find('a > img').attr('bcolor'));
        $('#main_b_6').css('background-color', $('#main_6').find('a > img').attr('bcolor'));


        $('#main_mt_1').text($('#main_1').find('a > img').attr('title'));
        $('#main_mt_2').text($('#main_2').find('a > img').attr('title'));
        $('#main_mt_3').text($('#main_3').find('a > img').attr('title'));
        $('#main_mt_4').text($('#main_4').find('a > img').attr('title'));
        $('#main_mt_5').text($('#main_5').find('a > img').attr('title'));
        $('#main_mt_6').text($('#main_6').find('a > img').attr('title'));
    </script>


    <map name="Map1">
        <area shape="rect" coords="154,223,354,263" href="http://campus.domeggook.com/dataroom/view/no/26"
              target="_blank">
        <area shape="rect" coords="364,222,564,262" href="#">
    </map>


    <script>
        /*
$(function(){
   var brandSlider = $('.brand-slider').pogoSlider({
        autoplay:true,
        autoplayTimeout: 4000,
        displayProgess: false,
        preserveTargetSize: true,
        targetWidth: 1150,
        targetHeight: 500,
        responsive: true,
        baseZindex:1000,
        generateButtons:false,
        navPosition:'Top',
      }).data('plugin_pogoSlider');
});

linear
ease
ease-in
ease-out
ease-in-out
bounce
*/

        var main_slider = new pageSwitch('mb_imgs', {
            duration: 1000,
            start: 0,
            direction: 1,
            loop: true,
            ease: 'ease-in-out',
            transition: 'scrollCoverReverse',
            arrowkey: true,
            autoplay: true
        });

        var main_b_slider = new pageSwitch('mb_back', {
            duration: 1000,
            start: 0,
            direction: 1,
            loop: true,
            ease: 'ease-in-out',
            transition: 'scrollCoverReverse',
            autoplay: true
        });

        var navs = document.getElementById('mb_navs').getElementsByTagName('a');
        main_slider.on('before', function (m, n) {
            navs[m].className = '';
            navs[n].className = 'active';
            main_b_slider.slide(n);
        });

        for (i = 0; i < navs.length; i++) {
            !function (i) {
                navs[i].onclick = function () {
                    main_slider.slide(i);
                }
            }(i);
        }
        /*
$(function(){
  $('.event_slide').bxSlider({
    slideWidth: 570,
    minSlides: 2,
    maxSlides: 2,
    moveSlides: 1,
    slideMargin: 10,
    auto: true,
    controls: false,
  });
});
*/
        var bradn_slider = new pageSwitch('br_imgs', {
            duration: 1000,
            start: 0,
            direction: 1,
            loop: true,
            ease: 'ease',
            transition: 'scrollX',
            mouse: true,
            mousewheel: true,
            arrowkey: true,
            autoplay: true
        });

        var navs2 = document.getElementById('br_navs').getElementsByTagName('a');
        bradn_slider.on('before', function (m, n) {
            navs2[m].className = '';
            navs2[n].className = 'active';
        });

        for (i = 0; i < navs2.length; i++) {
            !function (i) {
                navs2[i].onclick = function () {
                    bradn_slider.slide(i);
                }
            }(i);
        }
    </script>


    <!-- <iframe src="index_iframe.html" name="iframe" frameborder='0' scrolling='no' style="width:100%; height:329px; ">iFrame</iframe> -->

    <div class="container">


        <div class="main_cust_slider_baner hide">
            <strong>공지사항 <a href="#"><img src="{{ _url_('web/img/index/main_bu1.jpg') }}" class="vm" alt=""></a></strong>
            <div class="main_cust_slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <a href="#">[공지] 묶음배송상품DB다운로드 기능 오픈안내</a><span>2018-04-23</span></li>
                        <li>
                            <a href="#">[공지] 묶음배송상품DB다운로드 기능 오픈안내</a><span>2018-04-23</span></li>
                        <li>
                            <a href="#">[공지] 묶음배송상품DB다운로드 기능 오픈안내</a><span>2018-04-23</span></li>
                    </ul>
                    <div class="cb"></div>
                </div>
            </div>
            <div class="cb"></div>
        </div>


        <!-- 					9999999999				 -->

        <div class="cb t20"></div>
        <ul class="ufl main_baner2">
            <li>
                <a href="http://domeme.com/main/item/itemDbdownList.php"><img
                        src="{{ _url_('web/img/index/bane1_img1_off.jpg') }}" class="rollover" alt=""></a></li>
            <li class="l06">
                <a href="http://domeme.domeggook.com/main/item/itemEventFromOversea.php?market=supply"><img
                        src="{{ _url_('web/img/index/bane1_img2_off.jpg') }}" class="rollover" alt=""></a></li>
            <li class="l06">
                <a href="http://domeme.com/main/item/itemDbkeepList.php"><img
                        src="{{ _url_('web/img/index/bane1_img3_off.jpg') }}" class="rollover" alt=""></a></li>
            <li class="l06">
                <a href="http://domeme.domeggook.com/main/myBuy/order/my_orderExcelForm.php" target="_blank"><img
                        src="{{ _url_('web/img/index/bane1_img4_off.jpg') }}" class="rollover" alt=""></a></li>
            <li class="l06">
                <a href="http://domeme.com/main/item/itemPackDelivery.php"><img
                        src="{{ _url_('web/img/index/bane1_img5_off.jpg') }}" class="rollover" alt=""></a></li>
            <li class="l06">
                <a href="page_1.html"><img src="{{ _url_('web/img/index/bane1_img6_off.jpg') }}" class="rollover"
                                           alt=""></a></li>
        </ul>


        <div class="cb t20">
            <a href="page_image1.html" class="fl"><img src="{{ _url_('web/img/main/image5.jpg') }}" alt=""/></a>
            <a href="notice3.html" class="fl" style="padding-left:16px;"><img
                    src="{{ _url_('web/img/main/image6.png') }}" alt=""/></a>
            <div class="cb"></div>
        </div>
    <!--
				<div class="cb t20">
					<a href="market1.html" class="fl"><img src="{{ _url_('web/img/main/image2.jpg') }}" alt="" /></a>
					<a href="coupang1.html" class="fl l03"><img src="{{ _url_('web/img/main/image3.jpg') }}" alt="" /></a>
					<a href="notice1.html" class="fl l03"><img src="{{ _url_('web/img/main/image4.jpg') }}" alt="" /></a>
					<div class="cb"></div>
				</div>
				-->

        <ul class="ufl index4_cust1_brd hide">
            <li>
                <div class="index4_cust1">

                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image3.jpg') }}"/></a></li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image3.jpg') }}"/></a></li>
                        </ul>
                        <div class="cb"></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="index4_cust2">

                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image4.jpg') }}"/></a></li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image4.jpg') }}"/></a></li>
                        </ul>
                        <div class="cb"></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="index4_cust3">

                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image5.jpg') }}"/></a></li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/index_image5.jpg') }}"/></a></li>
                        </ul>
                        <div class="cb"></div>
                    </div>
                </div>
            </li>
        </ul>


        <div class="cb "></div>
    </div>
</div>
<!--

			<div style="background:#a4bdff;">
				<div class="container">
							<a href="http://domeme.domeggook.com/main/item/itemLowestPrice.php"><img src="{{ _url_('web/img/index/banner1.jpg') }}" alt="" /></a>

				</div>
			</div>

			 -->


<div class="cb"></div>


<!-- 컨텐츠 내용 start -->
<div class="container">


    <div class="cb t20"></div>


<!-- 					22222222222222222222222222


						<div class="main_cont_tit2 b">도매매's <strong style="color:#1a5fe5;">MD 기획전</strong></div>
						<div class="cb t10"></div>

							<ul class="ufl">
								<li><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn1.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn2.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn3.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn4.jpg') }}" alt="" /></a></li>
							</ul>
							<div class="cb t08"></div>
							<ul class="ufl">
								<li><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn5.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn6.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn7.jpg') }}" alt="" /></a></li>
								<li class="l08"><a href="javascript:vo();" onClick="document.getElementById('pup_images').style.display='block';body_bar1();"><img src="{{ _url_('web/img/index/bn8.jpg') }}" alt="" /></a></li>
							</ul>
							<div class="cb t40"></div>

			 -->


    <!-- 					main_2222222222				 -->


    <div class="brd1 fr" style="width:590px">
        <div style="background:#eeeeee; height:60px;">
            <div class="main_cont_tit1 l20 r20" style="line-height:60px;">
                <div class="fl">공지사항</div>
                <div class="fr"><a href="notice1.html"><img src="{{ _url_('web/img/main/btn2.jpg') }}" class="vm"
                                                            alt=""/></a></div>
                <div class="cb"></div>
            </div>
        </div>

        <div class="main_baner_tbl">

            <a href="notice1_v.html" class="main_baner_tbl_tit">[공지] 묶음배송상품DB다운로드 기능 오픈안내 &nbsp; <img
                    src="{{ _url_('web/img/main/bu1.jpg') }}" class="vm" alt=""/></a>
            <div class="main_baner_tbl_text">2018-04-23</div>

            <div class="main_baner_tbl_line1"></div>

            <a href="notice1_v.html" class="main_baner_tbl_tit">[공지] 묶음배송상품DB다운로드 기능 오픈안내 &nbsp; </a>
            <div class="main_baner_tbl_text">2018-04-23</div>

            <div class="main_baner_tbl_line1"></div>

            <a href="notice1_v.html" class="main_baner_tbl_tit">[공지] 묶음배송상품DB다운로드 기능 오픈안내 &nbsp; </a>
            <div class="main_baner_tbl_text">2018-04-23</div>
        </div>
    </div>


    <div class="brd1 fl" style="width:590px">
        <div style="background:#eeeeee; height:60px;">
            <div class="main_cont_tit1 l20 r20" style="line-height:60px;">
                <div class="fl">도매꾹도매매교육센터 <font style="color:#216fe3">이달의 교육 </font></div>
                <div class="fr"><a href="http://campus.domeggook.com/offline/view/no/581?referrer=L29mZmxpbmUvbGlzdA=="
                                   target="_blank"><img src="{{ _url_('web/img/main/btn2.jpg') }}" class="vm"
                                                        alt=""/></a></div>
                <div class="cb"></div>
            </div>
        </div>

        <div class="main_baner_tbl">

            <div class="fl t05"><img src="{{ _url_('web/img/index/bu_img.jpg') }}" alt=""></div>
            <div class="fl l10">
                <a href="http://campus.domeggook.com/offline/view/no/581?referrer=L29mZmxpbmUvbGlzdA==" target="_blank"
                   class="main_baner_tbl_tit">
                    <span class="main_baner_bu1">초급</span> [서울/여의도] [샵플링] 무재고 온라인창업... </a>
                <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후)</div>
            </div>
            <div class="cb "></div>
            <div class="main_baner_tbl_line1"></div>

            <div class="fl t05"><img src="{{ _url_('web/img/index/bu_img.jpg') }}" alt=""></div>
            <div class="fl l10">
                <a href="http://campus.domeggook.com/offline/view/no/581?referrer=L29mZmxpbmUvbGlzdA==" target="_blank"
                   class="main_baner_tbl_tit">
                    <span class="main_baner_bu1">초급</span> [서울/여의도] [샵플링] 무재고 온라인창업... </a>
                <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후)</div>
            </div>
            <div class="cb "></div>
            <div class="main_baner_tbl_line1"></div>

            <div class="fl t05"><img src="{{ _url_('web/img/index/bu_img.jpg') }}" alt=""></div>
            <div class="fl l10">
                <a href="http://campus.domeggook.com/offline/view/no/581?referrer=L29mZmxpbmUvbGlzdA==" target="_blank"
                   class="main_baner_tbl_tit">
                    <span class="main_baner_bu1">초급</span> [서울/여의도] [샵플링] 무재고 온라인창업... </a>
                <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후)</div>
            </div>
            <div class="cb "></div>
        </div>
    </div>


    <div class="main_baner_slider">
        <div class="flexslider">
            <ul class="slides">
                <li>

                    <!-- 1 -->
                    <div class="main_baner_tbl">

                        <div class="fl">
                            <div class="main_baner_bu1">초급</div>
                            <div class="main_baner_bu1" style="color:#4aa54e; border:1px solid #4aa54e">주말</div>
                            <div class="main_baner_bu1" style="color:#6499e0; border:1px solid #6499e0">무료</div>
                            <div class="main_baner_tbl_tit">[서울/여의도] [샵플링] 무재고 온라인창업, 도매매 전문셀러 스터디그룹 22기</div>
                            <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후) ㅣ
                                250,000원 ㅣ 여의도 국제금융로 6길 30, 도매꾹 본사
                            </div>
                        </div>
                        <div class="fr t20">
                            <button class="main_baner_btn1" type="submit" onClick="window.location.href='#1'">접수중
                            </button>
                        </div>
                        <div class="cb t20"></div>

                        <div class="cb main_baner_tbl_line1 t20"></div>


                        <div class="fl">
                            <div class="main_baner_bu1">초급</div>
                            <div class="main_baner_bu1" style="color:#4aa54e; border:1px solid #4aa54e">주말</div>
                            <div class="main_baner_bu1" style="color:#6499e0; border:1px solid #6499e0">무료</div>
                            <div class="main_baner_tbl_tit">[서울/여의도] [샵플링] 무재고 온라인창업, 도매매 전문셀러 스터디그룹 22기</div>
                            <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후) ㅣ
                                250,000원 ㅣ 여의도 국제금융로 6길 30, 도매꾹 본사
                            </div>
                        </div>
                        <div class="fr t20">
                            <button class="main_baner_btn1" type="submit" onClick="window.location.href='#1'">접수중
                            </button>
                        </div>

                        <div class="cb"></div>
                    </div>
                </li>
                <li>

                    <!-- 1 -->
                    <div class="main_baner_tbl">

                        <div class="fl">
                            <div class="main_baner_bu1">초급</div>
                            <div class="main_baner_bu1" style="color:#4aa54e; border:1px solid #4aa54e">주말</div>
                            <div class="main_baner_bu1" style="color:#6499e0; border:1px solid #6499e0">무료</div>
                            <div class="main_baner_tbl_tit">222222222222222222222222222222</div>
                            <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후) ㅣ
                                250,000원 ㅣ 여의도 국제금융로 6길 30, 도매꾹 본사
                            </div>
                        </div>
                        <div class="fr t20">
                            <button class="main_baner_btn1" type="submit" onClick="window.location.href='#1'">접수중
                            </button>
                        </div>
                        <div class="cb t20"></div>

                        <div class="cb main_baner_tbl_line1 t20"></div>


                        <div class="fl">
                            <div class="main_baner_bu1">초급</div>
                            <div class="main_baner_bu1" style="color:#4aa54e; border:1px solid #4aa54e">주말</div>
                            <div class="main_baner_bu1" style="color:#6499e0; border:1px solid #6499e0">무료</div>
                            <div class="main_baner_tbl_tit">[서울/여의도] [샵플링] 무재고 온라인창업, 도매매 전문셀러 스터디그룹 22기</div>
                            <div class="main_baner_tbl_text">2019-04-06(토) ~ 2019-04-27(토) ㅣ 14:00 ~ 17:00 (오후) ㅣ
                                250,000원 ㅣ 여의도 국제금융로 6길 30, 도매꾹 본사
                            </div>
                        </div>
                        <div class="fr t20">
                            <button class="main_baner_btn1" type="submit" onClick="window.location.href='#1'">접수중
                            </button>
                        </div>

                        <div class="cb"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="cb t20"></div>


    <div>
        <img src="{{ _url_('web/img/main/image4.png') }}" alt="" border="0" usemap="#Map"/>
        <map name="Map">
            <area shape="rect" coords="929,50,1090,88" href="#">
            <area shape="rect" coords="929,92,1090,130" href="#">
        </map>
    </div>


    <div style="background:url('img/haiwai/cont_j_img1.jpg') no-repeat#008d8f;" class="hide">
        <div class="fl"><a href="hai_sub1.html"><img src="{{ _url_('web/img/haiwai/cont_j_img1.png') }}" alt=""></a>
        </div>
        <div class="fr t35">
            <div class="haiwai_start1 fl" onClick="window.location.href='hai_sub1.html'" style="cursor:pointer;">
                <div class="fl brd1"><img src="{{ _url_('web/img/haiwai/cont_j_img2.jpg') }}" alt=""></div>
                <div class="fl l15 t05">
                    <span>6378193</span>
                    <strong>여성용<br>기모후드티</strong>
                    <span><font>5,000</font>원</span></div>
                <div class="cb"></div>
            </div>
            <div class="haiwai_start1 fl" onClick="window.location.href='hai_sub1.html'" style="cursor:pointer;">
                <div class="fl brd1"><img src="{{ _url_('web/img/haiwai/cont_j_img3.jpg') }}" alt=""></div>
                <div class="fl l15 t05">
                    <span>6378193</span>
                    <strong>딩링 스마트 <br>비디오 초인종 벨</strong>
                    <span><font>5,000</font>원</span></div>
                <div class="cb"></div>
            </div>
            <div class="cb"></div>
        </div>
        <div class="cb"></div>
    </div>

    <div class="cb ac t60">
        <a href="abc6.html"><img src="{{ _url_('web/img/main/cont_btn1_tit.jpg') }}" alt=""></a></div>
    <ul class="cb t30 ufl">
        <li><a href="abc3.html"><img src="{{ _url_('web/img/main/cont_btn1.png') }}" alt=""></a></li>
        <li class="l30"><a href="abc5.html"><img src="{{ _url_('web/img/main/cont_btn2.png') }}" alt=""></a></li>
        <li class="l30"><a href="abc1.html"><img src="{{ _url_('web/img/main/cont_btn3.png') }}" alt=""></a></li>
    </ul>

    <ul class="cb t20 ufl">
        <li><a href="abc2.html"><img src="{{ _url_('web/img/main/cont_btn4.png') }}" alt=""></a></li>
        <li class="l30"><a href="abc4.html"><img src="{{ _url_('web/img/main/cont_btn5.png') }}" alt=""></a></li>
        <li class="l30"><a href="abc1.html"><img src="{{ _url_('web/img/main/cont_btn6.png') }}" alt=""></a></li>
    </ul>

    <div class="cb ac t30 hide">
        <div class="t10">
            <button class="button_4" type="submit" onClick="window.location.href='#'">입점신청 및 상품등록안내</button>
        </div>
    </div>


    <div class="cb t50"></div>
</div>


<div style="background:#f4f4f4; padding-bottom:50px; ">
    <div class="container">


        <!-- 					11111111111111111111111				 -->


        <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit2.jpg') }}" alt=""></div>


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */
                aaaa = 1;//Math.floor((Math.random()*3)+0);

                $('.cont_tit2_slides').flexslider({
                    animation: "fade",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    controlNav: true,
                    direction: 'vertical',//设置滑动方向:左右horizontal或者上下vertical,需设置animation: "slide",默认horizontal
                    directionNav: false,//是否显示左右控制按钮
                    controlNav: false,//是否显示底部切换按钮
                    slideshowSpeed: 10000000000,
                    startAt: aaaa,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="cont_tit2_slides">
            <div class="flexslider">
                <ul class="slides">
                    <li>


                        <!-- oooooooooooooooooooooooooo -->
                        <div class="fl">
                            <div class="main_cont_bane2" style="margin-left:0px">

                                <!-- 오버부분 -->
                                <div class="main_cont_bane2_over main_cont_bane2_over_2"
                                     onClick="javascript:location.href='sub3_7_v.html'">
                                    <div class="ac t70">
                                        <a href="#"><img src="{{ _url_('web/img/sub/more1.png') }}"
                                                         alt="더보기"/></a></div>
                                </div>
                                <!-- //오버부분 -->
                                <div class="bg_7">
                                    <div class="txt10">#우정반지 # 태블릿</div>
                                    <div class="txt40">졸업선물 기획전</div>
                                </div>

                                <div class="bane_brd1">
                                    <img src="{{ _url_('web/img/index/c_img1.jpg') }}" alt=""/></div>
                            </div>

                            <div class="main_cont_bane3 cb t35" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img8.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>

                            <div class="cb"></div>

                            <div class="main_cont_bane3" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img8.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>
                        </div>


                        <div class="fl" style="margin-left:29px">
                            <div class="main_cont_bane2" style="margin-left:0px">

                                <!-- 오버부분 -->
                                <div class="main_cont_bane2_over main_cont_bane2_over_2"
                                     onClick="javascript:location.href='sub3_7_v.html'">
                                    <div class="ac t70">
                                        <a href="#"><img src="{{ _url_('web/img/sub/more1.png') }}"
                                                         alt="더보기"/></a></div>
                                </div>
                                <!-- //오버부분 -->
                                <div class="bg_7">
                                    <div class="txt10">#신학기 준비</div>
                                    <div class="txt40">학용품 기획전</div>
                                </div>

                                <div class="bane_brd1">
                                    <img src="{{ _url_('web/img/index/c_img2.jpg') }}" alt=""/></div>
                            </div>

                            <div class="main_cont_bane3 cb t35" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img8.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>

                            <div class="cb"></div>

                            <div class="main_cont_bane3" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img8.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>
                        </div>


                        <div class="fl" style="margin-left:28px">
                            <div class="main_cont_bane2" style="margin-left:0px">

                                <!-- 오버부분 -->
                                <div class="main_cont_bane2_over main_cont_bane2_over_2"
                                     onClick="javascript:location.href='sub3_7_v.html'">
                                    <div class="ac t70">
                                        <a href="#"><img src="{{ _url_('web/img/sub/more1.png') }}"
                                                         alt="더보기"/></a></div>
                                </div>
                                <!-- //오버부분 -->
                                <div class="bg_7">
                                    <div class="txt10">#캠핑 #등산 #낚시</div>
                                    <div class="txt40">봄맞이 야외활동 기획전</div>
                                </div>

                                <div class="bane_brd1">
                                    <img src="{{ _url_('web/img/index/c_img3.jpg') }}" alt=""/></div>
                            </div>

                            <div class="main_cont_bane3 cb t35" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img4.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>

                            <div class="cb"></div>

                            <div class="main_cont_bane3" style="background:#fff;">
                                <div class="l10 r10">
                                    <div class="bane_brd1 fl">
                                        <img src="{{ _url_('web/img/sub/c_img4.jpg') }}" alt=""/></div>
                                    <div class="fl">
                                        <div class="l20">
                                            <div class="main_cont_bu1">국내</div>
                                            <div class="main_cont_bu2">해외</div>
                                            <div class="main_cont_text1 b t10">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...
                                            </div>
                                            <div class="main_cont_text1 t05"><strong>1,150</strong> 원</div>
                                        </div>
                                    </div>
                                    <div class="fr">
                                        <button class="main_cont_btn1_click" type="submit"
                                                style="width:90px; height:18px; line-height:18px; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#1'">상품DB담기
                                        </button>
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; width:90px; height:18px; line-height:18px; color:#279a3e; font-size:12px; font-weight:normal"
                                                onClick="window.location.href='#'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb t20"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="cb t30">
            <a href="hot30.html" class="fl"><img src="{{ _url_('web/img/main/image2.png') }}" alt=""></a>
            <a href="hot30.html" class="fr"><img src="{{ _url_('web/img/main/image3.png') }}" alt=""></a>
            <div class="cb"></div>
        </div>


        <!-- 					11111111111111111111111				 -->


        <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit3.jpg') }}" alt=""></div>


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */
                aaaa = Math.floor((Math.random() * 10) + 0);

                $('.cont_tit3_slides').flexslider({
                    animation: "fade",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    controlNav: true,
                    direction: 'vertical',//设置滑动方向:左右horizontal或者上下vertical,需设置animation: "slide",默认horizontal
                    directionNav: false,//是否显示左右控制按钮
                    controlNav: false,//是否显示底部切换按钮
                    slideshowSpeed: 10000000000000,
                    startAt: aaaa,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="cont_tit3_slides">
            <div class="flexslider">
                <ul class="slides">
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_1.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image2.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image4.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image5.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image6.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_2.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image2.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image13.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image4.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image11.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_4.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image23.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image14.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image9.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image10.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_2.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image20.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image19.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image18.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image10.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image11.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_2.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image19.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image5.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image9.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_3.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image9.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image15.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image23.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image2.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_1.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image9.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image5.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image23.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image2.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_3.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image6.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image5.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image2.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_4.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image23.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image11.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image20.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image11.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image12.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image15.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_5.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image15.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image14.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image20.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image11.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image19.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image15.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <div class="fl brd1">
                            <img src="{{ _url_('web/img/index/e_image1_5.jpg') }}" alt=""></div>
                        <div class="fl">
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image22.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image13.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image17.jpg') }}" alt=""></li>
                            </ul>
                            <div class="cb"></div>
                            <ul class="brd1_ul ufl">
                                <li><img src="{{ _url_('web/img/index/e_image3.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image8.jpg') }}" alt=""></li>
                                <li><img src="{{ _url_('web/img/index/e_image7.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </li>
                </ul>
                <div class="cb"></div>
            </div>
        </div>


        <!-- 					11111111111111111111111				 -->
        <div class="cb t60"><a href="mtv.html"><img src="{{ _url_('web/img/index/pc.png') }}" alt=""></a></div>

        <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit4.jpg') }}" alt=""></div>


        <script type="text/javascript">
            $(function () {
                /* 메인 큰이미지 top_slider 이미지 */
                $('.main_btn_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 1000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_btn_slides">
            <div class="flexslider">
                <ul class="slides">
                    <li>

                        <ul class="ufl">
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn1.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn2.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn3.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn4.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn5.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn6.jpg') }}" alt=""/></a>
                            </li>
                        </ul>
                        <div class="cb"></div>
                    </li>
                    <li>

                        <ul class="ufl">
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn1.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn2.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn3.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn4.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn5.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#"><img src="{{ _url_('web/img/index/main_btn6.jpg') }}" alt=""/></a>
                            </li>
                        </ul>
                        <div class="cb"></div>
                    </li>
                </ul>
                <div class="cb"></div>
            </div>
        </div>
    </div>

</div>


<div class="container">

    <div class="cb"></div>

    <!-- 					main_table 1111111111				 -->


    <div class="t60 b30 ac"><a href="top_100.html"><img src="{{ _url_('web/img/index/cont_tit1.jpg') }}" alt=""></a>
    </div>


    <ul class="ufl index_btn_tab">
        <li id="b1" class="tab_on"><a href="javascript:vo()"><img
                    src="{{ _url_('web/img/index/cont_btn1_on.jpg') }}" id="m1" alt=""><br/>전체</a></li>
        <li id="b2" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn2_off.jpg') }}"
                                                            id="m2" alt=""><br/>패션잡화/화장품</a></li>
        <li id="b3" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn3_off.jpg') }}"
                                                            id="m3" alt=""><br/>의류/언더웨어</a></li>
        <li id="b4" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn4_off.jpg') }}"
                                                            id="m4" alt=""><br/>출산/유아동/완구</a></li>
        <li id="b5" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn5_off.jpg') }}"
                                                            id="m5" alt=""><br/>가구/생활/취미</a></li>
        <li id="b6" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn6_off.jpg') }}"
                                                            id="m6" alt=""><br/>스포츠/건강/식품</a></li>
        <li id="b7" class=""><a href="javascript:vo()"><img src="{{ _url_('web/img/index/cont_btn7_off.jpg') }}"
                                                            id="m7" alt=""><br/>가전/휴대폰/산업</a></li>
    </ul>

    <div class="cb t30"></div>

    <div id="sub1">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>
        <style type="text/css">
            .main_cont_bane_slides .main_cont_bane1 .bane_brd1 {
                border: 0px;
            }


        </style>

        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">
                    <li>


                        <div class="main_cont_bane1 main_cont_bane_n1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1 main_cont_bane_n1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub2" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1 main_cont_bane_n1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>


                        <div class="main_cont_bane1 main_cont_bane_n1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1 main_cont_bane_n1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub3" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub4" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub5" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub6" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sub7" class="hide">

        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <script type="text/javascript">
            $(function () {
                /* 메인 cont_tit3_slides 이미지 */

                $('.main_cont_bane_slides').flexslider({
                    animation: "slide",//fade slide
                    controlNav: true,
                    //   animationLoop: false,
                    slideshow: true,
                    slideshowSpeed: 100000000000000000,
                    //  sync: "#carousel",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });


            });
        </script>


        <div class="main_cont_bane_slides">
            <div class="flexslider">
                <ul class="slides">

                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>


                        <div class="main_cont_bane1" style="margin-left:0px;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu1.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image1.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu2.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image2.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <div class="main_cont_buimg"><img src="{{ _url_('web/img/main/bu3.png') }}"
                                                                  alt=""></div>
                                <img src="{{ _url_('web/img/index/cont_image3.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>


                        <div class="main_cont_bane1"
                             style="margin-left:29px; padding-left:30px; border-left:1px solid #dfdfdf;">
                            <!-- 오버부분 -->
                            <div class="main_cont_bane1_over main_cont_bane1_over_size2"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t100">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a></div>
                            </div>
                            <!-- //오버부분 -->

                            <div class="bane_brd1">
                                <img src="{{ _url_('web/img/index/cont_image4.jpg') }}" alt=""/></div>
                            <div class="bane_brd2">
                                <div class="l10 t10">
                                    <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                                    <div class="main_cont_text1 t10 b10"><strong>1,150</strong> 원</div>

                                    <div class="main_cont_bu3">최저가확인</div>
                                </div>

                                <div class="t05">
                                    <button class="main_cont_btn1_click" type="submit"
                                            onClick="window.location.href='#1'"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu1.png') }}" class="vm"
                                            alt=""> 상품DB담기
                                    </button>
                                </div>

                                <div class="">
                                    <button class="main_cont_btn1 fl" type="submit"
                                            style="background:#fff; color:#424242; width:50%;"><img
                                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm"
                                            alt=""> 이미지다운
                                    </button>
                                    <div class="fl"
                                         style="background:url(img/main/line1.jpg) left center no-repeat;width:49.5%;padding-left:1px;">
                                        <button class="main_cont_btn1" type="submit"
                                                style="background:#fff; color:#ff643d;"
                                                onClick="window.location.href='http://domeggook.com/'">구매하기
                                        </button>
                                    </div>
                                    <div class="cb "></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="cb"></div>


    <!-- 					최저가확인상품관				 -->

    <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit8.jpg') }}" alt="최저가확인상품관"/></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>

    <div class="cb"></div>


    <!-- 					B2B 추천상품				 -->

    <div class="t60 b30 ac"><a href="top_1000.html"><img src="{{ _url_('web/img/index/b2b2.png') }}"
                                                         alt="B2B 추천상품"/></a></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>

    <div class="cb"></div>


    <!-- 					main_table 1111111111				 -->


    <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit5.png') }}" alt=""></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="cb t25"></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="cb"></div>

    <!-- 					main_table 1111111111				 -->


    <div class="t60 b30 ac"><img src="{{ _url_('web/img/index/cont_tit6.png') }}" alt=""></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="cb t25"></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="cb"></div>

    <!-- 					main_table 1111111111				 -->


    <div class="t60 b30 ac"><a href="#"><img src="{{ _url_('web/img/index/cont_tit7.jpg') }}" alt=""></a></div>


    <div class="main_cont_bane1" style="margin-left:0px">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_2.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_3.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_4.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_5.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>


    <div class="main_cont_bane1">
        <!-- 오버부분 -->
        <div class="main_cont_bane_n1">
            <div class="main_cont_bane1_over"
                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                <div class="ac t100">
                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                     alt="상품정보보기"/></a></div>
            </div>
            <!-- //오버부분 -->

            <div class="bane_brd1">
                <img src="{{ _url_('web/img/index/image3_6.jpg') }}" alt=""/></div>
        </div>
        <div class="bane_brd2">
            <div class="l10 t10">
                <div class="main_cont_text1 b">[마마베리]거실용 퀼트 실내화 <br/>21가지 디자인 거실화...</div>
                <div class="main_cont_text1 fl"><strong>1,150</strong> 원</div>
                <div class="fr t05">
                    <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm" alt="">
                        빠른배송
                    </div>
                </div>
                <div class="cb t10">

                    <div class="main_cont_bu1">국내</div>
                    <div class="main_cont_bu2">해외</div>
                    <div class="main_cont_bu3">최저가확인</div>
                    <div class="main_cont_bu4">옵션가</div>
                </div>

                <div class="t10">
                    <div class="main_cont_text3 r10 fl ">나이스몰(nicemall)</div>
                    <div class="main_cont_text3 r10 fr "><strong>1</strong>등급</div>
                    <div class="cb"></div>
                </div>
            </div>

            <div class="t10">
                <button class="main_cont_btn1 fl" type="submit" style="background:#fff; color:#424242; width:50%;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
                <div class="fl" style="width:50%;">
                    <button class="main_cont_btn4" type="submit" onClick="window.location.href='http://domeggook.com/'">
                        구매하기
                    </button>
                </div>
                <div class="cb line1"></div>
            </div>
        </div>
    </div>
</div>


<div class="cb t100"></div>
<div class="line1"></div>

<div class="container">


    <div class="cb t30"></div>
    <!-- 					444444444444444444				 -->


    <div class="fl">

        <div class="main_cont_tit1">도매매 <img src="{{ _url_('web/img/index/main_cont_tit_img3.jpg') }}" class="vm"
                                             alt=""/></div>
        <div class=" cb t10"></div>

        <div class="index4_1_bg1 ac" onClick="popup('index4_1_pup.html', '1120','630');return false"
             style="cursor :	pointer;">
            <strong class="t10">우수 전문셀러 인터뷰</strong>
            <span>맨손으로 시작해서 월 5,000만원까지! <br/>
									우수전문셀러가 도매매를 선택한 이유를 들어보세요									</span></div>
    </div>


    <div class="fr" style="width:588px">

        <div class="main_cont_tit1 fl">도매매 <font style="color:#216fe3">가이드 </font></div>

        <div class="cb t03"></div>
        <div class="line1 cb t10"></div>
        <div class="s_cont_text8 b">B2B 배송대행 도매매 이렇게 활용해보세요</div>

        <div class="main_baner3 t10">
            <a href="http://domeme.domeggook.com/binary/Doc/seller_ProductRegistrationMannual2.pdf"
               style="border-color:#5e9b1d; color:#5e9b1d">판매자용 상품등록 매뉴얼</a>
            <a href="http://domeme.domeggook.com/binary/Doc/seller_ProductSellingMannual.pdf"
               style="border-color:#2e6fd5; color:#2e6fd5">판매자용 상품판매 매뉴얼</a>
            <a href="http://domeme.domeggook.com/binary/Doc/buyer_ProductBuyingMannual.pdf"
               style="border-color:#e9af00; color:#e9af00">구매자용 상품판매 매뉴얼</a>
            <a href="http://domemedb.domeggook.com/index/notice/view.php?no=30"
               style="border-color:#009242; color:#009242" target="_blank">상품DB검색 동영상가이드</a>
            <a href="http://domemedb.domeggook.com/index/notice/view.php?no=31" style="" target="_blank">엑셀다운로드
                동영상가이드</a>
            <a href="http://domemedb.domeggook.com/index/notice/view.php?no=32" target="_blank">엑셀일괄주문 동영상가이드</a></div>
    </div>

    <div class="cb"></div>
</div>
<div class="cb t50"></div>


<!-- // 컨텐츠 내용 end -->


<!-- containers 내용 -->
<div id="lDomemeFooter">

    <!-- 풋터의 회색 영역 내 메뉴 관련 -->
    <div id="footerMenu">
        <div class="wrap">
            <ul id="footerMenuBar">
                <li><a href="#" title="회사소개">회사소개</a></li>
                <li><a href="#" title="이용약관">이용약관</a></li>
                <li><a href="#" title="개인정보처리방침">개인정보처리방침</a></li>
                <li><a href="#" title="책임한계 및 법적고시">책임한계 및 법적고시</a></li>
                <li><a href="#" title="이메일 무단수집거부">이메일 무단수집거부</a></li>
                <li><a href="#" title="사회공헌">사회공헌</a></li>
                <li><a href="#" title="제휴문의">제휴문의</a></li>
            </ul>
            <div id="familySite" class="dropdownSingle">
                <span>Family site</span>
                <ul>
                    <li><a href="http://domeggook.com/" title="도매꾹" target="_blank">도매꾹</a></li>
                    <li><a href="http://naggama.com/" title="나까마" target="_blank">나까마</a></li>
                    <li><a href="http://campus.domeggook.com/" title="교육센터" target="_blank">교육센터</a></li>
                    <li><a href="https://eggdome.ggook.com/" title="교육센터" target="_blank">에그돔</a></li>
                </ul>
            </div>

            <div class="cb"></div>


            <div class="fl">
                <div class="main_cont6_text1 b">고객센터 / 전자금융거래분쟁담당&nbsp;&nbsp;<a title="신고/의견보내기" href="#"><img
                            src="{{ _url_('web/img/top/img_domeme_sendReport.png') }}" title="신고/의견보내기"
                            alt="신고/의견보내기"/></a></div>

                <ul class="main_cont6_ul t05">
                    <li>
								<span>평일 9시~18시 (12~13시 제외) | 토요일 9시~12시<br/>
								Tel : <b>1588-0628</b>&nbsp;&nbsp;&nbsp;Fax : 02-6209-7628<br/>
								해외일반전화 : +82-2-2071-0700<br/>
								Mail : <a href="mailto:domeggookinfo@ggook.com" target="_top" title="이메일 고객센터">domeggookinfo@ggook.com</a></span>
                    </li>
                </ul>


            </div>


            <div class="fl l70">
                <div class="main_cont6_text1 b">Global Customer Service</div>

                <ul class="main_cont6_ul t05">
                    <li><b><img src="{{ _url_('web/img/index/image8.jpg') }}" class="vm" alt=""/></b> <font>English</font>
                        <span>+82-2-2071-0753</span></li>
                    <li><b><img src="{{ _url_('web/img/index/image9.jpg') }}" class="vm" alt=""/></b> <font>Chinese(中文）</font>
                        <span>(中国) +86-433-2527667 (한국) 02-2071-0668</span></li>
                    <li style="padding-left:160px;"><span><img src="{{ _url_('web/img/index/image11.jpg') }}"
                                                               class="vm" alt=""/> gngnetwork</span></li>
                    <li>
                        <b><img src="{{ _url_('web/img/index/image10.jpg') }}" class="vm" alt=""/></b>
                        <font>Vietnamese(Tiếng Việt) </font> <span>(Việt Nam)+84-243-2011546, (한국) 02-2071-0682</span>
                    </li>
                </ul>


            </div>


            <div class="fl l70">
                <div class="main_cont6_text1 b">(주)지앤지커머스</div>

                <ul class="main_cont6_ul t05">
                    <li>
								<span>서울시 영등포구 국제금융로 6길 30, 5층 (여의도동, 백상빌딩)<br/>
								대표이사: 모영일&nbsp;&nbsp;&nbsp;<br/>
								사업자번호: 107-86-28206<br/>
								통신판매업번호: 2002-00645&nbsp;&nbsp;<a title="사업자정보확인" onClick="javascript:;"><img
                                            src="{{ _url_('web/img/top/img_domeme_conInfoChk.png') }}"
                                            title="사업자정보확인" alt="사업자정보확인"/></a></span>
                    </li>
                </ul>


            </div>


            <div class="cb"></div>
        </div>
    </div>


    <script type="text/javascript">
        $(function () {
            /* 메인 큰이미지 top_slider 이미지 */
            $('.bottom_btn_slides').flexslider({
                animation: "slide",//fade slide
                controlNav: true,
                //   animationLoop: false,
                slideshow: true,
                slideshowSpeed: 8000,
                //  sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });


        });
    </script>


    <div class="container">

        <div>
            <a href="https://isms.kisa.or.kr/main/ispims/issue/?certificationMode=list&crtfYear=2021&searchCondition=2&searchKeyword=%EB%8F%84%EB%A7%A4%EB%A7%A4"
               target="_blank">
                <p class="fl"><img src="https://cdn1.domeggook.com/image/common/footer/img_logoISMS.png') }}"
                                   width="100px;" height="100px;" alt=""/></p>
                <div class="fl l10 t20">
                    <div class="main_cont6_text1 b">ISMS 인증 사업자</div>
                    <ul class="main_cont6_ul t05">
                        <li>
                            <span>[인증범위] 온라인 쇼핑몰 및 교육센터 운영 <br/>[유효기간] 2021.10.20~2024.10.19</span>
                        </li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="fl l50">

            <div class="bottom_btn_slides">
                <div class="c">
                    <ul class="slides">
                        <li>

                            <ul class="ufl">
                                <li><a href="#"><img src="{{ _url_('web/img/top/img1.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img2.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img3.png') }}" alt=""/></a></li>
                            </ul>
                            <div class="cb"></div>
                        </li>
                        <li>

                            <ul class="ufl">
                                <li><a href="#"><img src="{{ _url_('web/img/top/img5.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img6.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img7.png') }}" alt=""/></a></li>
                            </ul>
                            <div class="cb"></div>
                        </li>
                        <li>

                            <ul class="ufl">
                                <li><a href="#"><img src="{{ _url_('web/img/top/img9.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img10.png') }}" alt=""/></a></li>
                                <li><a href="#"><img src="{{ _url_('web/img/top/img11.png') }}" alt=""/></a></li>
                            </ul>
                            <div class="cb"></div>
                        </li>
                    </ul>
                    <div class="cb"></div>
                </div>
            </div>

        </div>
        <div class="cb"></div>

    </div>


    <!-- 카피라이트 표시 영역 -->
    <div id="footer">
        <div class="container">
            <div id="totop" style="display:none1;">
                <a href="javascript:;" class="btn_top"><img src="{{ _url_('web/img/menu/btm_img4.jpg') }}"
                                                            alt=""></a>
                <div class="t05"></div>
                <a href="javascript:;" class="sns_on"><img src="{{ _url_('web/img/menu/btm_img5.png') }}" alt=""></a>
                <div class="sns_bg">
                    <div class="sns_in">
                        <ul class="ico">
                            <li>
                                <a href="#"><img src="{{ _url_('web/img/index/gx_img1.jpg') }}" alt=""/>
                                    <div class="t05">페이스북</div>
                                </a></li>
                            <li class="l10">
                                <a href="#"><img src="{{ _url_('web/img/index/gx_img2.jpg') }}" alt=""/>
                                    <div class="t05">트위터</div>
                                </a></li>
                            <li class="l10">
                                <a href="#"><img src="{{ _url_('web/img/index/gx_img3.jpg') }}" alt=""/>
                                    <div class="t05">밴드</div>
                                </a></li>
                            <li class="l10">
                                <a href="#"><img src="{{ _url_('web/img/index/gx_img4.jpg') }}" alt=""/>
                                    <div class="t05">네이버</div>
                                </a></li>
                            <li class="l10">
                                <a href="#"><img src="{{ _url_('web/img/index/gx_img5.jpg') }}" alt=""/>
                                    <div class="t05">카카오톡</div>
                                </a></li>
                        </ul>
                        <div class="cb t15"></div>
                        <div class="sns_input">
                            <input type="text" name="" value=""/>
                            <button class="button13" style=" width:50px; padding:0px; background:#aaa;">복사</button>
                        </div>
                    </div>
                    <div class="tit01 ac sns_off"><a href="javascript:vo(0)">닫기</a></div>
                </div>
            </div>


            <div class="address">
                (주) 지앤지커머스의 사전 서면 동의 없이 도매매사이트의 일체의 정보, 콘텐츠 및 UI등을 상업적 목적으로 전재, 전송, 스크래핑 등 무단 사용할 수 없습니다<br/>
                (주) 지앤지커머스는 통신판매중개자로 오픈마켓 도매매의 거래당사자가 아니며, 판매자가 등록한 상품정보 및 거래에 대해 도매매는 일체 책임을 지지 않습니다<br/>
                Copyright © 2001-2019 domeme.com / G&G Commerce, Ltd. All rights reserved.
            </div>
            <div class="fr"><img src="{{ _url_('web/img/menu/footer_logo.jpg') }}" alt=""/></div>
            <div class="cb"></div>
        </div>
    </div>
</div>


</div>
<!-- // 내용end -->

<style type="text/css">

    #pup_topen {
        position: fixed;
        z-index: 200;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        display: none1;
        z-index: 10000;

        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
        font-size: 13px;
        color: #8c8c8c;
        line-height: 25px;
    }

    #pup_topen .container {
        background: #fff;
        padding: 0px;
        width: 800px;
        margin-top: 5%;
        z-index: 1;

    }

    #pup_topen .scroll_bar {
        position: relative;
        height: 700px;
        overflow-x: hidden;
        overflow-y: scroll;
        padding-right: 20px;
    }

    .pup_close_box {
        position: relative;
        background: black;
        height: 50px;
        width: 100%;
    }

    .pup_close_box span {
        padding: 0px 5px;
        color: #FFFFFF;
        background: #383838;
        float: right;
        margin-right: 10px;
        margin-top: 10px;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        cursor: pointer;
    }


    a.pup_topen_btn1 {
        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
        font-size: 20px;
        color: #fff;
        line-height: 60px;
        height: 60px;
        width: 260px;
        background: #0d5ea8;
        display: inline-block;
        border: 1px solid #0d5ea8;
    }

    .pup_topen_btn2 {
        font-family: 'Malgun Gothic', '맑은 고딕', 'AppleGothic', 'Sans-serif';
        font-size: 20px;
        color: #252525;
        line-height: 60px;
        height: 60px;
        width: 260px;
        background: #fff;
        display: inline-block;
        border: 1px solid #dbdbdb;
    }
</style>
<script type="text/javascript">
    <!--
    function setCookie(name, value, expiredays) {
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
    }


    function getCookie(name) {
        var nameOfCookie = name + "=";
        var x = 0;
        while (x <= document.cookie.length) {
            var y = (x + nameOfCookie.length);
            if (document.cookie.substring(x, y) == nameOfCookie) {
                if ((endOfCookie = document.cookie.indexOf(";", y)) == -1) endOfCookie = document.cookie.length;
                return unescape(document.cookie.substring(y, endOfCookie));
            }
            x = document.cookie.indexOf(" ", x) + 1;
            if (x == 0) break;
        }
        return "";
    }

    //-->
</script>

<script type="text/javascript">
    $(function () {
        $('.pup_close').click(function () {
            $('#pup_topen').hide();
            $('#pup_box').hide();
        });

        $('.pup_close_3').click(function () {
            setCookie('layer01', "done", 3);
            $('#pup_topen').hide();
            $('#pup_box').hide();
        });

        if (getCookie('layer01') == "done") {
            $('#pup_topen').hide();
            $('#pup_box').hide();
        }
    })
</script>


<!--  이미지 파업 -->
<div id="pup_topen" style="display:none;">

    <div class="quan_bg" onClick="document.getElementById('pup_topen').style.display='none';body_bar2();"></div>

    <div class="container">
        <div class="scroll_bar">
            <div class="close t40"><a href="javascript:vo();"
                                      onClick="document.getElementById('pup_topen').style.display='none';body_bar2();"><img
                        src="{{ _url_('web/img/index_pup/top_guan.png') }}" alt=""></a></div>

            <div><img src="{{ _url_('web/img/index_pup/topen.jpg') }}" alt=""/></div>
            <div><img src="{{ _url_('web/img/index_pup/topen2.jpg') }}" alt=""/></div>

            <div class="t50 ac cb">
                <a href="index_pup.html" target="_blank" class="pup_topen_btn1"
                   onClick="popup(this.href, '800','900','yes');return false">설문조사 참여하기</a>
                &nbsp;
                <button class="pup_topen_btn2 vt" type="submit"
                        onClick="window.open('http://devdomeme2.domeggook.com/');">구 도매매 둘러보기
                </button>
            </div>
            <div class="t50"></div>
        </div>
        <div class="pup_close_box">
            <span class="pup_close">닫기</span>
            <span class="pup_close_3">3일간 보이지 않기</span></div>
    </div>

</div>


<!--  pup_images_alert 파업 -->
<div id="pup_images_alert">

    <div class="quan_bg" onClick="document.getElementById('pup_images').style.display='none'; body_bar2();"></div>

    <div class="container">
        <div class="scroll_bar1 r20">


            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('pup_images').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>
            <div class="cb t20"></div>

            <div class="pup_images_alert_tit ac"> 상품DB담기</div>


            <div class="t30 ac">선택한 상품을 상품DB보관함에 담았습니다 <br/>
                상품DB보관함으로 이동하겠습니까?
            </div>

            <div class="t30 ac">
                <button class="button13" type="submit" onClick="window.location.href='sub3_6.html'"
                        style="width:240px; height:43px;">상품DB보관함으로 이동
                </button>

                <div class="t10">
                    <button class="button14" type="submit"
                            onClick="document.getElementById('pup_images_alert').style.display='none';"
                            style="width:240px; height:43px; background:#fff">이 페이지에 머무르기
                    </button>
                </div>
            </div>

            <div class="t40"></div>
        </div>
    </div>

</div>


<!--  이미지 파업 -->
<div id="pup_images">

    <div class="quan_bg" onClick="document.getElementById('pup_images').style.display='none'; body_bar2();"></div>

    <div class="container">
        <div class="scroll_bar">
            <div class="fl pup_images_tit b">
                샤오미로봇청소기 2세대(물걸래) 한정초특가
            </div>
            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('pup_images').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>
            <div class="cb t20"></div>
            <div class="fl">
                <img src="{{ _url_('web/img/main/img2.jpg') }}" alt="">
                <div class="t15 ac">
                    <script type="text/javascript">
                        $(function () {

                            $(".pup_btn1_on").click(function () {

                                if ($(this).hasClass('on')) {
                                    $(this).removeClass('on');
                                    $("> img", this).attr("src", "img/pup/bu2.jpg') }}");

                                } else {
                                    $(this).addClass('on');
                                    $("> img", this).attr("src", "img/pup/bu2_on.jpg') }}");


                                }
                                ;

                            })
                        });
                    </script>
                    <button class="main_cont_btn1 pup_btn1_on" type="button"
                            style="border:1px solid #cccccc; background:#fff; color:#424242;width:130px; display:inline-block"
                            onClick="supplyImgDownload(9466325)"><img src="{{ _url_('web/img/pup/bu2.jpg') }}"
                                                                      class="t08" alt=""> 관심상품등록
                    </button>
                     
                    <button class="main_cont_btn1" type="button"
                            style="border:1px solid #cccccc; background:#fff; color:#424242;width:114px; display:inline-block"
                            onClick="supplyImgDownload(9466325)"><img
                            src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                    </button>
                </div>
            </div>

            <div class="fr" style="width:440px">
                <div class="pup_right_border">
                    <strong class="fl" style="color:#505050">차이나꾹(chinaggook)</strong>
                    <div class="fr">
                        상품번호 :
                        <strong style="color:#505050">01234567</strong></div>
                    <div class="cb"></div>
                </div>

                <div class=""></div>

                <div class="brd1 hide" style="background:#f8f8f8; padding:10px 20px">
                    <ul class="ufl">
                        <li style="width:100px"><strong>배송대행단가</strong></li>
                        <li class="hide">* 주문시 전문셀러의 이름으로 배송을 대행합니다</li>
                    </ul>
                    <div class="cb"></div>
                </div>


                <ul class="cb ufl">
                    <li class="">
                        <strong>배송대행단가</strong>&nbsp;&nbsp;
                        <strong style="display:inline-block; padding-top:20px;"><font
                                style="font-size:26px; color:#000">438,900</font>원</strong></li>
                    <li class="t20 l20">
                        <div class="main_cont_bu3">최저가확인</div>
                    </li>
                    <li class="hide">
                        <div style="font-size:14px;">최저판매가 (소매판매 최저가격) 444,500원/개 <br/>
                            추천판매가 (소매판매 권장가격) <span class="red b">450,000</span>원/개
                        </div>
                    </li>
                </ul>
                <div class="cb t20"></div>


                <table class="table_11">
                    <caption>테이블</caption>
                    <tbody>
                    <tr>
                        <td class="l15" style="width:80px">수량(개)</td>
                        <td><strong style="color:#ff643d;">1~</strong></td>
                        <td>5~</td>
                        <td>30~</td>
                        <td>100~</td>
                        <td>1000~</td>
                    </tr>
                    <tr>
                        <td class="l15">단가(원)</td>
                        <td><strong style="color:#ff643d;">21,900</strong></td>
                        <td><strong>21,900</strong></td>
                        <td><strong>21,900</strong></td>
                        <td><strong>21,900</strong></td>
                        <td><strong>21,900</strong></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t20"></div>

                <div><font style="width:95px; display:inline-block;">도매판매가 </font>4,900원 (2개 이상 구매)
                    <button class="main_cont_bu3" type="submit"
                            style="background:#fff; border:1px solid #279a3e; color:#279a3e; "
                            onClick="window.location.href='#'">도매구매
                    </button>
                </div>

                <div class="cb t15">
                    <select class="select1" style="width:100%;">
                        <option>옵션보기</option>
                        <option>크림(1,125개)(+100원)</option>
                        <option>블랙(500개)</option>
                    </select>
                </div>
                <div class="cb t15"></div>

                <div class="brd1" style="background:#f0f0f0;">

                    <ul class="cb ufl" style="width:100%;">
                        <li style="width:25%;" class="ac">
                            <div class="t80"><strong>배송정보</strong></div>
                        </li>
                        <li style="font-size:13px; background:#fff;width:75%;">
                            <div style="padding:15px 0 15px 10px">
                                택배 : 수량별비례 / 구매자(선불,착불)선택<br/>
                                <div class="t10"></div>
                                <table class="table_07" style="width:95%">
                                    <caption>테이블</caption>
                                    <tbody>
                                    <tr>
                                        <td>1~199개</td>
                                        <td>~399개</td>
                                        <td>~599개</td>
                                        <td>~799개</td>
                                        <td>800개 ~</td>
                                    </tr>
                                    <tr>
                                        <td>2,500개</td>
                                        <td>3,000개</td>
                                        <td>4,000개</td>
                                        <td>5,000개</td>
                                        <td>8,000개 ~</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="t10"></div>
                                50개까지 2500원 / 이후 50개마다 2500원씩 추가<br/>
                                당일출고 (평균출고일 0.3일 )
                                <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}"
                                                                class="vm" alt=""> 빠른배송
                                </div>
                                <br/>
                                제주 및 도서산간지역은 추가 배송비 부과 가능
                            </div>
                        </li>
                    </ul>

                    <div class="cb"></div>
                </div>

                <div class="cb t10"></div>
                <ul class="ufl">
                    <li>
                        <button class="main_cont_btn1" type="submit" onClick="window.location.href='#1'"
                                style="width:130px;">상품DB담기
                        </button>
                    </li>
                    <!--
							<li class="l10"><button class="main_cont_btn1" type="submit" style="border:1px solid #5a89a6; background:#5a89a6; color:#fff;width:97px;" onClick="document.getElementById('pup_images').style.display='none'; document.getElementById('page8_pup').style.display='block';javascript:popup('market1_pup.html', '1000','800', 'yes');return false">스마트전송</button></li>

							<li class="l10"><button class="main_cont_btn1" type="submit" style="border:1px solid #ff564d; background:#ff564d; color:#fff;width:97px;" onClick="document.getElementById('pup_images').style.display='none'; document.getElementById('coupang1_pup').style.display='block';">쿠팡전송</button></li>
-->

                    <li class="l10">
                        <button class="main_cont_btn1" type="submit"
                                style="border:1px solid #f16820; background:#f16820; color:#fff;width:160px;"
                                onClick="document.getElementById('pup_images').style.display='none'; document.getElementById('page8_pup').style.display='block';">
                            <img src="{{ _url_('web/img/11/bu1_1.png') }}" alt="" style="padding-top:4px;">스피드고전송
                        </button>
                    </li>

                    <li class="l10">
                        <button class="main_cont_btn1" type="submit"
                                style="border:1px solid #ff643c;background:#fff; color:#ff643c; width:130px;"
                                onClick="window.location.href='#'">구매하기
                        </button>
                    </li>
                </ul>
                <div class="cb t10"></div>
                <img src="{{ _url_('web/img/main/pup_image1.png') }}" alt=""></div>
            <div class="cb t20"></div>

            <div style="color:red; width:400px;" class="fl">
                이 상품의 선택가능한 옵션
                &nbsp;
                <button class="main_cont_btn1" type="submit"
                        style="border:1px solid #cccccc; background:#fff; color:#424242;width:100px; font-size:12px; font-weight:normal; display:inline-block;"
                        onClick="window.open('https://domeme.domeggook.com/main/popup/item/popup_itemOptionView.php?no=6686170&market=supply', 'itemOptViewSupply', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">
                    옵션코드확인
                </button>
            </div>
            <div class="fr">
                <button class="main_cont_btn1" type="submit"
                        style="border:1px solid #cccccc; background:#fff; color:#424242;width:114px;"><img
                        src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""> 이미지다운
                </button>
            </div>
            <div class="cb"></div>

            <div class="t05">4) 9213 포인트시스루-핑크(1449개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 5) 9201 레이스유-베이지(1337개)
                <b style="color:#ff5757">&nbsp;|&nbsp;</b> 5) 9201 레이스유-아이보리(1968개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                6) 9206 심플와이어-베이지(1529개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 6) 9206 심플와이어-아이보리(1315개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 7) 9216 귀쫑긋밀짚모자-베이지(1497개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                7) 9216 귀쫑긋밀짚모자-연핑크(1666개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 8) 9202 레이스스트랩-베이지(1342개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 8) 9202 레이스스트랩-아이보리(1227개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                9) 9113 썬스트로캡-베이지(1346개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 9) 9113 썬스트로캡-블랙(1977개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 9) 9113 썬스트로캡-크림(1143개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                10) 9119 와이어리본-베이지(1349개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 10) 9119 와이어리본-아이보리(1352개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 11) 9008 리본매듭-베이지(1194개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                11) 9008 리본매듭-블루(1837개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 12) 9205 와이어기본-베이지(1772개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 12) 9205 와이어기본-아이보리(1762개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                1) 9211 보넷레이스유-베이지(1315개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 1) 9211 보넷레이스유-아이보리(1329개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 2) 9304 아동보넷레이스유-베이지(1972개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                2) 9304 아동보넷레이스유-아이보리(1160개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 3) 9212 리본파나마-베이지(742개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 3) 9212 리본파나마-아이보리(1945개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                3) 9212 리본파나마-블랙(1513개) <b style="color:#ff5757">&nbsp;|&nbsp;</b> 4) 9213 포인트시스루-베이지(1246개) <b
                    style="color:#ff5757">&nbsp;|&nbsp;</b> 4) 9213 포인트시스루-아이보리(1672개) <b style="color:#ff5757">&nbsp;|&nbsp;</b>
                4) 9213 포인트시스루-블랙(1345개)
            </div>

            <div class="cb t20"></div>


            <div class="cb line1 t50"></div>


            <div class="prod_tbl_tit1 b">판매자정보</div>
            <table class="table_08">
                <caption></caption>
                <tbody>
                <tr>
                    <th style="width:16%">판매자</th>
                    <td style="width:33%">AraWorld(araworld) 우수판매자/판매등급</td>
                    <th style="width:16%">상호/대표자명</th>
                    <td>주식회사 제이에이치글로벌컴퍼니/유옥회</td>
                </tr>
                <tr>
                    <th>사업자구분</th>
                    <td>일반과세자</td>
                    <th>사업자등록번호</th>
                    <td>310-86-01268</td>
                </tr>
                <tr>
                    <th>사업장소재지</th>
                    <td colspan="3">경기도 고양시 일산동구 성석동 1172-1동관동 315호</td>
                </tr>
                <tr>
                    <th>문의번호</th>
                    <td colspan="3">010-3543-3200</td>
                </tr>
                </tbody>
            </table>

            <div class="t30"></div>
            <div class="prod_tbl_tit1 b">상품정보</div>
            <table class="table_08">
                <caption></caption>
                <tbody>
                <tr>
                    <th style="width:16%">원산지</th>
                    <td style="width:33%">중국</td>
                    <th style="width:16%">모델명</th>
                    <td>대우 9인치 서큘레이터</td>
                </tr>
                <tr>
                    <th>제조사</th>
                    <td>china</td>
                    <th>상품포장 부피/무게</th>
                    <td>별도표기/별도표기</td>
                </tr>
                </tbody>
            </table>

            <div class="t30"></div>
            <div class="prod_tbl_tit1 b">카테고리매칭 참고정보</div>
            <div class="cb"></div>
            <table class="table_08">
                <caption></caption>
                <tbody>
                <tr>
                    <th style="width:16%">플레이오토</th>
                    <td>
                        <strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼
                    </td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">이셀러스</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">옥션</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">G마켓</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">쿠팡</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">인터파크</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">11번가</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">스마트스토어</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">위메프</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width:16%">티몬</th>
                    <td><strong style="color:#ff643d;">(10130100)</strong> 여성의류>점퍼/사파리>사파리/야상점퍼</td>
                    <td class="ar">
                        <a href="javascript:vo()" class="button_9"
                           onClick="javascript:popup('pup8.html', '1000','800', 'yes');return false"><img
                                src="{{ _url_('web/img/main/main_cont_btn1_bu2.jpg') }}" class="vm" alt=""></a>
                        &nbsp;
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="cb t20 b20 ac"><img src="{{ _url_('web/img/main/image.png') }}" alt=""/></div>


            <br/><br/><br/><br/><br/><br/><br/>


            <div class="cb"></div>

            <div class="t10 ac">
                <button class="pup_images_btn1" type="submit"
                        onClick="document.getElementById('pup_images').style.display='none'; body_bar2();">닫기
                </button>
            </div>
        </div>
    </div>

</div>


<!-- 스마트전송상품 전송정보설정 start -->
<div id="page8_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('page8_pup').style.display='none';"></div>

    <div class="container" style="margin-top:5%; width:1230px; padding:0px;">
        <div style="background:#2c303b; height:100px; padding:0 20px;">
            <div class="fl pup_images_tit b t30" style="color:#fff; font-size:30px;">
                <img src="{{ _url_('web/img/hot/pup_tit1.png') }}" alt=""> 스피드고전송정보설정
            </div>
            <div class="fr t20"><a href="javascript:vo();"
                                   onClick="document.getElementById('page8_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/hot/pup_btn1.png') }}" alt=""></a></div>
            <div class="cb"></div>
        </div>
    </div>
    <div class="container" style="margin-top:0px; width:1200px; padding-top:0px">
        <div class="scroll_bar">


            <div class="fl" style="width:530px;">
                <div class="t20"></div>

                <div class="site_cont_tit2 b" style="color:#da4a38;">상품리스트</div>
                <div class="t05"></div>


                <div class="shop_cont2_tbl">
                    <div class="shop_cont2_tbltit1 b" style="background:#f6f6f6;">
                        선택상품
                    </div>

                    <div class="cb"></div>

                    <div class="shop_cont2_tblnr">

                        <div class="fl brd1"><img src="{{ _url_('web/img/shoppling/image1.jpg') }}" alt=""/>
                        </div>

                        <div class="fl l20 t05">
                            <strong class="pup_text3 r15" style="color:#f26821;">12345678</strong>
                            <img src="{{ _url_('web/img/shoppling/line1.jpg') }}" alt=""/>
                            <span class="pup_text3 l15">testseller(테스트셀러)</span>
                            <div class="pup_text3 t10">손난로 보조배터리 USB 충전식 멀티</div>
                            <div class="pup_text1 t20"><b class="red">4,500</b>원</div>
                        </div>

                        <div class="cb"></div>
                    </div>
                </div>

                <div class="t20"></div>


                <table class="table_08">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <th style="width:16%" class="b">배송정보</th>
                        <td>
                            택배 : 수량별비례 / 선결제<br>4000개까지 2,500원 / 이후 4000개마다 4,000원씩 추가<br>당일출고 (평균출고일 0.1일 )
                            <div class="main_cont_bu9"><img src="{{ _url_('web/img/index/bu3.jpg') }}" class="vm"
                                                            alt=""> 빠른배송
                            </div>
                            <br>추가배송비 : 제주지역 +4,000원
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10 prod_tbl_tit1 b">상품공급사정보</div>

                <table class="table_08">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <th style="width:16%">상품공급사</th>
                        <td style="width:33%">gf1004(더조은세상) 우수상품공급사/1</td>
                        <th style="width:16%">상호/대표자명</th>
                        <td>좋은친구들/JIANG ZHAOPING</td>
                    </tr>
                    <tr>
                        <th>사업자구분</th>
                        <td>일반과세자</td>
                        <th>사업자번호</th>
                        <td>561-28-00630</td>
                    </tr>
                    <tr>
                        <th>사업장소재지</th>
                        <td colspan="3">서울특별시 금천구 시흥대로28길 47-14 (시흥동) 102호</td>
                    </tr>
                    <tr>
                        <th>문의번호</th>
                        <td colspan="3">010-2913-9109</td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10 prod_tbl_tit1 b">상품상세정보</div>

                <table class="table_08">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <th style="width:16%">원산지</th>
                        <td style="width:33%">중국</td>
                        <th style="width:16%">모델명</th>
                        <td>마스크스트랩</td>
                    </tr>
                    <tr>
                        <th>제조사</th>
                        <td>더조은세상</td>
                        <th>상품포장 부피/무게</th>
                        <td>70x8x0.5 / 0.009</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="fr" style="width:590px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t20"></div>


                <div class="site_cont_tit2 b" style="color:#da4a38;">전송정보</div>
                <div class="t05"></div>

                <style type="text/css">


                    .mui-switch {
                        width: 40px;
                        height: 18px;
                        position: relative;
                        border: 1px solid #bcbcbc;
                        background-color: #bcbcbc;
                        box-shadow: #dfdfdf 0 0 0 0 inset;
                        border-radius: 50px;
                        border-top-left-radius: 50px;
                        border-top-right-radius: 50px;
                        border-bottom-left-radius: 50px;
                        border-bottom-right-radius: 50px;
                        background-clip: content-box;
                        display: inline-block;
                        -webkit-appearance: none;
                        user-select: none;
                        outline: none;
                        vertical-align: top;
                    }

                    .mui-switch:before {
                        content: '';
                        width: 16px;
                        height: 16px;
                        position: absolute;
                        top: 0px;
                        left: 0;
                        border-radius: 50px;
                        border-top-left-radius: 50px;
                        border-top-right-radius: 50px;
                        border-bottom-left-radius: 50px;
                        border-bottom-right-radius: 50px;
                        background-color: #fff;
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
                    }

                    .mui-switch:checked {
                        border-color: #64bd63; /*        111            */
                        box-shadow: #64bd63 0 0 0 16px inset;
                        background-color: #64bd63;
                    }

                    .mui-switch:checked:before {
                        left: 23px;
                    }


                    .mui-switch.mui-switch-animbg {
                        transition: background-color ease 0.4s;
                    }

                    .mui-switch.mui-switch-animbg:before {
                        transition: left 0.3s;
                    }

                    .mui-switch.mui-switch-animbg:checked {
                        background-color: #bcbcbc;
                        transition: border-color 0.4s, background-color ease 0.4s;
                    }

                    .mui-switch.mui-switch-animbg:checked:before {
                        transition: left 0.3s;
                    }

                    .mui-switch.mui-switch-anim {
                        transition: border cubic-bezier(0, 0, 0, 1) 0.4s, box-shadow cubic-bezier(0, 0, 0, 1) 0.4s;
                    }

                    .mui-switch.mui-switch-anim:before {
                        transition: left 0.3s;
                    }

                    .mui-switch.mui-switch-anim:checked {
                        box-shadow: #64bd63 0 0 0 16px inset; /*        111            */
                        background-color: #64bd63;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }

                    .mui-switch.mui-switch-anim:checked:before {
                        transition: left 0.3s;
                    }


                    .mui-switch2:checked {
                        border-color: #ff0000; /*        22            */
                        box-shadow: #ff0000 0 0 0 16px inset;
                        background-color: #ff0000;
                    }

                    .mui-switch2.mui-switch-anim2:checked {
                        box-shadow: #ff0000 0 0 0 16px inset; /*        22            */
                        background-color: #ff0000;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }


                    .mui-switch3:checked {
                        border-color: #f95620; /*        33            */
                        box-shadow: #f95620 0 0 0 16px inset;
                        background-color: #f95620;
                    }

                    .mui-switch3.mui-switch-anim3:checked {
                        box-shadow: #f95620 0 0 0 16px inset; /*        33            */
                        background-color: #f95620;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }


                    .mui-switch4:checked {
                        border-color: #624f2c; /*        33            */
                        box-shadow: #624f2c 0 0 0 16px inset;
                        background-color: #624f2c;
                    }

                    .mui-switch4.mui-switch-anim3:checked {
                        box-shadow: #624f2c 0 0 0 16px inset; /*        33            */
                        background-color: #624f2c;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }


                    .mui-switch5:checked {
                        border-color: #ef2a23; /*        33            */
                        box-shadow: #ef2a23 0 0 0 16px inset;
                        background-color: #ef2a23;
                    }

                    .mui-switch5.mui-switch-anim3:checked {
                        box-shadow: #ef2a23 0 0 0 16px inset; /*        33            */
                        background-color: #ef2a23;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }


                    .mui-switch6:checked {
                        border-color: #e30920; /*        33            */
                        box-shadow: #e30920 0 0 0 16px inset;
                        background-color: #e30920;
                    }

                    .mui-switch6.mui-switch-anim6:checked {
                        box-shadow: #e30920 0 0 0 16px inset; /*        33            */
                        background-color: #e30920;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }


                    .mui-switch7:checked {
                        border-color: #ee4d2d; /*        33            */
                        box-shadow: #ee4d2d 0 0 0 16px inset;
                        background-color: #ee4d2d;
                    }

                    .mui-switch7.mui-switch-anim7:checked {
                        box-shadow: #ee4d2d 0 0 0 16px inset; /*        33            */
                        background-color: #ee4d2d;
                        transition: border ease 0.4s, box-shadow ease 0.4s, background-color ease 1.2s;
                    }

                </style>


                <script type="text/javascript" charset="utf-8">
                    $(window).load(function () {


                        $('.on_off :checkbox').iphoneStyle();

                        var onchange_checkbox = ($('.onchange :checkbox')).iphoneStyle({
                            onChange: function (elem, value) {
                                $('span#status').html(value.toString());
                            }
                        });

                        setInterval(function () {
                            onchange_checkbox.prop('checked', !onchange_checkbox.is(':checked')).iphoneStyle("refresh");
                            return
                        }, 2500);


                    });


                    $(function () {
                        $("#we1").click(function () {


                            if ($(".label_text1_ input[type='checkbox']").is(':checked')) {


                                $("#aaaaaaaaa").show();


                            } else {

                                $("#aaaaaaaaa").hide();


                            }


                        })
                    })


                </script>


                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>솔루션선택</strong></td>
                    </tr>

                    <tr>
                        <td class="ac">
                            <label class="label_text1_" for="we1"><input class="mui-switch mui-switch-animbg"
                                                                         type="checkbox" name="we1" id="we1"/> 스마트스토어 전송</label>
                            &nbsp;

                            <label class="label_text1" for="we2"><input
                                    class="mui-switch mui-switch-animbg mui-switch2 mui-switch-animbg2" type="checkbox"
                                    name="we1" id="we2"/> 쿠팡 전송</label>
                            &nbsp;

                            <label class="label_text1" for="we3"><input
                                    class="mui-switch mui-switch-animbg mui-switch3 mui-switch-animbg3" type="checkbox"
                                    name="we1" id="we3"/> 11번가 전송</label>
                            &nbsp;

                            <label class="label_text1" for="we4"><input
                                    class="mui-switch mui-switch-animbg mui-switch4 mui-switch-animbg4" type="checkbox"
                                    name="we1" id="we4"/> 카카오 전송</label>
                            <div class="t10"></div>

                            <label class="label_text1" for="we5"><input
                                    class="mui-switch mui-switch-animbg mui-switch5 mui-switch-animbg5" type="checkbox"
                                    name="we1" id="we5"/> 롯데ON 전송</label>


                            <label class="label_text1" for="we6"><input
                                    class="mui-switch mui-switch-animbg mui-switch6 mui-switch-animbg6" type="checkbox"
                                    name="we1" id="we6"/> 위메프 전송</label>


                            <label class="label_text1" for="we7"><input
                                    class="mui-switch mui-switch-animbg mui-switch7 mui-switch-animbg7" type="checkbox"
                                    name="we1" id="we7"/> Shopee 전송</label></td>
                    </tr>

                    <tr>
                        <td class="ac"><a href="index_pup3.html" target="_blank"
                                          onClick="popup(this.href, '732','736','yes');return false"><img
                                    src="{{ _url_('web/img/index/p_img1.png') }}" alt=""/></a></td>
                    </tr>
                    <tr>
                        <td>

                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="input1" style="width:100%; font-size:15px; line-height:40px; height:40px;">
                                <option value="#">스마트스토어대표템플릿</option>
                            </select></td>
                    </tr>


                    <tr>
                        <td class="ac" style="color:#2c303b"><strong>쿠팡 전송템플릿선택</strong></td>
                    </tr>
                    <tr>
                        <td>

                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="input1" style="width:100%; font-size:15px; line-height:40px; height:40px;">
                                <option value="#">쿠팡대표템플릿</option>
                            </select></td>
                    </tr>
                    </tbody>
                </table>


                <div class="t10 b10 l20" style="color:red;font-size:12px;">판매가에 배송료가 합산된 템플릿을 선택했습니다 <br>
                    전송 시 유료배송상품의 경우 무료배송으로 변경되며 배송비만큼 판매가에 합산됩니다
                </div>

                <div class="pup_cont_tit2 t30">상품정보</div>


                <div class="t20"></div>

                <style type="text/css">
                    .table_06_style {
                        border-top: 1px solid #dfdfdf;
                        border-bottom: 1px solid #dfdfdf;
                        background: #fff
                    }

                    .table_06_style td {
                        padding: 10px !important;
                        height: 25px !important;
                    }

                    .sub3_p_s1 {
                        background: #fff;
                        display: inline-block;
                        width: 100%;
                        position: relative;
                    }

                    .exit_btn {
                        position: absolute;
                        top: 3px;
                        right: 2px;
                        height: 20px;
                        padding-top: 3px;
                        background: #fff;
                        display: none;
                        z-index: 1;

                    }

                    .sub3_p_s1_ip {
                        font-family: 'Nanum Gothic', '나눔고딕', 'Microsoft YaHei', 'YaHei', 'AppleGothic', 'sans-serif';
                        font-size: 15px;
                        color: #666666;
                        text-align: left;
                        background-color: transparent;
                        border: 1px;
                        line-height: 18px;
                        height: 30px;
                        width: 100%;

                    }

                    .sub3_p_s1_ip_r {
                        text-align: right;

                    }

                    .sub3_p_click_on {
                        border: 1px solid #ccc;
                        background: #fff;
                        text-align: center;

                    }
                </style>
                <script type="text/javascript">
                    $(function () {
                        $(".sub3_p_click").click(function () {
                            sub3_1_pup_fc();
                            $("> .sub3_p_s1_ip", this).addClass('sub3_p_click_on');
                            $("> .exit_btn", this).show();


                        })

                        $(".sub3_p_click .exit_btn").click(function () {
                            //$(this).parent(".sub3_1_pup_input1").val("");
                            $(this).parent().find(".sub3_p_s1_ip").val("");


                        })


                    });

                    function sub3_1_pup_fc() {
                        $(".sub3_p_s1_ip").removeClass('sub3_p_click_on');
                        $(".exit_btn").hide();


                    }

                </script>
                <!--onClick="javascript:sub3_1_pup_fc()"-->


                <style type="text/css">
                    .table_04_t tbody td {
                        font-size: 12px;

                    }
                </style>


                <div id="aaaaaaaaa" class="hide">
                    <table class="table_06 table_06_style ">
                        <caption></caption>
                        <tbody>
                        <tr>
                            <td class="ac"
                                style="color:#2c303b; width:240px; border-right:1px solid #dddddd; background:#f6f6f6;">
                                <strong>스마트스토어 카테고리</strong></td>
                            <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>카테고리 코드</strong></td>
                            <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
                                <a href="javascript:sub3_1_pup_fc();"><img
                                        src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a></td>
                        </tr>
                        <tr>
                            <td style="border-right:1px solid #dddddd;">
                                <div class="ac">생활/건강>건강관리용품>기타건강관리용품</div>
                            </td>
                            <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip" style="" value="50002063"/>
                </span></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="t10 b10 ac" style="color:red;font-size:12px;">스마트스토어센터 상품관리&gt;상품일괄등록&gt;카테고리찾기에서
                        카테고리코드가 확인가능합니다
                    </div>
                </div>
                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>상품명</strong><a
                                href="javascript:void(0);" onClick="randName();" class="fr r20 b"
                                style="color:#335598;">[상품명랜덤섞기]</a></td>
                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
                            <a href="javascript:sub3_1_pup_fc();"><img
                                    src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px; padding-bottom:10px;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip" style="" value="서랍형 1단 수납장 화장대 정리함 수납함"/>
                </span></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>


                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:50%; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>공급가</strong></td>
                        <td class="ac" style="color:#2c303b; border-right:0px; background:#f6f6f6;">
                            <strong>최저판매준수가격</strong></td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="10,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>


                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:100px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>마켓</strong></td>
                        <td class="ac"
                            style="color:#2c303b; width:220px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong class="red">판매가</strong></td>
                        <td class="ac" style="color:#2c303b; border-right:0px; background:#f6f6f6;">
                            <strong>판매가수정</strong></td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/11/bu1.jpg') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd1').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd1" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd1').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/11/bu2.jpg') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd2').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd2" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd2').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/11/bu3.jpg') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd3').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd3" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd3').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/kakao/bu1.jpg') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd4').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd4" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd4').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/lotte/bu1.png') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd5').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd5" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd5').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/shopee/logo1.png') }}" alt=""></td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd6').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd6" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd6').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-right:1px solid #dddddd;" class="ac"><img
                                src="{{ _url_('web/img/shopee/logo2.png') }}" alt="">(싱가포르)
                        </td>
                        <td style="border-right:1px solid #dddddd;" class="ac">

                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="12,000 원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;" class="ac">
                            <button class="button_3" style="border:1px solid #0070c0; color:#0070c0;" type="submit"
                                    onClick="$('#abcd7').show()">판매가수정
                            </button>
                        </td>
                    </tr>
                    <tr id="abcd7" style="display:none">
                        <td colspan="3" style="padding:0px!important;">


                            <table class="table_04 table_04_t" style="border-top:0px;">
                                <caption></caption>
                                <tbody>
                                <tr>
                                    <td style="border-top:0px; width:75px;">판매가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1.5"/></td>
                                    <td style="border-top:0px; width:90px;">옵션가요율</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="1"/></td>
                                    <td style="border-top:0px; width:75px;">수수료(%)</td>
                                    <td style="border-top:0px; padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10"/></td>
                                </tr>

                                <tr>
                                    <td>공급가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="10,000원"
                                               readonly/></td>
                                    <td>최저판매준수가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="12,000원"
                                               readonly/></td>
                                    <td><span class="red">판매가</span></td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"
                                               readonly/></td>
                                </tr>

                                <tr>
                                    <td>할인율</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td>할인가</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="15,000원"/>
                                    </td>
                                    <td>추가금액(+)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                </tr>

                                <tr>
                                    <td>추가금액(-)</td>
                                    <td style="padding-left:10px!important;">
                                        <input type="text" title="" class="input1" style="width:70%" value="0"/></td>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="t20 ac">
                                <button class="pup_images_btn1" style="background:#002060;" type="submit"
                                        onClick="document.getElementById('pup_images').style.display='none';">저장
                                </button>
                                 
                                <button class="pup_images_btn1" type="submit" onClick="$('#abcd7').hide()">닫기</button>
                            </div>
                            <div class="t20"></div>
                        </td>
                    </tr>


                    </tbody>
                </table>


            <!--
									<table class="table_06 table_06_style ">
						                <caption></caption>
						                <tbody>
						                    <tr>
						                        <td class="ac" style="color:#2c303b; width:120px; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>판매가요율</strong></td>
						                        <td class="ac" style="color:#2c303b; width:150px; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>옵션가요율</strong></td>
						                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>수수료(%)</strong></td>
						                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
													<a href="javascript:sub3_1_pup_fc();"><img src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td style="border-right:1px solid #dddddd;"><div class="ac">1.2</div></td>
						                        <td style="border-right:1px solid #dddddd;"><div class="ac">1.1</div></td>
						                        <td style="padding-top:0px; padding-bottom:0px;"><div class="ac">1.3</div></td>
						                    </tr>
						                </tbody>
						            </table>

						            <div class="t10"></div>

									<table class="table_06 table_06_style ">
						                <caption></caption>
						                <tbody>
						                    <tr>
						                        <td class="ac" style="color:#2c303b; width:140px; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>공급가</strong></td>
						                        <td class="ac" style="color:#2c303b; width:140px; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>최저판매준수가격</strong></td>
						                        <td class="ac" style="color:red; background:#f6f6f6;"><strong>판매가</strong></td>
						                    </tr>
						                    <tr>
						                        <td style="border-right:1px solid #dddddd;"><div class="l05">4,500원</div></td>
						                        <td style="border-right:1px solid #dddddd;"><div class="l05">4,500원</div></td>
						                        <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click" >
                    <a href="javascript:vo();" class="exit_btn"><img src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip" style=""  value="9,500원" />
                </span>
						                        </td>
						                    </tr>
						                </tbody>
						            </table>

						            <div class="t10"></div>

									<table class="table_06 table_06_style ">
						                <caption></caption>
						                <tbody>
						                    <tr>
						                        <td class="ac" style="color:#2c303b; width:180px; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>추가금액(+)</strong></td>
						                        <td class="ac" style="color:#2c303b; border-right:1px solid #dddddd; background:#f6f6f6;"><strong>할인금액(-)</strong></td>
						                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
													<a href="javascript:sub3_1_pup_fc();"><img src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td style="padding-top:0px; padding-bottom:0px; border-right:1px solid #dddddd;">
                <span class="sub3_p_s1 sub3_p_click" >
                    <a href="javascript:vo();" class="exit_btn"><img src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip sub3_p_s1_ip_r" style=""  value="0원" />
                </span>
						                        </td>
						                        <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click sub3_p_s1_right" >
                    <a href="javascript:vo();" class="exit_btn"><img src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip sub3_p_s1_ip_r" style=""  value="0원" />
                </span>
						                        </td>
						                    </tr>
						                </tbody>
						            </table>



-->


                <div class="cb t20" style="color:red;font-size:12px;">대량전송 시 보여지는 판매가의 경우 공급가 10,000원 기준 전송 시 판매가의 <br>예시이며,
                    실질적으로는 템플릿으로 선택한 판매가설정 기준으로 공급가에 더해져서 전송됩니다
                </div>

                <div class="t10"></div>

                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>옵션</strong></td>
                    </tr>
                    <tr>
                        <td>


                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="input1" style="width:100%; font-size:15px; line-height:40px; height:40px;">
                                <option value="#">옵션리스트확인</option>
                            </select></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>

                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>배송비결제방식</strong></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px; padding-bottom:10px;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip" style="" value="선결제"/>
                </span>

                            <div class="cb t10" style="color:red;font-size:12px;">주의! ) 타마켓과 도매매의 배송료 정책이 상이하여 수량별비례,
                                구간별배송료 상품 전송 시 <br>
                                전송이후 전송한 마켓에서 추가확인 및 배송료 변경이 필요합니다
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>


                <div class="cb t50">
                    <button class="cont_btn1" style="background:#1b699a; width:49%; margin-right:1%;" type="submit"
                            onClick="document.getElementById('page8_pup').style.display='none'; document.getElementById('page13_pup').style.display='block';">
                        스마트전송
                    </button>
                    <button class="cont_btn1 fr" style="width:49%" type="submit"
                            onClick="document.getElementById('page8_pup').style.display='none'; document.getElementById('page5_pup').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>


                <div class="t100"></div>
            </div>
        </div>
    </div>

</div>

<!-- //쿠팡전송상품 전송정보설정 end -->


<!-- 상품전송실패 start -->
<div id="page13_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('page13_pup').style.display='none';"></div>

    <div class="container" style="width:1200px;">
        <div class="scroll_bar">
            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('page13_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>


            <div class="cb t50"></div>
            <div class="t20"></div>


            <div class="fl" style="width:530px;">
                <div class="t50"><img src="{{ _url_('web/img/11/image4.jpg') }}" style="" alt=""></div>
                <div class="t50"><img src="{{ _url_('web/img/11/image1.png') }}" style="" alt=""></div>
            </div>


            <div class="fr" style="width:590px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t20"></div>
                <div class="pup_text2 ac b">상품전송결과</div>
                <div class="pup_text1 ac t20">상품전송리스트로 이동하여 확인하겠습니까? <br>이동을 원하지 않는 경우, 닫기 버튼을 클릭하세요!</div>

                <div class="t20"></div>

                <style type="text/css">
                    .table_04_t2 tbody td {
                        font-size: 14px;
                        font-weight: 600;
                        padding: 10px 20px;

                    }
                </style>
                <table class="table_04 table_04_t2" style="width:420px;margin:	0px auto ;">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td style="width:50%"><span style="color:#22c327;"><img
                                    src="{{ _url_('web/img/11/bu1.jpg') }}" class="t05" alt=""> 스마트스토어</span>
                        </td>
                        <td class="ac">전송완료</td>
                    </tr>
                    <tr>
                        <td><span style="color:#c81f08;"><img src="{{ _url_('web/img/11/bu2.jpg') }}" class="t05"
                                                              alt=""> 쿠팡</span></td>
                        <td class="ac"><span style="color:#ff0000;">전송실패</span></td>
                    </tr>
                    <tr>
                        <td><span style="color:#f95224;"><img src="{{ _url_('web/img/11/bu3.jpg') }}" class="t05"
                                                              alt=""> 11번가</span></td>
                        <td class="ac"><span style="color:#227547;">사용안함</span></td>
                    </tr>
                    <tr>
                        <td><span style="color:#1a1d22;"><img src="{{ _url_('web/img/kakao/bu1.jpg') }}"
                                                              class="t05" alt=""> 카카오</span></td>
                        <td class="ac"><span style="color:#227547;">사용안함</span></td>
                    </tr>
                    <tr>
                        <td><span style="color:#ef2a23;"><img src="{{ _url_('web/img/lotte/bu1.png') }}"
                                                              class="t05" alt=""> 롯데ON</span></td>
                        <td class="ac"><span style="color:#227547;">사용안함</span></td>
                    </tr>
                    <tr>
                        <td><span style="color:#e30920;"><img src="{{ _url_('web/img/shopee/logo1.png') }}"
                                                              class="t05" alt=""> 위메프ON</span></td>
                        <td class="ac"><span style="color:#227547;">사용안함</span></td>
                    </tr>
                    <tr>
                        <td><span style="color:#ee4d2d;"><img src="{{ _url_('web/img/shopee/logo2.png') }}"
                                                              class="t05" alt=""> Shopee ON</span></td>
                        <td class="ac"><span style="color:#227547;">사용안함</span></td>
                    </tr>
                    </tbody>
                </table>


                <div class="cb t40 ac">
                    <button class="cont_btn1" style="background:#227547; width:200px;" type="submit"
                            onClick="document.getElementById('page13_pup').style.display='none'; javascript:location.href='#';">
                        확인
                    </button>
                     
                    <button class="cont_btn1" style=" width:200px;" type="submit"
                            onClick="document.getElementById('page13_pup').style.display='none'; document.getElementById('page8_pup').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>


                <div class="t20"></div>
            </div>
        </div>
    </div>

</div>

<!-- //상품전송실패 end -->


<!-- 상품전송완료 start -->
<div id="page13_2_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('page13_2_pup').style.display='none';"></div>

    <div class="container">
        <div class="scroll_bar">
            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('page13_2_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>


            <div class="cb t100"></div>
            <div class="t20"></div>


            <div class="fl" style="width:480px;">
                <div class="t50"><img src="{{ _url_('web/img/shoppling/pup_img2.jpg') }}" style="width:99%"
                                      alt=""></div>
                <div class="pup_text2 ac t40 b">상품전송완료</div>
            </div>


            <div class="fr" style="width:480px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t50"></div>
                <div class="pup_text1 ac">상품이 전송되었습니다<br>전송리스트로 이동하겠습니까?</div>


                <div class="cb t80 ac">
                    <button class="cont_btn1" style="background:#227547; width:200px;" type="submit"
                            onClick="javascript:location.href='?shoppling20.html'">확인
                    </button>
                     
                    <button class="cont_btn1" style="width:200px;" type="submit"
                            onClick="document.getElementById('page13_2_pup').style.display='none'; document.getElementById('page5_pup').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- //상품전송완료 end -->


<!-- 쿠팡전송상품 전송정보설정 start -->
<div id="coupang1_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('coupang1_pup').style.display='none';"></div>

    <div class="container" style="margin-top:5%; width:1070px; padding:0px;">
        <div style="background:#2c303b; height:100px; padding:0 20px;">
            <div class="fl pup_images_tit b t30" style="color:#fff; font-size:30px;">
                <img src="{{ _url_('web/img/hot/pup_tit1.png') }}" alt=""> 쿠팡옵션분리설정
            </div>
            <div class="fr t20"><a href="javascript:vo();"
                                   onClick="document.getElementById('coupang1_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/hot/pup_btn1.png') }}" alt=""></a></div>
            <div class="cb"></div>
        </div>
    </div>
    <div class="container" style="margin-top:0px; padding-top:0px">
        <div class="scroll_bar">


            <div class="ac">
                <div class="t100"><img src="{{ _url_('web/img/coupang/image1.jpg') }}" alt=""></div>
                <div class="s_cont_text4 t15">
                    옵션분리가 필요한 상품입니다 <br>
                    옵션을 분리하겠습니까?
                </div>
                <div class="t100"></div>
                <button class="cont_btn1" style="background:#2c303b;; width:270px;" type="submit"
                        onClick="javascript:popup('coupang3_pup1.html', '1260','800', 'yes');return false">옵션분리하기
                </button>
            </div>
        </div>
    </div>

</div>

<!-- //쿠팡전송상품 전송정보설정 end -->


<!-- 쿠팡옵션분리설정 start -->
<div id="coupang2_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('coupang2_pup').style.display='none';"></div>

    <div class="container" style="margin-top:5%; width:1200px; padding:0px;">
        <div style="background:#2c303b; height:100px; padding:0 20px;">
            <div class="fl pup_images_tit b t30" style="color:#fff; font-size:30px;">
                <img src="{{ _url_('web/img/hot/pup_tit1.png') }}" alt=""> 쿠팡옵션분리설정
            </div>
            <div class="fr t20"><a href="javascript:vo();"
                                   onClick="document.getElementById('coupang2_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/hot/pup_btn1.png') }}" alt=""></a></div>
            <div class="cb"></div>
        </div>
    </div>
    <div class="container" style="width:1170px; margin-top:0px; padding-top:0px">
        <div class="scroll_bar">


            <div class="t30"></div>


            <script type="text/javascript">
                $(function () {
                    $("#pup12_tbl_1 a").click(function () {
                        $("#pup12_tbl_2").show();

                        $("#pup12_tbl_1 a").removeClass("cur");
                        $(this).addClass("cur");

                    })
                    $("#pup12_tbl_2 a").click(function () {
                        $("#pup12_tbl_3").show();

                        $("#pup12_tbl_2 a").removeClass("cur");
                        $(this).addClass("cur");

                    })
                    $("#pup12_tbl_3 a").click(function () {
                        $("#pup12_tbl_4").show();

                        $("#pup12_tbl_3 a").removeClass("cur");
                        $(this).addClass("cur");

                    })
                    $("#pup12_tbl_4 a").click(function () {
                        $("#pup12_tbl_5").show();

                        $("#pup12_tbl_4 a").removeClass("cur");
                        $(this).addClass("cur");

                    })
                    $("#pup12_tbl_5 a").click(function () {

                        $("#pup12_tbl_5 a").removeClass("cur");
                        $(this).addClass("cur");

                    })
                })
            </script>
            <style type="text/css">
                .pup12_tbl {
                    border: 1px solid #dfdfdf;
                    float: left;
                    width: 208px;
                }
            </style>

            <div class="pup12_tbl" id="pup12_tbl_1">
                <div class="pup12_tbl_tit">1차분류</div>
                <div class="pup12_scroll_bar">
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a>
                    <a href="#">대분류1</a></div>
            </div>
            <div class="fl hide" id="pup12_tbl_2">
                <div class="fl" style="padding-top:150px;">
                    <img src="{{ _url_('web/img/pup/bu1.jpg') }}" alt=""></div>
                <div class="pup12_tbl">
                    <div class="pup12_tbl_tit">2차분류</div>
                    <div class="pup12_scroll_bar">
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a>
                        <a href="#">중분류1</a></div>
                </div>
            </div>
            <div class="fl hide" id="pup12_tbl_3">
                <div class="fl" style="padding-top:150px;">
                    <img src="{{ _url_('web/img/pup/bu1.jpg') }}" alt=""></div>
                <div class="pup12_tbl">
                    <div class="pup12_tbl_tit">3차분류</div>
                    <div class="pup12_scroll_bar">
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a>
                        <a href="#">소분류1</a></div>
                </div>
            </div>
            <div class="fl hide" id="pup12_tbl_4">
                <div class="fl" style="padding-top:150px;">
                    <img src="{{ _url_('web/img/pup/bu1.jpg') }}" alt=""></div>
                <div class="pup12_tbl">
                    <div class="pup12_tbl_tit">4차분류</div>
                    <div class="pup12_scroll_bar">
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a></div>
                </div>
            </div>
            <div class="fl hide" id="pup12_tbl_5">
                <div class="fl" style="padding-top:150px;">
                    <img src="{{ _url_('web/img/pup/bu1.jpg') }}" alt=""></div>
                <div class="pup12_tbl">
                    <div class="pup12_tbl_tit">5차분류</div>
                    <div class="pup12_scroll_bar">
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a>
                        <a href="#">세분류1</a></div>
                </div>
            </div>


            <div class="cb t20 ac">
                <button class="cont_btn1" style="background:#595959;; width:270px;" type="submit"
                        onClick="window.location.href='#'">카테고리매칭
                </button>
            </div>
            <div class="t40"></div>


            <div class="site_cont_tit2 b" style="color:#da4a38;">옵션분리리스트</div>
            <div class="t05"></div>


            <style type="text/css">

                .input_check3_span {
                    position: relative;
                    top: 2px;

                }

                .input_check3 {
                    position: absolute;
                    visibility: hidden;
                }

                .input_check3 + span {
                    display: inline-block;
                    width: 13px;
                    height: 13px;
                    border: 1px solid #000;
                    border-radius: 0px;
                    background: #fff;
                }


                .input_check3:checked + span:after {
                    content: "";
                    position: absolute;
                    left: 2px;
                    bottom: 4px;
                    width: 6px;
                    height: 3px;
                    border: 2px solid #000;
                    border-top-color: transparent;
                    border-right-color: transparent;
                    -ms-transform: rotate(-60deg);
                    -moz-transform: rotate(-60deg);
                    -webkit-transform: rotate(-60deg);
                    transform: rotate(-45deg);
                }

            </style>
            <table class="table_06 table_06_style">
                <caption></caption>
                <tbody>
                <tr>
                    <td rowspan="2" class="ac" style="color:#2c303b; background:#f6f6f6; width:50px;">
                        <label for="t1"><input type="checkbox" name="t1" class="input_check3" value="" id="t1"><span
                                class="input_check3_span"></span></label></td>
                    <td class="ac table_06_line1" style="color:#2c303b; background:#f6f6f6;"><strong>상품코드/옵션코드</strong>
                    </td>
                    <td rowspan="2" class="ac table_06_line1" style="color:#2c303b; background:#f6f6f6; width:550px;">
                        <strong>쿠팡 매칭카테고리</strong></td>
                </tr>
                <tr>
                    <td class="ac table_06_line1" style="color:#2c303b; background:#f6f6f6;"><strong>상품명</strong></td>
                </tr>


                <tr>
                    <td class="ac">
                        <label for="t2"><input type="checkbox" name="t1" class="input_check3" value="" id="t2"><span
                                class="input_check3_span"></span></label></td>
                    <td class="table_06_line1">
                        <div class="t10">
                            [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                            <div class="t10"></div>
                            <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                   value="4단계 마스터 정수필터(3개월마다 교체)"/>
                            <div class="t10"></div>
                        </div>
                    </td>
                    <td class="table_06_line1">
                        1차분류다 > 2차분류다 > 3차분류다 > 4차분류다 > 5차분류다
                    </td>
                </tr>


                <tr>
                    <td class="ac">
                        <label for="t3"><input type="checkbox" name="t1" class="input_check3" value="" id="t3"><span
                                class="input_check3_span"></span></label></td>
                    <td class="table_06_line1">
                        <div class="t10">
                            [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                            <div class="t10"></div>
                            <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                   value="4단계 마스터 정수필터(3개월마다 교체)"/>
                            <div class="t10"></div>
                        </div>
                    </td>
                    <td class="table_06_line1">
                        1차분류다 > 2차분류다 > 3차분류다 > 4차분류다 > 5차분류다
                    </td>
                </tr>


                <tr>
                    <td class="ac">
                        <label for="t4"><input type="checkbox" name="t1" class="input_check3" value="" id="t4"><span
                                class="input_check3_span"></span></label></td>
                    <td class="table_06_line1">
                        <div class="t10">
                            [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                            <div class="t10"></div>
                            <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                   value="4단계 마스터 정수필터(3개월마다 교체)"/>
                            <div class="t10"></div>
                        </div>
                    </td>
                    <td class="table_06_line1">
                        1차분류다 > 2차분류다 > 3차분류다 > 4차분류다 > 5차분류다
                    </td>
                </tr>
                </tbody>
            </table>


            <div class="cb ac t70">
                <button class="cont_btn2" type="submit"
                        onClick="document.getElementById('coupang2_pup').style.display='none'; document.getElementById('coupang1_pup').style.display='block';">
                    <img src="{{ _url_('web/img/coupang/bu2.png') }}" class="vm" alt=""> 이전단계로 이동
                </button>
                 
                <button class="cont_btn2" type="submit"
                        onClick="document.getElementById('coupang2_pup').style.display='none'; document.getElementById('coupang3_pup').style.display='block';">
                    다음단계로 이동 <img src="{{ _url_('web/img/coupang/bu3.png') }}" class="vm" alt=""></button>
            </div>
            <div class="t50"></div>
        </div>
    </div>

</div>

<!-- //쿠팡옵션분리설정 end -->


<!-- 쿠팡전송상품 전송정보설정 start -->
<div id="coupang3_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('coupang3_pup').style.display='none';"></div>

    <div class="container" style="margin-top:5%; width:1070px; padding:0px;">
        <div style="background:#2c303b; height:100px; padding:0 20px;">
            <div class="fl pup_images_tit b t30" style="color:#fff; font-size:30px;">
                <img src="{{ _url_('web/img/hot/pup_tit1.png') }}" alt=""> 쿠팡전송상품 전송정보설정
            </div>
            <div class="fr t20"><a href="javascript:vo();"
                                   onClick="document.getElementById('coupang3_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/hot/pup_btn1.png') }}" alt=""></a></div>
            <div class="cb"></div>
        </div>
    </div>
    <div class="container" style="margin-top:0px; padding-top:0px">
        <div class="scroll_bar">


            <div class="fl" style="width:480px;">
                <div class="t20"></div>

                <div class="site_cont_tit2 b" style="color:#da4a38;">상품리스트</div>
                <div class="t05"></div>


                <div class="shop_cont2_tbl">
                    <div class="shop_cont2_tbltit1 b" style="background:#f6f6f6;">
                        선택상품
                    </div>

                    <div class="cb"></div>

                    <div class="shop_cont2_tblnr">

                        <div class="fl brd1"><img src="{{ _url_('web/img/shoppling/image1.jpg') }}" alt=""/>
                        </div>

                        <div class="fl l20 t05">
                            <strong class="pup_text3 r15" style="color:#f26821;">12345678</strong>
                            <img src="{{ _url_('web/img/shoppling/line1.jpg') }}" alt=""/>
                            <span class="pup_text3 l15">testseller(테스트셀러)</span>
                            <div class="pup_text3 t10">손난로 보조배터리 USB 충전식 멀티 ...</div>
                            <div class="pup_text1 t20"><b class="red">4,500</b>원</div>
                        </div>

                        <div class="cb"></div>
                    </div>
                </div>

                <div class="t20"></div>


                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>상품코드/옵션코드</strong></td>
                    </tr>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>상품명</strong></td>
                    </tr>


                    <tr>
                        <td>

                            <div class="t10">
                                [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                                <div class="t10"></div>
                                <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                       value="4단계 마스터 정수필터(3개월마다 교체)"/>
                                <div class="t10"></div>

                                <ul>
                                    <li>
                                        <span style="display:inline-block; width:70px;">색상</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                    <li class="t10">
                                        <span style="display:inline-block; width:70px;">사이즈</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                </ul>
                                <div class="t10"></div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>

                            <div class="t10">
                                [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                                <div class="t10"></div>
                                <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                       value="4단계 마스터 정수필터(3개월마다 교체)"/>
                                <div class="t10"></div>

                                <ul>
                                    <li>
                                        <span style="display:inline-block; width:70px;">색상</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                    <li class="t10">
                                        <span style="display:inline-block; width:70px;">사이즈</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                </ul>
                                <div class="t10"></div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>

                            <div class="t10">
                                [<strong style="color:#f26821;">10214515</strong>] [옵션코드:01] 화이트
                                <div class="t10"></div>
                                <input type="text" title="주소" class="input1" id="a1" style="width:90%; font-size:14px;"
                                       value="4단계 마스터 정수필터(3개월마다 교체)"/>
                                <div class="t10"></div>

                                <ul>
                                    <li>
                                        <span style="display:inline-block; width:70px;">색상</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                    <li class="t10">
                                        <span style="display:inline-block; width:70px;">사이즈</span>
                                        <input type="text" title="주소" class="input1" id="a1"
                                               style="width:74%; font-size:14px;" value="옵션명을 입력하세요"
                                               onFocus="this.value='';"/>
                                    </li>
                                </ul>
                                <div class="t10"></div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="fr" style="width:480px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t20"></div>


                <div class="site_cont_tit2 b" style="color:#da4a38;">쿠팡전송상품 전송정보설정</div>
                <div class="t05"></div>


                <table class="table_06 table_06_style">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>솔루션선택</strong></td>
                    </tr>
                    <tr>
                        <td>

                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="input1" style="width:100%; font-size:15px; line-height:40px; height:40px;">
                                <option value="#">쿠팡</option>
                            </select></td>
                    </tr>


                    <tr>
                        <td class="ac" style="color:#2c303b"><strong>전송템플릿선택</strong></td>
                    </tr>
                    <tr>
                        <td>

                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="input1" style="width:100%; font-size:15px; line-height:40px; height:40px;">
                                <option value="#">템플릿명 템플릿명이다</option>
                            </select></td>
                    </tr>
                    </tbody>
                </table>

                <div class="pup_cont_tit2 t30">판매가산정</div>


                <div class="t20"></div>

                <style type="text/css">
                    .table_06_style {
                        border-top: 1px solid #dfdfdf;
                        border-bottom: 1px solid #dfdfdf;
                        background: #fff
                    }

                    .table_06_style td {
                        padding: 10px !important;
                        height: 25px !important;
                    }

                    .sub3_p_s1 {
                        background: #fff;
                        display: inline-block;
                        width: 100%;
                        position: relative;
                    }

                    .exit_btn {
                        position: absolute;
                        top: 3px;
                        right: 2px;
                        height: 20px;
                        padding-top: 3px;
                        background: #fff;
                        display: none;
                        z-index: 1;

                    }

                    .sub3_p_s1_ip {
                        font-family: 'Nanum Gothic', '나눔고딕', 'Microsoft YaHei', 'YaHei', 'AppleGothic', 'sans-serif';
                        font-size: 15px;
                        color: #666666;
                        text-align: left;
                        background-color: transparent;
                        border: 1px;
                        line-height: 18px;
                        height: 30px;
                        width: 100%;

                    }

                    .sub3_p_s1_ip_r {
                        text-align: right;

                    }

                    .sub3_p_click_on {
                        border: 1px solid #ccc;
                        background: #fff;
                        text-align: center;

                    }
                </style>
                <script type="text/javascript">
                    $(function () {
                        $(".sub3_p_click").click(function () {
                            sub3_1_pup_fc();
                            $("> .sub3_p_s1_ip", this).addClass('sub3_p_click_on');
                            $("> .exit_btn", this).show();


                        })

                        $(".sub3_p_click .exit_btn").click(function () {
                            //$(this).parent(".sub3_1_pup_input1").val("");
                            $(this).parent().find(".sub3_p_s1_ip").val("");


                        })


                    });

                    function sub3_1_pup_fc() {
                        $(".sub3_p_s1_ip").removeClass('sub3_p_click_on');
                        $(".exit_btn").hide();


                    }

                </script>
                <!--onClick="javascript:sub3_1_pup_fc()"-->


                <div class="t10"></div>

                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:100px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>판매가요율</strong></td>
                        <td class="ac"
                            style="color:#2c303b; width:120px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>옵션가요율</strong></td>
                        <td class="ac" style="color:#2c303b; background:#f6f6f6;"><strong>수수료(%)</strong></td>
                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
                            <a href="javascript:sub3_1_pup_fc();"><img
                                    src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a></td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;">
                            <div class="ac">1.2</div>
                        </td>
                        <td style="border-right:1px solid #dddddd;">
                            <div class="ac">1.1</div>
                        </td>
                        <td style="padding-top:0px; padding-bottom:0px;">
                            <div class="ac">1.3</div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>

                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:50%; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>샘플가 ex ) 참고가격</strong></td>
                        <td class="ac" style="color:red; background:#f6f6f6;"><strong>판매가</strong></td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid #dddddd;">
                            <div class="ac">4,500원</div>
                        </td>
                        <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="9,500원"/>
                </span></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>

                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:180px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>할인율(%)</strong></td>
                        <td class="ac" style="color:#2c303b; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>할인가</strong></td>
                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
                            <a href="javascript:sub3_1_pup_fc();"><img
                                    src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a></td>
                    </tr>
                    <tr>
                        <td style="padding-top:0px; padding-bottom:0px; border-right:1px solid #dddddd;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="0원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click sub3_p_s1_right">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip ac" style="" value="0원"/>
                </span></td>
                    </tr>
                    </tbody>
                </table>

                <div class="t10"></div>

                <table class="table_06 table_06_style ">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <td class="ac"
                            style="color:#2c303b; width:180px; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>추가금액(+)</strong></td>
                        <td class="ac" style="color:#2c303b; border-right:1px solid #dddddd; background:#f6f6f6;">
                            <strong>할인금액(-)</strong></td>
                        <td class="ac" style="background:#e0e5f3; width:82px;" rowspan="2">
                            <a href="javascript:sub3_1_pup_fc();"><img
                                    src="{{ _url_('web/img/shoppling/btn1.png') }}" alt=""></a></td>
                    </tr>
                    <tr>
                        <td style="padding-top:0px; padding-bottom:0px; border-right:1px solid #dddddd;">
                <span class="sub3_p_s1 sub3_p_click">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip sub3_p_s1_ip_r" style="" value="0원"/>
                </span></td>
                        <td style="padding-top:0px; padding-bottom:0px;">
                <span class="sub3_p_s1 sub3_p_click sub3_p_s1_right">
                    <a href="javascript:vo();" class="exit_btn"><img
                            src="{{ _url_('web/img/shoppling/exit.jpg') }}" alt=""></a>
                    <input type="text" title="" class="sub3_p_s1_ip sub3_p_s1_ip_r" style="" value="0원"/>
                </span></td>
                    </tr>
                    </tbody>
                </table>


                <div class="cb t50">
                    <button class="cont_btn1" style="background:#da4a38;; width:49%; margin-right:1%;" type="submit"
                            onClick="document.getElementById('coupang3_pup').style.display='none'; document.getElementById('coupang4_pup').style.display='block';">
                        쿠팡전송
                    </button>
                    <button class="cont_btn1 fr" style="width:49%" type="submit"
                            onClick="document.getElementById('coupang3_pup').style.display='none'; document.getElementById('pup_images').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>


                <div class="t100"></div>
            </div>
        </div>
    </div>

</div>

<!-- //쿠팡전송상품 전송정보설정 end -->


<!-- 상품전송실패 start -->
<div id="coupang4_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('coupang4_pup').style.display='none';"></div>

    <div class="container">
        <div class="scroll_bar">
            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('coupang4_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>


            <div class="cb t100"></div>
            <div class="t20"></div>


            <div class="fl" style="width:480px;">
                <div class="t50"><img src="{{ _url_('web/img/coupang/pup_img1.jpg') }}" style="width:99%" alt="">
                </div>
                <div class="pup_text2 ac t40 b">상품전송실패</div>
            </div>


            <div class="fr" style="width:480px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t50"></div>
                <div class="pup_text1 ac">상품전송에 실패하였습니다 <br>
                    전송리스트의 로그확인에서 실패사유확인이 가능합니다<br>
                    이동하겠습니까?
                </div>


                <div class="cb t80 ac">
                    <button class="cont_btn1" style="background:#227547; width:200px;" type="submit"
                            onClick="document.getElementById('coupang4_pup').style.display='none'; document.getElementById('coupang5_pup').style.display='block';">
                        확인
                    </button>
                     
                    <button class="cont_btn1" style=" width:200px;" type="submit"
                            onClick="document.getElementById('coupang4_pup').style.display='none'; document.getElementById('pup_images').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- //상품전송실패 end -->


<!-- 상품전송완료 start -->
<div id="coupang5_pup" class="page_pup">


    <div class="quan_bg" onClick="document.getElementById('coupang5_pup').style.display='none';"></div>

    <div class="container">
        <div class="scroll_bar">
            <div class="fr"><a href="javascript:vo();"
                               onClick="document.getElementById('coupang5_pup').style.display='none'; body_bar2();"><img
                        src="{{ _url_('web/img/main/pup_images_btn.jpg') }}" alt=""></a></div>


            <div class="cb t100"></div>
            <div class="t20"></div>


            <div class="fl" style="width:480px;">
                <div class="t50"><img src="{{ _url_('web/img/coupang/pup_img2.jpg') }}" style="width:99%" alt="">
                </div>
                <div class="pup_text2 ac t40 b">상품전송완료</div>
            </div>


            <div class="fr" style="width:480px; padding-left:20px; border-left:1px solid #dfdfdf;">
                <div class="t50"></div>
                <div class="pup_text1 ac">상품이 전송되었습니다<br>전송리스트로 이동하겠습니까?</div>


                <div class="cb t80 ac">
                    <button class="cont_btn1" style="background:#227547; width:200px;" type="submit"
                            onClick="javascript:location.href='?shoppling20.html'">확인
                    </button>
                     
                    <button class="cont_btn1" style="width:200px;" type="submit"
                            onClick="document.getElementById('coupang5_pup').style.display='none'; document.getElementById('page5_pup').style.display='block';">
                        취소
                    </button>
                    <div class="cb"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- //상품전송완료 end -->


<!--  전체 카테고리 보기 -->
<div id="quan_menu">

    <div class="quan_bg" onClick="document.getElementById('quan_menu').style.display='none';"></div>

    <div class="container">
        <div class="quan_menu_tit_bg">
            <div class="quan_menu_tit fl">전체 카테고리 보기</div>

            <div class="fr t08"><a href="javascript:vo();"
                                   onClick="document.getElementById('quan_menu').style.display='none';"><img
                        src="{{ _url_('web/img/main/img_whiteCloseBtn.png') }}" alt=""/></a></div>

            <div class="cb"></div>
        </div>
        <div class="scroll_bar l20">

            <h1>패션잡화 / 화장품</h1>
            <div class="cb"></div>

            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>

            <div class="cb t30"></div>
            <div class="cb line1"></div>

            <h1>패션잡화 / 화장품</h1>
            <div class="cb"></div>

            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>

            <div class="cb t30"></div>
            <div class="cb line1"></div>

            <h1>패션잡화 / 화장품</h1>
            <div class="cb"></div>

            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>
            <div class="fl">
                <strong>패션소품/액세서리</strong>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a>
                <a href="prod_1.html">패션소품</a></div>

            <div class="cb t100"></div>
        </div>
    </div>

</div>


</body>
</html>
