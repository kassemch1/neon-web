<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\BannerSlider;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Faq;

class AboutUsController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        $aboutus=AboutUs::first();
        return view('admin_views/aboutus/edit_aboutus',[
            'aboutus'=>$aboutus,
            
        ]);
    }

    public function index_user()
    {
        $sliders=Slider::all();
        $faqs=Faq::all();
        $banner = BannerSlider::first();
        $aboutus=AboutUs::first();

        return view('aboutus',[
            'banner'=>$banner,
            'aboutus'=>$aboutus,
            'sliders'=>$sliders,
            'faqs'=>$faqs,
        ]);
    }
    public function update(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate( [
            'years' => 'required|numeric|min:1',
            'clients' => 'required|numeric|min:1',
            'description'=>'required|string'
        ]);
        $aboutus=AboutUs::first();

        if (!$aboutus) {
            $aboutus = new AboutUs();
        }

        $aboutus->clients=$validatedData['clients'];
        $aboutus->years=$validatedData['years'];
        $aboutus->description=$validatedData['description'];
        $aboutus->save();

        return response()->json(['message' => 'Data updated successfully'], 200);
    }

}
