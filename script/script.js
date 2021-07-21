let toggle = true;

$(window).on("load", function () {
  AOS.init();

  $(window).scroll(function () {
    AOS.refresh();
    // let scroll = $(this).scrollTop();
    // scroll < 800
    //   ? $(".fa-bars").css("color", "rgb(212,0,0)")
    //   : $(".fa-bars").css("color", "black");
  });

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
      $(".fa-bars").hide();
    } else {
      $(".sidebar").animate({
        width: "0",
      });
      $(".main").animate({
        opacity: 1,
      });
      $(".fa-bars").show();
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

  $(".cover-text img").fadeIn("slow");
});

$("#target_form").submit(function (e) {
  var form_data = $(this).serializeArray();
  console.log(form_data);
  var send_data = {
    fName: form_data[0].value,
    email: form_data[1].value,
    subject: form_data[2].value,
    Message: form_data[3].value,
  };
  emailjs.init("user_L1mfNtUHvgF69mb9EBEDH");
  emailjs.send("service_zwomva9", "template_xfdi1nf", send_data).then(
    function (response) {
      console.log("Success");
      $("#success-mail").show();
      $("#fail-mail").hide();
      $("form").trigger("reset");
    },
    function (error) {
      console.log(error);
      $("#fail-mail").show();
      $("#success-mail").hide();
    }
  );
  e.preventDefault();
});

$("#newsletter_form").submit(function (e) {
  var form_data = $(this).serializeArray();
  var send_data = {
    email: form_data[0].value,
  };
  emailjs.init("user_L1mfNtUHvgF69mb9EBEDH");
  emailjs.send("service_zwomva9", "template_rc65ll5", send_data).then(
    function (response) {
      console.log("Success newsletter");
    },
    function (error) {
      console.log(error);
    }
  );
  e.preventDefault();
});
