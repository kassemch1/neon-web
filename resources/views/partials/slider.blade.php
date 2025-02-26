<!-- Start Responsive Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo d-inline-block">
            <h2>AiNext</h2>
        </a>
        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="responsive-menu">
            <li class="responsive-menu-list without-icon">
                <a href="index.html" class="active">Home</a>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);" >Pages</a>
                <ul class="responsive-menu-items">
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="terms-conditions.html">Terms Conditions</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="4o4.html">404 Error Page</a></li>
                    <li><a href="contact.html">Coming Soon</a></li>
                </ul>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="portfolio.html">Portfolio</a>
            </li>

            <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a>
                <ul class="responsive-menu-items">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-sidebar.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li class="responsive-menu-list without-icon">
                <a href="contact.html">Contact</a>
            </li>
        </ul>
        <div class="others-option d-md-flex align-items-center">
            <div class="option-item">
                <a href="contact.html" class="default-btn">
                    <i class="ri-arrow-right-line"></i>
                    <span>Get Started</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Responsive Navbar Area -->

<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center g-0">
            <div class="col-lg-4 ">
                <div class="content" style="margin-top: 15% w-4">
                    <!--<span class="banner-top-title">Fully Dynamic</span>-->
                    <h1><span class="grd-color-1" >Lostineon</span> Transforming spaces with dazzling neon signs</h1>
                    <p>Create production-quality visual assets for your projects with unprecedented quality, speed, and style-consistency.</p>
                 <!--   <div class="searchwrapper">
                        <div class="searchbox">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search by Keywords...">
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control category" id="provider" name="provider">
                                        <option>deepai</option>
                                        <option>stabilityai</option>
                                        <option>replicate</option>
                                        <option>openai</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <form>
                                        <button class="btn" type="submit">Generate</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   <!-- <div class="popular-tag">
                        <p>Popular Tag:</p>
                        <a href="blog.html">Business</a>
                        <a href="blog.html">Animation</a>
                        <a href="blog.html">Creative</a>
                        <a href="blog.html">Realistic</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8" >
                <div class="image" >
                    <div class="col-lg-8">
                        <div class="banner-content owl-carousel owl-theme " style=" width:900px " >
                            <div class="item" style="height: 420px ; width : 290px"> 
                                <img src="{{ asset('storage/'  . $banner->image1) }}" alt="image" style="height: 420px ; border-radius: 16px;"> 
                                
                            </div>
                            <div class="item" style="height: 420px ; width : 290px"> 
                                <img src="https://media.istockphoto.com/id/1341300661/photo/brown-magic-mushroom-glowing-in-the-mystery-dark-forest-fantasy-concept.jpg?s=2048x2048&w=is&k=20&c=rDLrvp1T4qNa9CND1nb8D3x96TJ4mFrmNvfyiiJqpdo=" alt="image" style="height: 420px ; border-radius: 16px;">
                            
                        
                            </div>
                            <div class="item" style="height: 420px ; width : 290px">
                                <img src="https://media.istockphoto.com/id/1469889857/photo/beautiful-woman-with-dark-suit-and-wavy-hair-studio-portrait-in-rgb-color-split-effect-style.jpg?s=1024x1024&w=is&k=20&c=6aa7q6J71KK_Rk9RG-vjWv_1iBACUv_mOadp8B_DQ5A=" alt="image" style="height: 420px ; border-radius: 16px;" >
                                
                            </div>
                            <div class="item" style="height: 420px ; width : 290px">
                                <img src="https://media.istockphoto.com/id/1424106232/photo/beautiful-mushroom-on-blue-moss-background-close-up-lepiota-cristata-poisonous-mushroom.jpg?s=1024x1024&w=is&k=20&c=KhuvEc8M-FMZJC96kR1sosUfzeqZnoOCIX0E8xM-vec=" alt="image" style="height: 420px ; border-radius: 16px;">
                                
                            </div>
                        </div>
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
    .item {
  padding: 3px; /* Space between border and image */
  border-radius: 20px;
  background: linear-gradient(135deg, #a18cd1, #6d83f2, #8ec5fc, #b9fbc0);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Soft shadow */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.item:hover {
  transform: scale(1.01); /* Slight zoom on hover */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.9); /* Enhanced shadow on hover */
}

.item img {
  border-radius: 16px; /* Rounded corners for image */
}

    </style>