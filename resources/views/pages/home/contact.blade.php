@extends('layouts.home.app')

@section('content')

        <!-- breadcumbs -->
        <div class="breadcumbs py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center text-white">
                    <h2>Contact</h2>
                    <ol class="d-flex list-unstyled">
                        <li>Home</li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end breadcumbs -->
    
        <!-- contact -->
        <div class="contact mb-5">
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77566.2331065533!2d107.63149396924783!3d-6.947357399670812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sid!2sid!4v1641732785448!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow shadow-sm">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                            <h4 class="fw-bolder">Location</h4>
                                            <p class="ms-5">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder">Email</h4>
                                            <p class="ms-5">info@tripat.ac.id</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder">Phone</h4>
                                            <p class="ms-5">+62 22 456 777</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card border-0 shadow">
                            <div class="card-body p-4">
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <button type="submit" class="btn btn-submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact -->
    
@endsection