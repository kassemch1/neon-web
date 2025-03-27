<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\BannerSlider;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\AboutUs;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $aboutus=AboutUs::first();
        $sliders=Slider::all();
        $banner = BannerSlider::first();
        $faqs = Faq::all();
        return view('home',[
            'sliders'=>$sliders,
            'banner'=>$banner,
            'faqs'=>$faqs,
            'aboutus'=>$aboutus,
            'agent'=>$agent,

        ]);
    }
}
