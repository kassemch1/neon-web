<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\BannerSlider;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\AboutUs;
class HomeController extends Controller
{
    public function index()
    {
        $aboutus=AboutUs::first();
        $sliders=Slider::all();
        $banner = BannerSlider::first();
        $faqs = Faq::all();
        return view('home',[
            'sliders'=>$sliders,
            'banner'=>$banner,
            'faqs'=>$faqs,
            'aboutus'=>$aboutus,

        ]);
    }
}
