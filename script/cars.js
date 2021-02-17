// $(".front").click(() => {
//   $(".flip-card-base").addClass("turner");
// });

// $(".back").click(() => {
//   $(".flip-card-base").removeClass("turner");
// });
cars = ["#car_1", "#car_2", "#car_3", "#car_4", "#car_5", "#car_6", "#car_7"];

cars.forEach((car) => {
  $(`${car}_text`).click(() => {
    $(`${car} > .flip-card-base`).toggleClass("flipper");
  });

  $(`${car} .back`).click(() => {
    $(`${car} > .flip-card-base`).toggleClass("flipper");
  });

  $(`${car} .car-image`).click(() => {
    $(`${car} .car-actual-image`).toggleClass("show-car");
  });
});
