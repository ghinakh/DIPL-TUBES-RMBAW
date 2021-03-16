<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">


	<!-- Libs CSS -->
	<link href="assets/fonts/feather/feather.css" rel="stylesheet" />
	<link href="assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
	<link href="assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">


	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/css/theme.min.css">
	<title>RentalKuy | Your Car Rental Solution</title>
</head>

<body>
	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-default">
		<div class="container-fluid px-0">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="" /></a>
			<!-- Collapse -->
		</div>
	</nav>

	<!-- Page Content -->
	<div class="bg-primary">
		<div class="container">
			<br /><br /><br /><br />

			<!-- Hero Section -->
			<div class="row align-items-center no-gutters">
				<div class="col-xl-5 col-lg-6 col-md-12">
					<div class="py-5 py-lg-0">
						<h1 class="text-white display-4 font-weight-bold">We Provide Best Car
						</h1>
						<p class="text-white-50 mb-4 lead">
							We give you the best of the best of our services. We provide facts that you need to know. From car rating, what's included and pick-up information
						</p>
						<a href="pages/course-filter-list.html" class="btn btn-success">Find Car</a>
						<a href="pages/sign-in.html" class="btn btn-white">Are You Rent?</a>
					</div>
				</div>
				<div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
					<img src="https://www.paylesscar.com/content/dam/cars/l/2017/nissan/2017-nissan-versa-sv-auto-sedan-blue_featured.png" alt="" class="img-fluid" />
				</div>
			</div>
			<br /><br /><br /><br />
		</div>
	</div>
	<div class="bg-white py-4 shadow-sm">
		<div class="container">
			<div class="row align-items-center no-gutters">
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
					<div class="d-flex align-items-center">
						<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i class="fe fe-video"> </i></span>
						<div class="ml-3">
							<h4 class="mb-0 font-weight-semi-bold">30,000 cars ready</h4>
							<p class="mb-0">Enjoy a variety of fresh topics</p>
						</div>
					</div>
				</div>
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
					<div class="d-flex align-items-center">
						<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i class="fe fe-users"> </i></span>
						<div class="ml-3">
							<h4 class="mb-0 font-weight-semi-bold">Expert instruction</h4>
							<p class="mb-0">Find the right instructor for you</p>
						</div>
					</div>
				</div>
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<div class="d-flex align-items-center">
						<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i class="fe fe-clock"> </i></span>
						<div class="ml-3">
							<h4 class="mb-0 font-weight-semi-bold">Lifetime access</h4>
							<p class="mb-0">Learn on your schedule</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content -->
	<div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2 class="mb-0">Recommended to you</h2>
				</div>
			</div>
			<div class="position-relative">
				<ul class="controls " id="sliderFirstControls">
					<li class="prev">
						<i class="fe fe-chevron-left"></i>
					</li>
					<li class="next">
						<i class="fe fe-chevron-right"></i>
					</li>
				</ul>
				<div class="sliderFirst">
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-react.jpg" alt="" class="rounded-top card-img-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">How to
										easily create a website with React</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(7,700)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Morris Mccoy</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/mobil/portuner-preview.png" alt="" class="rounded-top card-img-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Toyota Fortuner - Bahan Bakar Diesel</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										Manual
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(9,300)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Jarwo</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/mobil/civic-preview.png" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Honda Civic - Bahan Bakar Bensin</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										A/T
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(8,890)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Meyzo</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/mobil/inova-preview.png" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Toyota Inova - Bahan Bakar Diesel</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Manual
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(13,245)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Claire Robertson</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/mobil/xenia-preview.png" alt="" class="rounded-top card-img-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Daihatsu Xenia - Bahan Bakar Diesel</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										A/T
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(9,300)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Ted Hawkins</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pb-lg-3 pt-lg-3">
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2 class="mb-0">Most Popular</h2>
				</div>
			</div>
			<div class="position-relative">
				<ul class="controls " id="sliderSecondControls">
					<li class="prev">
						<i class="fe fe-chevron-left"></i>
					</li>
					<li class="next">
						<i class="fe fe-chevron-right"></i>
					</li>
				</ul>
				<div class="sliderSecond">
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-gatsby.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Gatsby
										JS:
										build blog with GraphQL and React</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(9,370)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Morris Mccoy</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
										Started with JavaScript</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										Advance
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(5,245)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Ted Hawkins</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
										ultimate CSS course from beginner to advanced</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(17,000)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Juanita Bell</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
										complete WordPress theme & plugin development</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Intermediate
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(16,500)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Claire Robertson</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
										Started with JavaScript</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										Advance
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(5,245)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Ted Hawkins</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
										ultimate CSS course from beginner to advanced</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(17,000)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Juanita Bell</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
										complete WordPress theme & plugin development</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Intermediate
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(16,500)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Claire Robertson</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pb-lg-8 pt-lg-3 py-6">
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2 class="mb-0">Trending</h2>
				</div>

			</div>
			<div class="position-relative">
				<ul class="controls" id="sliderThirdControls">
					<li class="prev">
						<i class="fe fe-chevron-left"></i>
					</li>
					<li class="next">
						<i class="fe fe-chevron-right"></i>
					</li>
				</ul>
				<div class="sliderThird">
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-react.jpg" alt="" class="card-img-top rounded-top">
							</a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">How to
										easily create a website with React</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(12,245)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Morris Mccoy</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
										introduction to graphQL for beginners</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										Advance
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(15,350)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Ted Hawkins</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
										the complete guide for beginner</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(6,600)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Juanita Bell</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
										Python
										Course: build web application</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Intermediate
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(2,500)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Claire Robertson</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
										introduction to graphQL for beginners</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
										</svg>
										Advance
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(15,350)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Ted Hawkins</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
										the complete guide for beginner</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Beginner
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(6,600)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Juanita Bell</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="pages/course-single.html" class="card-img-top"><img src="assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top"></a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
										Python
										Course: build web application</a></h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
									<li class="list-inline-item">
										<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg>
										Intermediate
									</li>
								</ul>
								<div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning mr-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="font-size-xs text-muted">(2,500)</span>
								</div>
							</div>
							<!-- Card Footer -->
							<div class="card-footer">
								<div class="row align-items-center no-gutters">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
									</div>
									<div class="col ml-2">
										<span>Claire Robertson</span>
									</div>
									<div class="col-auto">
										<a href="#!" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<div class="footer">
		<div class="container">
			<div class="row align-items-center no-gutters border-top py-2">
				<!-- Desc -->
				<div class="col-md-6 col-12 text-center text-md-left">
					<span>© 2020 Geeks. All Rights Reserved.</span>
				</div>
				<!-- Links -->
				<div class="col-12 col-md-6">
					<nav class="nav nav-footer justify-content-center justify-content-md-end">
						<a class="nav-link active pl-0" href="#!">Privacy</a>
						<a class="nav-link" href="#!">Terms </a>
						<a class="nav-link" href="#!">Feedback</a>
						<a class="nav-link" href="#!">Support</a>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<!-- Scripts -->
	<!-- Libs JS -->
	<script src="assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/odometer/odometer.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<script src="assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
	<script src="assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
	<script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="assets/libs/quill/dist/quill.min.js"></script>
	<script src="assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
	<script src="assets/libs/dragula/dist/dragula.min.js"></script>
	<script src="assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
	<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
	<script src="assets/libs/jQuery.print/jQuery.print.js"></script>
	<script src="assets/libs/prismjs/prism.js"></script>
	<script src="assets/libs/prismjs/components/prism-scss.min.js"></script>
	<script src="assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
	<script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
	<script src="assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
	<script src="assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
	<script src="assets/libs/typed.js/lib/typed.min.js"></script>

	<!-- clipboard -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


	<!-- Theme JS -->
	<script src="assets/js/theme.min.js"></script>


</body>

</html>