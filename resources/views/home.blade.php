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


<!-- Start Fetuses Area -->
<section id="features" class="fetuses-area pt-70">
    <div class="container-fluid">
        <div class="row justify-content-center g-0">
            <div class="col-lg-3 col-md-6">
                <div class="single-fetuses-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <i class="fi fi-tr-file-user"></i>
                    </div>
                    <h3>We analyzing Experience</h3>
                    <p>Easy to grasp, rewarding to perfect. Be proficient in producing exquisite content quickly and efficiently.</p>
                    <a href="about.html">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-fetuses-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <i class="fi fi-tr-graphic-style"></i>
                    </div>
                    <h3>From Concept To Final</h3>
                    <p>Easy to grasp, rewarding to perfect. Be proficient in producing exquisite content quickly and efficiently.</p>
                    <a href="about.html">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-fetuses-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <i class="fi fi-tr-user-astronaut"></i>
                    </div>
                    <h3>New Thinking For Result</h3>
                    <p>Easy to grasp, rewarding to perfect. Be proficient in producing exquisite content quickly and efficiently.</p>
                    <a href="about.html">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-fetuses-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <i class="fi fi-tr-biking-mountain"></i>
                    </div>
                    <h3>New Thinking For Result</h3>
                    <p>Easy to grasp, rewarding to perfect. Be proficient in producing exquisite content quickly and efficiently.</p>
                    <a href="about.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fetuses Area -->

<!-- Start About Area -->
<div class="about-area ptb-100 section-bg">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6">
                <div class="image">
                    <img src="assets/img/about-2.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <div class="sub-t">About Us</div>
                    <h2>Create your own AI business easily.</h2>
                    <p>Malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel. Nam aliquam sem et tortor consequat. Porttitor leo a diam sollicitudin tempor id eu. Nisl pretium fusce id velit ut. At lectus urna duis convallis convallis tellus id interdum.</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="5000">00</span>
                                </h3>
                                <p>Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="10">00</span>
                                    <span class="target">K</span>
                                </h3>
                                <p>Projects</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="250">00</span>
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

<!-- Start Brands Area -->
<div class="brands-area pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="{{asset('assets/img/01.png')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="{{asset('assets/img/02.png')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="{{asset('assets/img/03.png')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="{{asset('assets/img/04.png')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="{{asset('assets/img/05.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brands Area -->

<!-- Start Team Area -->
<div class="team-area pt-100">
    <div class="container">
        <div class="image-courser owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="1500">
            <div class="courser-item">
                <div class="image-item">
                    <img src="{{asset('assets/img/about-image-1.jpg')}}" alt="image">
                    <div class="hover-content">
                        <h4>Christian Haol</h4>
                        <p>Web Developer</p>
                        <ul>
                            <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="courser-item">
                <div class="image-item">
                    <img src="assets/img/about-image-2.jpg" alt="image">
                    <div class="hover-content">
                        <h4>Christian Haol</h4>
                        <p>Web Developer</p>
                        <ul>
                            <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="courser-item">
                <div class="image-item">
                    <img src="assets/img/about-image-3.jpg" alt="image">
                    <div class="hover-content">
                        <h4>Christian Haol</h4>
                        <p>Web Developer</p>
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="courser-item">
                <div class="image-item">
                    <img src="assets/img/about-image-4.jpg" alt="image">
                    <div class="hover-content">
                        <h4>Christian Haol</h4>
                        <p>Web Developer</p>
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="courser-item">
                <div class="image-item">
                    <img src="{{asset('assets/img/about-image-5.jpg')}}" alt="image">
                    <div class="hover-content">
                        <h4>Christian Haol</h4>
                        <p>Web Developer</p>
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Gallery Area  -->
<div class="gallery-area ptb-100">
    <div class="container">
        <div class="gallery-table" data-aos="fade-up" data-aos-duration="1500">
            <div class="section-title">
                <div class="width">
                    <div class="sub-t">Image Generation</div>
                    <h2>Unveil New Creative Horizons with Models</h2>
                </div>

                <ul class="">
                    <li class="item-list play on" data-filter="All">All</li>
                    <li class="item-list play" data-filter="Brand">Brand</li>
                    <li class="item-list play" data-filter="Design">Design</li>
                    <li class="item-list play" data-filter="Motion">Motion</li>
                    <li class="item-list play" data-filter="Printing">Printing</li>
                </ul>

            </div>

            <div class="gallery">
                <div class="item-box All Brand">
                    <img src="assets/img/gallery/gallery-image1.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image16.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image11.jpg" alt="image">
                </div>
                <div class="item-box All Printing">
                    <img src="assets/img/gallery/gallery-image2.jpg" alt="image">
                </div>
                <div class="item-box All Printing">
                    <img src="assets/img/gallery/gallery-image7.jpg" alt="image">
                </div>
                <div class="item-box All Printing">
                    <img src="assets/img/gallery/gallery-image3.jpg" alt="image">
                </div>
                <div class="item-box All Printing">
                    <img src="assets/img/gallery/gallery-image4.jpg" alt="image">
                </div>
                <div class="item-box All Brand">
                    <img src="assets/img/gallery/gallery-image6.jpg" alt="image">
                </div>
                <div class="item-box All Motion">
                    <img src="assets/img/gallery/gallery-image8.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image15.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image13.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image12.jpg" alt="image">
                </div>
                <div class="item-box All Design">
                    <img src="assets/img/gallery/gallery-image17.jpg" alt="image">
                </div>
            </div>
            <div class="gallery-btn">
                <a class="main-btn" href="portfolio.html"><span></span><i class="ri-function-line"></i> View All Images</a>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery Area -->

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

<!-- Start Pricing Area -->
<div class="pricing-area pt-100 section-bg">
    <div class="section-title-center">
        <div class="width">
            <div class="sub-t">Best Pricing Plans</div>
            <h2>Our Pricing Plans</h2>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <h2 class="card_title"><i class="ri-vip-crown-line"></i> Student</h2>
                    <h3 class="pricing">$20<span class="small">/per month</span></h3>
                    <hr>
                    <ul class="features">
                        <li>One account</li>
                        <li>Unlimited Projects</li>
                        <li>Download prototypes</li>
                    </ul>
                    <a href="contact.html" class="cta_btn">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card active">
                    <h2 class="card_title"><i class="ri-vip-crown-line"></i> Personal</h2>
                    <h3 class="pricing">$39<span class="small">/per month</span></h3>
                    <hr>
                    <ul class="features">
                        <li>One account</li>
                        <li>Unlimited Projects</li>
                        <li>Download prototypes</li>
                    </ul>
                    <a href="contact.html" class="cta_btn">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <h2 class="card_title"><i class="ri-vip-crown-line"></i> Family</h2>
                    <h3 class="pricing">$60<span class="small">/per month</span></h3>
                    <hr>
                    <ul class="features">
                        <li>One account</li>
                        <li>Unlimited Projects</li>
                        <li>Download prototypes</li>
                    </ul>
                    <a href="contact.html" class="cta_btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing  Area -->

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
                        <img src="{{asset($slider->images)}}" alt="image" style="height:500px">
                        <div class="pop-content">
                            <h3><a href="blog-details.html">{{$slider->name}}</a></h3>
{{--                            <ul>--}}
{{--                                <li>{{$slider->created_at}}</li>--}}
{{--                                <li><span>0</span>Comments</li>--}}
{{--                            </ul>--}}
                        </div>
                        <a href="blog-details.html">
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

<!-- Start Insta Gallery -->
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
<!-- End Insta Gallery -->


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
