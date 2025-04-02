<!-- Start About Area -->
@if(!($agent->isMobile()))
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="assets/img/AboutImage.jpg" alt="image" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="sub-t">About Us</div>
                        <h2>We supply quality raw materials worldwide.</h2>
                        @if($aboutus)
                            <p>
                                At Armacadabra,
                                <span style="background: linear-gradient(45deg, #7F00FF, #E100FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold;">
                            OUR MISSION IS TO SUPPLY TOP-TIER RAW MATERIALS TO SIGNAGE MANUFACTURERS WORLDWIDE.
                        </span>
                                We are committed to delivering precision, consistency, and exceptional service, ensuring our clients can produce signage that meets the highest standards of quality and creativity.
                                We envision a world where every signage manufacturer has access to the highest quality raw materials, enabling them to create stunning visual displays that captivate and inspire.
                                <span style="background: linear-gradient(45deg, #7F00FF, #E100FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold;">
                            WE STRIVE TO BE THE TRUSTED PARTNER FOR BUSINESS SEEKING RELIABLE, INNOVATIVE, AND SUSTAINABLE MATERIALS FOR THEIR SIGNAGE PRODUCTION.
                        </span>
                            </p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="sub-counter">
                                        <h3>
                                            <span class="odometer" data-count="{{$aboutus->years}}">00</span>
                                        </h3>
                                        <p>Years</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>No information available.</p>
                        @endif
                        <a class="main-btn" href="{{route('about')}}"><span></span><i class="ri-quill-pen-line"></i> About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif($agent->isMobile())
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="content">
                        <div class="sub-t">About Us</div>
                        <h2>We supply quality raw materials worldwide.</h2>
                        @if($aboutus)
                            <p>
                                At Armacadabra,
                                <span style="background: linear-gradient(45deg, #7F00FF, #E100FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold;">
                            OUR MISSION IS TO SUPPLY TOP-TIER RAW MATERIALS TO SIGNAGE MANUFACTURERS WORLDWIDE.
                        </span>
                                We are committed to delivering precision, consistency, and exceptional service, ensuring our clients can produce signage that meets the highest standards of quality and creativity.
                                We envision a world where every signage manufacturer has access to the highest quality raw materials, enabling them to create stunning visual displays that captivate and inspire.
                                <span style="background: linear-gradient(45deg, #7F00FF, #E100FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold;">
                            WE STRIVE TO BE THE TRUSTED PARTNER FOR BUSINESS SEEKING RELIABLE, INNOVATIVE, AND SUSTAINABLE MATERIALS FOR THEIR SIGNAGE PRODUCTION.
                        </span>
                            </p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="sub-counter">
                                        <h3>
                                            <span class="odometer" data-count="{{$aboutus->years}}">00</span>
                                        </h3>
                                        <p>Years</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>No information available.</p>
                        @endif
                        <a class="main-btn" href="{{route('about')}}"><span></span><i class="ri-quill-pen-line"></i> About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- About Area -->
