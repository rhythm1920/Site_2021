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

    if (!toggle) {
      $("#contactButton").click(function () {
        $(".sidebar").animate({
          width: "0",
        });
        $(".main").animate({
          opacity: 1,
        });
        toggle = !toggle;
      });
    }
  });

  // console.log(window.location.hash);
  // console.log($(window).scrollTop());

  if (window.location.hash === "#contact" && $(window).scrollTop() === 0) {
    $("html, body").animate(
      {
        scrollTop: $("#contact").offset().top,
      },
      100
    );
    // console.log("scroll down");
  }

  // if (window.location.hash === "#contact" && toggle === false) {
  //   console.log("close");
  // }
});

// const check = setInterval(function () {
//   if (window.location.hash === "#contact") {
//     $(".sidebar").animate({
//       width: "0",
//     });
//     $(".main").animate({
//       opacity: 1,
//     });
//     toggle = !toggle;
//     $("body, html").animate(
//       {
//         scrollTop: $("#contact").offset().top,
//       },
//       100,
//       "linear"
//     );

//     clearInterval(check);
//   }
// }, 200);

$("#target_form").submit(function (e) {
  var form_data = $(this).serializeArray();
  var send_data = {
    fName: form_data[0].value,
    subject: form_data[2].value,
    Message: form_data[3].value,
  };
  emailjs.init("USER_ID");
  emailjs.send("SERVICE_ID", "TEMPLATE_ID", send_data).then(
    function (response) {
      console.log("SUccess");
    },
    function (error) {
      console.log(error);
    }
  );
  e.preventDefault();
});
