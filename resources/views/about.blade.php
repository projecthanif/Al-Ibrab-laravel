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

    <!--- Aims And Mission Start -->
    <div class="container-xxl py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-gradient text-primary py-1 px-3 mb-3">
                    School Aims and Mission:
                </div>
            </div>
            <p class="mb-5 fw-normal text-center">
                At Al-Ibrab Memorial School, we strive to be an outstanding institution where young minds not only excel
                academically but also enter adulthood with confidence and resilience. Our aims are deeply rooted in
                fostering a nurturing environment that cultivates self-discipline, organization, motivation, and a
                strong
                work ethic, thereby preparing students to become confident and capable members of society.
            </p>
            <h3 class="fw-bold text-primary">Our objectives include:</h3>
            <ol>
                <li>
                    Bringing hope to underprivileged children by providing them with opportunities for education and
                    growth.
                </li>
                <li>
                    Offering a well-rounded education that encompasses academic, social, and emotional development for
                    underprivileged children.
                </li>
                <li>
                    Increasing awareness among privileged parents and children about the importance of engaging in
                    community
                    service initiatives
                </li>
                <li>
                    Initiating a sponsor-a-child program to support the educational journey of underprivileged children.
                </li>
                <li>
                    Cultivating a generation of change agents and nation builders through education and mentorship.
                </li>
                <li>
                    Providing valuable and life-changing mentorship to underprivileged children to guide them towards
                    success.
                </li>
                <li>
                    Enhancing educational outcomes for underprivileged children by improving the quality of teaching
                    through
                    professional development.
                </li>
                <li>
                    Maintaining and extending academic excellence through innovative teaching methods and curriculum
                    enhancements.
                </li>
                <li>
                    Fostering a sense of personal worth in children and promoting their overall welfare, enabling them
                    to
                    realize their full potential.
                </li>
            </ol>
            <p>
                With a commitment to continual improvement and the pursuit of the highest standards, we are dedicated to
                empowering every child to thrive and succeed in a rapidly evolving world.
            </p>
        </div>
    </div>
    <!--- Aims And Mission End -->

    <!---- School Objectives Start ---->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width:500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    School Objectives
                </div>
            </div>
            <p class="mb-4 text-center">
                At Al-Ibrab Memorial School, our primary objectives are to cultivate a holistic development in each
                child, nurturing them to become confident, responsible, and compassionate individuals. Our goals
                include:
            </p>
            <ol>
                <li>
                    Fostering self-esteem and a sense of self-worth in every child, laying the foundation for positive
                    self-image and confidence.
                </li>
                <li>
                    Instilling care and respect for both people and the environment within the framework of social,
                    religious, moral, and multicultural awareness.
                </li>
                <li>
                    Promoting a sense of responsibility for their own learning and actions, empowering students to take
                    ownership of their education and behavior.
                </li>
                <li>
                    Cultivating an awareness of the modern world and fostering an environmental and aesthetic
                    appreciation of it.
                </li>
                <li>
                    Equipping students with the ability and confidence to communicate effectively, both verbally and in
                    writing.
                </li>
                <li>
                    Providing a solid foundation in scientific and technological understanding to prepare students for
                    the challenges of the modern world.
                </li>
                <li>
                    Nurturing a creative and adaptable mindset committed to lifelong learning, encouraging curiosity,
                    innovation, and adaptability.
                </li>
                <li>
                    Embracing a growth mindset approach in learning, focusing on core principles of Respect, Readiness,
                    Responsibility, Resilience, and Reflectiveness within the A.I.M.S. community.
                </li>
                <li>
                    Inspiring pupils at A.I.M.S. to value learning, strive for excellence, and realize their full
                    potential.
                </li>
            </ol>
            <p>
                Through these objectives, we aim to create a supportive and enriching learning environment where every
                child can flourish academically, socially, and emotionally, and ultimately contribute positively to
                society.
            </p>
        </div>
    </div>
    <!---- School Objectives End ---->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Staff's
                </div>
                <h1 class="display-6 mb-5">Let's Meet With Our Stockholder's</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                 src="https://scontent.fabv2-1.fna.fbcdn.net/v/t39.30808-6/258588430_106630578512987_7955240258584324679_n.jpg?stp=c0.107.637.637a_dst-jpg_s552x414&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGj1iQAiaXUMfZFdjOau4wCd-fERwW7Q9R358RHBbtD1N6LAFB68Ahec2wQZ-qyRkZQv7U--OGQRYV5MCFpGKDh&_nc_ohc=uH92Dx4v_eUAX-iUtIM&_nc_zt=23&_nc_ht=scontent.fabv2-1.fna&oh=00_AfBkg4klyeq6YgYx903cwE9D5vtOdWKun2d7b4pqcyZEAg&oe=6607079D"
                                 alt=""/>
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
