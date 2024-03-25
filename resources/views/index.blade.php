@extends('layouts.app')
@section('app')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img"
                         src="{{asset('image/carousel3.jpg')}}"
                         alt="Image"/>
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
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="/about">
                                        Learn More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
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
                         src="{{asset('image/carousel2.jpg')}}"
                         alt="Image"/>
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
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="/about">
                                        Learn More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
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
                         src="{{asset('image/carousel1.jpg')}}"
                         alt="Image"/>
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
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="/about">
                                        Learn More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
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
                             alt=""/>
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt=""
                             style="width: 200px; height: 200px"/>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            About Us
                        </div>
                        <h5 class="display-6 mb-5">
                            Welcome to Al-Ibrab Memorial School
                        </h5>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Education is the most powerful tool to change the world.
                            </p>
                            <span class="text-primary">-Nelson Mandela</span>
                        </div>
                        <p class="mb-5">
                            Founded in May 2020, Al-Ibrab Memorial School (A.I.M.S.) stands proudly in the ancient city
                            of Kano, Northern Nigeria. As a privately owned institution, we are dedicated to providing
                            quality education and support to orphans and less privileged children, empowering them to
                            break the cycle of poverty and build a brighter future.

                            A.I.M.S. is the educational arm of the Al-Ibrab Foundation, a non-profit organization
                            committed to sustainable initiatives that benefit pupils, teachers, schools, and
                            communities. Through partnerships with individuals, public, and private organizations, we
                            implement programs that support holistic development.

                            Join us in our mission to make a difference in the lives of these deserving children.
                            Together, we can create opportunities for growth, learning, and success.
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
                    Empowering Every Child's Learning Journey
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
                                At Al-Ibrab Memorial School, we firmly believe that every child, regardless of their
                                background, deserves access to quality education and opportunities for growth.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                 src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/386781052_344322501438585_8678219053280164604_n.jpg?stp=c253.0.414.414a_dst-jpg_p552x414&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHrRVtCe7shRfBWeofJS_HMAoCktjUhjcoCgKS2NSGNymuqsmiI3gPqFtgWQa3vZBWBi_bnqP4a68Lr9giQRdvd&_nc_ohc=Oy6QbPf4HfMAX9u9C9S&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfBaFh_sQzlqOSOcZJgek2eixsclzUsjzqbgCIWGexHqcw&oe=66038562"
                                 alt=""/>
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
                            <h5 class="mb-3">Fostering Inclusive Growth within our Community</h5>
                            <p>
                                Our commitment extends beyond academic excellence; we strive to cultivate a supportive
                                and inclusive environment where all children can flourish.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                 src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/386250019_344322244771944_1275715487395416523_n.jpg?stp=c253.0.414.414a_dst-jpg_p552x414&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGkiobd6gHdb6mUJVBxwmBv7dpg02gbz4ft2mDTaBvPh642ybTFId_x5I3GVMKGttxQX8mGCRSTNh_n7LlIIZsG&_nc_ohc=1ycaB_gA_X0AX_4z6Uj&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfBlxWmXrqJyy3lqqaqO7abstQdFWG0-K5GMUigkniuTKw&oe=660200B9"
                                 alt=""/>
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
                            <h5 class="mb-3">Education with Compassion</h5>
                            <p>
                                At our school, we understand that education goes beyond academics. It's about creating a
                                nurturing and inclusive environment where every child can thrive
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                 src="https://scontent.fabv2-2.fna.fbcdn.net/v/t39.30808-6/336647137_3189752141169561_1290924072464300051_n.jpg?stp=c69.0.414.414a_dst-jpg_p552x414&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFAYulNAKyuXXzVomC6lKa6RX3ebX76QzJFfd5tfvpDMoQoRFs2aKAtXbuBh3K0D2psFLw5ZIMEQNv8Rrj7L5pC&_nc_ohc=Be-7zSQeqjwAX9soU3z&_nc_zt=23&_nc_ht=scontent.fabv2-2.fna&oh=00_AfCGWYH482Zj3Ft9dNlBsM9b0IHySdqfE8PTF3FHHECo2g&oe=6602B326"
                                 alt=""/>
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
                    Our Mission
                </div>
                <h1 class="display-6 mb-5">Empowering Lives Through Education</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt=""/>
                        <h4 class="mb-3 fs-6">
                            Empowering Orphaned and Underprivileged Children Through Education
                        </h4>
                        <p class="mb-4">
                            At our institution, we are dedicated to creating pathways to brighter futures through child
                            education tailored to the needs of orphaned and less privileged children.
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
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt=""/>
                        <h4 class="mb-3">Providing Quality Education</h4>
                        <p class="mb-4">
                            Our curriculum is thoughtfully crafted to inspire curiosity, foster critical thinking, and
                            ignite creativity, ensuring a comprehensive and engaging learning experience for all
                            students.
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
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt=""/>
                        <h4 class="mb-3">Fostering Holistic Development</h4>
                        <p class="mb-4">
                            Our philosophy centers on nurturing the complete child, addressing their academic, social,
                            emotional, and physical well-being to ensure comprehensive growth and development.
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
