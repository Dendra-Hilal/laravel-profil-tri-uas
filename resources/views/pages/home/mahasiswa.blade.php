@extends('layouts.home.app')

@section('content')

        <!-- breadcumbs -->
        <div class="breadcumbs py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center text-white">
                    <h2>Team</h2>
                    <ol class="d-flex list-unstyled">
                        <li>Home</li>
                        <li>Team</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end breadcumbs -->
    
        <!-- teams -->
        <div class="teams bg-light py-5">
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
    
@endsection