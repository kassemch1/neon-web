<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\BannerSlider;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutus=AboutUs::firstOrFail();
        return view('admin_views/aboutus/edit_aboutus',[
            'aboutus'=>$aboutus
        ]);
    }

    public function index_user()
    {
        $banner = BannerSlider::first();
        $aboutus=AboutUs::firstOrFail();

        return view('aboutus',[
            'banner'=>$banner,
            'aboutus'=>$aboutus
        ]);
    }
}
