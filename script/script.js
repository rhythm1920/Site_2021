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

  if (window.location.hash === "#contact" && $(window).scrollTop() === 0) {
    $("html, body").animate(
      {
        scrollTop: $("#contact").offset().top,
      },
      100
    );
  }

  $(".cover-text img").fadeIn(1500);
});

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
      console.log("Success");
    },
    function (error) {
      console.log(error);
    }
  );
  e.preventDefault();
});

$("#newsletter_form").submit(function (e) {
  var form_data = $(this).serializeArray();
  var send_data = {
    email: form_data[0].value,
  };
  emailjs.init("USER_ID");
  emailjs.send("SERVICE_ID", "TEMPLATE_ID", send_data).then(
    function (response) {
      console.log("Success newsletter");
    },
    function (error) {
      console.log(error);
    }
  );
  e.preventDefault();
});

console.log(config.USER_ID);
