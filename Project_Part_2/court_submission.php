<!DOCTYPE html>
<!-- HTML5 Compliant -->
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<!-- external main CSS stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/court_submission.css" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
	<!-- Bootstrap Icon library -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<!-- Animate.css library !-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- Metadata -->
	<title>Moila</title>
	<meta charset="utf8" />
	<meta name="author" content="Quazi Rafid Ibrahim, Frank Su" />
	<meta name="description" content="CS 4WW3 Project Part 1" />
	<meta name="keywords" content="web,programming,McMaster,4ww3 Project" />

	<!-- Tell search engines not to index this page -->
	<meta name="robots" content="noindex" />

	<!-- favicon -->
	<link rel=icon typ="image/x-icon" href=favicon.ico>

</head>


<body>
	<!-- Navigation Bar [will seperate later] no js allowed, so didn't implement hamburger menu-->

	<header class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">
			<div class="d-flex">
				<picture>
					<source media="(min-width: 800px)" srcset="assets/img/basketball-ball.png, assets/img/basketball-ball-2x.png">
					<source media="(min-width: 450px)" srcset="assets/img/basketball-ball-256.png, assets/img/basketball-ball-256-2x.png">
					<img class="logoimg" width="100%" height="100%" src="assets/img/basketball-ball.png" srcset="assets/img/basketball-ball-256.png" alt="moila basketball logo image">
				</picture>
				<h1><a class="logotxt" href="#">Moila</a></h1>
			</div>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="/Project_Part_3/"> Search </a></li>
					<li><a href="/Project_Part_3/search_results.php"> Results </a></li>
					<li><a href="/Project_Part_3/individual_court.php"> Example Individual Object </a></li>
					<li><a href="#"> Submit New Court </a></li>
					<li class="login-btn"><a href="/Project_Part_3/user_registration.php"> Register </a></li>
					<li class="login-btn"><a href="#"> Login </a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>


	</header>
	<!-- End Navigation Bar -->

	<!-- Actual Body Content -->

	<section id="main" class="animate__animated animate__slideInDown">

		<div class="container">
			<div class="row">
				<h1 style="text-align: center; margin-top: 50px;">Add a New Ball Court</h1>
				<div style="width:50%; margin: 30px auto;">
					<form action="" method="POST">

						<!-- Use regex to enforce that name should be Firstname Lastname, with space in between and capitalized first and last names -->
						<div class="form-group">
							<label for="name">Name (Capitalize first and last name with space in between)</label>
							<span id="name_span"><i class="bi bi-check-circle-fill" style="color:green;"></i></span>
							<input required class="form-control" type="text" placeholder="Ex: John Doe" name="name" pattern="^[A-Z][a-z]+\s[A-Z][a-z]+$">
						</div>

						<!-- Client side cannot strictly prevent uploading a file of a certain type, but can change what the filter
								 option is displayed when the file explorer window pops up -->
						<div class="form-group">
							<label for="image" style="margin-bottom: 5px">Image</label>
							<div><input id="image" type="file" name="image" accept="image/*" required></div>
						</div>

						<!-- for description, sepcify a max length of 100 chars -->
						<div class="form-group">
							<label for="description">Description (max 100 characters)</label>
							<input required class="form-control" type="text" placeholder="Description" name="description" maxlength="100">
						</div>

						<!-- Form validation for number of people playing has a minimum of 0 -->
						<div class="form-group">
							<label for="numberPlaying">Number of People Playing</label>
							<input class="form-control" type="number" name="numberPlaying" placeholder="0" min="0">
						</div>

						<!-- Client side cannot strictly prevent uploading a file of a certain type, but can change what the filter
								 option is displayed when the file explorer window pops up -->
						<div class="form-group">
							<label for="video" style="margin-bottom: 5px">Video</label>
							<div><input id="image" type="file" name="video" accept="video/*"></div>
						</div>

						<!-- Use regex to enforce that Location should be in format Longitude, Latitude (comma in between, with single whitespace) -->
						<div class="form-group">
							<label for="location">Location (Latitude first then longitude, seperate with a comma and space right after)</label>
							<input required type="text" class="form-control" name="location" id="location" placeholder="Ex: 43.260, -79.930" pattern="^(-?\d+(\.\d+)?),\s+(-?\d+(\.\d+)?)$">
						</div>
						<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block" id="pinkbg">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>

	<!-- End Actual Body Content -->


	<!-- Footer [will sepearte later]-->
	<footer id="footer" class="">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Moila</span></strong>. All Rights Reserved - Designed by <a href="#">Quazi Rafid Ibrahim</a> & <a href="#">Frank Su</a>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

</body>

</html>



<!-- 
<div>Icons made by <a href="https://www.flaticon.com/authors/prettycons" title="prettycons">prettycons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
Video by Pavel Danilyuk from Pexels
-->