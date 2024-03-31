@extends('layouts.app')
@section('app')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Gallery
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4"
                         src="{{asset('img/Screenshot 2024-03-31 122316.png')}}"
                         alt=""/>
                    <p class="figure-caption text-center p-black">
                        Cross-Section of sponsor’s and stakeholder’s on inauguration day
                    </p>
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4"
                         src="{{asset('img/Screenshot 2024-03-31 122352.png')}}"
                         alt=""/>
                    <p class="figure-caption text-center p-black">
                        Cross-Section of pupil’s having their snacks sponsored by donor’s
                    </p>
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4"
                         src="{{asset('img/Screenshot 2024-03-31 122419.png')}}"
                         alt=""/>
                    <p class="figure-caption text-center p-black">Cross-Section of pupil’s having their meal sponsored
                        by donor’s </p>
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic6.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic7.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic5.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic4.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic3.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <figure class="figure">
                    <img class="figure-img w-100 shadow-1-strong rounded mb-4" src="{{asset('img/sch-pic2.jpg')}}"
                         alt=""/>
                    {{--                    <p class="figure-caption">Founder</p>--}}
                </figure>
            </div>
        </div>
        <!-- Gallery -->
    </div>
@endsection
