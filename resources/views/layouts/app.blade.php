<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Al-Ibrab Memorial School for Orphans & Less Privileged</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta
        content="School,Secondary School, Alibrab, AlIbrab, Al-Ibrab, Al, ibrab, Nigeria, Kano, Nigeria Kano, Junior Secondary, Primary, Nursery, "
        name="keywords"/>
    <meta
        content="Al-Ibrab Memorial School located at No. 90, Kwanar Yan Ghana, Tudun Murtala, Kano is a school that offers free for Orphan and less privileged"
        name="description"/>

    <!-- Favicon -->
    <link href="{{asset('logo-removebg-preview.png')}}" rel="icon"/>


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet"/>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
</head>


<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


@include('layouts.navbar')

@yield('app')

@include('layouts.footer')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
