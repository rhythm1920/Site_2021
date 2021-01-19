let toggle = true;

$(".close").click(function () {
  if (toggle) {
    $(".sidebar").animate({
      width: "0",
    });
    $(".main").animate({
      marginLeft: "0",
      opacity: 1,
    });
    toggle = !toggle;
  } else {
    $(".sidebar").animate({
      width: "320px",
    });
    $(".main").animate({
      marginLeft: "320px",
      opacity: 0.5,
    });
    toggle = !toggle;
  }
});

// console.log(toggle);

// $(".close").click(function () {
//   $(".main").toggleClass("close1");
//   $(".sidebar").toggleClass("close2");
// });
