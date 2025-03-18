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

                const formData = new FormData(subscribeForm);
                // Add CSRF token if not already in the form
                if (!formData.has('_token')) {
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                }

                $.ajax({
                    url: "{{ route('subscribe') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        responseDiv.textContent = response.message || 'Thank you for subscribing!';
                        responseDiv.style.display = 'block';
                        responseDiv.className = 'alert alert-success py-2 mb-3';

                        subscribeForm.reset();

                        setTimeout(function() {
                            responseDiv.style.display = 'none';
                        }, 5000);
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong. Please try again.';

                        if (xhr.status === 422) {
                            errorMessage = 'This email is already subscribed.';
                        }

                        responseDiv.textContent = errorMessage;
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
