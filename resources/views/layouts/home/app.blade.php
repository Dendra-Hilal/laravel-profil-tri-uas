<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets') }}/vendor/bootstrap/dist/css/bootstrap.min.css" />
		<!-- fontawesome -->
		<link rel="stylesheet" href="{{ asset('assets') }}/vendor/fontawesome/css/all.min.css" />
		<!-- aos -->
		<link rel="stylesheet" href="{{ asset('assets') }}/vendor/aos/dist/aos.css">
		<!-- custom css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />

		<title>TRI Profil</title>
	</head>

	<body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
			<div class="container">
				<a class="navbar-brand fw-bold" href="#"><span class="primary">TRI</span> PAT</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link fw-bolder {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink"
								role="button" data-bs-toggle="dropdown" aria-expanded="false">
								About
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="about">About Us</a></li>
								<li><a class="dropdown-item" href="mahasiswa">Mahasiswa</a></li>
								<li>
									<a class="dropdown-item" href="alumni">Alumni</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bolder {{ request()->is('services') ? 'active' : '' }}" href="services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bolder {{ request()->is('profil') ? 'active' : '' }}" href="profil">Profil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bolder {{ request()->is('contact') ? 'active' : '' }}" href="contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navbar -->

        @yield('content')

		<!-- footer -->
		<footer class="mt-5">
			<div class="footer-top bg-dark text-white p-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3">
							<h4 class="fw-bold">TRI PAT</h2>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Repellat consequuntur magnam commodi voluptatem quas? Itaque quo
									obcaecati perspiciatis quaerat ullam!
								</p>
								<strong>Phone</strong> : <span>+6282187755540 </span>
								<br />
								<strong>Email</strong> : <span>info@tripat.ac.id </span>
						</div>
						<div class="col-md-2">
							<h4 class="fw-bold">Our Services</h2>
								<ul class="list-group list-unstyled">
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Web Development
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Web Design
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Online Marketting
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Graphic Design
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Photography
										</a>
									</li>
								</ul>
						</div>
						<div class="col-md-2">
							<h4 class="fw-bold">Useful Links</h2>
								<ul class="list-group list-unstyled">
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Home
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											About Us
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Services
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											profil
										</a>
									</li>
									<li class="list-item">
										<a href="" class="text-decoration-none text-white">
											<i class="fa fa-chevron-right primary"></i>
											Contact
										</a>
									</li>
								</ul>
						</div>
						<div class="col-md-3">
							<h4 class="fw-bold">Join Our Newsletter</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="yourmail@example.com" />
									<button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
										Subscribe
									</button>
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-down bg-darker text-white px-5 py-3">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-5">
							<div class="copyright">
								&copy; Copyright <strong>Teknologi Rekayasa Internet</strong>. All Rights Reserved
							</div>
							<div class="credits">
								Designed by Syawal Aprian
							</div>
						</div>
						<div class="col-md-5">
							<div class="social-links float-end">
								<a href="" class="mx-2">
									<i class="fab fa-facebook fa-2x"></i>
								</a>
								<a href="" class="mx-2">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
								<a href="" class="mx-2">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
								<a href="" class="mx-2">
									<i class="fab fa-youtube fa-2x"></i>
								</a>
								<a href="" class="mx-2">
									<i class="fab fa-linkedin fa-2x"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!-- end footer -->

		<!-- to top -->
		<a href="#" class="btn-to-top p-3">
			<i class="fa fa-chevron-up"></i>
		</a>
		<!-- end to top -->

		<script src="{{ asset('assets') }}/vendor/jquery/jquery-3.6.0.min.js"></script>
		<script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('assets') }}/vendor/fontawesome/js/all.min.js"></script>
		<script src="{{ asset('assets') }}/vendor/mansory/masonry.pkgd.min.js"></script>
		<script src="{{ asset('assets') }}/vendor/aos/dist/aos.js"></script>
		<script src="{{ asset('assets') }}/vendor/isotope/isotope.pkgd.min.js"></script>
		<script src="{{ asset('assets') }}/js/app.js"></script>
	</body>

</html>
