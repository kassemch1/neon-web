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
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

</head>
<body>

    @include('partials/navbar')

    @include('partials/slider', ['banner' => $banner])

    @include('partials.aboutus')
     
    @include('partials/faqs')
    
<!-- Start Testimonial Area -->
<!--
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
-->
<!-- End Testimonial Area -->



<!-- Start Article Area -->
<div class="article-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title">
                    <div class="width">
                        <div class="sub-t">Our Latest News</div>
                        <h2>Latest News & Articles</h2>
                        <a class="main-btn" href="blog.html"><span></span><i class="ri-pencil-line"></i> See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="article-content owl-carousel owl-theme" >
                    @foreach($sliders as $slider)
                    <div class="item">
                        <a href="{{ route('slider.show', $slider->id) }}"> <img src="{{asset($slider->images)}}" alt="image" style="height:350px" ></a>
                        <div class="pop-content">
                            <h3><a href="{{ route('slider.show', $slider->id) }}">{{$slider->name}}</a></h3>
{{--                            <ul>--}}
{{--                                <li>{{$slider->created_at}}</li>--}}
{{--                                <li><span>0</span>Comments</li>--}}
{{--                            </ul>--}}
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
{{--                    <div class="item">--}}
{{--                        <img src="assets/img/blogs/artical-3.jpg" alt="image">--}}
{{--                        <div class="pop-content">--}}
{{--                            <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>--}}
{{--                            <ul>--}}
{{--                                <li>March 18, 2022</li>--}}
{{--                                <li><span>0</span>Comments</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <a href="blog-details.html">--}}
{{--                            <div class="go-corner">--}}
{{--                                <div class="go-arrow">--}}
{{--                                    <i class="ri-arrow-right-up-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="assets/img/blogs/artical-2.jpg" alt="image">--}}
{{--                        <div class="pop-content">--}}
{{--                            <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>--}}
{{--                            <ul>--}}
{{--                                <li>March 18, 2022</li>--}}
{{--                                <li><span>0</span>Comments</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <a href="blog-details.html">--}}
{{--                            <div class="go-corner">--}}
{{--                                <div class="go-arrow">--}}
{{--                                    <i class="ri-arrow-right-up-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="assets/img/blogs/artical-4.jpg" alt="image">--}}
{{--                        <div class="pop-content">--}}
{{--                            <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>--}}
{{--                            <ul>--}}
{{--                                <li>March 18, 2022</li>--}}
{{--                                <li><span>0</span>Comments</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <a href="blog-details.html">--}}
{{--                            <div class="go-corner">--}}
{{--                                <div class="go-arrow">--}}
{{--                                    <i class="ri-arrow-right-up-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Article Area -->


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

    <a href="{{ route('download.catalogue') }}" class="ahs-purchase hide-on-mobile" title="Download our product catalogue">Download Catalogue</a>

<!-- Js Linked -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/ainext.js')}}"></script>
</body>

<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:42:20 GMT -->
</html>