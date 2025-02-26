<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top-area pt-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="index.html" class="logo">
                            <h2>AiNext</h2>
                        </a>
                        <p>Lorem ipsum amet, consectetur adipiscing elit. Suspendis varius enim eros elementum tristique. Duis cursus.</p>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Legal</h3>
                        <ul class="links-list">
                            <li><a href="contact.html">Legal</a></li>
                            <li><a href="terms-conditions.html">Tearms of Use</a></li>
                            <li><a href="terms-conditions.html">Tearm & Condition</a></li>
                            <li><a href="contact.html">Payment Method</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>
                        <div class="contact-form-footer">
                            @if (session('success'))
                                <div class="alert alert-success py-2 mb-3">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" required value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="3" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="default-btn"><i class="ri-send-plane-line"></i> Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pr-line"></div>
        <div class="footer-bottom-area">
            <p>© Copyright | <a href="https://alhikmahsoft.com/" target="_blank">AlHikmahSoft</a>  | All Rights Reserved is Proudly </p>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<!-- End Footer Area -->