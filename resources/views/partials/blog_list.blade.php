<div class="row">
                    
    @if($sliders->isEmpty())
    <p>No results found.</p>
    @else
    
    @foreach($sliders as $slider)
    <div class="col-lg-4">
        <div class="item" data-aos="fade-up" data-aos-duration="1500" style="height:500px ; width:400px">
            <img src="{{asset($slider->images)}}" alt="image" style="height:500px ; width:400px">
            <div class="pop-content">
                <h3><a href="blog-details.html">{{$slider->name}}</a></h3>
                
            </div>
            <a href="blog-details.html">
                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
    @endif
</div>