<!-- Start Responsive Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{route('home')}}" class="logo d-inline-block">
            <h2>ArmaCadabra</h2>
        </a>
        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="responsive-menu">
            <li class="responsive-menu-list without-icon">
                <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="{{route('about')}}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="{{route('blog.form')}}" class="nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
            </li>

            <li class="responsive-menu-list without-icon">
                <a href="{{route('contact')}}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
            </li>
        </ul>
        <div class="others-option d-md-flex align-items-center">
            <div class="option-item">
                <a href="{{ route('download.catalogue') }}" class="default-btn">
                    <i class="ri-arrow-right-line"></i>
                    <span>Download Catalogue</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Responsive Navbar Area -->
<!-- Start Navbar Area -->
<nav class="navbar navbar-expand-lg mb-nav" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset("assets/img/ArmacadabraLogo.png")}}" alt="Armacadabra Logo" style="width: 150px; height: auto;">

        </a>
        <a class="navbar-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('blog.form')}}" class="nav-link {{ request()->is('products') ? 'active' : '' }}">
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        Contact Us
                    </a>
                </li>
            </ul>
            <div class="nav-btn">
                <a href="{{ route('download.catalogue') }}" class="default-btn">
                    Download Catalogue
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->
