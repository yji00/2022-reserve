/*fna*/
$(document).ready(function () {
  $(".sect-room .slide-room-ul").slick({
    infinite: true,
    speed: 500,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    appendDots: $(".sect-room .control-dots"),
    prevArrow: $(".sect-room .control-arrows .btn-slide-prev"),
    nextArrow: $(".sect-room .control-arrows .btn-slide-next"),

    customPaging: function (item, index) {
      let btn = "<button type='button' class='btn'>" + "" + "</button>";

      return btn;
    },
  });

  $(".sect-room .room-viewer-ul").each(function () {
    // console.log($(this).parent().siblings(".room-info-area"));
    $(this).slick({
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: "linear",
      arrows: false,
      dots: true,
      appendDots: $(this)
        .parent()
        .siblings(".room-info-area")
        .find(".room-viewer-control"),

      customPaging: function (item, index) {
        let info = $(item.$slides[index]).html();
        let btn = "<div class='viewer-btn'>" + info + "</div>";

        return btn;
      },
    });
  });

  // 자주묻는 질문 Q&A
  toggleOn("#qna-list > li", "sib");

  // 회원가입 아코디언
  $("#info-list > li > .f-q").click(function () {
    $(this).parent().toggleClass("on");
    return false;
  });
});

// 이용약관 전체선택
function selectAll(selectAll) {
  const checkboxes = document.getElementsByName("agreeBtn");

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked;
  });
}
// 라디오 선택에 따라 바꾸기

function chooseForm(e) {
  if (e === 2) {
    $(".in-login-box-user").hide();
    $(".in-login-box-company").show();
  } else {
    $(".in-login-box-user").show();
    $(".in-login-box-company").hide();
  }
}

/*제휴시설*/
$(document).ready(function () {
  $(".sect-dining .slide-dining .slide-ul").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    // arrows: false,
    prevArrow: $(".sect-dining .slide-dining .btn-slide-prev"),
    nextArrow: $(".sect-dining .slide-dining .btn-slide-next"),
    responsive: [
      {
        breakpoint: 1240,
        settings: {
          slidesToShow: 3,
          dots: true,
          arrows: false,
        },
      },
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 1,
          dots: true,
          arrows: false,
          // appendDots: $(".reivew-slide-control"),
          // slidesToScroll: 3,
          centerMode: true,
        },
      },
    ],

    customPaging: function (slider, index) {
      return "<button type='button'></button>";
    },
  });
});

/*제휴시설*/
$(document).ready(function () {
  let infoListIndex = 0;
  let partnerBtnList = $(".sect-partner .btn-seletor-box button");
  partnerBtnList.on("click", function () {
    infoListIndex = $(this).index();
    partnerSetSlideNum(infoListIndex);
  });

  $(".sect-partner .info-list-controllor .btn-next").on("click", function () {
    infoListIndex++;
    if (infoListIndex >= partnerBtnList.length) {
      infoListIndex = 0;
    }
    partnerSetSlideNum(infoListIndex);
  });
  $(".sect-partner .info-list-controllor .btn-prev").on("click", function () {
    infoListIndex--;
    if (infoListIndex < 0) {
      infoListIndex = partnerBtnList.length - 1;
    }

    partnerSetSlideNum(infoListIndex);
  });
});

let partnerSetSlideNum = function (index) {
  $(".sect-partner .btn-seletor-box button").removeClass("btn-on");
  $(".sect-partner .btn-seletor-box button").eq(index).addClass("btn-on");
  $(".sect-partner .partner-info-ul>li").removeClass("on");
  $(".sect-partner .partner-info-ul>li").eq(index).addClass("on");
};
