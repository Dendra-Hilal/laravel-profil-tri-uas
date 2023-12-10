@extends('layouts.home.app')

@section('content')

        <!-- breadcumbs -->
        <div class="breadcumbs py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center text-white">
                    <h2>profil</h2>
                    <ol class="d-flex list-unstyled">
                        <li>Home</li>
                        <li>profil</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end breadcumbs -->
    
        <!-- teams -->
        <div class="teams bg-light py-5">
            <div class="container">
                 <div class="title-container">
                    <h2 class="text-center fw-bold">profil</h2>
                </div>
                <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repellendus enim incidunt assumenda pariatur, quisquam eveniet numquam.</p>
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
                <div class="mansory profiliner" data-aos="zoom-in-up">
                  <div class="mansory-sizer"></div>
                  <div class="mansory-item m-2 profil-item filter-web">
                    <img src="/assets/img/p1.jpg" alt="" class="img-fluid" />
                  </div>
                  <div class="mansory-item m-2 profil
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
                  <div class="mansory-item m-2 profil-item filter-web">
                    <img src="/assets/img/p8.jpg" alt="" class="img-fluid" />
                  </div>
                  <div class="mansory-item m-2 profil-item filter-photo">
                    <img src="/assets/img/p9.jpg" alt="" class="img-fluid" />
                  </div>
                  <div class="mansory-item m-2 profil-item filter-web">
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
        <!-- end teams -->
    
@endsection