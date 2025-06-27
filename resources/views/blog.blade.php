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
        <title>ArmaCadabra - Products</title>

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
    @turnstileScripts()
    </head>
<style>
    #search-input:focus {
        outline: none;
        box-shadow: 0 0 15px rgba(225, 0, 255, 0.2);
        border-color: #E100FF;
    }

    #search-form button:hover i {
        transform: scale(1.1);
        color: #FF45E9;
    }

    @media (max-width: 768px) {
        #search-form {
            max-width: 90%;
        }
    }
</style>
    <body>




        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSHHG5Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    
        @include('partials.navbar')

        <!-- Start Banner Area -->
        <div class="section-banner">
            <div class="container">
                <div class="section-banner-title">
                    <h1>Products</h1>
                    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Blog Area -->
        <div class="blog-area article-area pt-100 pb-70">
            <div class="container">
                <form action="{{ route('blog.form') }}" method="GET" style="margin-bottom: 20px; width: 100%; max-width: 320px; margin-left: auto; margin-right: auto;" id="search-form">
                    <div style="position: relative; width: 100%;">
                        <input type="text" name="search" placeholder="Search images..." value="{{ request('search') }}"
                               style="padding: 10px 45px 10px 15px; width: 100%; border-radius: 30px; height: 50px; background: rgba(127, 0, 255, 0.05); border: 1px solid #7F00FF; color: white; box-shadow: 0 0 10px rgba(225, 0, 255, 0.1); transition: all 0.3s ease;"
                               id="search-input">
                        <button type="submit" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; padding: 5px; width: auto; height: auto;">
                            <i class="ri-search-line" style="color: #E100FF; font-size: 22px; transition: all 0.3s ease;"></i>
                        </button>
                    </div>
                </form>
                <div id="blog-list">
                    @include('partials.blog_list', ['blog' => $blog])
                </div>
            </div>
            <div id="pagination">
                @include('partials.blog_pagination', ['blog' => $blog])
            </div>
        </div>
        <!-- End Blog Area -->

       @include('partials/footer')

        <!-- Top to Bottom -->
        <div id="progress">
            <span id="progress-value"><i class="ri-arrow-up-line"></i></span>
        </div>
        <!-- Js Linked -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/ainext.js"></script>
    </body>


{{--    <style>--}}

{{--@media (max-width: 768px) {--}}
{{--    #search-form {--}}
{{--        display: flex;--}}
{{--        flex-wrap: nowrap;--}}
{{--        justify-content: center; /* Center align */--}}
{{--    }--}}

{{--    #search-input {--}}
{{--        width: 70% !important; /* Adjust width */--}}
{{--    }--}}

{{--    #search-form button {--}}
{{--        width: 30% !important; /* Ensure button is beside input */--}}
{{--        margin-left: 5px; /* Small gap between input and button */--}}
{{--    }--}}
{{--}--}}

{{--        </style>--}}

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<script>
   function fetchBlogs(page) {
    $.ajax({
        url: "?page=" + page, // Ensure it appends correctly
        type: "GET",
        dataType: "json",
        beforeSend: function () {
            $('#blog-list, #pagination').css('opacity', '0.5');
        },
        success: function (response) {
            $('#blog-list').html(response.blogList);
            $('#pagination').html(response.paginatee);
        },
        complete: function () {
            $('#blog-list, #pagination').css('opacity', '1');
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error:", xhr.responseText); // Log full error message
            alert("Error! Check console for details.");
        }
    });
}

// Listen for pagination clicks
$(document).on('click', '#pagination a', function (e) {
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1]; // Extract page number
    fetchBlogs(page);
});

</script>


{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<script>
$(document).ready(function () {
    $('#search-form').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let searchQuery = $('#search-input').val();

        $.ajax({
            url: "{{ route('blog.form') }}", // Use the same route
            method: "GET",
            data: { search: searchQuery },
            beforeSend: function () {
                // Optionally, show a loading spinner
            },
            success: function (response) {
                $('#pagination').html(response.paginatee); // Update pagination
                $('#blog-list').html(response.blogList); // Update blog list
            },
            error: function (xhr) {
                console.log("AJAX Error:", xhr.responseText);
            }
        });
    });
});
</script>

</html>

