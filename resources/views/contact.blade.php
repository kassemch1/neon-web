<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArmaCadabra - Contact</title>

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

</head>
<body>



@include('partials/navbar')

<!-- Start Banner Area -->
<div class="section-banner">
    <div class="container">
        <div class="section-banner-title">
            <h1>Contact Us</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <div class="width">
                        <div class="sub-t">Contact</div>
                        <h2>Request Materials Information</h2>
                        <p>Need high-quality raw materials for your business? Contact us for pricing, availability, and custom orders.</p>
                    </div>
                </div>
                <div class="contact-form">
                    <div id="contact-response" style="display: none;" class="alert py-2 mb-3"></div>

                    <form id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="email" required data-error="Please enter your Email Address" placeholder="Email Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class="ri-mail-send-line"></i> Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image">
                    <img src="assets/img/AboutImage.jpg" alt="image" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->


@include('partials/footer')

<!-- Top to Bottom -->
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const responseDiv = document.getElementById('contact-response');

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(contactForm);
                // Add CSRF token if not already in the form
                if (!formData.has('_token')) {
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                }

                $.ajax({
                    url: "{{ route('contact.submit') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        responseDiv.textContent = response.message || 'Thank you for contacting us! We will get back to you soon.';
                        responseDiv.style.display = 'block';
                        responseDiv.className = 'alert alert-success py-2 mb-3';

                        contactForm.reset();

                        setTimeout(function() {
                            responseDiv.style.display = 'none';
                        }, 5000);
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong. Please try again.';

                        // Check if there are specific validation errors
                        if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                            // Join multiple error messages if there are any
                            errorMessage = xhr.responseJSON.errors.join('<br>');
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }

                        responseDiv.innerHTML = errorMessage;
                        responseDiv.style.display = 'block';
                        responseDiv.className = 'alert alert-danger py-2 mb-3';

                        setTimeout(function() {
                            responseDiv.style.display = 'none';
                        }, 5000);
                    }
                });
            });
        }
    });
</script>



</body>

</html>
