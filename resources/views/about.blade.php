@extends('layouts.app')
@section('app')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5"
                            src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/422084653_415830924287742_5983576037095105922_n.jpg?stp=c69.0.414.414a_dst-jpg_p552x414&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFXhziEV-D6niFcq-8FlaSUCjFBQN5txFkKMUFA3m3EWbgoHUI2cTARLxUGIjCMEuhHT71kfDjdHupzh5JoFnpA&_nc_ohc=3KRPTskq1SoAX-xfRVk&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfDC6dTgIKN_YQFlzlBzHEc6S74Dyx-dLmBRUbSbhaWRSA&oe=6602B0FA"
                            alt="" />
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt=""
                            style="width: 200px; height: 200px" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            About Us
                        </div>
                        <h1 class="display-6 mb-5">
                            Al-Ibrab is a Memorial School for Orphans&Less Previleged
                        </h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Education is the most powerful tool to change the world.
                            </p>
                            <span class="text-primary">-Nelson Mandela</span>
                        </div>
                        <p class="mb-5">
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    What We Do
                </div>
                <h1 class="display-6 mb-5">Our Commitment: Transforming Lives Through Education</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="" />
                        <h4 class="mb-3 fs-6">
                            Child Education for the Orpaned and Less Previleged
                        </h4>
                        <p class="mb-4">
                            Where we are dedicated to paving the way for brighter futures through child education for the
                            orphaned and less privileged.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
                        <h4 class="mb-3">Quality Education</h4>
                        <p class="mb-4">
                            We offer a comprehensive and engaging curriculum designed to stimulate curiosity, critical
                            thinking, and creativity.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="" />
                        <h4 class="mb-3">Holistic Development</h4>
                        <p class="mb-4">
                            We believe in nurturing the whole child - academically, socially, emotionally, and physically.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Team Members
                </div>
                <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/324414878_565162758808250_415937705685267500_n.jpg?stp=c0.119.712.712a_dst-jpg_s552x414&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGSXbBl_o6Eur0kGVFv-mYCa0mMGwpW751rSYwbClbvnXnuN4CxqyIVIOnCEX2UuFfXAPnFxvcrpiV2Wa0-p9cH&_nc_ohc=G8XV8KRAaA8AX_F25-z&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfDDJ80PrqHYvUSbRugExdBsJVGJhKiwblzvAD8ZUPjFsQ&oe=660386BF"
                                alt="" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5 class="fs-5">Fatima Ibrahim Haruna</h5>
                            <p class="text-primary">Founder</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
