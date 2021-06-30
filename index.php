<?php
require "form/common.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Dr. Amit Dave</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr. Amit Dave">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.php">
					<div>Dr<span>Amit Dave</span></div>
					<div>Ayurvedic Clinic</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.php">About us</a></li>

				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

				<!-- Work Hourse -->
				<div class="work_hours">Mo- Sat: 8:00am - 9:00pm</div>

				<!-- Header Phone -->
				<div class="header_phone">+91 9833 037 208</div>


				<div class="button button_1 header_button"><a href="form/doctor-log.php">Doctor Login</a></div> 

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
					<!--	<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
						<li><a href="https://www.facebook.com/DrAmitDave100/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://twitter.com/DrAmitDave?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About us</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mon - Sat: 10:30am - 1:00pm & 6:00pm - 8:30pm</div>
			<div class="menu_link">+91 9833 037 208</div>

		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
			<!--	<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
				<li><a href="https://www.facebook.com/DrAmitDave100/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/DrAmitDave?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/banner.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">#1 Ayurvedic Clinic</div>
										<div class="home_title">Feel the inner you</div>
										<div class="home_text">
										<p>Life (ayu) is the combination (samyoga) of body, senses, mind and reincarnating soul. Ayurveda is the most sacred science of life, beneficial to humans both in this world and the world beyond.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="pat_form/regist.php">Register Today</a></div>
											
										</div>




									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				</div>

			</div>



		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">This is Dr Amit Dave</div>
							<div class="section_title"><h2>Welcome to our Clinic</h2></div>
						</div>
						<div class="intro_text">
						<p>Ayurveda is not just about nutrition or herbology, it has a unique tool for diagnosis, diagnosis of understanding the human constitution is different from person to person. Each one has a unique metabolic system.</p>
						</div>
						<div class="milestones">
							<div class="row milestones_row">

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
										<div class="milestone_text">Satisfied Patients</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="352">0</div>
										<div class="milestone_text">Face Liftings</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="718">0</div>
										<div class="milestone_text">Injectibles</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title">Make an Appointment</div>
						<form action="form/appoint_script.php" method="POST" class="intro_form" id="intro_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" name="patient_name" class="intro_input" placeholder="Patient's Name" required="required"/>
								<input type="email" name="email" class="intro_input" placeholder="Patient's E-mail" required="required"/>
								<input type="int" name="mobile" class="intro_input" placeholder="Patient's Phone" required="required" maxlength="10" size="10"/>

								<input type="date" name="app_date" class="intro_input" placeholder="Appointment Date" required="required"/>

								<div class="intro_input">
								<label for="name">Choose a tentative slot:</label>
								<select class="intro_form" id="intro_form" name="timeslot">
  							<option value="slot1" name="timeslot">10:30am - 1pm</option>
 							 <option value="slot2" name="timeslot">6pm - 8:30pm</option>
 
							</select>
						</div><br><br>

							</div>
							<a href="#"><button class="button button_1 intro_button trans_200" type="submit" name="submit">Make an appointment</button></a>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->



	<!-- Call to action -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="cta_content">
							<div class="cta_title">Make your appointment today!</div>
							<div class="cta_text">The Best Services at Managable times</div>
						</div>
						<div class="cta_phone ml-lg-auto" ><a href="tel:+91 9833 037 208" style="color: white;">+91 9833 037 208</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>






	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle">This is Dr. Amit Dave</div>
						<div class="section_title"><h2>Our World Class Services</h2></div>
					</div>
				</div>
			</div>
			<div class="row services_row">


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/plant.svg"></div>
							</div>
							<div class="service_title">Ayurveda</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/pan.svg"></div>
							</div>
							<div class="service_title">Panchkarma</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/diet.svg"></div>
							</div>
							<div class="service_title">Diet</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/life.svg"></div>
							</div>
							<div class="service_title">Lifestyle</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/beauty.svg" ></div>
							</div>
							<div class="service_title">Beauty Clinics</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/more.svg"></div>
							</div>
							<div class="service_title">More</div>
							<div class="service_text">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Facebook -->

	<div class="cta" style="background-color: #3b5998;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="cta_content">
							<div class="cta_title">Checkout our Facebook Page too !!</div>
						<!--	<div class="cta_text">-</div>  -->
						</div>
						<div class="cta_phone ml-lg-auto" style="background-color: white"><a href="https://www.facebook.com/DrAmitDave100/" style="color:#3b5998;">Learn More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>







	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div>Dr<span>Amit Dave</span></div>
									<div>B.A.M.S (Ayurvedacharya)</div>
								</a>
							</div>
							<div class="footer_about_text">
								 <div class="location_title">Director:<br></div>
								<p>	Dave Ayurved Bhavan Panvel. <br>
									Konkan Ayurpharma Pvt. Ltd. <br>
									(Ayush Cluster Govt. of India, New Delhi).
								</p>
								<div class="location_title">Consultant:<br></div>
									Nirved International Mauritius<br>
								</p>
								<div class="location_title">Ex. Manager<br></div>
									Dabur India Ltd.<br>
								</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+91 9833 037 208</li>
								<li>amitdoc@hotmail.com</li>
								<li></li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Panvel</div>
									<div class="location_text">Dave Ayurveda & Wellness Clinic, Shivaji Road</div>
								</li>
								<li>
									<div class="location_title">Navi Mumbai</div>
									<div class="location_text">Dipti Ayurvedic Store, Nerul</div>
								</li>
								<li>
									<div class="location_title">Mumbai</div>
									<div class="location_text">Deepti Ayurved Stores, Sandust Road</div>
								</li>
								<li>
									<div class="location_title">Pune</div>
									<div class="location_text">Govind Ayurved</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Opening Hours -->
					<div class="col-lg-3 footer_col">
						<div class="opening_hours">
							<div class="footer_title">Opening Hours</div>
							<ul class="opening_hours_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Monday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thuesday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Wednesday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thursday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Friday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Saturday:</div>
									<div class="ml-auto">10:30am - 1pm  &<br> 6pm - 8:30pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start" sty>
									<div>Sunday:</div>
									<div class="ml-auto">Closed</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by <a href="https://www.instagram.com/techsavvy_kp/">Krutik Patel</a> & <a href="https://www.facebook.com/karuna.jagtap.37">Karuna Jagtap</a>

</div>
							<nav class="footer_nav ml-md-auto">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="about.php">About Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>


</body>
</html>
