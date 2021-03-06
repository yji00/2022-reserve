@php($cur_pos = !empty($cur_pos) ?? 1)
<!DOCTYPE html>
<html lang="ko-KR">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="천혜의 절경이 펼쳐진 강원도 설악, 속초, 고성에 위치한 오션투유 리저브">
    <title>오션투유 리저브</title>

    <meta property="og:locale" content="ko_KR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="오션투유 리저브">
    <meta property="og:description" content="천혜의 절경이 펼쳐진 강원도 설악, 속초, 고성에 위치한 오션투유 리저브">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="오션투유 리저브">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="천혜의 절경이 펼쳐진 강원도 설악, 속초, 고성에 위치한 오션투유 리저브">
    <meta name="twitter:title" content="오션투유 리저브">
    <!--<link rel="canonical" href="도메인">-->

    <!--폰트-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">
    <!--./폰트-->

    <!--오리진(기존 오션투유 리저브꺼 필요부분만)-->
    <link rel="stylesheet" href="{{ asset("css/origin/reset_custom.css") }}">
    <link rel="stylesheet" href="{{ asset("css/origin/common.css") }}">
    <!--./오리진-->

    <!--공통-->
    <link rel="stylesheet" href="{{ asset("css/reset.css") }}">
    <link rel="stylesheet" href="{{ asset("css/common.css") }}">
    <!--./공통-->

    <!--js-->
    <script type="text/javascript" src="{{ asset("js/libs/jquery-3.5.1.min.js") }}"></script>

    <!--슬라이드용01-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
    <script src="{{ asset("js/jquery.bxslider.min.js") }}"></script>
    <!--./슬라이드용01-->

    <!--슬라이드용02-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="{{ asset("js/slick.min.js") }}"></script>
    <!--./슬라이드용02-->

    <script src="{{ asset("js/common.js") }}"></script>
    <script src="{{ asset("js/origin/common_ocean.js") }}"></script>

    <!-- 전용 -->
    <link rel="stylesheet" href="{{ asset("css/main/init.css") }}">
    <script src="{{ asset("js/main/init.js") }}"></script>

    @if($cur_pos == 2)
        <link rel=stylesheet href="{{ asset("css/".$css."/init.css") }}">
    @endif

    <!-- 추가css 및 반응형 (무조건 아래에 두기)-->
    <link rel="stylesheet" href="{{ asset("css/init_new.css") }}">
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">

    <script>
        // 자동 하이픈 삽입함수
        var key_lock = false;   // 연속입력 차단용 변수
        $(document).on("keypress", ".autohyphen", function (e) {
            if (key_lock)
                e.preventDefault();

            // 연속입력 차단
            key_lock = true;
        }).on("keyup", ".autohyphen", function (e) {
            var key_del = [8, 46],  // 삭제 키 체크
                acc = 0,
                arr_acc = [],   // 하이픈('-') 추가되는 위치 배열
                shape = $(this).attr("shape"),
                val = $(this).val();
            shape = shape.split("");

            // 패턴으로 하이픈위치 파악
            $.each(shape, function (i, v) {
                acc += parseInt(v);
                if (i > 0)
                    acc++;
                if (i < shape.length - 1)
                    arr_acc.push(acc);
            });
            // 최대길이 제한
            $(this).prop("maxlength", acc);

            // 하이픈 삽입 (삭제키 아닐때, 하이픈 삽입 위치일때)
            if ($.inArray(e.keyCode, key_del) < 0 && $.inArray(val.length, arr_acc) >= 0)
                $(this).val(val + "-");

            // 입력차단 해제
            key_lock = false;
        });
    </script>
</head>

<body>
<h1 class="hidden"></h1>
<main id="wrap" class="wrap">
    @include("common.header")
    <script>
        function logout() {
            if (confirm("로그아웃 하시겠습니까?")) {
                $.ajax({
                    type: "post",
                    url: "http://www.ocean2youresort.co.kr/member/action.php",
                    data: { "mode": "logout" },
                    async: false,
                    dataType: "JSON",
                    success: function (res) {
                    }
                });
                location.href = "http://www.ocean2youresort.co.kr";
            }
        }
    </script>
    <div class="wrap-container wrap-main">
        @yield("contents")
    </div>
    @include("common.footer")

    <!-- 171218 이용약관, 개인정보처리방침 -->

    <div class="layer-pop-bg privacy-bg" id="privacy-bg">
        <!--이용약관-->
        <div class="term-wrap cm-s">
            <div class="d-top"><strong>이용약관</strong><a href="javascript:;" class="a-i-x a-x"
                                                       onclick="$('#privacy-bg, #privacy-bg .term-wrap').hide(); $('body').css('overflow', 'auto');"></a>
            </div>
            <div class="d-cont">
                <div class="txt">
                    <strong class="title">제1조 (목적)</strong>
                    <ol>
                        <p>본 약관은 (주)네오위즈(이하 "회사"라고 한다)가 제공하는 홈페이지의 인터넷 회원 서비스(이하 "서비스"라 한다)의 이용 및 회원가입에 관련된 사항과 절차
                            그리고 기타 필요한 사항을 규정함을 목적으로 합니다.</p>
                    </ol>
                    <strong class="title">제2조 (약관의 효력과 변경)</strong>
                    <ol>
                        <li>본 약관은 전기통신사업법 및 동법 시행령에 따라 홈페이지에 공시함으로서 효력을 발생합니다. </li>
                        <li>회사는 본 약관을 변경할 수 있으며, 변경된 약관은 공지함으로서 효력을 발생합니다. </li>
                        <li>본 약관에 명시되지 않은 사항은 전기통신기본법, 전기통신사업법 및 기타 관련법령에 규정되어 있는 사항에 준합니다. </li>
                    </ol>

                    <strong class="title">제3조 (용어의 정의)</strong>
                    <ol>
                        <li>본 약관에서 사용하는 용어의 정의는 다음과 같습니다. </li>
                        <li>① 회원: 홈페이지를 통해 인터넷회원서비스 이용약관에 동의하고 회원가입을 하신 고객. </li>
                        <li>② 아이디(ID): 회원의 식별과 서비스 이용을 위하여 회원이 선정하고 회사가 승인한 문자와 숫자의 조합 </li>
                        <li>③ 비밀번호: 회원의 비밀 유지를 위하여 회원 본인이 설정한 문자와 숫자의 조합 </li>
                        <li>④ 회원탈퇴: 회사 또는 회원이 인터넷회원 서비스 제공의 중단을 요청하는 의사를 표현한 경우 자유롭게 탈퇴가 가능합니다.</li>
                    </ol>


                    <strong class="title">제4조 (이용계약의 성립)</strong>
                    <ol>
                        <li>① 서비스 이용 신청 시에 회원이 "동의" 버튼을 선택하면 이 약관에 동의하는 것으로 간주합니다. </li>
                        <li>② 이용계약의 성립시기는 서비스 이용 희망자의 이용약관 동의 후 신청에 대하여 회사의 승인이 회원에게 도달한 시점으로 합니다. </li>
                    </ol>
                    <strong class="title">제5조 (이용신청)</strong>
                    <ol>
                        <li>① 본 서비스를 이용하기 위해서는 소정의 가입신청 양식에서 요구하는 필수 이용자 정보를 기록하여 신청합니다. </li>
                        <li>② 실명인증확인절차를 거쳐 인증된 이용자만 가입이 가능하며 기재되는 이용자 정보는 실제 정보로 간주되며, </li>
                        <li>③ 회원은 이용시 신청한 내용이 변경되었을 경우에는 온라인상에서 회원정보변경을 해야 합니다. </li>
                    </ol>
                    <strong class="title">제6조 (이용신청의 승낙)</strong>
                    <ol>
                        <li>회사는 회원이 제5조에서 정한 모든 사항을 정확히 기재하여 이용신청을 하였을 때 승낙합니다. </li>
                        <li>① 회사는 다음에 해당하는 경우에 승낙을 유보할 수 있습니다. </li>
                        <li>가. 서비스 관련 설비에 여유가 없는 경우 </li>
                        <li>나. 기술상 지장이 있는 경우 </li>
                        <li>다. 기타 회사가 필요하다고 인정되는 경우</li><br>
                        <li>② 회사는 다음에 해당하는 경우에 이를 승낙하지 않거나 승인을 취소할 수 있습니다.</li>
                        <li>가.다른 사람의 명의를 사용하여 신청한 경우 </li>
                        <li>나.이용자 정보를 허위로 기재하여 신청한 경우 </li>
                        <li>다.사회의 질서 또는 미풍양속을 저해할 목적으로 신청한 경우 </li>
                        <li>라.기타 회사가 정한 이용신청 요건이 미비되었을 경우</li>
                    </ol>
                    <strong class="title">제7조 (서비스 이용 및 제한)</strong>
                    <ol>
                        <li>① 서비스이용은 회사의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴 24시간 운영함을 원칙으로 합니다. 단, 시스템 정비를 위하여 부득이한 경우,
                        </li>
                        <li>전기통신사업법에 규정된 기간통신사업자가 전기통신 서비스를 중지하는 경우, 회사가 서비스를 제공할 수 없는 사유가 발생할 경우에는 서비스 제공을 중지할 수
                            있습니다. </li>
                        <li>② 회사에서 제공하는 서비스 중 일부는 회원에 가입하여 회사에서 인정한 ID와 비밀번호를 통해서만 서비스를 받을 수 있습니다. </li>
                        <li>ID와 비밀번호에 관한 모든 관리책임은 회원에게 있습니다. 회원에게 부여된 ID와 비밀번호의 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은
                            회원에게 있습니다.<br> 자신의 ID가 부정하게 사용된 경우 회원은 반드시 회사에 그 사실을 통보해야 합니다.</li>
                    </ol>
                    <strong class="title">제8조 (회사의 의무)</strong>
                    <ol>
                        <li>회사는 서비스 제공과 관련해서 알고 있는 회원의 신상정보를 본인의 승낙 없이 제3자에게 누설, 배포하지 않습니다. </li>
                        <li>단, 전기통신 기본법 등 법률의 규정에 의해 국가기관의 요구가 있는 경우, 범죄에 대한 수사상의 목적이 있거나 정보통신 윤리위원회의 요청이 있는 경우
                        </li>
                        <li>또는 기타 관계법령에서 정한 절차에 따른 요청이 있는 경우는 그러하지 않습니다.</li>
                    </ol>
                    <strong class="title">제9조 (회원의 의무)</strong>
                    <ol>
                        <li>① 회원은 관계법령, 이 약관의 규정, 이용안내 및 주의사항 등 회사가 통지하는 사항을 준수하여야 하며, 기타 회사의 업무에 방해되는 행위를 하여서는
                            안됩니다. </li>
                        <li>② 회원은 회사의 사전 동의 없이 서비스를 이용하여 어떠한 영리행위도 할 수 없습니다. </li>
                        <li>③ 회원은 서비스를 이용하여 얻은 정보를 회사의 사전 동의 없이 복사, 복제, 변경, 번역, 출판, 방송 기타의 방법으로 사용하거나 이를 타인에게 제공할 수
                            없습니다. </li>
                        <li>④ 회원은 서비스 이용과 관련하여 다음 각 호의 행위를 하여서는 안됩니다. 회사는 회원이 다음에 해당하는 행위를 하였을 경우 </li>
                        <li>사전 통지 없이 이용계약을 해지하거나 또는 기간을 정하여 서비스 이용을 제한할 수 있습니다.</li>
                        <li>가. 다른 회원의 아이디(ID)를 부정 사용하는 경우 </li>
                        <li>나. 범죄행위를 목적으로 하거나 기타 범죄행위와 관련된 행위 </li>
                        <li>다. 미풍양속, 기타 사회질서를 해하는 경우 </li>
                        <li>라. 타인의 명예를 훼손하거나 모욕하는 행위 </li>
                        <li>마. 타인의 지적재산권 등의 권리를 침해하는 행위 </li>
                        <li>바. 해킹행위 또는 컴퓨터 바이러스의 유포행위 </li>
                        <li>사. 타인의 의사에 반하여 광고성 정보 등 일정한 내용을 전송하는 행위 </li>
                        <li>아. 서비스의 안정적인 운영에 지장을 주거나 줄 우려가 있는 일체의 행위 </li>
                        <li>자. 기타 관계법령에 위배되는 행위</li>
                        <li>⑤ 회원은 회사의 게시물을 임의로 도용하여 타 사이트에 게시하거나 회사의 운영에 혼란을 초래하는 행위를 해서는 안됩니다.</li>
                    </ol>
                    <strong class="title">제10조 (탈퇴)</strong>
                    <ol>
                        <li>회원에 의한 계약해지는 탈퇴라 칭하며, 회원탈퇴는 신분확인 등의 문제로 본인이 ID, 비밀번호를 입력하여 로그인 후 회원탈퇴 절차를 밟거나,
                            E-mail(help@ocean2youresort.co.kr)로 신청하시면 회사가 메일을 접수하는 데로 탈퇴 결과를 메일로 통보해드립니다. </li>
                        <li>ID 변경은 불가하며 부득이하게 ID를 변경하고자 하신다면 탈퇴를 하신 후 재가입하셔야 합니다.</li>
                    </ol>
                    <strong class="title">제11조 (손해배상)</strong>
                    <ol>
                        <li>회사는 무료로 제공되는 서비스와 관련하여 회원에게 어떠한 손해가 발생하더라도 그 손해가 회사의 중대한 과실에 의한 경우를 제외하고 이에 대하여 책임을 부담하지
                            아니합니다.</li>
                    </ol>
                    <strong class="title">제12조 (면책, 배상)</strong>
                    <ol>
                        <li>회사는 회원이 서비스에 게재한 정보, 자료, 사실의 정확성, 신뢰성 등 그 내용에 관하여는 어떠한 책임을 부담하지 아니하고 </li>
                        <li>회원은 자기의 책임아래 서비스를 이용하며, 서비스를 이용하여 게시 또는 전송한 자료 등에 관하여 손해가 발생하거나 자료의 취사선택, </li>
                        <li>기타 서비스의 이용과 관련하여 어떠한 불이익이 발생하더라도 이에 대한 모든 책임은 회원에게 있습니다. </li>
                        <li>② 회사는 제 10조의 규정에 위반하여 회원간 또는 회원과 제 3자간에 서비스를 매개로 하여 물품거래 등과 관련하여 어떠한 책임도 부담하지 아니하고, 회원이
                            서비스의 이용과 관련하여 기대하는 이익에 관하여 책임을 부담하지 않습니다. </li>
                        <li>③ 회원 아이디(ID)와 비밀번호의 관리 및 이용상의 부주의로 인하여 발생되는 손해 또는 제 3자에 의한 부정사용 등에 대한 책임은 모두 회원에게 있습니다.
                        </li>
                        <li>④ 회원이 제 10조, 기타 이 약관의 규정을 위반함으로 인하여 회사가 회원 또는 제3자에 대하여 책임을 부담하고 되고, </li>
                        <li>이로써 회사에게 손해가 발생하게 되는 경우, 이 약관을 위반한 회원은 회사에게 발생하는 모든 손해를 배상하여야 하며, 동 손해로부터 회사를 면책시켜야 합니다.
                        </li>
                    </ol>
                    <strong class="title">제13조 (계약해지 및 이용제한)</strong>
                    <ol>
                        <li>회사와 회원은 서비스와 관련하여 발생한 분쟁을 원만하게 해결하기 위하여 필요한 모든 노력을 하여야 합니다. 그럼에도 불구하고, 동 분쟁으로 인하여 소송이
                            제기될 경우 동 소송은 회사의 본사 소재지 관할 법원으로 합니다.</li>
                    </ol>
                    <strong class="title">부&nbsp;&nbsp;&nbsp;칙</strong>
                    <ol>
                        <li>본 약관은 2017년 05월 20일부터 시행합니다.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- 개인정보처리방침 -->
        <div class="privacy-wrap cm-s">
            <div class="d-top"><strong>개인정보처리방침</strong><a href="javascript:;" class="a-i-x a-x"
                                                           onclick="$('#privacy-bg, #privacy-bg .privacy-wrap').hide(); $('body').css('overflow', 'auto');"></a>
            </div>
            <div class="d-cont">

                (주)네오위즈(이하 "회사"라 함)가 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집ㆍ보유 및 처리되고 있습니다. <br><br> 「개인정보보호법」 및
                「정보통신망 이용촉진 및 정보보호 등에 관한 법률」은 개인정보의 취급에 대한 일반적 규범을 제시하고 있으며, 회사는 이러한 법령의 규정에 따라 수집 • 보유 및 처리하는 개인정보를
                적법하고 적정하게 취급할 것입니다. 또한, 회사는 관련 법령에서 규정한 바에 따라 회사에서
                보유하고 있는 개인정보에 대한 열람청구권 및 정정청구권 등 여러분의 권익을 존중하며, 여러분은 이러한 법령상 권익의 침해 등에 대하여 행정심판법에서 정하는 바에 따라 행정심판을
                청구할 수 있습니다.


                <br><br> 개인정보취급방침은 현행 「개인정보보호법」 및 「정보통신망 이용촉진」 및 「정보보호 등에 관한 법률」에 근거를 두고 있습니다. 회사에서 운영하고 있는 웹사이트는
                다음과 같으며, 이 방침은 별도의 설명이 없는 한 회사에서 운용하는 모든 웹사이트에 적용됨을 알려드립니다. 다만, 회사 내 담당조직(실, 팀 등)에서 특정 웹사이트에 별도의
                개인정보취급방침을 제정․시행하는 경우 이에 따르고, 이를 해당 조직이 운영하는 홈페이지(http://www.ocean2youresort.co.kr)에
                게시함을 알려드립니다.

                <br><br>


                <strong class="privacy">제 1 조 수집하는 개인정보의 항목</strong><br> 회사는 기본적인 서비스 제공을 위한 필수정보와 고객 맞춤 서비스 제공을 위한
                선택정보로 구분하여 아래와 같은 개인정보를 수집하고 있습니다.<br><br> 가. 회사는 회원가입, 원활한 고객상담, 각종 서비스(온라인 예약 등)의 제공을 위해 최초 회원가입
                당시 아래와 같은 개인정보를 수집하고 있습니다.<br>
                <table class="tablepri">
                    <tbody>
                    <tr class="tablepri">
                        <th class="privacy tablepri" style="vertical-align: middle;">
                            &nbsp;&nbsp;필수항목&nbsp;&nbsp;</th>
                        <td class="tablepri">성명, 가입인증정보, 아이디, 비밀번호, 생년월일, 이메일, 연락처, 휴대폰, 주소</td>
                    </tr>
                    </tbody>
                </table>
                <br> 나. 회사는 서비스 고객불만사항 및 민원업무 처리를 위하여 아래와 같은 개인정보를 수집하고 있습니다.

                <table class="tablepri">
                    <tbody>
                    <tr class="tablepri">
                        <th class="privacy tablepri" style="vertical-align: middle;">
                            &nbsp;&nbsp;필수항목&nbsp;&nbsp;</th>
                        <td>성명, 이메일주소, 휴대폰 번호, 발생상황이나 작성된 내용</td>
                    </tr>
                    <tr>
                        <th class="privacy tablepri" style="vertical-align: middle;">
                            &nbsp;&nbsp;선택항목&nbsp;&nbsp;</th>
                        <td>시설이용정보(이용 영업장, 객실번호, 입실일 등)</td>
                    </tr>
                    </tbody>
                </table>

                <br> 다. 서비스 이용과정이나 처리과정에서 아래와 같은 정보들이 자동으로 생성되어 수집될 수 있습니다.<br> - IP Address, 쿠키, 방문 일시, 서비스 이용기록,
                불량 이용 기록
                <br> 라. 선택정보를 입력하지 않은 경우에도 서비스 이용 제한은 없으며 이용자의 기본적 인권 침해의 우려가 있는 민감한 개인 정보(인종, 사상 및 신조, 정치적 성향 이나
                범죄기록, 의료정보 등)는 수집하지 않습니다.<br><br>

                <strong class="privacy">제 2 조 개인정보의 수집 및 이용목적</strong><br> 회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. 이용자가 제공한
                모든 정보는 하기 목적에 필요한 용도 이외로는 사용되지 않으며 이용 목적이 변경될 시에는 사전 동의를 구할 것입니다.<br> 가. 회원관리<br> - 본인확인, 개인식별,
                불량회원의 부정이용방지와 비인가 사용방지, 만14세 미만 아동 개인정보 수집 시 법정 대리인 동의
                여부 확인, 분쟁 조정을 위한 기록보존, 불만처리 등 민원처리, 고지사항 전달<br><br> 나. 신규 서비스 개발 및 마케팅 활용<br> - 신규 서비스 개발 및 맞춤 서비스
                제공, 통계학적 특성에 따른 서비스 제공 및 광고 게재, 서비스의 유효성 확인, 이벤트 및 광고성 정보 제공 및 참여기회 제공, 접속빈도 파악, 회원의 서비스 이용에 대한
                통계<br><br>

                <strong class="privacy">제 3 조 개인정보의 처리위탁</strong><br> 회사는 서비스 향상을 위해서 아래와 같이 개인정보를 위탁하고 있으며, 관계 법령에
                따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.회사의 개인정보 위탁처리 기관 및 위탁업무 내용은 아래와 같습니다.<br><br>

                <table class="tablepri hidden-xs" width="100%" style="text-align:center;">
                    <tbody>
                    <tr>
                        <th style="vertical-align:middle" width="10%" class="privacy tablepri">구분</th>
                        <th style="vertical-align:middle" width="14%" class="privacy tablepri">정보제공항목</th>
                        <th style="vertical-align:middle" width="14%" class="privacy tablepri">제공목적</th>
                        <th style="vertical-align:middle" width="5%" class="privacy tablepri">보유 및 이용기간</th>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">리조트회원</td>
                        <td style="vertical-align:middle" class="tablepri">•&nbsp;&nbsp;성명(한글, 영문), 생년월일,
                            주민등록번호(외국인등록번호), 성별, 휴대전화 번호, 주소, E-mail 주소, 회원권, 회원번호, 예약 비밀번호</td>
                        <td style="vertical-align:middle" class="tablepri">•&nbsp;&nbsp;회원 등록 및 서비스 이용, 본인 식별,
                            공지사항 전달, 본인 의사 확인, 불만 처리 등 원활한 의사소통 경로 확보, 인터넷/ARS 예약 시 본인인증 수단 확보 법률에 의거한 공공기관 제출
                            용도</td>
                        <td style="vertical-align:middle" rowspan="4">•&nbsp;&nbsp;동의철회 또는 회원 탈회 시까지</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">리조트 프리미엄회원</td>
                        <td style="vertical-align:middle" class="tablepri">•&nbsp;&nbsp;성명(한글, 영문), 생년월일, 성별,,
                            휴대전화 번호, 회원권, 회원번호</td>
                        <td style="vertical-align:middle" class="tablepri">•&nbsp;&nbsp;지정회원 등록 및 서비스 이용, 본인 식별,
                            공지사항 전달, 본인 의사 확인, 불만 처리 등 원활한 의사소통 경로 확보</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">㈜KG이니시스<br>NHN한국사이버결제㈜빌게이트㈜</td>
                        <td style="vertical-align:middle" class="tablepri">•&nbsp;&nbsp;신용카드, 휴대폰, 가상계좌 등을 통한
                            결제사항</td>
                        <td class="tablepri">•&nbsp;&nbsp;상품구매에 필요한 신용카드, 현금결제를 포함한 전자지급수단, 그밖에 전자적 방법에 따른지급수단
                            전자금융거래수단 등의 결제정보전송</td>
                    </tr>
                    </tbody>
                </table>
                <table class="tablepri show-xs" width="100%" style="text-align:center;">
                    <colgroup>
                        <col style="width: 50%">
                        <col style="width: 50%">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th class="privacy tablepri" colspan="2" style="background: #f7f7f7; padding: 3px;">
                            리조트회원</th>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle" width="50%" class="tablepri">정보제공항목</th>
                        <th style="vertical-align:middle" width="50%" class="tablepri">제공목적</th>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">성명(한글,
                            영문), 생년월일, 주민등록번호(외국인등록번호), 성별, 휴대전화 번호, 주소, E-mail 주소, 회원권, 회원번호, 예약 비밀번호</td>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">회원 등록 및
                            서비스 이용, 본인 식별, 공지사항 전달, 본인 의사 확인, 불만 처리 등 원활한 의사소통 경로 확보, 인터넷/ARS 예약 시 본인인증 수단 확보
                            법률에 의거한 공공기관 제출 용도</td>
                    </tr>
                    <tr>
                        <th class="privacy tablepri" colspan="2" style="background: #f7f7f7; padding: 3px;">리조트
                            프리미엄회원</th>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle" width="50%" class="tablepri">정보제공항목</th>
                        <th style="vertical-align:middle" width="50%" class="tablepri">제공목적</th>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">성명(한글,
                            영문), 생년월일, 성별,, 휴대전화 번호, 회원권, 회원번호</td>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">지정회원 등록
                            및 서비스 이용, 본인 식별, 공지사항 전달, 본인 의사 확인, 불만 처리 등 원활한 의사소통 경로 확보</td>
                    </tr>
                    <tr>
                        <th class="privacy tablepri" colspan="2" style="background: #f7f7f7; padding: 3px;">
                            ㈜KG이니시스<br>NHN한국사이버결제㈜빌게이트㈜</th>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle" width="50%" class="tablepri">정보제공항목</th>
                        <th style="vertical-align:middle" width="50%" class="tablepri">제공목적</th>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">신용카드,
                            휴대폰, 가상계좌 등을 통한 결제사항</td>
                        <td style="text-align: left; padding: 5px; padding-left: 8px;" class="tablepri">상품구매에
                            필요한 신용카드, 현금결제를 포함한 전자지급수단, 그밖에 전자적 방법에 따른지급수단 전자금융거래수단 등의 결제정보전송</td>
                    </tr>
                    <tr>
                        <th class="privacy tablepri" colspan="2" style="background: #f7f7f7; padding: 3px;">
                            리조트회원/리조트 프리미엄회원<br>㈜KG이니시스<br>NHN한국사이버결제㈜빌게이트㈜</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="tablepri">보유 및 이용기간</th>
                    </tr>
                    <tr>
                        <td style="padding: 5px;" class="tablepri" colspan="2">동의철회 또는 회원 탈회 시까지</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <strong class="privacy">제 4 조 개인정보의 보유 및 이용기간</strong><br> 회사는 회원가입일로부터 서비스를 제공하는 기간 동안에 한하여 이용자의
                개인정보를 보유 및 이용하게 됩니다. 회원 탈퇴를 요청하거나 개인정보의 수집 및 이용에 대한 동의를 철회하는 경우, 수집 및 이용목적이 달성되거나 보유 및 이용기간이 종료한 경우
                해당 개인정보를 지체 없이 파기합니다. <br>단, 다음의 정보에 대해서는 아래의 이유로 명시한
                기간 동안 보존합니다.<br><br> - 계약 또는 청약철회 등에 관한 기록<br> 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br> 보존 기간 : 5년<br> -
                대금결제 및 재화 등의 공급에 관한 기록<br> 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br> 보존 기간 : 5년<br> - 소비자의 불만 또는 분쟁처리에 관한
                기록<br> 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br> 보존 기간 :
                3년
                <br> - 본인확인에 관한 기록<br> 보존 이유 : 정보통신망 이용촉진 및 정보보호 등에 관한 법률<br> 보존 기간 : 6개월<br><br>

                <strong class="privacy">제 5 조 개인정보의 파기에 관한 사항</strong><br> 이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체
                없이 파기합니다.<br><br> 가. 파기절차<br> - 이용자가 회원가입 등을 위해 입력한 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침
                및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조)일정 기간 저장된
                후 파기됩니다.<br> - 동 개인정보는 법률에 의한 경우가 아니고서는 보유되는 이외의 다른 목적으로 이용되지 않습니다.<br> 나. 파기방법<br> - 종이에 출력된 개인정보는
                분쇄기로 분쇄하거나 소각을 통하여 파기합니다.<br> - 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다<br><br>


                <strong class="privacy">제 6 조 이용자 및 법정대리인의 권리와 그 행사방법</strong><br> - 이용자 및 법정 대리인은 언제든지 등록되어 있는 자신
                혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다.<br> - 이용자 혹은 만 14세 미만 아동의 개인정보 조회, 수정을
                위해서는 '개인정보변경'(또는 '회원정보수정' 등)을, 가입해지(동의철회)를 위해서는 "회원탈퇴"를
                클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.<br> - 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이
                조치하겠습니다.<br> - 이용자가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를
                제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 하겠습니다.<br>-
                회사는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 "5. 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수
                없도록 처리하고 있습니다.<br><br>

                <strong class="privacy">제 7 조 개인정보 자동 수집 장치의 설치/운영 및 거부에 관한 사항</strong><br> 회사는 개인화되고 맞춤화된 서비스를 제공하기
                위해서 이용자의 정보를 저장하고 수시로 불러오는 '쿠키(cookie)'를 사용합니다. 쿠키는 웹사이트를 운영하는데 이용되는 서버가 이용자의 브라우저에게 보내는 아주 작은 텍스트
                파일로 이용자 컴퓨터의 하드디스크에 저장됩니다.<br><br> 가. 쿠키의 사용 목적<br>-
                이용자들이 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 보안접속 여부, 이용자 규모 등을 파악하여 이용자에게 최적화된 정보 제공을 위하여 사용합니다.<br> 나.
                쿠키의 설치/운영 및 거부<br> - 이용자는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서 이용자는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될
                때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.<br> - 다만,
                쿠키의 저장을 거부할 경우에는 로그인이 필요한 일부 서비스는 이용에 어려움이 있을 수 있습니다.<br> - 쿠키 설치 허용 여부를 지정하는 방법(Internet Explorer의
                경우)<br> ① [도구] 메뉴에서 [인터넷 옵션]을 선택합니다.<br> ② [개인정보 탭]을 클릭합니다.<br> ③ [개인정보취급 수준]을 설정하시면 됩니다.<br><br>


                <strong class="privacy">제 8 조 개인정보의 기술적/관리적 보호 대책</strong><br> 회사는 이용자들의 개인정보를 취급함에 있어 개인정보가 분실, 도난,
                누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적/관리적 대책을 강구하고 있습니다.<br><br> 가. 기술적 대책<br> - 이용자의 개인정보는
                비밀번호에 의해 보호되며, 파일 및 전송 데이터를 암호화하여 중요한 데이터는 별도의 보안기능을
                통해 보호되고 있습니다.<br> - 회사 홈페이지는 백신프로그램을 이용하여 컴퓨터바이러스에 의한 피해를 방지하기 위한 조치를 취하고 있습니다. 백신프로그램은 주기적으로
                업데이트하여<br> 바이러스에 대처하고 있습니다.<br> - 회사 홈페이지는 암호 알고리즘을 이용하여 네트워크 상의 개인정보를 안전하게 전송할 수 있도록 보안장치를 채택하고
                있습니다.<br> - 해킹 등 외부 침입에 대비하여 침입차단시스템 및 침입방지시스템 등을 이용하여 보안에
                만전을 기하고 있습니다.<br> 나. 관리적 대책<br> - 회사 홈페이지는 이용자의 개인정보에 대한 접근권한을 최소한의 인원 인원으로 제한하고 있습니다. 그 최소한의 인원에
                해당하는 자는 다음과 같습니다.<br> ① 개인정보관리책임자 및 담당자 등 개인정보관리업무를 수행하는 자<br> ② 기타 업무상 개인정보의 취급이 불가피한 자<br> - 개인정보를
                취급하는 직원을 대상으로 새로운 보안 기술 습득 및 개인정보보호 의무 등에 관해 정기적인 사내
                교육 및 외부 위탁교육을 실시하고 있습니다.<br> - 입사 시 전 직원의 보안서약서를 통하여 사람에 의한 정보유출을 사전에 방지하고 개인 정보보호정책에 대한 이행사항 및 직원의
                준수여부를 감사하기 위한 내부절차 를 마련하고 있습니다.<br> - 개인정보 관련 취급자의 업무 인수인계는 보안이 유지된 상태에서 철저하게 이루 어지고 있으며 입사 및 퇴사 후
                개인정보 사고에 대한 책임을 명확화하고 있습니다.<br> - 전산실 및 자료 보관실 등을 특별
                보호구역으로 설정하여 출입을 통제하고 있습니다.<br> - 그 외 내부 관리자의 실수나 기술관리 상의 사고로 인해 개인정보의 상실, 유출 변조, 훼손이 유발될 경우 회사는 즉각
                이용자께 사실을 알리고 적절한 대책과 보상을 강구할 것입니다.<br><br>


                <strong class="privacy">제 9 조 개인정보 보호 문의처</strong><br> 당사는 귀하와의 원활한 의사소통을 위해 고객서비스센터를 운영하고 있습니다.
                고객서비스센터의 연락처는 다음과 같습니다.<br> [고객서비스센터]
                <br> - 전자우편 : help@ocean2youresort.co.kr<br> - 전화번호 : ☎ 1666-4874<br> - 주소 : 강원도 횡성군 우천면 전재로 254<br>
                - 전화상담은 평일
                오전 09:00 ~ 오후 06:00에만 가능합니다.<br> - 전자우편이나 팩스 및 우편을 이용한 상담은 접수 후 24시간 이내에 성실하게 답변 드리겠습니다. 다만, 근무시간 이후
                또는 주말 및 공휴일에는 익일 처리하는 것을 원칙으로 합니다.<br><br>

                <strong class="privacy">제 10 조 개인정보관리책임자 및 담당자의 연락처</strong><br> 귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호
                관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.<br>



                <table class="tablepri" width="100%" style="text-align:center;">
                    <tbody>
                    <tr>
                        <th style="vertical-align:middle" width="25%" colspan="2" class="privacy tablepri">개인정보
                            관리책임자</th>
                        <th style="vertical-align:middle" width="25%" colspan="2" class="privacy tablepri">개인정보
                            관리담당자</th>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">이름</td>
                        <td style="vertical-align:middel" class="tablepri">&nbsp;&nbsp;주영길</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;이름</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;김태형</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">소속</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;개인정보보호팀</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;소속</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;개인정보보호팀</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">직책</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;팀장</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;직책</td>
                        <td style="vertical-align:middle" class="tablepri">&nbsp;&nbsp;대리</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">전화</td>
                        <td style="vertical-align:middle" colspan="3" class="tablepri">&nbsp;&nbsp;1666-4874
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle" class="tablepri">메일</td>
                        <td style="vertical-align:middle" colspan="3" class="tablepri">
                            &nbsp;&nbsp;help@ocean2youresort.co.kr</td>
                    </tr>
                    </tbody>
                </table>
                기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.<br> - 개인정보침해신고센터 (www.118.or.kr / 118)<br> -
                정보보호마크인증위원회 (www.eprivacy.or.kr / 02-580-0533~4)<br> - 대검찰청 첨단범죄수사과 (www.spo.go.kr /
                02-3480-2000)<br> - 경찰청 사이버테러대응센터 (www.ctrc.go.kr / 02-392-0330)<br><br>

                <strong class="privacy">제 11 조 기타</strong><br> 회사가 운영하는 여러 웹페이지에 포함된 링크 또는 배너를 클릭하여 다른 사이트 또는 웹페이지로
                옮겨갈 경우 개인정보취급방침은 그 사이트 운영기관이 게시한 정책이 적용됨으로 새로 방문한 사이트의 정책을 확인하시기 바랍니다.<br><br>

                <strong class="privacy">제 12 조 고지의 의무</strong><br> 현 개인정보취급방침 내용 추가, 삭제 및 수정이 있을 시에는 개정 최소 7일전부터
                홈페이지의 '공지사항'을 통해 고지할 것입니다.<br><br> - 공고일자 : 2017년 05월 20일<br> - 시행일자 : 2017년 05월 20일<br>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".footer-new .btn-open-terms").on("click", function () {
                $('#privacy-bg, #privacy-bg .term-wrap').show();
                $('body').css('overflow', 'hidden');
            });
            $(".footer-new .btn-open-policy").on("click", function () {
                $('#privacy-bg, #privacy-bg .privacy-wrap').show();
                $('body').css('overflow', 'hidden')
            });

            $(".footer-new .btn-open-family").on("click", function () {
                $(".footer-new .family-site-contents").toggle();
            });

        });
    </script>
    </div>
</body>
</html>
