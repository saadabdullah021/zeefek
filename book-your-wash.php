<!DOCTYPE html>

<html>

<head>

	<title>ZEEFEK</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css" />
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="style/superfish.css" />
	<link rel="stylesheet" type="text/css" href="style/flexnav.css" />
	<link rel="stylesheet" type="text/css" href="style/DateTimePicker.min.css" />
	<link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/layers.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/settings.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/navigation.css" />
	<link rel="stylesheet" type="text/css" href="style/base.css" />
	<link rel="stylesheet" type="text/css" href="style/responsive.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="script/jquery.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#template-booking').booking();
		});
	</script>
	<style>
		* {
			user-select: none;
		}
	</style>
</head>

<body class="template-page-book-your-wash">

	<!-- Header -->
	<div style="background-image: url('media/image/boo.jpg');
	" class="template-header template-header-background template-header-background-1" style="background-color:gray;">

		<!-- Top header -->
		<div class="template-header-top">
			<!-- Header -->
			<div class="template-header">

				<!-- Top header -->
				<div class="template-header-top">

					<!-- Logo -->
					<!-- 	<div class="template-header-top-logo">
		<a href="index.php" title="">
			<img src="media/image/logo.png" alt="" class="template-logo" />
			<img src="media/image/logo_sticky.png" alt="" class="template-logo template-logo-sticky" />
		</a>
	</div> -->

					<!-- Menu-->
					<div class="template-header-top-menu template-main">
						<nav>
							<!-- Default menu-->
							<div class="template-component-menu-default">
								<ul class="sf-menu">
									<li><a href="index.php" class="template-state-selected">Home</a></li>
									<li>
										<a href="about.php">About </a>

									</li>

									<li>
										<a href="service.php">Services</a>

									</li>

									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="book-your-wash.php">Booking</a></li>
									<li>
										<a href="contact.php">Contact</a>

									</li>
								</ul>
							</div>

						</nav>
						<nav>

							<!-- Mobile menu-->
							<div class="template-component-menu-responsive">
								<ul class="flexnav">
									<li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
									<li><a href="index.php" class="template-state-selected">Home</a></li>

									<li>
										<a href="about.php">About </a>

									</li>

									<li>
										<a href="service.php">Services</a>

									</li>

									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="book-your-wash.php">Booking</a></li>
									<li>
										<a href="contact.php">Contact</a>

									</li>
								</ul>
							</div>

						</nav>

					</div>

					<!-- Social icons -->
					<div class="template-header-top-icon-list template-component-social-icon-list-1">
						<ul class="template-component-social-icon-list">
							<li><a href="https://www.twitter.com/zeekef@gmail.com" class="template-icon-social-twitter" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/ZEEFEk" class="template-icon-social-facebook" target="_blank"></a></li>
							<li><a href="#" class="template-icon-social-dribbble" target="_blank"></a></li>
							<li><a href="book-your-wash.php" class="template-icon-meta-cart"></a></li>
							<li><a href="#" class="template-icon-meta-search"></a></li>
							<li><a href="#" class="template-icon-meta-menu"></a></li>
						</ul>
					</div>

				</div>

			</div>
		</div>

		<div class="template-header-bottom">

			<div class="template-main">

				<div class="template-header-bottom-page-title">
					<h1>Book your appoinment</h1>
				</div>

				<div class="template-header-bottom-page-breadcrumb">
					<button onclick="return redirectToUserLogin()" class="template-component-button">Login For Booking</button>
				</div>

			</div>

		</div>

	</div>

	<!-- Content -->
	<div class="template-content">

		<!-- Section -->
		<div class="template-component-booking template-section template-main" id="template-booking">

			<!-- Booking form -->
			<form >

				<ul>

					<!-- Vehcile list -->

					<li>

						<!-- Step -->
						<div class="template-component-booking-item-header template-clear-fix">
							<span>
								<span>1</span>
								<span>/</span>
								<span>4</span>
							</span>
							<h3>Vehicle type</h3>
							<h5>Select vehicle type below.</h5>
						</div>

						<!-- Content -->
						<div class="template-component-booking-item-content">

							<!-- Vehicle list -->
							<ul class="template-component-booking-vehicle-list">

								<!-- Vehicle -->
								<li data-id="regular-size-car">

									<div>

										<!-- Icon -->
										<div class="template-icon-vehicle-small-car"></div>

										<!-- Name -->
										<div>Regular Size Car</div>

									</div>

								</li>

								<!-- Vehicle -->
								<li data-id="medium-size-car">
									<div>
										<div class="template-icon-vehicle-car-mid-size"></div>
										<div>Medium Size Car</div>
									</div>
								</li>



							</ul>

						</div>

					</li>
					<!-- Package list -->


					<li>

						<!-- Step -->
						<div class="template-component-booking-item-header template-clear-fix">
							<span>
								<span>2</span>
								<span>/</span>
								<span>4</span>
							</span>
							<h3>Service packages</h3>
							<h5>Which wash is best for your vehicle?</h5>
						</div>

						<!-- Content -->
						<div class="template-component-booking-item-content">


						</div>
						<!-- Content -->
						<div class="template-component-booking-item-content">

							<!-- Package list -->
							<ul class="template-component-booking-package-list">

								<!-- Package -->
								<li data-id="basic-hand-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">

									<!-- Header -->
									<h4 class="template-component-booking-package-name">Basic Car Hand Wash</h4>

									<!-- Price -->
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">500</span>

									</div>

									<!-- Duration -->
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">15</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>

									<!-- Services -->
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
									</ul>

									<!-- Button -->
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>

								</li>

								<!-- Package -->
								<li data-id="basic-hand-wash-2" data-id-vehicle-rel="medium-size-car">

									<!-- Header -->
									<h4 class="template-component-booking-package-name">Basic Car Hand Wash</h4>

									<!-- Price -->
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">800</span>

									</div>

									<!-- Duration -->
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">20</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>

									<!-- Services -->
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
									</ul>

									<!-- Button -->
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>

								</li>

								<!-- Package -->
								<li data-id="deluxe-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">
									<h4 class="template-component-booking-package-name">Deluxe Wash</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">1000</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">30</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

								<!-- Package -->
								<li data-id="deluxe-wash-2" data-id-vehicle-rel="medium-size-car">
									<h4 class="template-component-booking-package-name">Deluxe Wash</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">1200</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">45</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

								<!-- Package -->
								<li data-id="ultimate-shine-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan">
									<h4 class="template-component-booking-package-name">Ultimate Shine</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">1500</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">45</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
										<li data-id="interior-vacuum">Interior Vacuum</li>
										<li data-id="trunk-vacuum">Trunk Vacuum</li>
										<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
										<li data-id="dashboard-clean">Dashboard Clean</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

								<!-- Package -->
								<li data-id="ultimate-shine-2" data-id-vehicle-rel="medium-size-car">
									<h4 class="template-component-booking-package-name">Ultimate Shine</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">1500</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">60</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
										<li data-id="interior-vacuum">Interior Vacuum</li>
										<li data-id="trunk-vacuum">Trunk Vacuum</li>
										<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
										<li data-id="dashboard-clean">Dashboard Clean</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

								<!-- Package -->
								<li data-id="platinium-works-1" data-id-vehicle-rel="regular-size-car">
									<h4 class="template-component-booking-package-name">Platinum Works</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">2000</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">60</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
										<li data-id="interior-vacuum">Interior Vacuum</li>
										<li data-id="trunk-vacuum">Trunk Vacuum</li>
										<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
										<li data-id="dashboard-clean">Dashboard Clean</li>
										<li data-id="air-freshener">Air Freshener</li>
										<li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
										<li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

								<!-- Package -->
								<li data-id="platinium-works-2" data-id-vehicle-rel="medium-size-car">
									<h4 class="template-component-booking-package-name">Platinum Works</h4>
									<div class="template-component-booking-package-price">
										<span class="template-component-booking-package-price-currency"><sup>PKR</sup></span>
										<span class="template-component-booking-package-price-total">2000</span>

									</div>
									<div class="template-component-booking-package-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-package-duration-value">75</span>
										<span class="template-component-booking-package-duration-unit">min</span>
									</div>
									<ul class="template-component-booking-package-service-list">
										<li data-id="exterior-hand-wash">Exterior Car Hand Wash</li>
										<li data-id="towel-hand-dry">Towel Hand Dry</li>
										<li data-id="wheel-shine">Wheel Shine</li>
										<li data-id="tire-dressing">Tire Dressing</li>
										<li data-id="windows-in-and-out">Windows In &amp; Out</li>
										<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
										<li data-id="interior-vacuum">Interior Vacuum</li>
										<li data-id="trunk-vacuum">Trunk Vacuum</li>
										<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
										<li data-id="dashboard-clean">Dashboard Clean</li>
										<li data-id="air-freshener">Air Freshener</li>
										<li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
										<li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
									</ul>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Book Now</a>
									</div>
								</li>

							</ul>

						</div>

					</li>
					<!-- Service list -->


					<li>

						<!-- Step -->
						<div class="template-component-booking-item-header template-clear-fix">
							<span>
								<span>3</span>
								<span>/</span>
								<span>4</span>
							</span>
							<h3>Services menu</h3>
							<h5>A la carte services menu.</h5>
						</div>

						<!-- Content -->
						<div class="template-component-booking-item-content">

							<!-- Service list -->
							<ul class="template-component-booking-service-list">

								<!-- Service -->
								<li>
									<h4 style="text-align: center;">Mechnical Services</h4>
								</li>
								<li data-id="car-diagnostic" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Car Diagnostic</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">140</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1050</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="engine-analysis" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Engine Analysis IC engines &amp; EC engines</span>
										<a href="#" class="template-component-more-link">
											<span>More...</span>
											<span>Less...</span>
										</a>
										<div class="template-component-more-content">
											Monitoring engine and lubricant conditions helps you
											detect problems and contamination before they result
											in excessive wear and failure. This analysis is applicable
											to spark or compression engines in virtually all types
											of mobile and stationary equipment, and helps to
											support an Optimized Drain Interval (ODI) program
										</div>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">50</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1400</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="engine-ovehal" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Engine Overhal </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">40</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1495</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="Oil-change-and-oil-filter" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Oil Change and Oil Filter Replacement</span>
										<a href="#" class="template-component-more-link">
											<span>More...</span>
											<span>Less...</span>
										</a>
										<div class="template-component-more-content">
											We vacuum your seats, including all the creases in your fabric or leather, carpets and mats.
											We will not miss under your seats.
										</div>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">45</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1295</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="engine-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Engine Replacement </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">35</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">950</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="check-engine-light-code" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Check Engine Light Code </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">60</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1150</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="tune-up" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Tune Up </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">45</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">850</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<!-- Service -->
								<li data-id="chassis-and-suspension" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Chassis and Suspension </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">30</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">750</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<!-- Service -->
								<li data-id="hose-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Hose Replacement</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">45</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1150</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<!-- Service -->
								<li data-id="fluid-services" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Fluid Services</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">35</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">650</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<!-- Service -->
								<li data-id="belt-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Belt Replacement</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">45</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1050</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<!-- Service -->
								<li data-id="radiator-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Radiator Replacement</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">30</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1250</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li>
									<h4 style="text-align: center;">Denting Painting Services</h4>
								</li>

								<!-- Service -->
								<li data-id="accident-repair" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Accident Repair </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">250</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">2550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="fender-repair" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Fender Repair &amp; Replacement </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">350</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">3550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="dent-repair" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Dent Repair </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">90</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">2000</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="paint-repair" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Paint Repair </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">400</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">5550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="windshield-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Wind Shield Replacement </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">150</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">2500</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<li data-id="bumper-replacement" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Bumper Repair &amp; Replacement </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">500</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">6550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>





								<li>
									<h4 style="text-align: center;">Electrical Services</h4>
								</li>

								<!-- Service -->
								<li data-id="lcd-repair" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Tap\LCD Repairing </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">80</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="speaker-attachment" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Speaker Attachment</span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">40</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1050</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="head-light-wiring" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Head Light Wiring </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">90</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1250</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="back-light-wiring" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Back Light Wiring </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">50</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="salf-wiring" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Salf Wiring </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">90</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">3550</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>

								<li data-id="window-mirror-up" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Window Mirror UP &amp; Dopwn </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">40</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1150</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
								<li data-id="car-battery-charge" class="template-clear-fix">
									<div class="template-component-booking-service-name">
										<span>Car Battery Charge </span>
									</div>
									<div class="template-component-booking-service-duration">
										<span class="template-icon-booking-meta-duration"></span>
										<span class="template-component-booking-service-duration-value">60</span>
										<span class="template-component-booking-service-duration-unit">min</span>
									</div>
									<div class="template-component-booking-service-price">
										<span class="template-icon-booking-meta-price"></span>
										<span class="template-component-booking-service-price-currency">PKR</span>
										<span class="template-component-booking-service-price-value">1050</span>
									</div>
									<div class="template-component-button-box">
										<a href="#" class="template-component-button">Select</a>
									</div>
								</li>
							</ul>

						</div>

					</li>
					<!-- Summary -->


					<li>

						<!-- Step -->
						<div class="template-component-booking-item-header template-clear-fix">
							<span>
								<span>4</span>
								<span>/</span>
								<span>4</span>
							</span>
							<h3>Booking summary</h3>
							<h5>Please provide us with your contact information.</h5>
						</div>


						<!-- Content -->
						<div class="template-component-booking-item-content">

							<ul class="template-component-booking-summary template-clear-fix">

								<!-- Duration -->
								<li class="template-component-booking-summary-duration">
									<div class="template-icon-booking-meta-total-duration"></div>
									<h5>
										<span>0</span>
										<span>h</span>
										&nbsp;
										<span>0</span>
										<span>min</span>
									</h5>
									<span>Duration</span>
								</li>

								<!-- Price -->
								<li class="template-component-booking-summary-price ">
									<div class="template-icon-booking-meta-total-price"></div>
									<h5>
										<span class="template-component-booking-summary-price-symbol">PKR</span>
										<span id="serviceamount" class="template-component-booking-summary-price-value">0.00</span>
									</h5>
									<span>Round About</span>
								</li>


							</ul>


						</div>
						<input type="hidden" id="serviceamount" value="" name="serviceamount">
						<input type="hidden" id="serviceduration" name="serviceduration">
						<input type="hidden" id="selectedservice" name="selectedservice">
						<div style="display: flex; justify-content: center; align-items:center;">
							<button onclick="return redirectToUserLogin()" class="template-component-button">Login For Booking</button>
						</div>
					</li>

				</ul>
			</form>
		</div>
	</div>







	<!-- Footer -->
	<div class="template-footer">

		<div class="template-main">

			<!-- Footer top -->
			<div class="template-footer-top">

				<!-- Layout 25x25x25x25 -->
				<div class="template-layout-25x25x25x25 template-clear-fix">

					<!-- Left column -->
					<div class="template-layout-column-left">
						<h6>About</h6>
						<p>ZEEFEK is eco-friendly hand Car Wash &amp; Other Garage Services based in Faisalabad.</p>
						<!-- 		<img src="media/image/logo.png" alt="" class="template-logo" /> -->
					</div>

					<!-- Center left column -->
					<div class="template-layout-column-center-left">
						<h6>Services</h6>
						<ul class="template-list-reset">
							<li><a href="service.php">Car Wash</a></li>

							<li><a href="service.php">Denting & Painting </a></li>
							<li><a href="service.php">Electrical Services </a></li>
							<li><a href="service.php">Mechnical Services</a></li>
							<li><a href="service.php">Other Car Services</a></li>
						</ul>
					</div>

					<!-- Center right column -->
					<div class="template-layout-column-center-right">
						<h6>Company</h6>
						<ul class="template-list-reset">
							<li><a href="about.php">About Us</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="service.php">Our Services</a></li>
							<li><a href="book-your-wash.php">Book Your Appointment</a></li>

							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

					<!-- Right column -->
					<div class="template-layout-column-right">
						<h6>Newsletter</h6>
						<form class="template-component-newsletter-form" method="POST" action="newsletter.php">
							<div class="template-component-form-field">
								<label for="newsletter-form-email">Your e-mail address *</label>
								<input type="email" required="true" name="newsletter-form-email" id="newsletter-form-email" />
							</div>
							<div class="template-margin-top-2">
								<input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit" />
							</div>
						</form>
					</div>

				</div>

			</div>

			<!-- Footer bottom -->
			<div class="template-footer-bottom">

				<!-- Social icon list -->
				<ul class="template-component-social-icon-list template-component-social-icon-list-2">
					<li><a href="https://www.twitter.com/ZEEFEK" class="template-icon-social-twitter" target="_blank"></a></li>
					<li><a href="https://www.facebook.com/ZEEFEK" class="template-icon-social-facebook" target="_blank"></a></li>
					<li><a href="https://dribbble.com/ZEEFEK" class="template-icon-social-dribbble" target="_blank"></a></li>
					<li><a href="http://ZEEFEK/portfolio?ref=ZEEFEK" class="template-icon-social-envato" target="_blank"></a></li>
					<li><a href="https://ZEEFEK" class="template-icon-social-behance" target="_blank"></a></li>
					<li><a href="https://www.youtube.com/user/ZEEFEK" class="template-icon-social-youtube" target="_blank"></a></li>
				</ul>

				<!-- Copyright -->
				<div class="template-footer-bottom-copyright">
					By <a href="http://ZEEFEK.com" target="_blank">ZEEFEK</a> &copy; 2020
				</div>

			</div>

		</div>

	</div>

	<!-- Search box -->
	<div class="template-component-search-form">
		<div></div>
		<form>
			<div>
				<input type="search" name="search" />
				<span class="template-icon-meta-search"></span>
				<input type="submit" name="submit" value="" />
			</div>
		</form>
	</div>

	<!-- Go to top button -->
	<a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

	<!-- Wrapper for date picker -->
	<div id="dtBox"></div>

	<script>
		function redirectToUserLogin() {
			
			window.location.href = "userlogin.php";
		}
	</script>


	<!-- JS files -->
	<script src="main.js"></script>
	<script type="text/javascript" src="script/jquery-ui.min.js"></script>
	<script type="text/javascript" src="script/superfish.min.js"></script>
	<script type="text/javascript" src="script/jquery.easing.js"></script>
	<script type="text/javascript" src="script/jquery.blockUI.js"></script>
	<script type="text/javascript" src="script/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="script/jquery.fancybox.js"></script>
	<script type="text/javascript" src="script/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="script/jquery.actual.min.js"></script>
	<script type="text/javascript" src="script/jquery.flexnav.min.js"></script>
	<script type="text/javascript" src="script/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="script/sticky.min.js"></script>
	<script type="text/javascript" src="script/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="script/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="script/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
	<script type="text/javascript" src="script/jquery.responsiveElement.js"></script>
	<script type="text/javascript" src="script/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="script/DateTimePicker.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

	<!-- Revolution Slider files -->
	<script type="text/javascript" src="script/revolution/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="script/revolution/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="script/revolution/extensions/revolution.extension.video.min.js"></script>

	<!-- Plugins files -->
	<script type="text/javascript" src="plugin/booking/jquery.booking.js"></script>

	<!-- Components files -->
	<script type="text/javascript" src="script/template/jquery.template.tab.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.image.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.helper.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.header.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.counter.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.gallery.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.goToTop.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.fancybox.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.moreLess.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.googleMap.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.accordion.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.searchForm.js"></script>
	<script type="text/javascript" src="script/template/jquery.template.testimonial.js"></script>
	<script type="text/javascript" src="script/public.js"></script>

</body>

</html>