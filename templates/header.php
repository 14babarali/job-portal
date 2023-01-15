<?php

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/job-portal/';

$user_logged = false;

?>
<!DOCTYPE html>
<html>

<head>
	<title>Online Job Portal</title>
	
	<link rel="stylesheet" href="<?php echo $server; ?>css/style.css">

	
</head>

<body>
	<header class="d-flex w-100">
		<nav class="navbar navbar-expand-lg w-100 bg-light">
			<div class="navbar-collapse collapse justify-content-between">
				<ul class="navbar-nav" id="navbar">
					<li class="nav-item active">
						<a class="nav-link text-dark" href="<?php echo $server; ?>index.php"><i class="fa fa-id-badge text-dark"></i> GenesJob</a>
					</li>

					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$user_logged = true;
						if ($_SESSION['role'] == 'admin') { ?>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/job/view.php">Jobs</a>
							</li>
					<?php }
					} ?>

				</ul>
				<ul class="navbar-nav">
					<div class="d-flex my-2 my-lg-0">
						<input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button id="searchBtn" class="btn btn-outline-light m-2 my-sm-0" type="button">Search</button>
					</div>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item save mr-4">
						<a class="nav-link btn bg-warning" href="<?php echo $server; ?>templates/save.php">
							<span class="text-white">0 </span>
							<i class="fa fa-heart text-white" style="font-size: 18px;"></i>
						</a>
					</li>

					<?php
					if ($user_logged) { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/user/logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Sign Out</a>
						</li>
					<?php } else { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-primary text-white" href="<?php echo $server; ?>components/user/login.php"><span><i class="fa fa-sign-in text-white"></i></span> Sign In</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container-fluid page-container">