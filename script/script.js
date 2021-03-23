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

// console.log(toggle);

// $(".close").click(function () {
//   $(".main").toggleClass("close1");
//   $(".sidebar").toggleClass("close2");
// });
