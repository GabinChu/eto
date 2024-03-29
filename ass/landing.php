<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: index.php");
}
?>

  <!DOCTYPE html><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Group 6</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- GOOGLE FONTS -->
    <link
      href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Ubuntu:wght@400;500;700&display=swap"
      rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">

    <!-- CDN FONTS  -->
    <link href="https://fonts.cdnfonts.com/css/elinga" rel="stylesheet" />

    <!-- FONTAWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

    <!-- BOOTSTRAP -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>

         <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


    <!-- CSS -->
    <link href="https://copyfonts.com/fonts/attari-salees.html" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <!-- CODE FOR NAVIGATION BAR -->
        
        <a class="navbar-brand" href="index.html">Arellano University</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link px-3" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link px-4" href="#categorySection">Canteens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4" href="reciept.html">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4" href="logout.php">Log Out</a>


            </li>
          </ul>
        </div> 
        <div id="shoppingclass" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-shopping-cart" id="cart"></i>
          <span class="shoppingCartAfter" id="zero">0</span>
        </div>
      </div>
    </nav>

iba to
<div class="menu-btn"></div>
<section class="home">
      <video class="video-slide active" src="11.mp4" autoplay muted loop></video>
      <video class="video-slide" src="44.mp4" autoplay muted loop></video>
      <video class="video-slide" src="33.mp4" autoplay muted loop></video>
      <video class="video-slide" src="22.mp4" autoplay muted loop></video>
      <video class="video-slide" src="55.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>Arellano<br><span>University</span></h1>
        <p>
Welcome to the Arellano's University Ordering System, where you can seamlessly navigate through our platform to place orders, manage transactions, and streamline your university experience. </p>
      </div>
      <div class="content">
        <h1>Canteen Introduction</h1>
        <p>Here at Arellano's, we prioritize efficiency and convenience, ensuring that your journey through our ordering system is smooth and hassle-free. Whether you're seeking course materials, university merchandise, or any other essentials, our platform offers a comprehensive selection to cater to your needs.</p>
      </div>
      <div class="content">
        <h1>Canteen<br><span>System</span></h1>
        <p>With user-friendly interfaces and intuitive features, navigating our ordering system is as simple as it is efficient. Join us at Arellano's University Ordering System and experience a new level of convenience in managing your university requirements.</p>
      </div>
      <div class="content">
        <h1>Thank you<br><span></span></h1>
        <p>your engagement is greatly valued and contributes to enhancing our platform!</p>
       
      </div>
      <div class="content">
        <h1><br><span>Eat Well!</span></h1>
        <p>Thank you for trying out the Arellano's University Ordering System – we appreciate your participation!</p>
        
      </div>
      <div class="media-icons">
  <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
  <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
  <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
</div>

      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

     <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>


<div id="main">
    <div class="container home-container">
      <section id="homeSection" class="d-flex justify-content-center">
        <div class="row homeRow">
          <div class="col-lg-6 homeTxtCol">
            
             
            <div class="homeBtnDiv">
              <a href="#categorySection" class="btn homeBtn">Order Now!</a>
            </div>
          </div>
          
        </div>
      </section>
    </div>


<style>
    /* Your CSS styles here */
    :root {
      --primary: #ec994b;
      --white: #ffffff;
      --bg: #f5f5f5;
    }

    .lahat {
      font-size: 50%;
      font-family: "Montserrat", sans-serif;
      scroll-behavior: smooth;
    }

    /* Adjustments for scroll bar */
    ::-webkit-scrollbar {
      width: 1rem;
    }

    /* Adjustments for scroll bar thumb */
    ::-webkit-scrollbar-thumb {
      border-radius: 0.5rem;
      background: #797979;
      transition: all 0.5s ease-in-out;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #222224;
    }

    ::-webkit-scrollbar-track {
      background: #f9f9f9;
    }

    body {
      font-size: 1.2rem;
      background: var(--bg);
    }

    /* Adjustments for sections */
    .test {
      max-width: 80rem;
      padding: 0 0.5rem;
      margin: 0 auto;
    }

    /* Adjustments for text alignment */
    .text-center {
      text-align: center;
    }

    /* Adjustments for section headings */
    .section-heading {
      font-size: 2rem;
      color: var(--primary);
      padding: 1rem 0;
    }

    /* Adjustments for swiper container */
    #tranding {
      padding: 1rem 0;
    }

    /* Adjustments for swiper slider */
    #tranding .tranding-slider {
      height: 30rem;
      padding: 1rem 0;
      position: relative;
    }

    /* Adjustments for swiper slide */
    .tranding-slide {
      width: 25rem;
      height: 30rem;
      position: relative;
    }

    /* Adjustments for slide content */
    .tranding-slide .tranding-slide-img img {
      width: 25rem;
      height: 30rem;
      border-radius: 0.5rem;
      object-fit: cover;
    }

    /* Adjustments for slide content */
    .tranding-slide .tranding-slide-content {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
    }

    /* Adjustments for food price */
    .tranding-slide-content .food-price {
      position: absolute;
      top: 1rem;
      right: 1rem;
      color: var(--white);
    }

    /* Adjustments for bottom content */
    .tranding-slide-content .tranding-slide-content-bottom {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      color: var(--white);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Adjustments for food rating */
    .food-rating {
      padding-top: 0.8rem;
      display: flex;
      gap: 0.6rem;
    }

    /* Adjustments for ion icons */
    .rating ion-icon {
      font-size: 1.2rem;
      color: var(--primary);
    }

    /* Adjustments for slider control */
    .tranding-slider-control {
      position: relative;
      bottom: 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Adjustments for arrow buttons */
    .tranding-slider-control .slider-arrow {
      background: var(--white);
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
      filter: drop-shadow(0px 4px 12px rgba(18, 28, 53, 0.1));
    }

    /* Adjustments for next arrow button */
    .tranding-slider-control .swiper-button-next {
      margin-left: 1rem;
    }

    /* Adjustments for previous arrow button */
    .tranding-slider-control .swiper-button-prev {
      margin-right: 1rem;
    }

    /* Adjustments for arrow icons */
    .tranding-slider-control .slider-arrow ion-icon {
      font-size: 1rem;
      color: #222224;
    }

    /* Adjustments for pagination */
    .tranding-slider-control .swiper-pagination {
      position: relative;
      width: 10rem;
      bottom: 0.6rem;
    }

    /* Adjustments for pagination bullets */
    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
      filter: drop-shadow(0px 4px 12px rgba(18, 28, 53, 0.1));
    }

    /* Adjustments for active pagination bullet */
    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
      background: var(--primary);
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="lahat">
    <section id="tranding">
      <div class="test">
        <h3 class="text-center section-subheading">- Cafeteria -</h3>
        <h1 class="text-center section-heading">Best Buys!</h1>
      </div>
      <div class="test">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/as.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">₱20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/ass.jpg" alt="Trending">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">₱15</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/asss.jpg" alt="Trending">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">₱20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>4</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      
                    </div>
                  </h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/assss.jpg" alt="Trending">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">₱20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>

           
          
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
    var TrandingSlider = new Swiper('.tranding-slider', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  </script>

  




<!-- Category section starts here -->
    <section id="categorySection">
  <div class="container">
    <h1><b>Cafeterias</b></h1>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-sm-4 col-4">
        <div class="product-box-layout4 cafe">
          <div class="item-figure">
            <img src="./images/caf3.jpg" width="300" height="300" />
          </div>
          <div class="item-content">
            <h2 class="card-title">Cafeteria 1</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-4 col-4">
        <div class="product-box-layout4 cafe2">
          <div class="item-figure">
            <img src="./images/caf4.jpg" width="300" height="300" />
          </div>
          <div class="item-content">
            <h2 class="card-title">Cafeteria 2</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-4 col-4">
        <div class="product-box-layout4 cafe3">
          <div class="item-figure">
            <img src="./images/caf1.jpg" width="300" height="300" />
          </div>
          <div class="item-content">
            <h2 class="card-title">Cafeteria 3</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-4 col-4">
        <div class="product-box-layout4 cafe3">
          <div class="item-figure">
            <img src="./images/caf2.jpg" width="300" height="300" />
          </div>
          <div class="item-content">
            <h2 class="card-title">Cafeteria 4</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



        <!-- MENU STARTS HERE -->
        <div class="menuDiv">
          <!-- MODAL -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row paymentInfoRow">
                      <div class="col paymentInfo">
                        <span class="checkIcon"
                          ><i class="fas fa-check-circle"></i
                        ></span>
                        Select Menu
                      </div>
                      <div class="col paymentInfo">
                        <span class="checkIcon"
                          ><i class="fa-solid fa-cash-register"></i>
                        </span>
                        Place order via Gcash
                      </div>
                    
                    </div>

                    <hr class="cartHr" />

                    <div class="cartContentDiv">
                      <h1>Your Cart is Empty</h1>
                    </div>

                    <div class="userInfoDiv">
                      <div class="mb-3 px-2">
                        <label for="address">Full Name</label> <br />
                        <textarea
                          type="text"
                          class="form-control"
                          id="address"
                        ></textarea>
                      </div>
                      <div class="mb-3 px-2">
                        <label for="address">Student ID or Registration Number
                        </label> <br />
                        <textarea
                        ></textarea>
                      </div>

                      <div class="mb-3 px-2">
                        <label for="address">Gcash Mobile Number
                        </label> <br />
                        <textarea
                        ></textarea>
                      </div>

                      <div class="mb-3 px-2">
                        <label for="address">Room Number and Building
                        </label> <br />
                        <textarea
                        ></textarea>
                      </div>

                      <div class="mb-3 px-2">
                        <label for="address">Grade, Section and Cluster
                        </label> <br />
                        <textarea
                        ></textarea>
                      </div>


                      <div class="mb-3 px-2">
                        <label for="note">Note (optional)</label> <br />
                        <textarea
                          type="text"
                          class="form-control"
                          id="note"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
   <div class="totalAmountDiv"></div>
<button type="button" class="btn btn-secondary" onclick="location.reload()">Clear Cart</button>
<button type="button" class="btn btn-primary" id="placeOrderBtn" onclick="placeOrderAndRedirect()">Order Now</button>
</div>

<script>
  function placeOrderAndRedirect() {
    // Call the placeOrder function if needed
    placeOrder();

    // Redirect to another HTML file
    window.location.href = "ass/reciept.html";
  }
</script>



              </div>
            </div>
          </div>

          <div id="cafe">
            <div class="row menuHeading">
              <div class="col-12">
                <h1>Cafeteria 1</h1>
              </div>
            </div>

            <!-- chop -->
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Meal</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Water
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 80
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Rice w/ Hotdog
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 50
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Rice w/ Nuggets
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          burger
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 130
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Drinks</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Water
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 15
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Coke
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Sprite
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Chicken
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 160
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row checkOutRow">
              <button
                type="button"
                class="btn knowMoreBtn"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                <i class="fas fa-shopping-cart"></i> Go to Cart
              </button>
            </div>
          </div>

          <div id="cafe2">
            <div class="row menuHeading">
              <div class="col-12">
                <h1>Cafeteria 2</h1>
              </div>
              <!-- Button trigger modal -->
              <span
                class="shoppingCart"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                <i class="fas fa-shopping-cart"></i>
                <span class="shoppingCartAfter">0</span>
              </span>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Meal</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Cheese Burger
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 100
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Egg Burger
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 130
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Cheese Stick<span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 30
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Pusa
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 230
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Snacks</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Piattos<span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Rebisco
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 10
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Vcut
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 19
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Waffle Hotdog
                          <span>
                            <img
                              class="nonVegIcon"
                              src="./images/non-veg.webp"
                              alt="non-veg icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 300
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card">
                  <h2 class="card-title">Drinks</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Juice<span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Tubig
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 30
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Sprite
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 400
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="row checkOutRow">
              <button
                type="button"
                class="btn knowMoreBtn"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                <i class="fas fa-shopping-cart"></i> Go to Cart
              </button>
            </div>
          </div>

          <div id="cafe3">
            <div class="row menuHeading">
              <div class="col-12">
                <h1>Cafeteria 4</h1>
              </div>
              <!-- Button trigger modal -->
              <span
                class="shoppingCart"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                <i class="fas fa-shopping-cart"></i>
                <span class="shoppingCartAfter">0</span>
              </span>
            </div>
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Meal</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Kwek-Kwek (5pcs)
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 20
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Siomai
                          <span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 150
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Adobo<span>
                            <img
                              class="vegIcon"
                              src="./images/veg.webp"
                              alt="veg-icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 150
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>
                          Shin
                          <span>
                            <img
                              class="nonVegIcon"
                              src="./images/non-veg.webp"
                              alt="non-veg icon"
                            />
                          </span>
                        </p>
                        <p class="text-muted-small">
                          <b>₱</b> 50
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    


                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card">
                  <h2 class="card-title">Drinks</h2>
                  <div class="card-body">
                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>FishBall</p>
                        <p class="text-muted-small">
                          <b>₱</b> 120
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>Chicken Ball</p>
                        <p class="text-muted-small">
                          <b>₱</b> 150
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>Yek</p>
                        <p class="text-muted-small">
                          <b>₱</b> 140
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>Hotdog</p>
                        <p class="text-muted-small">
                          <b>₱</b> 140
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />

                    <div class="row foodItem">
                      <div class="col-9 foodItemName">
                        <p>Squid Ball</p>
                        <p class="text-muted-small">
                          <b>₱</b> 150
                        </p>
                      </div>
                      <div class="col-3 addCol">
                        <span class="menuBtn minus"
                          ><i class="fas fa-minus"></i
                        ></span>
                        <span class="quantity">0</span>
                        <span class="menuBtn plus"
                          ><i class="fas fa-plus"></i
                        ></span>
                      </div>
                    </div>
                    <hr class="foodItemHr" />
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="row checkOutRow">
              <button
                type="button"
                class="btn knowMoreBtn"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                <i class="fas fa-shopping-cart"></i> Go to Cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- FOOTER STARTS HERE -->

    <footer id="footer">
      <div class="  iner">
        <div class="row">
          <div class="col-9 footerHeadingCol">
            <h2>Cafeteria Ordering System</h2>
          </div>
        </div>


    </footer>
</div>
    <!-- BOOTSTRAP JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      
    ></script>
    <!-- FONT AWESOME JS -->
    <script
      src="https://kit.fontawesome.com/9f6e489cf7.js"
      
    ></script>
    <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="./index.js"></script>
  </body>

  <!-- BOOTSTRAP JS -->
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    
  ></script>

  <!-- JQUERY CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- CUSTOM JS -->
  <script src="./index.js"></script>
  
</html>


