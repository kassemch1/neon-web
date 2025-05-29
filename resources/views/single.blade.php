<!DOCTYPE html>
<html lang="en">


<head>



    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSSHHG5Q');</script>
    <!-- End Google Tag Manager -->




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArmaCadabra - Product Details</title>

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

    <!-- Standard Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/img/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/img/favicon-16x16.png")}}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/apple-touch-icon.png")}}">

    <!-- Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("assets/img/android-chrome-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset("assets/img/android-chrome-512x512.png")}}">
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <style>
        .article-image {
            display: flex;
            gap: 10px; /* Adjust the gap between images */
            justify-content: center; /* Center images horizontally */
        }

        .article-image img {
            width: 48%; /* Adjust to fit within the container */
            height: auto; /* Maintain aspect ratio */
            object-fit: cover; /* Ensure images are properly cropped if needed */
            border-radius: 5px; /* Optional: for rounded corners */
        }

    </style>

</head>
<body>





    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSHHG5Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    
@include('partials/navbar')

<!-- Start Banner Area -->
<div class="section-banner">
    <div class="container">
        <div class="section-banner-title">
            <h1>Product Details</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<!-- Start Blog Details Area -->
<div class="blog-details pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach($sliders as $slider)
            <div class="col-lg-8">
                <div class="blog-details-desc">

                    <div class="article-image">
                        <img src="{{asset($slider->images)}}" alt="image" loading="lazy">
                        <img src="{{asset($slider->secondImage)}}" alt="image" loading="lazy">
                    </div>


                    <div class="blog-content">
                        <div class="entry-meta">
                            <ul>
                                <li>Name: <b>{{$slider->name}}</b></li>

                            </ul>
                        </div>


{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}

                        <blockquote class="wp-block-quote">
                            <p>{{$slider->description}}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
{{--                    <div class="widget search_widget">--}}
{{--                        <h5 class="widget-title">Search</h5>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" class="form-control" placeholder="Search Here.." aria-describedby="button-addon2">--}}
{{--                            <button class="btn" type="button"><i class="ri-search-line"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="widget recent_post_widget">
                        <h5 class="widget-title">Recent Products</h5>

                        @foreach($latestSliders as $latestSlider)
                            <div class="post-item">
                                <div class="info">
                                    <ul>
{{--                                        <li><a href="#">Trends</a></li>--}}
                                        <li>{{ $latestSlider->created_at->format('F j, Y') }}</li>
                                    </ul>
                                </div>
                                <h6 class="post-title">
                                    <a href="{{ route('slider.show', $latestSlider->id) }}">{{ $latestSlider->name }}</a>
                                </h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Blog Details Area -->



@include('partials/footer')

<!-- Start Top to Bottom -->
<div id="progress">
    <span id="progress-value"><i class="ri-arrow-up-line"></i></span>
</div>
<!-- End Top to Bottom -->

<!-- Js Linked -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/ainext.js')}}"></script>
</body>

</html>
