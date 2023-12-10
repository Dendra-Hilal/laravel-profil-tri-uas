@extends('layouts.home.app')

@section('content')

		<!-- carousel -->
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="/assets/img/c1.jpg" class="d-block w-100 carousel-img" alt="..." />
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
							ipsum provident excepturi minima molestias repudiandae, assumenda
							delectus tempora consectetur explicabo quod! Quaerat veritatis
							inventore ullam veniam officiis consectetur illo dicta!
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/assets/img/c2.jpg" class="d-block w-100 carousel-img" alt="..." />
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
							ipsum provident excepturi minima molestias repudiandae, assumenda
							delectus tempora consectetur explicabo quod! Quaerat veritatis
							inventore ullam veniam officiis consectetur illo dicta!
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/assets/img/c3.jpg" class="d-block w-100 carousel-img" alt="..." />
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
							ipsum provident excepturi minima molestias repudiandae, assumenda
							delectus tempora consectetur explicabo quod! Quaerat veritatis
							inventore ullam veniam officiis consectetur illo dicta!
						</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- end carousel -->

		<!-- about us -->
		<div class="about-us mt-5">
			<div class="container">
				<div class="title-container">
					<h2 class="text-center fw-bold">ABOUT US</h2>
				</div>
				<div class="row mt-5">
					<div class="col-md-6" data-aos="fade-right">
						<h3 class="fw-bold about-us-title">
							Lorem ipsum dolor sit amet consectetur.
						</h3>
						<p class="fw-bolder mt-4 about-us-subtitle">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit.
							Quibusdam nobis illo eligendi sint commodi.
						</p>
					</div>
					<div class="col-md-6" data-aos="fade-left">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Deserunt, minima non. Aliquid itaque quas libero totam consequatur
							corporis quibusdam repellendus earum id atque cum veniam, delectus
							eum odio? Animi, voluptatum!
						</p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<i class="fa fa-check-double primary"></i>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
								laboriosam?
							</li>
							<li class="list-group-item">
								<i class="fa fa-check-double primary"></i>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
								laboriosam?
							</li>
							<li class="list-group-item">
								<i class="fa fa-check-double primary"></i>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
								laboriosam?
							</li>
							<li class="list-group-item">
								<i class="fa fa-check-double primary"></i>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
								laboriosam?
							</li>
						</ul>
						<p class="mt-2">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
							quisquam facilis impedit. Commodi nesciunt culpa soluta esse
							temporibus officia veritatis incidunt error porro.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end about us -->

		<!-- services -->
		<div class="services mt-5 bg-light py-5">
			<div class="container">
				<div class="title-container text-center">
					<h2 class="fw-bold">SERVICES</h2>
				</div>
				<p class="text-center mt-4">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
					aliquam.
				</p>
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
							<div class="card-body">
								<div class="card-icon">
									<i class="fa fa-book fa-lg fa-3x"></i>
								</div>
								<div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
								<p class="card-description mt-3">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
									nam vero, dolorem iusto eum voluptatibus?
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end services -->

		<!-- Profil us -->
		<div class="profil-us mt-5">
			<div class="container">
				<div class="title-container">
					<h2 class="text-center fw-bold">PROFIL</h2>
				</div>
				<div class="row mt-4">
					<div class="col-md-12 d-flex justify-content-center">
						<ul class="list-unstyled d-flex profil-filters">
							<li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
							<li data-filter=".filter-web" class="py-2 px-4">Web</li>
							<li data-filter=".filter-design" class="py-2 px-4">Design</li>
							<li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
						</ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12">
						<div class="mansory profil-container" data-aos="zoom-in-up">
							<div class="mansory-sizer"></div>
							<div class="mansory-item m-2 profil-item filter-web">
								<img src="/assets/img/p1.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-design">
								<img src="/assets/img/p2.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-design">
								<img src="/assets/img/p3.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-web">
								<img src="/assets/img/p4.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-design">
								<img src="/assets/img/p5.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profilem filter-photo">
								<img src="/assets/img/p6.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profilem filter-web">
								<img src="/assets/img/p7.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profilem filter-web">
								<img src="/assets/img/p8.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-photo">
								<img src="/assets/img/p9.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profilem filter-web">
								<img src="/assets/img/p10.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-design">
								<img src="/assets/img/p11.jpg" alt="" class="img-fluid" />
							</div>
							<div class="mansory-item m-2 profil-item filter-design">
								<img src="/assets/img/p12.jpg" alt="" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profil us -->

		<!-- clients -->
		<div class="clients mt-5">
			<div class="container">
				<div class="title-container">
					<h2 class="text-center fw-bold">DUDI</h2>
				</div>
				<div class="row mt-5">
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b1.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b2.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b3.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b4.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b5.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b6.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b7.svg" class="img-fluid brand-image" alt="" />
					</div>
					<div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
						<img src="/assets/img/b8.svg" class="img-fluid brand-image" alt="" />
					</div>
				</div>
			</div>
		</div>
		<!-- end clients -->

@endsection