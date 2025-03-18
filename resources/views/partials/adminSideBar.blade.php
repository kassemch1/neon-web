<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>

                <li class="has-sub-menu"><a href="#"><i class="fa fa-address-book-o"></i> <span>Contacts</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('contacts.index')}}"><span>View Contacts</span></a></li>
{{--                        <li><a href="{{route('manageCategories.index')}}"><span>Edit Category</span></a></li>--}}
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="fa fa-user-circle-o"></i> <span>Subscribers</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('subscribers.index')}}"><span>View Subscribers</span></a></li>

                    </ul>
                </li>

                <li class="has-sub-menu"><a href="#"><i class="fa fa-file-image-o"></i> <span>Manage Slider</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('manageSlider.create')}}"><span>Add Slider</span></a></li>
                        <li><a href="{{route('manageSlider.index')}}"><span>Edit Slider</span></a></li>
                    </ul>
                </li>



               <li class="has-sub-menu"><a href="#"><i class="fa fa-file-image-o"></i> <span>Manage BannerSlider</span></a>
                   <ul class="side-header-sub-menu">
                      <li><a href="{{route('banner-slider.store')}}"><span>Add BannerSlide</span></a></li>

               </ul>
           </li>

            <li class="has-sub-menu"><a href="#"><i class="fa fa-hand-o-right"></i> <span>About Us</span></a>
                <ul class="side-header-sub-menu">
                    <li><a href="{{route('aboutus.index')}}"><span>Edit About Us</span></a></li>
                    {{--                        <li><a href="{{route('manageCategories.index')}}"><span>Edit Category</span></a></li>--}}
                </ul>
            </li>
<li class="has-sub-menu"><a href="#"><i class="fa fa-question-circle"></i> <span>Manage FAQs</span></a>
    <ul class="side-header-sub-menu">
        <li><a href="{{route("manageFaq.create")}}"><span>Add FAQ</span></a></li>
        <li><a href="{{route("manageFaq.index")}}"><span>Edit FAQ</span></a></li>
    </ul>
</li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
