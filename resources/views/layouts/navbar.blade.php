<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-12 px-5 text-start d-flex justify-content-between">
            <small><i class="fa fa-map-marker-alt me-2"></i>Contact Address: No. 90, Kwanar Yan Ghana, Tudun Murtala,
                Kano</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>
                <a href="mailto:alibrabmemorialschool2021@gmail.com"
                   class="text-white-50">alibrabmemorialschool2021@gmail.com</a>
            </small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>
                <a href="mailto:info@al-ibrabmemorialschool.com.ng"
                   class="text-white-50">info@al-ibrabmemorialschool.com.ng</a>
            </small>
            <small>Follow us:
                <a class="text-white-50 ms-3" href="https://www.facebook.com/profile.php?id=100075825131277"
                   target="_blank"><i class="fab fa-facebook-f"></i></a>
            </small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">
                Al-Ibrab
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ $nav == 'index' ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ $nav == 'about' ? 'active' : '' }}">About</a>
                <a href="/admission" class="nav-item nav-link {{ $nav == 'admission' ? 'active' : '' }}">Admission</a>
                <a href="/gallery" class="nav-item nav-link {{ $nav == 'gallery' ? 'active' : '' }}">Gallery</a>
                <a href="/scholarship" class="nav-item nav-link {{ $nav == 'sponsor' ? 'active' : '' }}">
                    Scholarship
                </a>
                <a href="/contact" class="nav-item nav-link {{ $nav == 'contact' ? 'active' : '' }}">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="">
                    Sponsor a Child
                    <div
                        class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2"
                    >
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
