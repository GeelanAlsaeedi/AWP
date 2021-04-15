<?php
include'../connection.php';
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();

$query="SELECT * FROM artist_info WHERE user_name='$userName'";

$row['user_name'];
 ?>
 
 
<html>
	<head>
		<title>Vincent Willem van Gogh </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets3/css/main.css" />
		<noscript><link rel="stylesheet" href="assets3/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
<header class="s-header">

<div class="row">
<div class="header-logo">
<a class="site-logo" href="menu.html">
<img src="LINE ART LOGO white.png" alt="Homepage" >
</a>
</div>

<nav class="header-nav-wrap">
<ul class="header-main-nav">

<li><a class="smoothscroll2" href="explore.html" title="about">EXPLORE</a></li>
<li><a class="smoothscroll3" href="ProfilePage.html" title="features">PROFILE</a></li>
<li class="smoothscroll3"><a href="index.php" title="Home">SIGN OUT</a></li>
</ul>

</nav> <!-- end header-nav-wrap -->


</div>

</header>
<!-- in the page you're at make sure to underline the nav link that you exist in-->
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">

						<!-- Items -->
							<div class="items">

								<div class="item intro span-2">
								
								<h1  style="font-size:45px; font-family: 'Source Sans Pro" 5 Free'"; class="username">
          <?php
          	$userName=$_POST['userName'];
            echo $userName;
           ?>
            's Photo
          </h1>
		   
                         

                                </div>

                                <article class="item thumb span-1">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">The Starry Night</h2>
                                    <a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-2">
                                    <h2 style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';" >Landschaft mit Olivenbäumen</h2>
                                    <a href="images/fulls/02.jpg" class="image"><img src="images/thumbs/02.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-1">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">The Night Café.</h2>
                                    <a href="images/fulls/03.jpg" class="image"><img src="images/thumbs/03.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-1">
                                    <h2 style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';" >View of the Sea </h2>
                                    <a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-3">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">Skull of a Skeleton with Burning Cigarette</h2>
                                    <a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-1">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">Sunflower</h2>
                                    <a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-2">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">At the gate to eternity</h2>
                                    <a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt=""></a>
                                </article>

                                <article class="item thumb span-2">
                                    <h2  style="font-size:20px; font-family: 'Source Sans Pro" 5 Free';">The Red Vineyard</h2>
                                    <a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt=""></a>
                                </article>

                            </div>

						<!-- Items -->


					</section>

				<!-- Footer ممكن هنا نحط  معلومات  -->
					<section id="footer">
						<section>
							<p>                                                                               
							</br>                  </p>
						</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets3/js/jquery.min.js"></script>
			<script src="assets3/js/jquery.poptrox.min.js"></script>
			<script src="assets3/js/browser.min.js"></script>
			<script src="assets3/js/breakpoints.min.js"></script>
			<script src="assets3/js/util.js"></script>
			<script src="assets3/js/main.js"></script>

	</body>
</html>
