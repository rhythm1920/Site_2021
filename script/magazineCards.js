const PITSTOP_DETAILS = [
  {
    id: 1,
    identifier: "pitstop-01",
    title: "Pitstop 01",
    img: "../images/cars/k1.jpg",
    body: "Content 2",
  },
  {
    id: 2,
    identifier: "pitstop-02",
    title: "Pitstop 02",
    img: "../images/cars/k1.jpg",
    body: "Content",
  },
  {
    id: 3,
    identifier: "pitstop-03",
    title: "Pitstop 01",
    img: "../images/cars/k1.jpg",
    body: "Content",
  },
  {
    id: 4,
    identifier: "pitstop-04",
    title: "Pitstop 01",
    img: "../images/cars/k1.jpg",
    body: "Content",
  },
];

const magazineCard = document.querySelector("#magazine-cards");

PITSTOP_DETAILS.map((item) => {
  magazineCard.innerHTML += `
  <a class="card text-decoration-none text-dark" style="width: 18rem;" href="../pitstop/${item.identifier}.html">
  <img class="card-img-top" src="${item.img}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">${item.title}</p>
    <div>${item.body}</div>
  </div>
</a>`;
});
