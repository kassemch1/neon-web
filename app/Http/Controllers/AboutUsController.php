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
    public function update(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate( [
            'years' => 'required|numeric|min:1',
            'clients' => 'required|numeric|min:1',
            'description'=>'required|string'
        ]);
        $aboutus=AboutUs::firstOrFail();

        $aboutus->clients=$validatedData['clients'];
        $aboutus->years=$validatedData['years'];
        $aboutus->description=$validatedData['description'];
        $aboutus->save();

        return response()->json(['message' => 'Data updated successfully'], 200);
    }

}
