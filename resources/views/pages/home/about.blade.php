@extends('layouts.home.app')

@section('content')

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>About</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>About</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="container">
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
    <!-- end about -->

    <!-- teams -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
             <div class="title-container">
                <h2 class="text-center fw-bold">MAHASISWA</h2>
            </div>
            <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repellendus enim incidunt assumenda pariatur, quisquam eveniet numquam.</p>
            <div class="row">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card" style="width: 18rem;">
                    <img src="/assets/img/t1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jhon Doe</h5>
                        <p class="card-text text-muted">SEMESTER 1</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card" style="width: 18rem;">
                    <img src="/assets/img/t2.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jhon Doe</h5>
                        <p class="card-text text-muted">SEMESTER 1</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card" style="width: 18rem;">
                    <img src="/assets/img/t3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jhon Doe</h5>
                        <p class="card-text text-muted">SEMESTER 3</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card" style="width: 18rem;">
                    <img src="/assets/img/t4.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jhon Doe</h5>
                        <p class="card-text text-muted">SEMESTER 3</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end teams -->

    <!-- clients -->
    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Dunia Usaha Dunia Industri</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b1.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b2.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b3.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b4.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b5.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b6.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b7.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b8.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- end clients -->
    
@endsection