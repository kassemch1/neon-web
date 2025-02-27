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

    <style>
        .faq-container {
            margin-top: 50px;
        }

        .faq-header {
            font-size: 42px;
            border-bottom: 1px dotted #ccc;
            padding: 24px;
            text-align: center;
        }

        .faq-content {
            margin: 0 auto;
            max-width: 800px;
        }

        .faq-question {
            padding: 20px 0;
            border-bottom: 1px dotted #ccc;
        }

        .panel-title {
            font-size: 24px;
            width: 100%;
            position: relative;
            margin: 0;
            padding: 10px 10px 0 48px;
            display: block;
            cursor: pointer;
        }

        .panel-content {
            font-size: 20px;
            padding: 0px 14px;
            margin: 0 40px;
            height: 0;
            overflow: hidden;
            z-index: -1;
            position: relative;
            opacity: 0;
            transition: .4s ease;
        }

        .panel:checked ~ .panel-content {
            height: auto;
            opacity: 1;
            padding: 14px;
        }

        .plus {
            position: absolute;
            margin-left: 20px;
            margin-top: 4px;
            z-index: 5;
            font-size: 42px;
            line-height: 100%;
            user-select: none;
            transition: .2s ease;
        }

        .panel:checked ~ .plus {
            transform: rotate(45deg);
        }

        .panel {
            display: none;
        }
    </style>

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

<div class="faq-container">
    <div class="faq-header">Frequently Asked Questions</div>

    <div class="faq-content">
        <div class="faq-question">
            <input id="q1" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q1" class="panel-title">What is the meaning of life?</label>
            <div class="panel-content">42</div>
        </div>

        <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
            <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck could chuck wood!</div>
        </div>

        <div class="faq-question">
            <input id="q3" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
        </div>
    </div>
</div>


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
