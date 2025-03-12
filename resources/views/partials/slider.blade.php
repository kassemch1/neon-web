

<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center g-0">
            <div class="col-lg-4 ">
                <div class="content" style="margin-top: 15% w-4">
                    <!--<span class="banner-top-title">Fully Dynamic</span>-->
                    <h1><span class="grd-color-1" >Lostineon</span> Transforming spaces with dazzling neon signs</h1>
                    <p>Create production-quality visual assets for your projects with unprecedented quality, speed, and style-consistency.</p>
                </div>
            </div>
            <div class="col-lg-8" >
                <div class="image" >
                    <div class="col-lg-8">
                        @if($banner)
                        <div class="banner-content owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset('storage/'  . $banner->image1) }}" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('storage/'  . $banner->image2) }}" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('storage/'  . $banner->image3) }}" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('storage/'  . $banner->image4) }}" alt="image">
                            </div>
                        </div>
                        
                        @else
                        <div><h1>Please Add images to the slider</h1></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#features">
                <div class="mouse"></div>
            </a>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<style>

   
.banner-content {
    width: 900px; 
}

    .item {
  padding: 3px; /* Space between border and image */
  border-radius: 20px;
  background: linear-gradient(135deg, #a18cd1, #6d83f2, #8ec5fc, #b9fbc0);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Soft shadow */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 360px; 
    width: 290px;
}

.item:hover {
  transform: scale(1.01); /* Slight zoom on hover */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.9); /* Enhanced shadow on hover */
}

.item img {
  height: 360px; 
    border-radius: 16px; 
    object-fit: cover; 
}

@media (max-width: 768px) {

    html, body {
        overflow-x: hidden;
        width: 100%;
    }
        .content {
            margin-top: 0; /* Remove margin-top on mobile */
        }

        .banner-area {
            height: auto; /* Adjust height for mobile */
        }

        .content h1 {
            font-size: 1.8rem; /* Adjust font size for smaller screens */
        }

        .content p {
            font-size: 0.9rem; /* Adjust paragraph font size */
        }

        

        .scroll-down{
            display: none;
        }

        
        

        .banner-content {
        width: 100%; /* Ensure the banner takes 100% of the screen width */
        margin: 0 auto; /* Center the content horizontally */
    }

    .item {
        width: 100%; /* Set the width of each item to 100% on mobile */
        height: 300px; /* Optional: Adjust height of items for better scaling on mobile */
        display: flex; /* Use flexbox for centering */
        justify-content: center; /* Center content horizontally */
        align-items: center; /* Center content vertically */
    }

    .item img {
        width: 100%; /* Ensure the image fills the entire width of the item */
        height: 100%; /* Adjust the height to cover the entire area */
    }

    .image{
      margin-right: 22px
    }

    }

    </style>

    
