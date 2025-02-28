<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AiNext - AI Agency & Startup HTML Template</title>

    <!-- CSS Linked -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- favicon Linked -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

</head>
<body>

@include('partials/navbar')

@include('partials/slider', ['banner' => $banner])

<!-- Start Section Banner -->
<div class="section-banner">
    <div class="container">
        <div class="section-banner-title">
            <h1>About us</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Section Banner -->

<!-- Start About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image">
                    <img src="assets/img/about-2.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <div class="sub-t">About Us</div>
                    <h2>Create your own AI business easily.</h2>
                    <p>{{$aboutus->description}}</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="{{$aboutus->clients}}">00</span>
                                </h3>
                                <p>Clients</p>
                            </div>
                        </div>
{{--                        <div class="col-lg-4 col-md-4 col-4">--}}
{{--                            <div class="sub-counter">--}}
{{--                                <h3>--}}
{{--                                    <span class="odometer" data-count="10">00</span>--}}
{{--                                    <span class="target">K</span>--}}
{{--                                </h3>--}}
{{--                                <p>Projects</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="{{$aboutus->years}}">00</span>
                                </h3>
                                <p>Years</p>
                            </div>
                        </div>
                    </div>
                    <a class="main-btn" href="about.html"><span></span><i class="ri-quill-pen-line"></i> About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area -->

<!-- Start Testimonial Area -->
<div class="testimonial-area ptb-100">
    <div class="container">
        <div class="testimonial-content owl-carousel owl-theme">
            <div class="testimonial-item">
                <ul>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p>
                <h4>Aloin Lden</h4>
                <span>Web Developer</span>
            </div>
            <div class="testimonial-item">
                <ul>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                    <li><i class="ri-star-s-fill"></i></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In aut, tempora iste quidem ipsa eos. Mollitia, illo, nisi laboriosam nostrum</p>
                <h4>Jacob Daniels</h4>
                <span>Engineer</span>
            </div>
        </div>
        <div class="user">
            <img src="assets/img/user-1.jpg" alt="image">
        </div>
        <div class="user">
            <img src="assets/img/user-2.jpg" alt="image">
        </div>
        <div class="user">
            <img src="assets/img/user-3.jpg" alt="image">
        </div>
        <div class="user">
            <img src="assets/img/user-4.jpg" alt="image">
        </div>
    </div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
</div>
<!-- End Testimonial Area -->

<!-- Start Brands Area -->
<div class="brands-area pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="assets/img/01.png" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="assets/img/02.png" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="assets/img/03.png" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="assets/img/04.png" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="assets/img/05.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brands Area -->

<!-- Start Insta Gallery Area -->
<div class="insta-gallery">
    <div class="conatiner-fluid">
        <div class="ins-gallery owl-carousel owl-theme">
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-1.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-10.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-2.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-3.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-4.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-5.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-6.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-7.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-8.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            <div class="items">
                <a href="https://www.instagram.com/" target="_blank" >
                    <img src="assets/img/gallery/insta-9.jpg" alt="image">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Insta Gallery Area -->

@include('partials/footer')
<!-- Start Top to Bottom -->
<div id="progress">
    <span id="progress-value"><i class="ri-arrow-up-line"></i></span>
</div>
<!-- End Top to Bottom -->
<!--Start Popup Script-->
<script data-cfasync="false">(function(w,i,s,e){window[w]=window[w]||function(){(window[w].q=window[w].q||[]).push(arguments)};window[w].l=Date.now();s=document.createElement('script');e=document.getElementsByTagName('script')[0];s.defer=1;s.src=i;e.parentNode.insertBefore(s, e)})('wisepops', '../../../wisepops.net/loader5c69.html?v=2&amp;h=HzBeEscjD9');</script>

<!--Start of Live Chat Script-->
<script src="../../../code.tidio.co_443/ukbzkumwslzb2mxazsvwu2r0hnenldtf.js" async></script>
<!--End of  Live Chat  Script-->

<!-- Js Linked -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/ainext.js')}}"></script>
</body>

<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:43:01 GMT -->
</html>
