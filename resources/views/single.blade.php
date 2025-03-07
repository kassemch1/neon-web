<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:43:07 GMT -->
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

@include('partials/navbar')

<!-- Start Banner Area -->
<div class="section-banner">
    <div class="container">
        <div class="section-banner-title">
            <h1>Blog Details</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                        <img src="{{asset($slider->images)}}" alt="image">
                        <img src="{{asset($slider->secondImage)}}" alt="image">
                    </div>


                    <div class="blog-content">
                        <div class="entry-meta">
                            <ul>
                                <li>By: <a href="#">{{$slider->name}}</a></li>
                                <li>Last Updated: August 28, 2020</li>
                                <li><a href="#">4 Comments</a></li>
                            </ul>
                        </div>

                        <p>{{$slider->description}}</p>
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}

                        <blockquote class="wp-block-quote">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <cite>Tom Cruise</cite>
                        </blockquote>

                        <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>

{{--                        <ul class="wp-block-gallery columns-3">--}}
{{--                            <li class="blocks-gallery-item">--}}
{{--                                <figure>--}}
{{--                                    <img src="assets/img/gallery/insta-1.jpg" alt="image">--}}
{{--                                </figure>--}}
{{--                            </li>--}}

{{--                            <li class="blocks-gallery-item">--}}
{{--                                <figure>--}}
{{--                                    <img src="assets/img/gallery/insta-2.jpg" alt="image">--}}
{{--                                </figure>--}}
{{--                            </li>--}}

{{--                            <li class="blocks-gallery-item">--}}
{{--                                <figure>--}}
{{--                                    <img src="assets/img/gallery/insta-3.jpg" alt="image">--}}
{{--                                </figure>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <h3>Four major elements that we offer:</h3>--}}
{{--                        <ul class="features-list">--}}
{{--                            <li><i class="ri-check-line"></i> Scientific skills for getting a better result</li>--}}
{{--                            <li><i class="ri-check-line"></i> Communication skills to getting in touch</li>--}}
{{--                            <li><i class="ri-check-line"></i> A career overview opportunity available</li>--}}
{{--                            <li><i class="ri-check-line"></i> A good work environment for work</li>--}}
{{--                        </ul>--}}

{{--                        <h3>Setting the mood with incense</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}
{{--                        <h3>The rise of marketing and why you need it</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
{{--                    </div>--}}

{{--                    <div class="article-footer">--}}
{{--                        <div class="article-tags">--}}
{{--                            <span><i class="ri-price-tag-3-line"></i></span>--}}
{{--                            <a href="#">City</a>,--}}
{{--                            <a href="#">Games</a>,--}}
{{--                            <a href="#">Travel</a>--}}
{{--                        </div>--}}
{{--                        <div class="article-share">--}}
{{--                            <ul class="social">--}}
{{--                                <li><span>Share:</span></li>--}}
{{--                                <li><a href="#" class="facebook" target="_blank"><i class="ri-facebook-fill"></i></a></li>--}}
{{--                                <li><a href="#" class="twitter" target="_blank"><i class="ri-twitter-line"></i></a></li>--}}
{{--                                <li><a href="#" class="linkedin" target="_blank"><i class="ri-linkedin-fill"></i></a></li>--}}
{{--                                <li><a href="#" class="instagram" target="_blank"><i class="ri-instagram-line"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="article-author">--}}
{{--                        <div class="author-profile-header"></div>--}}
{{--                        <div class="author-profile">--}}
{{--                            <div class="author-profile-title">--}}
{{--                                <img src="assets/img/us-1.jpg" class="shadow-sm" alt="image">--}}
{{--                                <h4>Chris Orwig</h4>--}}
{{--                                <span class="d-block">Photographer, Author, Writer</span>--}}
{{--                                <p>Chris Orwig is a celebrated photographer, author, and writer who brings passion to everything he does. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="comments-area">--}}
{{--                        <h3 class="comments-title">2 Comments:</h3>--}}

{{--                        <ol class="comment-list">--}}
{{--                            <li class="comment">--}}
{{--                                <article class="comment-body">--}}
{{--                                    <footer class="comment-meta">--}}
{{--                                        <div class="comment-author vcard">--}}
{{--                                            <img src="assets/img/us-1.jpg" class="avatar" alt="image">--}}
{{--                                            <b class="fn">John Jones</b>--}}
{{--                                        </div>--}}

{{--                                        <div class="comment-metadata">--}}
{{--                                            <span>April 24, 2019 at 10:59 am</span>--}}
{{--                                        </div>--}}
{{--                                    </footer>--}}

{{--                                    <div class="comment-content">--}}
{{--                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="reply">--}}
{{--                                        <a href="#" class="comment-reply-link">Reply</a>--}}
{{--                                    </div>--}}
{{--                                </article>--}}

{{--                                <ol class="children">--}}
{{--                                    <li class="comment">--}}
{{--                                        <article class="comment-body">--}}
{{--                                            <footer class="comment-meta">--}}
{{--                                                <div class="comment-author vcard">--}}
{{--                                                    <img src="assets/img/us-2.jpg" class="avatar" alt="image">--}}
{{--                                                    <b class="fn">Steven Smith</b>--}}
{{--                                                </div>--}}

{{--                                                <div class="comment-metadata">--}}
{{--                                                    <span>April 24, 2020 at 10:59 am</span>--}}
{{--                                                </div>--}}
{{--                                            </footer>--}}

{{--                                            <div class="comment-content">--}}
{{--                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>--}}
{{--                                            </div>--}}

{{--                                            <div class="reply">--}}
{{--                                                <a href="#" class="comment-reply-link">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </article>--}}

{{--                                        <ol class="children">--}}
{{--                                            <li class="comment">--}}
{{--                                                <article class="comment-body">--}}
{{--                                                    <footer class="comment-meta">--}}
{{--                                                        <div class="comment-author vcard">--}}
{{--                                                            <img src="assets/img/us-3.jpg" class="avatar" alt="image">--}}
{{--                                                            <b class="fn">Sarah Taylor</b>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="comment-metadata">--}}
{{--                                                            <span>April 24, 2020 at 10:59 am</span>--}}
{{--                                                        </div>--}}
{{--                                                    </footer>--}}

{{--                                                    <div class="comment-content">--}}
{{--                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="reply">--}}
{{--                                                        <a href="#" class="comment-reply-link">Reply</a>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </ol>--}}
{{--                                    </li>--}}
{{--                                </ol>--}}
{{--                            </li>--}}
{{--                        </ol>--}}

{{--                        <div class="comment-respond">--}}
{{--                            <h3 class="comment-reply-title">Leave a Reply</h3>--}}

{{--                            <form class="comment-form">--}}
{{--                                <p class="comment-notes">--}}
{{--                                    <span id="email-notes">Your email address will not be published.</span>--}}
{{--                                    Required fields are marked <span class="required">*</span>--}}
{{--                                </p>--}}

{{--                                <p class="comment-form-author">--}}
{{--                                    <label>Name <span class="required">*</span></label>--}}
{{--                                    <input type="text" id="author" placeholder="Your Name*" name="author" required="required">--}}
{{--                                </p>--}}

{{--                                <p class="comment-form-email">--}}
{{--                                    <label>Email <span class="required">*</span></label>--}}
{{--                                    <input type="email" id="email" placeholder="Your Email*" name="email" required="required">--}}
{{--                                </p>--}}

{{--                                <p class="comment-form-url">--}}
{{--                                    <label>Website</label>--}}
{{--                                    <input type="url" id="url" placeholder="Website" name="url">--}}
{{--                                </p>--}}

{{--                                <p class="comment-form-comment">--}}
{{--                                    <label>Comment</label>--}}
{{--                                    <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>--}}
{{--                                </p>--}}

{{--                                <p class="comment-form-cookies-consent">--}}
{{--                                    <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">--}}
{{--                                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>--}}
{{--                                </p>--}}

{{--                                <p class="form-submit">--}}
{{--                                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">--}}
{{--                                </p>--}}
{{--                            </form>--}}
{{--                        </div>--}}
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
                        <h5 class="widget-title">Recent Posts</h5>

                        @foreach($latestSliders as $latestSlider)
                            <div class="post-item">
                                <div class="info">
                                    <ul>
{{--                                        <li><a href="#">Trends</a></li>--}}
                                        <li><a href="#">{{ $latestSlider->created_at->format('F j, Y') }}</a></li>
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

<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:43:11 GMT -->
</html>
