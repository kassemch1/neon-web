<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top-area pt-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{route('home')}}" class="logo">
                            <h2>ArmaCadabra</h2>
                        </a>
                        <p>Help businesses succeed by providing them with innovative and effective solutions.</p>
                        <ul class="social-links">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href="https://www.youtube.com/" target="_blank"><i class="ri-youtube-line"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Links</h3>
                        <ul class="links-list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('blog.form')}}">Gallery</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Subscription</h3>
                        <div class="footer-newsletter-info">
                            <p>Subscribe now to stay updated with our latest content, news, and exclusive offers!</p>


                            <div id="subscribe-response" style="display: none;" class="alert py-2 mb-3"></div>

                            <form id="subscribe-form" class="newsletter-form" data-toggle="validator">
                                @csrf
                                <label><i class="bx bx-envelope-open"></i></label>
                                <input type="text" class="input-newsletter" placeholder="Enter your email address" name="email" required="" autocomplete="off">
                                <button type="submit" class="default-btn"><i class="ri-send-plane-line"></i> Subscribe Now</button>
                                <div id="validator-newsletter2" class="form-result"></div>
                                <div class="mt-3 d-flex flex-column align-items-center justify-content-center w-100">
                                <x-turnstile data-theme="dark" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pr-line"></div>
        <div class="footer-bottom-area">
            <span class="item-content">
                        © 2025 ArmaCadabra, All rights reserved.<br> Powered by <a href="https://www.tawwer.tech/" target="_blank">Tawwer</a>.
                    </span>
{{--            <p>© Copyright | <a href="https://tawwer.tech/" target="_blank">Tawwer</a>  | All Rights Reserved is Proudly </p>--}}
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<!-- End Footer Area -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const subscribeForm = document.getElementById('subscribe-form');
        const responseDiv = document.getElementById('subscribe-response');

        if (subscribeForm) {
            subscribeForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous response message and error states
                responseDiv.style.display = 'none';
                responseDiv.textContent = '';

                // Clear form validation error states
                const emailField = subscribeForm.querySelector('[name="email"]');
                emailField.classList.remove('is-invalid'); // Remove error state from the email field

                // Retrieve the Turnstile response and reset it
                const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]').value;

                // Reset Turnstile challenge to ensure a new response token
                turnstile.reset();

                const formData = new FormData(subscribeForm);
                formData.append('cf-turnstile-response', turnstileResponse);

                // Start the AJAX request
                $.ajax({
                    url: "{{ route('subscribe') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Display success message
                        responseDiv.textContent = response.message || 'Thank you for subscribing!';
                        responseDiv.style.display = 'block';
                        responseDiv.className = 'alert alert-success py-2 mb-3';

                        // Reset the form
                        subscribeForm.reset();
                        turnstile.reset(); // Reset Turnstile challenge again just in case

                        // Hide the message after 5 seconds
                        setTimeout(function() {
                            responseDiv.style.display = 'none';
                        }, 5000);
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong. Please try again.';

                        // Log the entire response for debugging
                        console.log('AJAX Error Response:', xhr.responseJSON);

                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON?.errors || {};

                            // Check if email has validation errors
                            if (errors.email) {
                                errorMessage = errors.email[0]; // Get the first error message

                                // Add error class to the email input field to indicate validation failure
                                emailField.classList.add('is-invalid');
                            }

                            // Check if Turnstile validation failed
                            if (errors['cf-turnstile-response']) {
                                errorMessage = errors['cf-turnstile-response'][0]; // Display Turnstile error message
                            }
                        }

                        // Display error message
                        responseDiv.textContent = errorMessage;
                        responseDiv.style.display = 'block';
                        responseDiv.className = 'alert alert-danger py-2 mb-3';

                        // Hide the error message after 5 seconds
                        setTimeout(function() {
                            responseDiv.style.display = 'none';
                        }, 5000);
                    }
                });
            });
        }
    });




</script>
