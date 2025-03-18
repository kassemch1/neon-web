<!-- Start Insta Gallery -->
<div class="insta-gallery">
    <div class="conatiner-fluid">
        <div class="ins-gallery owl-carousel owl-theme">
            @foreach ( $sliders as $slider)
            <div class="items">
                <a href="https://www.instagram.com/lostineon?igsh=ZDI2Mmx3cjAxMGlr" target="_blank" >
                    <img src="{{asset($slider->images)}}" alt="image" style="height: 170px">
                    <i class="ri-instagram-line"></i>
                </a>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
<!-- End Insta Gallery -->