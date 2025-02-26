<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\BannerSlider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        $banner = BannerSlider::first();
        return view('home',[
            'sliders'=>$sliders,
            'banner'=>$banner

        ]);
    }
}
