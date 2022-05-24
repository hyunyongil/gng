@extends('include.layout')

@section('content')


        <!-- 컨텐츠 내용 start -->
        <div class="container">


            <script type="text/javascript">

                $(window).scroll(function () {
                    var st = $(this).scrollTop();
                    var top_menu = $(".header").offset().top;
                    if (st >= top_menu) {
                        $(".p_tap").css({'position': 'fixed', 'top': '0px', 'display': 'block'});

                    } else {
                        $(".p_tap").css({'position': '', 'display': 'none'});
                    }
                })

            </script>
            <div class="header">
                <div class="p_tap hide">
                    <a href="sub3_6.html" class="on">상품DB보관함</a><img src="{{ _url_('web/img/sub/line1.png') }}" alt=""/>
                    <a href="sub3_1.html" class="off">상품DB다운로드</a><img src="{{ _url_('web/img/sub/line1.png') }}"
                                                                       alt=""/>
                    <a href="sub3_2.html" class="off">엑셀다운로드</a><img src="{{ _url_('web/img/sub/line1.png') }}" alt=""/>
                    <a href="sub3_11.html" class="off">엑셀일괄주문</a><img src="{{ _url_('web/img/sub/line1.png') }}"
                                                                      alt=""/>
                    <a href="sub3_5.html" class="off">묶음배송상품DB다운로드</a><img src="{{ _url_('web/img/sub/line1.png') }}"
                                                                           alt=""/>
                    <a href="sub3_7.html" class="off">기획전DB다운로드</a>
                </div>
            </div>

            <div class="cb t30"><img src="{{ _url_('web/img/sub/img3_8.png') }}" alt=""/></div>
            <div class="cb t20"></div>

            <div class="fl">

                <button class="button_5" type="submit" onClick="window.open('MANUAL_DBDOWNLOAD.pdf');">DB다운로드매뉴얼
                </button>
                <button class="button_5" type="submit" onClick="window.open('MANUAL_ORDER.pdf');">엑셀일괄주문매뉴얼</button>
                <button class="button_5" style="width:120px;" type="submit" onClick="window.open('notice1.html');">
                    동영상가이드
                </button>
            </div>
            <div class="fr">
                <button class="n_button3" type="button"
                        onClick="javascript:popup('https://domemedb.domeggook.com/index/popup/popup_soldOut_11st.php', '955','1000','yes');return false"
                        style="width:200px; background:#eb1a33;font-size:14px;"><img
                        src="https://domemedb.domeggook.com/index/common/design/img/sub/icon2.png') }}" alt=""> 11번가
                    품절전송하기
                </button>
                <button class="n_button3 icClick" type="button"
                        style="margin-bottom:0px; padding:8px 20px; background:#5c6066; font-size:14px;"
                        onClick="noneAllDB();">
                    <img src="https://domemedb.domeggook.com/index/common/design/img/sub/ic15.png') }}" alt="">
                    품절리스트전체다운
                </button>
            </div>

            <div class="cb t20"></div>

            <div class="red" style="font-size: 12px;">※ 타 오픈마켓별 솔루션 기능 지원관련 정책이 상이하니 상품 업로드 후 상품정보 및 산업재산권 침해 여부를 반드시
                재확인 바랍니다
                &nbsp;
                <button class="n_button11"
                        style="background:#fff; border:1px solid red; color:red; width:80px; padding:7px 0px"
                        type="submit" onClick="javascript:popup('market1_pup.html', '1000','800', 'yes');return false">
                    주의안내
                </button>
            </div>
            <div class="t10"></div>


            <table class="table_04">
                <caption></caption>
                <tbody>
                <tr>
                    <th>상품등록일</th>
                    <td colspan="3">
                        <input type="text" title="검색" name="검색" class="input1" value="" onFocus="this.value='';"/> ~
                        <input type="text" title="검색" name="검색" class="input1" value="" onFocus="this.value='';"/>

                        <button class="button_3" type="submit" onClick="window.location.href='#'">오늘</button>
                        <button class="button_3" type="submit" onClick="window.location.href='#'">1주일</button>
                        <button class="button_3" type="submit" onClick="window.location.href='#'">1개월</button>
                        <button class="button_3" type="submit" onClick="window.location.href='#'">3개월</button>
                        <button class="button_3" type="submit" onClick="window.location.href='#'">6개월</button>
                        <button class="button_3" type="submit" onClick="window.location.href='#'">1년</button>
                    </td>
                </tr>
                <tr>
                    <th>카테고리선택</th>
                    <td colspan="3">
                        <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                class="select1">
                            <option value="#">1차분류 &nbsp;</option>
                        </select>
                        &nbsp;
                        <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                class="select1">
                            <option value="#">2차분류 &nbsp;</option>
                        </select>
                        &nbsp;
                        <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                class="select1">
                            <option value="#">3차분류 &nbsp;</option>
                        </select>
                        &nbsp;
                        <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                class="select1">
                            <option value="#">4차분류 &nbsp;</option>
                        </select>
                        &nbsp;
                        <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                class="select1">
                            <option value="#">5차분류 &nbsp;</option>
                        </select>
                        &nbsp;
                        <div class="fr r20">
                            <button class="n_button3 icClick" type="button"
                                    style="margin-bottom:0px; background:#3591d0;"
                                    onClick="popup('pup5.html', '1200','900','yes');return false">상품군별 판매자격요건 안내
                            </button>
                        </div>
                        <div class="cb"></div>
                    </td>
                </tr>
                <tr>
                    <th style="width:150px">상품가격대</th>
                    <td style="width:400px">
                        <input type="text" title="검색" name="검색" class="input1" value="" onFocus="this.value='';"/> ~
                        <input type="text" title="검색" name="검색" class="input1" value="" onFocus="this.value='';"/>
                    </td>
                    <th style="width:150px">우수판매자인증</th>
                    <td>
                        <label for="as1"><input type="radio" name="as1" class="" style="margin-top:8px;" value=""
                                                id="as1"/> 전체 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="as2"><input type="radio" name="as1" class="" style="margin-top:8px;" value=""
                                                id="as2"/> 인증업체 </label>
                    </td>
                </tr>
                <tr>
                    <th style="width:150px">상품검색</th>
                    <td colspan="3">
                        <div>
                            <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                                    class="select1">
                                <option value="#">상품명</option>
                                <option value="#">상품번호</option>
                                <option value="#">판매자 아이디</option>
                            </select>
                            &nbsp;
                            <button class="n_button2 icClick" type="button" onClick="swSelect()"
                                    style="margin-bottom:0px;">추가
                            </button>
                            <button class="n_button3 icClick" type="button" onClick="swSelectDel()"
                                    style="margin-bottom:0px;">일괄선택삭제
                            </button>

                            <label style="padding-left:10px;">
                                <input type="checkbox" name="outCate" value="1" id="outCate">
                                선택항목 제외
                            </label>
                        </div>
                        <div class="t05"><textarea name="textarea" rows="5" id="a3" class="textarea1"
                                                   style="width:90%; resize:none;"></textarea></div>
                        <div class="red">enter 또는 ,로 복수검색이 가능합니다</div>
                    </td>
                </tr>
                <tr>
                    <th>최저가인증</th>
                    <td>
                        <label for="aa1"><input type="radio" name="aa1" class="" style="margin-top:8px;" value=""
                                                id="aa1"/> 전체 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="aa2"><input type="radio" name="aa1" class="" style="margin-top:8px;" value=""
                                                id="aa2"/> 최저가확인상품 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="aa3"><input type="radio" name="aa1" class="" style="margin-top:8px;" value=""
                                                id="aa3"/> 해당없음 </label>
                    </td>
                    <th>과세여부</th>
                    <td>
                        <label for="bb1"><input type="radio" name="bb1" class="" style="margin-top:8px;" value=""
                                                id="bb1"/> 전체 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="bb2"><input type="radio" name="bb1" class="" style="margin-top:8px;" value=""
                                                id="bb2"/> 과세 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="bb3"><input type="radio" name="bb1" class="" style="margin-top:8px;" value=""
                                                id="bb3"/> 면세 </label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="bb4"><input type="radio" name="bb1" class="" style="margin-top:8px;" value=""
                                                id="bb4"/> 영세 </label>
                    </td>
                </tr>
                <tr>
                    <th style="width:150px">판매자등급</th>
                    <td colspan="3">
                        <label for="cc1"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc1"/> 전체</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="cc2"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc2"/> 1등급이상</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="cc3"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc3"/> 2등급이상</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="cc4"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc4"/> 3등급이상</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="cc5"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc5"/> 4등급이상</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="cc6"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                id="cc6"/> 5등급이상</label>
                    </td>
                </tr>
                <tr>
                    <th style="width:150px">전세계배송가능여부</th>
                    <td colspan="3">
                        <label for="ee1"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                id="ee1"/> 전체</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="ee2"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                id="ee2"/> 국내배송(전세계배송불가)</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="ee3"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                id="ee3"/> 전세계배송가능상품</label>
                    </td>
                </tr>
                <tr>
                    <th>배송비</th>
                    <td colspan="3">
                        <label for="dd1"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                id="dd1"/> 전체</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="dd2"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                id="dd2"/> 무료배송상품</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="dd3"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                id="dd3"/> 유료배송상품</label>

                        &nbsp;&nbsp;&nbsp; &nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;|
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="pp1"><input type="checkbox" name="pp1" class="" style="margin-top:0px;" value=""
                                                id="pp1"/> 수량별비례상품 제외</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="pp2"><input type="checkbox" name="pp2" class="" style="margin-top:0px;" value=""
                                                id="pp2" checked/> 구간별배송료추가상품 제외</label>


                        <div class="red" style="line-height:20px;">※ 스마트스토어를 제외한 11번가,샵플링,이셀러스,사방넷 솔루션은 수량별비례 배송료 기능을
                            지원하지 않습니다
                        </div>
                        <div class="l15" style="line-height:20px;">해당 솔루션에 상품등록을 원하는 경우, 반드시 수량별비례상품을 제외하고 검색하시기 바랍니다
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>원산지</th>
                    <td>
                        <label for="ff1"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                id="ff1"/> 전체</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="ff2"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                id="ff2"/> 국내산</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="ff3"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                id="ff3"/> 국외산</label>
                    </td>
                    <th>성인전용상품여부</th>
                    <td>
                        <label for="rr1"><input type="radio" name="rr1" class="" style="margin-top:8px;" value=""
                                                id="rr1"/> 전체</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="rr2"><input type="radio" name="rr1" class="" style="margin-top:8px;" value=""
                                                id="rr2"/> 성인전용상품</label>
                        &nbsp;&nbsp;&nbsp; &nbsp;
                        <label for="rr3"><input type="radio" name="rr1" class="" style="margin-top:8px;" value=""
                                                id="rr3"/> 성인전용상품 제외</label>
                    </td>
                </tr>
                </tbody>
            </table>


            <!--
                                    <div class="t30 ac">
                                        <button class="button13" type="submit" onClick="document.getElementById('jiasousuo').style.display='block';" style="width:150px; height:43px;">+ 상세검색</button>
                                    </div>
            -->


            <!-- 상세검색 start -->
            <div id="jiasousuo" class="hide">


                <table class="table_04">
                    <caption></caption>
                    <tbody>
                    <tr>
                        <th style="width:150px">판매자등급</th>
                        <td colspan="3">
                            <label for="cc1"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc1"/> 전체</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="cc2"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc2"/> 1등급이상</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="cc3"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc3"/> 2등급이상</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="cc4"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc4"/> 3등급이상</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="cc5"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc5"/> 4등급이상</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="cc6"><input type="radio" name="cc1" class="" style="margin-top:8px;" value=""
                                                    id="cc6"/> 5등급이상</label>
                        </td>
                    </tr>
                    <tr>
                        <th>배송비</th>
                        <td style="width:400px">
                            <label for="dd1"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                    id="dd1"/> 전체</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="dd2"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                    id="dd2"/> 무료배송상품</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="dd3"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                    id="dd3"/> 유료배송(선불)</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="dd4"><input type="radio" name="dd1" class="" style="margin-top:8px;" value=""
                                                    id="dd4"/> 유료배송(착불)</label>
                        </td>
                        <th style="width:150px">전세계배송가능여부</th>
                        <td>
                            <label for="ee1"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                    id="ee1"/> 전체</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="ee2"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                    id="ee2"/> 국내배송(전세계배송불가)</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="ee3"><input type="radio" name="ee1" class="" style="margin-top:8px;" value=""
                                                    id="ee3"/> 전세계배송가능상품</label>
                        </td>
                    </tr>
                    <tr>
                        <th>원산지</th>
                        <td>
                            <label for="ff1"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                    id="ff1"/> 전체</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="ff2"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                    id="ff2"/> 국내산</label>
                            &nbsp;&nbsp;&nbsp; &nbsp;
                            <label for="ff3"><input type="radio" name="ff1" class="" style="margin-top:8px;" value=""
                                                    id="ff3"/> 국외산</label>
                        </td>
                        <th>성인전용상품여부</th>
                        <td>&nbsp;
                        </td>
                    </tr>
                    </tbody>
                </table>


            </div>

            <!-- //상세검색 end -->


            <div class="t30 ac">
                <button class="button13" type="submit" onClick="window.location.href='#'"
                        style="width:150px; height:43px;">검색
                </button>
                &nbsp;
                <button class="button14" type="submit" onClick="window.location.href='#'"
                        style="width:150px; height:43px;">검색초기화
                </button>
            </div>

            <div class="t30"></div>


            <table class="table_04">
                <caption></caption>
                <tbody>
                <tr>
                    <th style="width:150px">결과내재검색</th>
                    <td>
                        <input type="text" title="검색" name="검색" class="input1" value="" style="width:400px;"
                               onFocus="this.value='';"/>
                        &nbsp;상품명, 판매자ID, 닉네임으로만 검색가능합니다

                    </td>
                </tr>
                </tbody>
            </table>


            <div class="t30 ac">
                <button class="button13" type="submit" onClick="window.location.href='#'"
                        style="width:150px; height:43px;">결과내재검색
                </button>
                &nbsp;
                <button class="button14" type="submit" onClick="window.location.href='#'"
                        style="width:150px; height:43px;">검색초기화
                </button>
            </div>


            <div class="t50"></div>
            <div class="fl">
                <div style="display:inline-block; cursor:pointer" class="txt8"><label for="q1"><input type="checkbox"
                                                                                                      name="q1"
                                                                                                      class="input_check2"
                                                                                                      value="" id="q1"/><span
                            class="input_check2_span"></span>
                        <div style="	 display:inline-block; padding:0 10px"><font class="">전체선택</font></div>
                    </label></div>

                <div style="display:inline-block; padding-left:0px; cursor:pointer" id="allSel">
                    <select class="select1" id="folderSel" name="folderSel">
                        <option value="default">기본보관함(97개)</option>
                    </select>

                </div>

                <div style="display:inline-block;" class="l05 prod_tbl_tit1">총 12건이 검색되었습니다</div>
                <div style="display:inline-block;" class="l05">
                    <button class="button20" style="background:#f1641a; width:120px;" type="button"
                            onClick="javascript:window.open('{{ _url_('excel_download') }}');return false">엑셀출력
                    </button>

                    <button class="button20" style="background:#0c5460; width:120px;" type="button"
                            onClick="javascript:window.open('{{ _url_('posts') }}');return false">상품등록
                    </button>
                </div>


            </div>

            <div class="s_cont_tit1 fr red">* 상품DB담기는 1회당 2만개 이하로 제한됩니다</div>
            <div class="cb line3"></div>


            <div class="">
                <div class="fl t20 prod_tbl1">
                    <a href="#">인기상품순</a>
                    &nbsp;&nbsp;<img src="{{ _url_('web/img/prod/line1.jpg') }}" class="vm" alt=""/>
                    <a href="#">최근등록순</a>
                    &nbsp;&nbsp;<img src="{{ _url_('web/img/prod/line1.jpg') }}" class="vm" alt=""/>
                    <a href="#">낮은가격순</a>
                    &nbsp;&nbsp;<img src="{{ _url_('web/img/prod/line1.jpg') }}" class="vm" alt=""/>
                    <a href="#">높은가격순</a>
                    &nbsp;&nbsp;<img src="{{ _url_('web/img/prod/line1.jpg') }}" class="vm" alt=""/>
                </div>
                <div class="fr t15 ">
                <!--
                                                <a href="javascript:SetListGallery(1);"><img src="{{ _url_('web/img/prod/btn1.jpg') }}" id="SetListGallery_1" class="vm" alt=""></a>
                                                <a href="javascript:SetListGallery(2);"><img src="{{ _url_('web/img/prod/btn2_on.jpg') }}" id="SetListGallery_2" class="vm" alt=""></a>
                                                &nbsp;
                -->
                    <select name="select" onChange="window.location=options[(this.selectedIndex)].value"
                            class="select1">
                        <option value="#">20개씩 보기</option>
                        <option value="#">30개씩 보기</option>
                        <option value="#">50개씩 보기</option>
                        <option value="#">100개씩 보기</option>
                    </select>
                </div>
                <div class="cb t10"></div>

            </div>


            <div class="line1 t10"></div>
            <style type="text/css">

                .input_check2_span {
                    position: relative;
                    top: 2px;

                }

                .input_check2 {
                    position: absolute;
                    visibility: hidden;
                }

                .input_check2 + span {
                    display: inline-block;
                    width: 13px;
                    height: 13px;
                    border: 1px solid #000;
                    border-radius: 0px;
                    background: #fff;
                }


                .input_check2:checked + span:after {
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


            <table class="table02_l" style="border:1px solid #dddddd">
                <caption></caption>
                <tbody>
                <tr>
                    <th rowspan="2" width="50px;">
                        <div class="input_check3_">
                            <label for="w1"><input type="checkbox" name="w1" class="input_check3" value=""
                                                   id="w1"/><span class="input_check3_span"></span></label>
                        </div>
                    </th>
                    <th rowspan="2" width="85px">상품이미지</th>
                    <th height="10" width="350px" style="padding:5px 0">상품번호 / 판매자닉네임(ID)</th>
                    <th rowspan="2">공급가</th>
                    <th rowspan="2">재고수량</th>
                    <th rowspan="2">과세여부</th>
                    <th rowspan="2">최저가여부</th>
                    <th rowspan="2">옵션유무</th>
                    <th rowspan="2">배송출발지</th>
                    <th rowspan="2">배송비결제방식</th>
                    <th rowspan="2" width="95px">전세계배송 <br/>가능여부</th>
                </tr>
                <tr>
                    <th height="10" style="padding:5px 0">상품명</th>
                </tr>
                @foreach($itemData as $data)
                    <tr class="sub_cont_bane2_tr">
                        <td>
                            <div class="input_check3_">
                                <label for="t1"><input type="checkbox" name="t1" class="input_check3" value="" id="t1"/><span
                                        class="input_check3_span"></span></label>
                            </div>
                        </td>
                        <td class="sub_cont_bane2">
                            <!-- 오버부분 -->
                            <div class="sub_cont_bane2_over"
                                 onClick="document.getElementById('pup_images').style.display='block';body_bar1();">
                                <div class="ac t30">
                                    <a href="#"><img src="{{ _url_('web/img/main/main_cont_bane1_over.png') }}"
                                                     alt="상품정보보기"/></a>
                                </div>
                            </div>
                            <!-- //오버부분 -->
                            <a href="javascript:vo();"><img src="{{$data->largeImage}}"
                                                            style="width:80px;" alt=""/></a>
                        </td>
                        <td class="al">
                            <div class="txt39"><strong style="color:#000">{{$data->itemNo}}</strong> / <strong
                                    style="color:#000">SK인터내셔널1</strong>(skint)
                                <button class="main_cont_bu3" type="submit"
                                        style="background:#fff; border:1px solid #ff643c; color:#ff643c; "
                                        onClick="window.open('http://domeme.domeggook.com/s/{{$data->itemNo}}')">구매하기
                                </button>
                            </div>
                            <div class="main_cont_text1 b"><a href="javascript:vo"
                                                              onClick="document.getElementById('pup_images').style.display='block';body_bar1();">{{$data->itemName}}</a>
                            </div>
                        </td>
                        <td>{{ number_format($data->supplyPrice) }} 원</td>
                        <td>100개</td>
                        <td><span style="color:#cf6d34;">과세</span></td>
                        <td>최저가</td>
                        <td><span style="color:#4ebb6d;">옵션있음</span></td>
                        <td><span style="color:#cf6d34;">국내</span></td>
                        <td><span style="color:#427ac7;">무료배송</span></td>
                        <td><span style="color:#cf6d34;">전세계배송가능상품</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="cb t20"></div>

            <div class="text_2" style="font-weight:normal; color:#0f2c53">법적문제가 발생했나요? 전문셀러 보호를 위해 법률자문 서비스를 지원합니다
                &nbsp;
                <button class="n_button11"
                        style="background:#fff; border:1px solid #0f2c53; color:#0f2c53; width:110px; padding:7px 0px"
                        type="submit" onClick="javascript:popup('falv_pup.html', '1000','800', 'yes');return false">
                    법률자문바로가기
                </button>
            </div>


            <div class="col-md-12">
                <div class="page_number">
                    {!! $itemData->links() !!}
                </div>
            </div>


        </div>
        <div class="cb t50"></div>


        <!-- // 컨텐츠 내용 end -->
@endsection
