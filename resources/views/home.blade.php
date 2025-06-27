<!DOCTYPE html>
<html lang="en">
<head>



    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-40NQPE0KK2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-40NQPE0KK2');
</script>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="signage, banners, acrylics, vinyl, PVC, LED lighting, one-way vision vinyl, frosted vinyl, acrylic mirror, Alucobond, metallic vinyl, RGB LED, neon LED, sign standoffs, business branding, visual identity, custom signs, advertising materials, waterproof signage, commercial displays">
    <title>ArmaCadabra</title>

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
</head>
<style>
    .whatsapp-button {
        position: fixed;
        bottom: 115px;
        right: 55px;
        background-color: #25d366;
        color: white;
        border-radius: 50%;
        padding: 15px;
        font-size: 24px;
        text-align: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
    }
    @media (max-width: 768px) {
        .whatsapp-button {
            right: 20px; /* Shift more to the right */
            bottom: 80px; /* Adjust position slightly */
            padding: 10px; /* Reduce padding */
            font-size: 18px; /* Decrease font size */
        }
    }
</style>

<a href="https://wa.me/76970779" class="whatsapp-button" target="_blank">
    &#x1F4AC;
</a>

<body>


    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSHHG5Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    


@if(!($agent->isMobile()))
    @include('partials/navbar')


    @include('partials/slider', ['banner' => $banner])
    @include('partials.features')

    @include('partials.aboutus')
    <!-- Start Article Area -->
    <div class="article-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <div class="width">
                            <div class="sub-t">Our Products</div>
                            <h2>Latest Materials & Products</h2>
                            <a class="main-btn" href="{{route('blog.form')}}"><span></span><i class="ri-pencil-line"></i> See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="article-content owl-carousel owl-theme">
                        @foreach($sliders as $slider)
                            <div class="item">
                                <a href="{{ route('slider.show', $slider->id) }}">
                                    <img src="{{asset($slider->images)}}" alt="image" style="height:350px" loading="lazy"></a>

                                <div class="pop-content">
                                    <h3><a href="{{ route('slider.show', $slider->id) }}">{{$slider->name}}</a></h3>
                                </div>
                                <a href="{{ route('slider.show', $slider->id) }}">
                                    <div class="go-corner">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Article Area -->
    @include('partials/faqs')
    @include('partials/footer')

@elseif($agent->isMobile())
    @include('partials/navbar')
    @include('partials/slider', ['banner' => $banner])
    @include('partials.aboutus')
    <!-- Start Article Area -->
    <div class="article-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <div class="width">
                            <div class="sub-t">Our Products</div>
                            <h2>Latest Materials & Products</h2>
                            <a class="main-btn" href="{{route('blog.form')}}"><span></span><i class="ri-pencil-line"></i> See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="article-content owl-carousel owl-theme">
                        @foreach($sliders as $slider)
                            <div class="item">
                                <a href="{{ route('slider.show', $slider->id) }}">
                                    <img src="{{asset($slider->images)}}" alt="image" style="height:350px" loading="lazy"></a>

                                <div class="pop-content">
                                    <h3><a href="{{ route('slider.show', $slider->id) }}">{{$slider->name}}</a></h3>
                                </div>
                                <a href="{{ route('slider.show', $slider->id) }}">
                                    <div class="go-corner">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="image">
            <img src="assets/img/AboutImage.jpg" alt="image" loading="lazy" style="margin-bottom: 30px;margin-left: 10px">
        </div>
    </div>
    <!-- End Article Area -->
    @include('partials/faqs')
    @include('partials.features')
    @include('partials/footer')
@endif


<!-- Start Top to Bottom -->
<div id="progress">
    <span id="progress-value"><i class="ri-arrow-up-line"></i></span>
</div>

<a href="{{ route('download.catalogue') }}" class="ahs-purchase hide-on-mobile" title="Download our product catalogue">Download
    Catalogue</a>

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
