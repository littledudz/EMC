<header id="header" class="sticky" ng-controller="NavbarController">

	<!-- Top Nav -->
	<header id="topNav" class="translucent bordered">

		<div class="container">

			<!-- Logo -->
			<a class="logo" href="/Projects/EMC/app/index.php">
				<img src="support/images/emc-birmingham-logo-iso.png" alt="emc-birmingham-logo-iso" height="50">
			</a>

			<!-- Mobile Menu Button -->
			<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
				<i class="fa fa-bars"></i>
			</button>

			<!-- Top Nav -->
			<div class="navbar-collapse nav-main-collapse collapse">
				<nav class="nav-main">

					<ul id="topMain" class="nav nav-pills nav-main"><!-- add "white" class if you want white menu text color-->
						<li class="mega-menu">
							<a href="/Projects/EMC/app/">Home</a>
						</li>

						<li class="dropdown mega-menu">
							<a class="dropdown-toggle" href="#">Our Services</a>
							<ul class="dropdown-menu">
								<li>
									<div class="row">
										<div class="col-md-12">
											<h3>Client Services</h3>
											<ul>
												<li><a href="/Projects/EMC/app/consulting.php">Consulting Services</a></li>
												<li><a href="/Projects/EMC/app/lab.php">Laboratory Services</a></li>
												<li><a href="/Projects/EMC/app/septic.php">Septic Tank Services</a></li>
												<li><a href="/Projects/EMC/app/waste-water.php">Waste Water Services</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</li>

						<li>
							<a href="#">Client Login</a>
						</li>

						<li>
							<a href="#" data-toggle="modal" data-target="#ContactFormModal">Get a Quote!</a>
						</li>

						<li>
							<a href="#" data-toggle="modal" data-target="#ContactFormModal">Contact Us</a>
						</li>
					</ul>
				</nav>
			</div>
		</div><!--.container -->
	</header>
</header>
