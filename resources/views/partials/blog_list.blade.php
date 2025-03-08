<div class="row">
    @if($sliders->isEmpty())
        <p>No results found.</p>
    @else
        @foreach($sliders as $slider)
            <div class="col-lg-4 col-md-6 col-6"> {{-- 2 columns on mobile --}}
                <div class="item" data-aos="fade-up" data-aos-duration="1500" style="height:400px; width:100%; object-fit: cover">
                    <a href="{{ route('slider.show', $slider->id) }}">
                        <img src="{{ asset($slider->images) }}" alt="image" style="height:400px; width:100%; object-fit: cover;">
                    </a>
                    <div class="pop-content">
                        <h3><a href="{{ route('slider.show', $slider->id) }}">{{ $slider->name }}</a></h3>
                    </div>
                    <a href="{{ route('slider.show', $slider->id) }}">
                        <div class="go-corner">
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
