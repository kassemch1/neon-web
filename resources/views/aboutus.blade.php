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

{{--@include('partials/slider', ['banner' => $banner])--}}

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

@include('partials/aboutus')

@include('partials.faqs')





@include('partials/gallery')
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
