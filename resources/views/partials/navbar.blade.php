<!-- Start Responsive Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo d-inline-block">
            <h2>AiNext</h2>
        </a>
        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="responsive-menu">
            <li class="responsive-menu-list without-icon">
                <a href="index.html" class="active">Home</a>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);" >Pages</a>
                <ul class="responsive-menu-items">
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="terms-conditions.html">Terms Conditions</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="4o4.html">404 Error Page</a></li>
                    <li><a href="contact.html">Coming Soon</a></li>
                </ul>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="portfolio.html">Portfolio</a>
            </li>

            <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a>
                <ul class="responsive-menu-items">
                    <li><a href="blog">Blog</a></li>
                    <li><a href="blog-sidebar">Blog Right Sidebar</a></li>
                    <li><a href="blog-details">Blog Details</a></li>
                </ul>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="contact.html">Contact</a>
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
        <a class="navbar-brand" href="index.html">
            <h2>AiNext</h2>
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
                    <a href="index.html" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link active">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                        Pages
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="about" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="team.html" class="nav-link">
                                Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing" class="nav-link">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="terms-conditions.html" class="nav-link">
                                Tearm & Condition
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="privacy-policy.html" class="nav-link">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="not-found.html" class="nav-link">
                                404 Error Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="portfolio" class="nav-link">
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                        Blog
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="blog" class="nav-link">
                                Blog Grid
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blog-sidebar" class="nav-link">
                                Blog Right Sidebar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blog-details" class="nav-link">
                                Blog Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link">
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
