<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:43:03 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AiNext - AI Agency & Startup HTML Template</title>

        <!-- CSS Linked -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/remixicon.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        


        
        
        <!-- favicon Linked -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">

    </head>
    <body>

        @include('partials.navbar')

        <!-- Start Banner Area -->
        <div class="section-banner">
            <div class="container">
                <div class="section-banner-title">
                    <h1>Blog Grid</h1>
                    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Blog Area -->
        <div class="blog-area article-area pt-100 pb-70">
            <div class="container">
                <form action="{{ route('blog.form') }}" method="GET" style="margin-bottom: 20px;" id="search-form">
                    <input type="text" name="search" placeholder="Search images..." value="{{ request('search') }}" style="padding: 10px; width: 300px; border-radius:5px" id="search-input">
                    <button type="submit" style="padding: 10px; background-color: #E100FF; color: white; border: none;border-radius:5px; width:100px" >Search</button>
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

        @include('partials/gallery')

       @include('partials/footer')

        <!-- Top to Bottom -->
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/ainext.js"></script>
    </body>


    <style>

@media (max-width: 768px) { 
    #search-form {
        display: flex;
        flex-wrap: nowrap;
        justify-content: center; /* Center align */
    }

    #search-input {
        width: 70% !important; /* Adjust width */
    }

    #search-form button {
        width: 30% !important; /* Ensure button is beside input */
        margin-left: 5px; /* Small gap between input and button */
    }
}

        </style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


<!-- Mirrored from demo.alhikmahsoft.com/template/ainext/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 17:43:07 GMT -->
</html>

