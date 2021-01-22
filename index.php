<!DOCTYPE html>


<?php 

    if(isset($_POST["submit"])){
        
        if(!$_POST["Full-Name"]){
            $error="Please enter your name";
        }
        else if(!$_POST["Email-id"]){
            $error="Please enter your email-id";
        }
        else if(!$_POST["Subject"]){
            $error="Please enter a subject";
        }
        else if(!$_POST["Message"]){
            $error="Please enter a message";
        }
        else{
            $error = null;
        }
        if(isset($error)){
            $result = "<div class=\"alert alert-danger\">$error</div>";
        }
        else{
            $result = "<div class=\"alert alert-success\">Form Submitted</div>";
            $link = mysqli_connect("127.0.0.1","root","","usersdb");
            if($link){
              $name = $_POST["Full-Name"];
              $email = $_POST["Email-id"];
              $sub = $_POST["Subject"];
              $message = $_POST["Message"];
              $sql = "INSERT INTO `users` (`Name`,`Email`,`Subject`,`Message`) VALUES('$name','$email','$sub','$message')";
              // $query = "SELECT * FROM users";
              if(mysqli_query($link,$sql)){
              }
              else{
              }
            }
            else{
            }
        }
  
    }

?>


<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/1305f8f706.js"
      crossorigin="anonymous"
    ></script>
    <title>TeamKART</title>
    <div class="sidebar">
      <a href="#"><i class="fas fa-arrow-left close"></i></a>
      <!-- <a href="#"><img src="./images/tklogo.png" alt="teamkart-logo" class="tklogo"></a> -->
      <div class="sidebar-in">
        <a href="./index.html">Home</a>
        <a href="./team.html">Team</a>
        <a href="./cars.html">Cars</a>
        <a href="#contact">Contact</a>
        <a href="./sponsers.html">Sponsors</a>
        <a href="./gallery.html">Gallery</a>
        <a href="./blog.html">Blog</a>
      </div>
    </div>
  </head>

  <body>
    <div class="main">
      <i class="fa fa-bars close mx-1 my-1"></i>
      <!-- <img
        src="./images/index-cover.jpg"
        class="index-cover"
        alt="index-cover"
      /> -->

      <div class="jumbotron">
      <div class="container-fluid p-0 top-slider">
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
              ></li>
              <li
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
              ></li>
              <li
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./images/gallery/team1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="./images/gallery/team1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="./images/gallery/index-cover.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>
                    Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur.
                  </p>
                </div>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleCaptions"
              role="button"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleCaptions"
              role="button"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        <h1>ABOUT US</h1>
        <hr class="hr"/>
        <div class="container container-fluid">
          <div class="row">
            <div class="col-xl-7">
              <p class="px-3 fs-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Nulla porttitor massa id neque. Pellentesque eu tincidunt tortor
                aliquam. Cras sed felis eget velit aliquet sagittis. Nunc id
                cursus metus aliquam eleifend mi. Faucibus purus in massa
                tempor. Posuere morbi leo urna molestie at. Posuere ac ut
                consequat semper viverra nam libero. Adipiscing tristique risus
                nec feugiat in fermentum posuere urna nec.
              </p>
            </div>
            <div class="col-xl-5 px-3">
              <img src="./images/team1.jpg" alt="about-us" class="img-fluid" />
            </div>
          </div>
        </div>

        <h1>WHAT IS FORMULA STUDENT ?</h1>
        <hr class="hr"/>
        <div class="container container-fluid">
          <div class="row">
            <div class="col-xl-7 col-sm-12 px-3 pb-3">
              <img src="./images/fb.PNG" alt="about-us" class="img-fluid" />
            </div>
            <div class="col-xl-5 col-sm-12">
              <p class="fs-6 px-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Nulla porttitor massa id neque. Pellentesque eu tincidunt tortor
                aliquam. Cras sed felis eget velit aliquet sagittis. Nunc id
                cursus metus aliquam eleifend mi. Faucibus purus in massa
                tempor. Posuere morbi leo urna molestie at. Posuere ac ut
                consequat semper viverra nam libero. Adipiscing tristique risus
                nec feugiat in fermentum posuere urna nec.<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Nulla porttitor massa id neque. Pellentesque eu tincidunt tortor
                aliquam. Cras sed felis eget velit aliquet sagittis.<br />
              </p>
              <div class="p-0">
                <div class="row p-4">
                  <i class="fas fa-users info-icons col-6 text-center p-4"
                    ><p class="pt-2">75</p></i
                  >
                  <i class="fas fa-tools info-icons col-6 text-center p-4"
                    ><p class="pt-2">4</p></i
                  >
                </div>
                <div class="row p-4">
                  <i
                    class="fas fa-flag-checkered info-icons col-6 text-center p-4"
                    ><p class="pt-2">4</p></i
                  >
                  <i
                    class="fas fa-tachometer-alt info-icons col-6 text-center p-4"
                  >
                    <p class="pt-2">4</p>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <h1>CONTACT US</h1>
        <hr class="hr"/>
        <div class="container container-fluid p-3 mb-3 clearfix">
          <div class="row">
            <div class="col-xl-6 col-lg-6 pb-4">
              <form class="col-12" method="post">
                <div class="form-group">

                    <?php 
                       echo isset($result) ? $result : null;
                    ?>

                  <input
                    type="text"
                    class="form-control rounded-0 mb-2 border-0"
                    name="Full-Name"
                    placeholder="Full Name"
                    value="<?php 
                     error_reporting(E_ERROR | E_PARSE);
                     echo $_POST["Full-Name"];
                 
                    ?>"
                  />
                  <input
                    type="email"
                    class="form-control rounded-0 mb-2 border-0"
                    name="Email-id"
                    placeholder="Email-id"
                    value="<?php 
                     error_reporting(E_ERROR | E_PARSE);
                     echo $_POST["Email-id"];
                 
                    ?>"
                  />
                  <input
                    type="text"
                    class="form-control rounded-0 mb-2 border-0"
                    name="Subject"
                    placeholder="Subject"
                    value="<?php 
                     error_reporting(E_ERROR | E_PARSE);
                     echo $_POST["Subject"];
                 
                    ?>"
                  />
                  <textarea
                    name="Message"
                    cols="10"
                    rows="8"
                    class="form-control rounded-0 border-0"
                    placeholder="Write Something ..."
                    value="<?php 
                     error_reporting(E_ERROR | E_PARSE);
                     echo $_POST["Message"];
                 
                    ?>"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-danger rounded-0 mt-2" name="submit">
                  Submit
                </button>
              </form>
            </div>
            <div class="col-xl-6 col-lg-6 pb-4">
              <iframe
                src="https://www.youtube.com/embed/ComXphxUrMA"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="h-100 w-100"
              ></iframe>
            </div>
          </div>
        </div>
      </div>


      <footer>
        <div class="container container-fluid footer pb-4">
          <div class="row justify-content-center">
            <div class="col col-xl-3 col-lg-5 col-md-12 col-sm-12 col-12">
              <h4 class="pt-4">Find Us</h4>
              <div class="map clearfix">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1792.9044026033764!2d87.31555235805091!3d22.320339919170205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d441bd5dd36ff%3A0xe6a8debfe052c0aa!2sTeamKART%20Bay!5e0!3m2!1sen!2sin!4v1609521595560!5m2!1sen!2sin"
                  frameborder="0"
                  style="border: 0"
                ></iframe>
              </div>
            </div>
            <div class="row col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div
                class="col col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ps-0"
              >
                <h4 class="pt-4 pb-1">Contacts</h4>
                <p class="manager-contact mb-2">
                  Swarnim Raj <br />
                  +91- 91241247125
                </p>
                <p class="manager-contact mb-2">
                  Keshav Bagri<br />
                  +91- 91241247125
                </p>
                <i class="fas fa-phone-alt d-block mt-4 pt-1"
                  ><span class="ps-2">+91-987654321</span></i
                >
                <i class="fas fa-envelope d-block mt-2"
                  ><span class="ps-2">kart@team.com</span></i
                >
                <i class="fas fa-map-marker-alt d-block mt-2 pb-2">
                  <span class="ps-2">TeamKART Bay, Behind Nehru Musem</span>
                </i>
              </div>
              <div class="col col-xl-6 col-lg-8 col-md-8 col-sm-12 col-12 ps-0">
                <h4 class="pt-4 pb-1">Newsletter</h4>

                <div class="input-group rounded-0">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your email..."
                    aria-label="Newsletter subscription"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-outline-secondary mx-1 btn-large"
                      type="button"
                    >
                      <i class="fas fa-paper-plane ps-0"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 social-media"
            >
              <hr style="width: 80%; margin: 1rem auto" />
              <div class="container container-fluid mt-0 mb-2 p-2">
                <a href="./index.html" id="footer-links" class="p-2">Home</a>
                <a href="./team.html" id="footer-links" class="p-2">Team</a>
                <a href="./cars.html" id="footer-links" class="p-2">Cars</a>
                <a href="./index.html#contact" id="footer-links" class="p-2"
                  >Contact</a
                >
                <a href="./sponsers.html" id="footer-links" class="p-2"
                  >Sponsors</a
                >
                <a href="./gallery.html" id="footer-links" class="p-2"
                  >Gallery</a
                >
                <a href="./blog.html" id="footer-links" class="p-2">Blog</a>
              </div>
              <p class="mb-1">Copyright ©2020 | TeamKART</p>
              <a href="" class="px-3"><i class="fab fa-facebook-f p-0"></i></a>
              <a href="" class="px-3"><i class="fab fa-instagram p-0"></i></a>
              <a href="" class="px-3"><i class="fab fa-youtube p-0"></i></a>
              <a href="" class="px-3"><i class="fab fa-linkedin-in p-0"></i></a>
              <a href="" class="px-3"><i class="fas fa-envelope p-0"></i></a>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!--
        bootstrap scripts
    -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>
    <script src="./script/script.js"></script>
  </body>
</html>
