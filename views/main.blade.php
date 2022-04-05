@extends("layouts.app", ["css" =>  ""])

@section("contents")

    <section class="sect sect-intro">
        <article class="sect-area">
            <div class="sect-container">
                <div class="sub">
                    <p>OCEAN2YOU RESORT</p>
                    <span>2022. 03. 28</span>
                </div>
                <div class="title">
                    <h2 class="title"><img
                            src="https://static.neowizreserve.co.kr/img/main/main_intro_title.png"
                            alt="오션투유 리저브 속초설악비치콘도" /></h2>
                    <span>청정 자연과 프라이빗 전용해변의 만남</span>
                    <span>강원도 설악, 속초, 고성에 위치한 오션투유 리조트</span>
                </div>
                <div class="weather">
                    <img id="img-weather"
                         src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_sun.png" alt="해">
                    <!--
                    <img src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_sun.png" alt="해">
                    <img src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_blur.png" alt="흐림">
                    <img src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_cloud.png" alt="구름">
                    <img src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_rain.png" alt="비">
                    <img src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_snow.png" alt="눈"/> -->
                    <div>
                        <p>고성날씨-맑음</p>
                        <span>-8 <em>ºC</em></span>
                        <div><img
                                src="https://static.neowizreserve.co.kr/img/main/weather/main_intro_weather01.png"
                                alt="날씨아이콘" /> 미세먼지 - 보통</div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <script>
        function get_weather() {
            var html = "";
            // 날씨 조회
            $.ajax({
                type: "GET",
                url: "http://www.ocean2youresort.co.kr/api/weather.php",
                async: false,
                dataType: "JSON",
                success: function (res) {
                    if (res.w) {
                        console.log(res.w);
                        switch (res.w) {
                            case "0": $w_img = "sun"; break;      // 해
                            case "1":
                            case "2": $w_img = "rain"; break;     // 비
                            case "6":
                            case "7": $w_img = "snow"; break;     // 눈
                            //case "0" :  $w_img = "blur"; break;     // 흐림
                            //case "2" :  $w_img = "cloud"; break;    // 구름
                        }
                        if ($w_img) {
                            $("#img-weather").prop("src", "https://static.neowizreserve.co.kr/img/main/weather/main_intro_" + $w_img + ".png");
                        }
                        html += "<p>고성날씨-" + res.ww + "</p>";
                    }
                    if (res.t) {
                        html += "<span>" + res.t + " <em>ºC</em></span>";
                    }
                }
            });

            // 미세먼지 조회
            $.ajax({
                type: "GET",
                url: "http://www.ocean2youresort.co.kr/api/dust.php",
                async: false,
                dataType: "JSON",
                success: function (res) {
                    if (res.text != "") {
                        html += "<div><img src=\"https://static.neowizreserve.co.kr/img/main/weather/main_intro_weather01.png\" alt=\"날씨아이콘\" /> 미세먼지 - " + res.text + " </div>";
                    }
                }
            });


            if (html) {
                $(".weather DIV").html(html);
            }
        }

        $(function (e) {
            get_weather();
        });
    </script>

    <section class="sect sect-room">
        <article class="sect-area">
            <div class="sect-container">
                <div class="sect-title-box">
                    <h3 class="title">오션투유 리저브 룸타입</h3>
                </div>
                <div class="contents">
                    <div class="slide-area slide-room">
                        <ul class="slide-room-ul">
                            <!--주석처리(유지)-->
                            <!-- <li class="item">
                    <div class="room-viewer-area">
                        <ul class="room-viewer-ul">
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_roy_01.jpg" alt="로얄스위트 오션뷰 테라스"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_roy_02.jpg" alt="로얄스위트 오션뷰 테라스"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_roy_03.jpg" alt="로얄스위트 오션뷰 테라스"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_roy_04.jpg" alt="로얄스위트 오션뷰 테라스"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_roy_05.jpg" alt="로얄스위트 오션뷰 테라스"></li>

                        </ul>
                    </div>
                    <div class="room-info-area">
                        <div class="info-box">
                            <div class="title-box">
                                <div class="title-img">
                                    <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png" alt="타이틀이미지">
                                </div>
                                <p class="title-main">로얄스위트 오션뷰 테라스</p>
                                <p class="title-sub">
                                    동해가 완벽하게 펼쳐진 개방형 객실뷰,
                                    <br>
                                    럭셔리타입의 프라이빗 스타일룸
                                </p>
                            </div>
                            <div class="type-box">
                                <div class="type-txt-box">
                                    <p>
                                        <span class="span-mark">ㆍ크기 :</span>
                                        <span>46평</span>
                                    </p>
                                    <p>
                                        <span class="span-mark">ㆍ수용인원 : </span>
                                        <span>기준인원 6인(최대10인)</span>
                                    </p>
                                </div>
                                <a href="../room/room01.html" class="btn-go">
                                    <span>VIEW</span>
                                    <span class="icon-go">
                                        <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png" alt="아이콘">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="room-viewer-control"></div>
                    </div>
                </li> -->
                            <!--./주석처리(유지)-->
                            <li class="item">
                                <div class="room-viewer-area">
                                    <ul class="room-viewer-ul">
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ov_tera_01.jpg"
                                                alt="리노베이션테라스"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ov_tera_02.jpg"
                                                alt="리노베이션테라스"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ov_tera_03.jpg"
                                                alt="리노베이션테라스"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ov_tera_04.jpg"
                                                alt="리노베이션테라스"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ov_tera_05.jpg"
                                                alt="리노베이션테라스"></li>
                                    </ul>
                                </div>
                                <div class="room-info-area">
                                    <div class="info-box">
                                        <div class="title-box">
                                            <div class="title-img">
                                                <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png"
                                                     alt="타이틀이미지">
                                            </div>
                                            <p class="title-main">리노베이션 오션뷰 테라스</p>
                                            <p class="title-sub">
                                                바다가 한쪽의 그림처럼 펼쳐지며,<br> 원목의 테라스가 있는 프라이빗한 콘도형 디럭스룸
                                            </p>
                                        </div>
                                        <div class="type-box">
                                            <div class="type-txt-box">
                                                <p>
                                                    <span class="span-mark">ㆍ크기 :</span>
                                                    <span>23평</span>
                                                </p>
                                                <p>
                                                    <span class="span-mark">ㆍ수용인원: </span>
                                                    <span>기준인원 4인(최대7인)</span>
                                                </p>
                                            </div>
                                            <a href="http://www.ocean2youresort.co.kr/intro/?p=HV0MTHAT"
                                               class="btn-go">
                                                <span>VIEW</span>
                                                <span class="icon-go">
                                                            <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png"
                                                                 alt="아이콘">
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="room-viewer-control"></div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="room-viewer-area">
                                    <ul class="room-viewer-ul">
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_co_ov_01.jpg"
                                                alt="리노베이션콘도"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_co_ov_02.jpg"
                                                alt="리노베이션콘도"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_co_ov_03.jpg"
                                                alt="리노베이션콘도"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_co_ov_04.jpg"
                                                alt="리노베이션콘도"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_co_ov_05.jpg"
                                                alt="리노베이션콘도"></li>
                                    </ul>
                                </div>
                                <div class="room-info-area">
                                    <div class="info-box">
                                        <div class="title-box">
                                            <div class="title-img">
                                                <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png"
                                                     alt="타이틀이미지">
                                            </div>
                                            <p class="title-main">리노베이션 콘도 오션뷰</p>
                                            <p class="title-sub">
                                                고급스러운 색채와 편안한 분위기의 침실, <br> 넓은 공간 활용이 매력적이며 취사가 가능한 콘도형 룸
                                            </p>
                                        </div>
                                        <div class="type-box">
                                            <div class="type-txt-box">
                                                <p>
                                                    <span class="span-mark">ㆍ크기 :</span>
                                                    <span>23평</span>
                                                </p>
                                                <p>
                                                    <span class="span-mark">ㆍ수용인원: </span>
                                                    <span>기준인원 4인(최대7인)</span>
                                                </p>
                                            </div>
                                            <a href="http://www.ocean2youresort.co.kr/intro/?p=HV0MTHAS"
                                               class="btn-go">
                                                <span>VIEW</span>
                                                <span class="icon-go">
                                                            <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png"
                                                                 alt="아이콘">
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 컨트롤박스 -->
                                    <div class="room-viewer-control"></div>
                                </div>
                            </li>
                            <!--주석처리(유지)-->
                            <!-- <li class="item">
                    <div class="room-viewer-area">
                        <ul class="room-viewer-ul">
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ho_ov_01.jpg" alt="리노베이션콘도"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ho_ov_02.jpg" alt="리노베이션콘도"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ho_ov_03.jpg" alt="리노베이션콘도"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ho_ov_04.jpg" alt="리노베이션콘도"></li>
                            <li class="viewer-item"><img src="https://static.neowizreserve.co.kr/img/facil/roomtype_re_ho_ov_05.jpg" alt="리노베이션콘도"></li>
                        </ul>
                    </div>
                    <div class="room-info-area">
                        <div class="info-box">
                            <div class="title-box">
                                <div class="title-img">
                                    <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png" alt="타이틀이미지">
                                </div>
                                <p class="title-main">리노베이션 호텔 오션뷰</p>
                                <p class="title-sub">
                                    편안하고 아늑한 분위기의 침실과<br> 독립적 공간 활용이 매력적인 호텔형 오션뷰 룸
                                </p>
                            </div>
                            <div class="type-box">
                                <div class="type-txt-box">
                                    <p>
                                        <span class="span-mark">ㆍ크기 :</span>
                                        <span>23평</span>
                                    </p>
                                    <p>
                                        <span class="span-mark">ㆍ수용인원: </span>
                                        <span>기준인원 4인(최대7인)</span>
                                    </p>
                                </div>
                                <a href="../room/room04.html" class="btn-go">
                                    <span>VIEW</span>
                                    <span class="icon-go">
                                        <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png" alt="아이콘">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="room-viewer-control"></div>
                    </div>
                </li> -->
                            <!--주석처리(유지)-->
                            <li class="item">
                                <div class="room-viewer-area">
                                    <ul class="room-viewer-ul">
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_ov_01.jpg"
                                                alt="콘도 오션뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_ov_02.jpg"
                                                alt="콘도 오션뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_ov_03.jpg"
                                                alt="콘도 오션뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_ov_04.jpg"
                                                alt="콘도 오션뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_ov_05.jpg"
                                                alt="콘도 오션뷰"></li>
                                    </ul>
                                </div>
                                <div class="room-info-area">
                                    <div class="info-box">
                                        <div class="title-box">
                                            <div class="title-img">
                                                <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png"
                                                     alt="타이틀이미지">
                                            </div>
                                            <p class="title-main">일반콘도 오션뷰</p>
                                            <p class="title-sub">
                                                편안한 인테리어와<br>아름다운 삼포해변이 보이는 콘도형 오션뷰 룸
                                            </p>
                                        </div>
                                        <div class="type-box">
                                            <div class="type-txt-box">
                                                <p>
                                                    <span class="span-mark">ㆍ크기 :</span>
                                                    <span>23평</span>
                                                </p>
                                                <p>
                                                    <span class="span-mark">ㆍ수용인원: </span>
                                                    <span>기준인원 4인(최대7인)</span>
                                                </p>
                                            </div>
                                            <a href="http://www.ocean2youresort.co.kr/intro/?p=HV0MTHAU"
                                               class="btn-go">
                                                <span>VIEW</span>
                                                <span class="icon-go">
                                                            <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png"
                                                                 alt="아이콘">
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 컨트롤박스 -->
                                    <div class="room-viewer-control"></div>
                                </div>
                            </li>

                            <li class="item">
                                <div class="room-viewer-area">
                                    <ul class="room-viewer-ul">
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_mv_01.jpg"
                                                alt="콘도 마운틴뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_mv_02.jpg"
                                                alt="콘도 마운틴뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_mv_03.jpg"
                                                alt="콘도 마운틴뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_mv_04.jpg"
                                                alt="콘도 마운틴뷰"></li>
                                        <li class="viewer-item"><img
                                                src="https://static.neowizreserve.co.kr/img/facil/roomtype_st_su_dx_mv_05.jpg"
                                                alt="콘도 마운틴뷰"></li>
                                    </ul>
                                </div>
                                <div class="room-info-area">
                                    <div class="info-box">
                                        <div class="title-box">
                                            <div class="title-img">
                                                <img src="https://static.neowizreserve.co.kr/img/facil/fcdetail/accom_text.png"
                                                     alt="타이틀이미지">
                                            </div>
                                            <p class="title-main">일반콘도 마운틴뷰</p>
                                            <p class="title-sub">
                                                바다가 한쪽의 그림처럼 펼쳐지며,<br> 원목의 테라스가 있는 프라이빗한 콘도형 디럭스룸
                                            </p>
                                        </div>
                                        <div class="type-box">
                                            <div class="type-txt-box">
                                                <p>
                                                    <span class="span-mark">ㆍ크기 :</span>
                                                    <span>23평</span>
                                                </p>
                                                <p>
                                                    <span class="span-mark">ㆍ수용인원: </span>
                                                    <span>기준인원 4인(최대7인)</span>
                                                </p>
                                            </div>
                                            <a href="http://www.ocean2youresort.co.kr/intro/?p=HV0MTHAU"
                                               class="btn-go">
                                                <span>VIEW</span>
                                                <span class="icon-go">
                                                            <img src="https://static.neowizreserve.co.kr/img/main/room/icon_arrow_go.png"
                                                                 alt="아이콘">
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="room-viewer-control"></div>
                                </div>
                            </li>
                        </ul>
                        <div class="room-slide-control">
                            <div class="control-dots"></div>
                            <div class="control-arrows">
                                <button type="button" class="btn-slide-prev">
                                    <img src="https://static.neowizreserve.co.kr/img/main/main_sub_left_black.png"
                                         alt="이전">
                                </button>
                                <button type="button" class="btn-slide-next">
                                    <img src="https://static.neowizreserve.co.kr/img/main/main_sub_right_black.png"
                                         alt="다음">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="sect sect-dining">
        <article class="sect-area">
            <div class="sect-container">
                <div class="sect-title-box">
                    <h3 class="title">다이닝&부대시설</h3>
                    <a href="../dining/" class="btn-go-page"> + 전체보기</a>
                </div>
                <div class="contents">
                    <div class="slide-area slide-dining">
                        <ul class="slide-ul">
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=C1sNSC5GcBI=" class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining01.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">조식뷔페 다연</p>
                                        <p class="p-txt">
                                            다채로운 전채요리부터 달콤한<br>
                                            디저트 코너까지 한자리에서<br>
                                            만끽할 수 있는 조식 뷔페
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=C1sNSC5GcBE=" class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining02.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">바베큐장</p>
                                        <p class="p-txt">
                                            지글지글 담백하고 맛있게<br>
                                            숯불향을 입힌 숯불갈비와<br>
                                            즐거운 바베큐장
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=C1sNSC5GcBA=" class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining03.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">속초 횟집</p>
                                        <p class="p-txt">
                                            당일 경매로 낙찰받은 청정 동해안<br>
                                            에서 잡은 횟감을 신선하고 싱싱<br>
                                            하게 맛보실 수 있습니다.
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=C1sNSC5GcBc=" class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining04.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">반데라 리얼바베큐 플레이츠</p>
                                        <p class="p-txt">
                                            훈연의 향이 가득한<br>
                                            반데라 리얼바베큐 플레이츠를<br>
                                            동해의 삼포해변에서 즐기세요.
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=Dl8GTylVKUYcAlI="
                                   class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining05.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">연회장</p>
                                        <p class="p-txt">
                                            최대 1,800명까지 기업행사, 오리엔테 <br />이션을 할 수 있는 넓고 편안한 연회장. <br />최대
                                            1,800명까지 수용가능
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=Dl8GTylVKUYcAlE="
                                   class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining06.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">노래방</p>
                                        <p class="p-txt">
                                            좋은 사람들과 함께 신나게 재미있게<br />스트레스 완전정복<br /><br />
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=Dl8GTylVKUYcAlU="
                                   class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining07.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">코인세탁실</p>
                                        <p class="p-txt">
                                            빨래, 건조는 리조트 안에서<br />간편하게 해결하세요.<br /><br />
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://www.ocean2youresort.co.kr/intro/?p=Dl8GTylVKUYcAls="
                                   class="btn-go">
                                    <div class="img-box">
                                        <img src="https://static.neowizreserve.co.kr/img/main/dining/main_dining08.jpg"
                                             alt="이미지">
                                    </div>
                                    <div class="info-box">
                                        <p class="p-name">GS25 편의점</p>
                                        <p class="p-txt">
                                            준비하지 못한 용품과 편의제품,<br />먹거리를 편리하게 구매하세요.<br /><br />
                                        </p>
                                        <p class="p-view">VIEW</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <button type="button" class="btn-control btn-slide-prev"><img
                                src="https://static.neowizreserve.co.kr/img/main/main_sub_left_white.png"
                                alt="왼쪽"></button>
                        <button type="button" class="btn-control btn-slide-next"><img
                                src="https://static.neowizreserve.co.kr/img/main/main_sub_right_white.png"
                                alt="오른쪽"></button>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="sect sect-partner">
        <article class="sect-area">
            <div class="sect-container">
                <div class="title-box">
                    <h3 class="title">추천 제휴시설</h3>
                    <div class="btn-seletor-box">
                        <button type="button" class="btn-on">정선인투라온호텔</button>
                        <button type="button">역삼아르누보</button>
                    </div>
                    <a href="../tourist/" class="btn-go-page">+ 전체보기</a>
                </div>
                <div class="contents">
                    <ul class="partner-info-ul">
                        <li class="on">
                            <div class="img-area">
                                <div class="img-box"><img
                                        src="https://static.neowizreserve.co.kr/img/partner/partner_main01.jpg"
                                        alt="이미지"></div>
                                <p class="p-location">강원도 정선</p>
                            </div>
                            <div class="info-area">
                                <div class="info-title-box">
                                    <p class="info-title">정선인투라온호텔</p>
                                    <p class="info-sub">
                                        인투라온호텔은 아름다운 자연, 싱그러움과 설레임으로 가득한
                                        강원도 정선 사북에 위치해 있습니다.
                                    </p>
                                </div>
                                <div class="info-type-box">
                                    <p>· 객실: 467개</p>
                                    <p>· 시설: 연회장, 비즈니스룸, 레스토랑, 바/라운지 등</p>
                                    <p>· 소재: 강원도 정선군 사북읍 지장천로 583</p>
                                </div>
                                <a href="#none" class="btn-go-reserve">
                                    <span>예약하기</span>
                                    <span class="icon-go">
                                                <img src="https://static.neowizreserve.co.kr/img/partner/icon_arrow_go.png"
                                                     alt="아이콘">
                                            </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="img-area">
                                <div class="img-box"><img
                                        src="https://static.neowizreserve.co.kr/img/partner/partner_main02.jpg"
                                        alt="이미지"></div>
                                <p class="p-location">서울시 역삼동</p>
                            </div>
                            <div class="info-area">
                                <div class="info-title-box">
                                    <p class="info-title">역삼아르누보호텔</p>
                                    <p class="info-sub">
                                        인투라온호텔은 아름다운 자연, 싱그러움과 설레임으로 가득한
                                        강원도 정선 사북에 위치해 있습니다.
                                    </p>
                                </div>
                                <div class="info-type-box">
                                    <p>· 객실: 266개 | · 역삼역 도보5분 거리</p>
                                    <p>· 시설: 웨딩/연회장, 비즈니스룸, 레스토랑, 루프탑 </p>
                                    <p>· 소재: 서울시 강남구 언주로 506</p>
                                </div>
                                <a href="#none" class="btn-go-reserve">
                                    <span>예약하기</span>
                                    <span class="icon-go">
                                                <img src="https://static.neowizreserve.co.kr/img/partner/icon_arrow_go.png"
                                                     alt="아이콘">
                                            </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>

    <section class="sect sect-tourist">
        <article class="sect-area">
            <div class="sect-container">
                <div class="sect-title-box">
                    <h3 class="title">즐거운 고성/속초여행</h3>
                    <a href="http://www.ocean2youresort.co.kr/tourist" class="btn-go-page">+ 전체보기</a>
                </div>
                <div class="contents">
                    <ul class="tourist-ul">
                        <li>
                            <a href="http://www.ocean2youresort.co.kr/tourist" class="btn-go">
                                <div class="img-box">
                                    <img src="https://static.neowizreserve.co.kr/img/main/tourist/main_tourist01.jpg"
                                         alt="이미지">
                                </div>
                                <p class="item-title">체험관광</p>
                                <p class="item-tag">
                                    <span>바이크</span>
                                    <span>배낚시</span>
                                    <span>속초관광수산시장</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ocean2youresort.co.kr/tourist" class="btn-go">
                                <div class="img-box">
                                    <img src="https://static.neowizreserve.co.kr/img/main/tourist/main_tourist02.jpg"
                                         alt="이미지">
                                </div>
                                <div class="item-title">자연관광</div>
                                <p class="item-tag">
                                    <span>바이크</span>
                                    <span>배낚시</span>
                                    <span>속초관광수산시장</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ocean2youresort.co.kr/tourist" class="btn-go">
                                <div class="img-box">
                                    <img src="https://static.neowizreserve.co.kr/img/main/tourist/main_tourist03.jpg"
                                         alt="이미지">
                                </div>
                                <div class="item-title">사찰/유적 관광</div>
                                <p class="item-tag">
                                    <span>바이크</span>
                                    <span>배낚시</span>
                                    <span>속초관광수산시장</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ocean2youresort.co.kr/tourist" class="btn-go">
                                <div class="img-box">
                                    <img src="https://static.neowizreserve.co.kr/img/main/tourist/main_tourist04.jpg"
                                         alt="이미지">
                                </div>
                                <div class="item-title">문화관광</div>
                                <p class="item-tag">
                                    <span>바이크</span>
                                    <span>배낚시</span>
                                    <span>속초관광수산시장</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>

    <section class="sect sect-come">
        <article class="sect-area">
            <div class="sect-container">
                <div class="sect-title-box">
                    <h3 class="title">오시는길</h3>
                </div>
                <div class="come">
                    <ul>
                        <li class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.3620469800658!2d128.52880931560614!3d38.31744607966428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5fd894b74d5ee2c3%3A0xf978c9441b2a53bd!2z7Jik7IWYIO2IrOycoCDrpqzsobDtirgg7ISk7JWF67mE7LmYIO2YuO2FlCDslaQg7L2Y64-E!5e0!3m2!1sko!2skr!4v1503997101294"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </li>
                        <li class="mapExp">
                            <p class="p0">자가 차량 이용시</p>
                            <p class="p1">네비게이션 주소 또는 오션투유 리조트 입력</p>
                            <p class="p0">대중교통 이용시</p>
                            <p class="p1"><span class="f-bd">간성시외버스터미널 하차시</span> - 신안리 정류장에서 1번, 1-1 버스 승차,
                                <span class="lg-block">삼포리정류장에서 하차, 105m 이동 <a class="wayBtn"
                                                                               href="http://dmaps.kr/6x66r" target="_blank"><img
                                            src="https://static.neowizreserve.co.kr/img/main/wayto_btn.jpg"
                                            alt="길찾기"></a></span>
                            </p>
                            <p class="p1">
                                <span class="f-bd">속초시외버스터미널 하차시</span> - 한국전력 정류장에서 1번, 1-1번 버스 승차,<span
                                    class="lg-block">삼포리정류장에서 하차, 105m 이동 <a class="wayBtn"
                                                                             href="http://dmaps.kr/6x67i" target="_blank"><img
                                            src="https://static.neowizreserve.co.kr/img/main/wayto_btn.jpg"
                                            alt="길찾기"></a></span>
                            </p>
                            <p class="p1"><span class="f-bd">속초고속버스터미널 하차시</span> - 속초 고속버스터미널 정류장 1번. <span
                                    class="lg-block">1-1번 버스 승차, 삼포리정류장에서 하차, 105m 이동 <a class="wayBtn"
                                                                                         href="http://dmaps.kr/6x2av" target="_blank"><img
                                            src="https://static.neowizreserve.co.kr/img/main/wayto_btn.jpg"
                                            alt="길찾기"></a></span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
@endsection
