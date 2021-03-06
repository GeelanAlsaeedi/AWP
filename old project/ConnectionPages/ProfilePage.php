<?php

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();
?>

<html class="js svg audio canvas cssremunit csscalc cssgradients supports no-touchevents video cssanimations cssfilters flexbox flexboxlegacy no-flexboxtweener flexwrap csstransforms csstransforms3d csstransitions backgroundblendmode ss-loaded"
  lang="en" style="" data-useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36">

<head>

  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8">
  <title>User's Profile Page </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- mobile specific metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/vendor.css">
  <link rel="stylesheet" href="css/main.css">

  <style type="text/css" media="screen">
    .s-styles {
      background-color: #ffffff;
      padding-top: 21.6rem;
      padding-bottom: 14.8rem;
    }
  </style>

  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
  <script src="js/pace.min.js"></script>

  <!-- favicons
    ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="300" class="  pace-done">
  <!-- <div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 740px; width: 481px;"><img class="parallax-slider"
      src="images/hero-bg.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: 0px; left: -314px; height: 740px; width: 1110px; max-width: none;"></div> -->
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>

  <!-- preloader
    ================================================== -->
  <div id="preloader" style="display: none;">
    <div id="loader" class="dots-jump" style="display: none;">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>


  <!-- header
    ================================================== -->
  <header class="s-header">

    <div class="row">
      <div class="header-logo">
        <a class="site-logo" href="index.html">
          <img src="../LINE ART LOGO white.png" alt="Homepage">
        </a>
      </div>

      <nav class="header-nav-wrap mobile">
        <ul class="header-main-nav">
          <li><a href="" title="Explpore">Explore</a></li>
          <li><a href="" title="MyProfile">Profile</a></li>
          <li class=""><a href="../ConnectionPages/index.html" title="Sgin out">Sgin out</a></li>
          <!-- <li><a href="" title="pricing">Pricing</a></li>
          <li><a href="" title="download">Download</a></li> -->
        </ul>

        <div class="header-cta">

        </div>
      </nav>

      <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    </div>

  </header> <!-- end header -->


  <!-- home
    ================================================== -->
  <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="ConnectionPages/hero-bg.jpg" data-position-y="center">

    <!-- <div class="shadow-overlay"></div> -->

    <div class="home-content">

      <div class="row home-content__main">

        <div class="home-content__left">
          <!-- recive the user name from the index.php page  -->
          <h1 class="username">
            <a href="#edits"> Gee
          <!-- <?php
          	// $userName=$_POST['userName'];
            // echo $userName;
           ?> -->
         </a>
            's Profile
          </h1>

          <div class="home-content__btn-wrap">
            <!-- Images used to open the lightbox -->
            <div class="row">
              <div class="column">
                <img src="images3/avatars/user-01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images3/avatars/user-02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images3/avatars/user-03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images3/avatars/user-04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
              </div>
            </div>

            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

                <div class="mySlides">
                  <div class="numbertext">1 / 4</div>
                  <img src="img1_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 4</div>
                  <img src="img2_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 4</div>
                  <img src="img3_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">4 / 4</div>
                  <img src="img4_wide.jpg" style="width:100%">
                </div>

                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Caption text -->
                <div class="caption-container">
                  <p id="caption"></p>
                </div>

                <!-- Thumbnail image controls -->
                <div class="column">
                  <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
                </div>

                <div class="column">
                  <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Snow">
                </div>

                <div class="column">
                  <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
                </div>

                <div class="column">
                  <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end home-content__left-->

        <div class="home-content__right">
          <a href="#download" class="btn btn--primary home-content__btn smoothscroll">
            Upload Photos
          </a>
        </div> <!-- end home-content__right -->

      </div> <!-- end home-content__main -->



    </div> <!-- end home-content -->

    <a href="#styles" class="home-scroll smoothscroll">


    </a>

  </section> <!-- end s-home -->
  <article id="edits">
    <h2 class="major">Sign up</h2>
              <form method="post" action="" name="Edit">
      <div class="fields">
      <div class="field">
          <h1 style="font-size:100%;">Change Your Username</h1>
          <input type="text" id="newusername" name="new_user_name" required>
        </div>
      </div>
      <ul class="actions">
        <li><input style="margin-left: 80px;" type="submit" value="Save Changes" name="save_up" class="primary" /></li>
      </ul>
    </form>
  </article>

  <!-- styles
    ================================================== -->
  <!-- end styles -->


  <!-- footer
    ================================================== -->
  <!-- end s-footer -->


  <!-- Java Script
    ================================================== -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <!-- <script src="js/main.js"></script> -->

</body>

</html>
