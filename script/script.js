let toggle = true;

$(window).on("load", function () {
  $(".loader-bg").hide();
  $(".main").show();

  $(".close").click(function () {
    if (toggle) {
      toggle = !toggle;
      $(".sidebar").animate({
        width: "320px",
      });
      $(".main").animate({
        opacity: 0.5,
      });
    } else {
      $(".sidebar").animate({
        width: "0",
      });
      $(".main").animate({
        opacity: 1,
      });
      toggle = !toggle;
    }
  });
});

const check = setInterval(function () {
  if (window.location.hash === "#contact") {
    $(".sidebar").animate({
      width: "0",
    });
    $(".main").animate({
      opacity: 1,
    });
    toggle = !toggle;
    $("body, html").animate(
      {
        scrollTop: $("#contact").offset().top,
      },
      100,
      "linear"
    );

    clearInterval(check);
  }
}, 200);
