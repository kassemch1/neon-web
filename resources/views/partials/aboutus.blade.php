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
                    <p>{{$aboutus->description}}</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="sub-counter">
                                <h3>
                                    <span class="odometer" data-count="{{$aboutus->clients}}">00</span>
                                </h3>
                                <p>Clients</p>
                            </div>
                        </div>
{{--                        <div class="col-lg-4 col-md-4 col-4">--}}
{{--                            <div class="sub-counter">--}}
{{--                                <h3>--}}
{{--                                    <span class="odometer" data-count="10">00</span>--}}
{{--                                    <span class="target">K</span>--}}
{{--                                </h3>--}}
{{--                                <p>Projects</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                            <p>{{$aboutus->description}}</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="sub-counter">
                                        <h3>
                                            <span class="odometer" data-count="{{$aboutus->clients}}">00</span>
                                        </h3>
                                        <p>Clients</p>
                                    </div>
                                </div>
                                {{--                        <div class="col-lg-4 col-md-4 col-4">--}}
                                {{--                            <div class="sub-counter">--}}
                                {{--                                <h3>--}}
                                {{--                                    <span class="odometer" data-count="10">00</span>--}}
                                {{--                                    <span class="target">K</span>--}}
                                {{--                                </h3>--}}
                                {{--                                <p>Projects</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
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
