<header class="header-new">
    <div class="header-top">
        <nav class="nav-top-menu">
            <ul class="top-menu-ul">
                <!-- 로그인 전 -->
                <li><a href="http://www.ocean2youresort.co.kr/">홈</a></li>
                <li><a href="#">회원가입</a></li>
                <li><a href="http://www.ocean2youresort.co.kr/member/?p=A10ESC4=&r=%2F">로그인</a></li>
                <li><a href="#">예약내역조회</a></li>
                <!-- .로그인 전 -->
                <!-- 로그인 후
                <li><a href="http://www.ocean2youresort.co.kr/">홈</a></li>
                <li><a href="//www.ocean2youresort.co.kr/member/?p=AksTQCdE">마이페이지</a></li>
                <li><a href="javascript: logout();">로그아웃</a></li>
                <li><a href="//www.ocean2youresort.co.kr/reserve/?p=A1sQVQ==">예약내역조회</a></li>
                -->
            </ul>
        </nav>
    </div>
    <div class="header-container">
        <div class="home-area">
            <a href="#">
                <img src="{{ asset("img/common/icon_home.png") }}" alt="오션투유리조트소개">
            </a>
        </div>
        <div class="logo-area">
            <a href="//www.ocean2youresort.co.kr" class="top-logo">
                <img src="{{ asset("img/common/logo.png") }}" alt="오션투유리조트소개"
                     class="logo_w">
                <img src="{{ asset("img/common/logo_m.png") }}" alt="오션투유리조트소개"
                     class="logo_m">
            </a>
        </div>
        <div class="btn-menu-area show-mobile">
            <button type="button" class="btn-open-menu">
                <img src="{{ asset("img/common/m_btn_open_menu.png") }}" alt="메뉴열기">
            </button>
        </div>
        <div class="menu-area">
            <nav class="nav-main-menu">
                <ul class="main-menu-ul">
                    <li><a href="http://www.ocean2youresort.co.kr/intro">오션투유리조트 소개</a>
                    </li>
                    <li><a href="http://www.ocean2youresort.co.kr/partner">제휴시설</a></li>
                    <li><a href="http://www.ocean2youresort.co.kr/tourist">관광지</a></li>
                    <li><a href="#">회원카드</a></li>
                    <li><a href="#">명의개서</a></li>
                    <li><a href="http://www.ocean2youresort.co.kr/board">고객센터</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu-area menu-area-mobile">
            <!-- 로그인 전 -->
            <ul class="menu-area-top">
                <li>
                    <div>
                        환영합니다. <br>
                        <span class="txt_blue">로그인</span> 해주세요 >
                    </div>
                </li>
                <li>
                    <a href="#" class="btn-close-menu">
                        <img src="{{ asset("img/main/btn_close.png") }}">
                    </a>
                    <a href="#">회원가입</a>
                </li>
            </ul>
            <!-- 로그인 전 -->
            <!-- 로그인 후
            <ul class="menu-area-top">
                <li>
                    <div>
                        환영합니다. <br>
                        <span class="txt_blue">홍길동</span> 회원님 >
                    </div>
                </li>
                <li>
                    <a href="#" class="btn-close-menu">
                        <img src="https://static.neowizreserve.co.kr/img/main/btn_close.png">
                    </a>
                    <a href="#">MY</a>
                </li>
            </ul>
            -->
            <ul class="menu-area-sub">
                <li><a href="#">예약내역조회</a></li>
                <li><a href="#">객실예약</a></li>
            </ul>
            <nav class="nav-main-menu">
                <ul class="main-menu-ul">
                    <li>
                        <label for="nav-subpage-menu-item1">오션투유리조트 소개</label>
                        <input type="checkbox" class="nav-subpage-menu-item" id="nav-subpage-menu-item1">
                        <dl class="nav-subpage-itemArea nav-subpage-item1">
                            <dd><a href="#">오션투유리조트 소개</a></dd>
                            <dd><a href="#">객실안내</a></dd>
                            <dd><a href="#">다이닝</a></dd>
                            <dd><a href="#">연회&부대시설</a></dd>
                            <dd><a href="#">오시는 길</a></dd>
                        </dl>
                    </li>
                    <li><a href="http://www.ocean2youresort.co.kr/partner">제휴시설</a></li>
                    <li>
                        <label for="nav-subpage-menu-item2">관광지</label>
                        <input type="checkbox" class="nav-subpage-menu-item" id="nav-subpage-menu-item2">
                        <dl class="nav-subpage-itemArea nav-subpage-item2">
                            <dd><a href="#">고성지역 관광지</a></dd>
                            <dd><a href="#">속초지역 관광지</a></dd>
                        </dl>
                    </li>
                    <!-- 회원이용 안내 주석처리-->
                    <li>
                        <label for="nav-subpage-menu-item3">회원이용안내</label>
                        <input type="checkbox" class="nav-subpage-menu-item" id="nav-subpage-menu-item3">
                        <dl class="nav-subpage-itemArea nav-subpage-item3">
                            <dd><a href="#">회원권 소개</a></dd>
                            <dd><a href="#">리조트 이용안내</a></dd>
                            <dd><a href="#">리조트 예약안내</a></dd>
                            <dd><a href="#">회원카드발급</a></dd>
                            <dd><a href="#">회원권명의개서</a></dd>
                            <dd><a href="#">이용요금안내</a></dd>
                        </dl>
                    </li>
                    <!-- .회원이용 안내 주석처리-->
                    <li>
                        <label for="nav-subpage-menu-item4">회원카드</label>
                        <input type="checkbox" class="nav-subpage-menu-item" id="nav-subpage-menu-item4">
                        <dl class="nav-subpage-itemArea nav-subpage-item4">
                            <dd><a href="#">회원카드 재발급</a></dd>
                            <dd><a href="#">회원카드 확장</a></dd>
                        </dl>
                    </li>
                    <li><a href="#">명의개서</a></li>
                    <li>
                        <label for="nav-subpage-menu-item5">고객센터</label>
                        <input type="checkbox" class="nav-subpage-menu-item" id="nav-subpage-menu-item5">
                        <dl class="nav-subpage-itemArea nav-subpage-item5">
                            <dd><a href="#">공지사항</a></dd>
                            <dd><a href="#">자주묻는 질문 FAQ</a></dd>
                            <dd><a href="#">묻고 답하기</a></dd>
                        </dl>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="service-area">
            <div class="reserve-menu-area">
                <nav class="nav-reserve">
                    <a href="//www.ocean2youresort.co.kr/reserve" class="btn-go-reserve">
                        <div class="btn-contents-box">
                            <div class="icon-calendar"><img
                                    src="{{ asset("img/common/icon_calendar.png") }}"
                                    alt="아이콘">
                            </div>
                            <p class="p-name">통합예약</p>
                        </div>
                    </a>
                    <ul class="reserve-ul">
                        <li><a href="//www.ocean2youresort.co.kr/reserve">객실예약</a></li>
                        <li><a href="//www.ocean2youresort.co.kr/reserve/?p=A1sQVQ==">예약확인</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
