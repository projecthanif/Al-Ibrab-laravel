@extends('layouts.app')
@section('app')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img"
                        src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/424773160_415830714287763_284615268016146318_n.jpg?stp=c69.0.414.414a_dst-jpg_p552x414&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEPDBmwKtzkYT24l6xSKukQy1Va0hvOCH3LVVrSG84IfRf0bpOKvPLZZ2AZI0U5sZY-9IFQqYriFKQdzI_zexsV&_nc_ohc=udmZ01S4SN4AX-QfAiE&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfD7WwyWi4mm2xxUUZmXIgUYyqeJ9bUIHYZG6y1ze4JNtg&oe=66023A0F"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                                        Welcome to Al-Ibrab Memorial School
                                    </h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        where every child's potential is nurtured regardless of their background
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img"
                        src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/396141666_357147270156108_1561611579994327156_n.jpg?stp=c161.0.414.414a_dst-jpg_p552x414&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHEMgfU8TfK0OJV8Rk2UPg__NJ-_4RgS3L80n7_hGBLcqmmsmFtn4BZyBmHl-tDOXnOBWUxVtvvhim_dTvn_em0&_nc_ohc=zryjrK2MijkAX_xO-6J&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfCQPiXYtU3E7fTsyo3c87KKit5IjSajWWjSxrWQop4Skw&oe=6602A7A5"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                                        Let's Change The World With Humanity
                                    </h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        we believe that every child deserves access to education and opportunities for
                                        growth
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img"
                        src="https://scontent.fabv2-2.fna.fbcdn.net/v/t39.30808-6/424624432_415830807621087_792557379805642364_n.jpg?stp=c69.0.414.414a_dst-jpg_p552x414&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEYI762DXNc1bYcgZ3XyjvigjJTeRP604mCMlN5E_rTiYCMI-pc4KsELU4HGGC7YHCYYBZLcXPJqLeLR-IcMU4C&_nc_ohc=B_v4qz_jNfgAX8QB1pN&_nc_zt=23&_nc_ht=scontent.fabv2-2.fna&oh=00_AfDK3L6k621WK7FBtGPfKlXAjo88cbGz1bmXDInQE4T3Mg&oe=6601CE73"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                                        Let's Save More Lifes With Our Helping Hand
                                    </h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        Together, let's build a future where every child has the opportunity to fulfill
                                        their potential and contribute positively to society
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

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
                            Our school is dedicated to providing quality education and support to orphans and less
                            privileged children, empowering them to break the cycle of poverty and build a brighter future.
                        </p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="/about">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3 mt-sm-2 mt-md-0" href="/contact">
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

    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Feature Causes
                </div>
                <h1 class="display-6 mb-5">
                    Every Child Deserves The Opportunity To Learn
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Education</small>
                            </div>
                            <h5 class="mb-3">
                                Education For Orpaned & Less Previleged Children
                            </h5>
                            <p>
                                We believe that every child deserves access to education and opportunities for growth.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/386781052_344322501438585_8678219053280164604_n.jpg?stp=c253.0.414.414a_dst-jpg_p552x414&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHrRVtCe7shRfBWeofJS_HMAoCktjUhjcoCgKS2NSGNymuqsmiI3gPqFtgWQa3vZBWBi_bnqP4a68Lr9giQRdvd&_nc_ohc=Oy6QbPf4HfMAX9u9C9S&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfBaFh_sQzlqOSOcZJgek2eixsclzUsjzqbgCIWGexHqcw&oe=66038562"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Education with Heart</small>
                            </div>
                            <h5 class="mb-3">Nurturing Growth in an Inclusive Community</h5>
                            <p>
                                we not only focus on academic excellence but also on fostering a supportive and inclusive
                                environment where children can thrive.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/386250019_344322244771944_1275715487395416523_n.jpg?stp=c253.0.414.414a_dst-jpg_p552x414&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGkiobd6gHdb6mUJVBxwmBv7dpg02gbz4ft2mDTaBvPh642ybTFId_x5I3GVMKGttxQX8mGCRSTNh_n7LlIIZsG&_nc_ohc=1ycaB_gA_X0AX_4z6Uj&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfBlxWmXrqJyy3lqqaqO7abstQdFWG0-K5GMUigkniuTKw&oe=660200B9"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Empowering Futures</small>
                            </div>
                            <h5 class="mb-3">Education with Heart</h5>
                            <p>
                                we believe education is more than just academics; it's about fostering a supportive and
                                inclusive environment where every child can thrive.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                src="https://scontent.fabv2-2.fna.fbcdn.net/v/t39.30808-6/336647137_3189752141169561_1290924072464300051_n.jpg?stp=c69.0.414.414a_dst-jpg_p552x414&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFAYulNAKyuXXzVomC6lKa6RX3ebX76QzJFfd5tfvpDMoQoRFs2aKAtXbuBh3K0D2psFLw5ZIMEQNv8Rrj7L5pC&_nc_ohc=Be-7zSQeqjwAX9soU3z&_nc_zt=23&_nc_ht=scontent.fabv2-2.fna&oh=00_AfCGWYH482Zj3Ft9dNlBsM9b0IHySdqfE8PTF3FHHECo2g&oe=6602B326"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->

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

    {{-- <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        Donate Now
                    </div>
                    <h1 class="display-6 text-white mb-5">
                        Thanks For The Results Achieved With You
                    </h1>
                    <p class="text-white-50 mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" id="name"
                                            placeholder="Your Name" />
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-light border-0" id="email"
                                            placeholder="Your Email" />
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                            checked />
                                        <label class="btn btn-light py-3" for="btnradio1">&#8358;500</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" />
                                        <label class="btn btn-light py-3" for="btnradio2">&#8358;1000</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" />
                                        <label class="btn btn-light py-3" for="btnradio3">&#8358;2000</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary px-5" style="height: 60px">
                                        Donate Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End --> --}}
@endsection
