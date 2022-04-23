cars = ["#car_1", "#car_2", "#car_3", "#car_4", "#car_5", "#car_6", "#car_7", "#car_8"];

cars.forEach((car) => {
  $(`${car} .front`).click(() => {
    $(`${car} > .flip-card-base`).toggleClass("flipper");
  });

  $(`${car} .back`).click(() => {
    $(`${car} > .flip-card-base`).toggleClass("flipper");
  });
});
