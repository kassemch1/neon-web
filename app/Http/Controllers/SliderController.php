<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        return view('admin_views/manage_slider/edit_slider',[
            'sliders'=>$sliders
        ]);
    }
    public function create()
    {
//        $banner=DB::table('banners')->first();
        $sliders=Slider::all();
        return view('admin_views/manage_slider/add_slider',[
            'sliders'=>$sliders,
//            'banner'=>$banner,
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        // Validate the incoming request data
        // Validate the incoming request data
        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secondImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:255',
            'name' => 'required|string|max:30',
        ]);



        $slider=new Slider();



        if($request->hasFile('images')){
            if ($slider->images) {
                // Use Storage facade to delete the old image
                Storage::delete(str_replace('storage/', 'public/', $slider->images));
            }
            $sliderImage = $request->file('images')->store('public/slider_image');
            $slider->images = str_replace('public/', 'storage/', $sliderImage);
        }
        if($request->hasFile('secondImage')){
            if ($slider->secondImage) {
                // Use Storage facade to delete the old image
                Storage::delete(str_replace('storage/', 'public/', $slider->secondImage));
            }
            $sliderImage2 = $request->file('secondImage')->store('public/slider_image2');
            $slider->secondImage = str_replace('public/', 'storage/', $sliderImage2);
        }
        $slider->name = $request->name;
        $slider->description = $request->description;


        $slider->save();
    }

    public function edit($id)
    {
        // Retrieve the slider by ID
        $slider = Slider::findOrFail($id);

        // Return the edit view with the slider data
        return view('admin_views/manage_slider/edit_slider_form', [
            'slider' => $slider
        ]);
    }

    public function update(Request $request)
    {
//        dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secondImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:255',
            'name' => 'required|string|max:30',
        ]);

        // Retrieve the slider by ID
        $slider = Slider::findOrFail($request->input('slider_id'));

        // Handle the image updates
        if ($request->hasFile('images')) {
            // Delete the old image if it exists
            if ($slider->images) {
                Storage::delete(str_replace('storage/', 'public/', $slider->images));
            }
            $sliderImage = $request->file('images')->store('public/slider_image');
            $slider->images = str_replace('public/', 'storage/', $sliderImage);
        }

        if ($request->hasFile('secondImage')) {
            // Delete the old image if it exists
            if ($slider->secondImage) {
                Storage::delete(str_replace('storage/', 'public/', $slider->secondImage));
            }
            $sliderImage2 = $request->file('secondImage')->store('public/slider_image2');
            $slider->secondImage = str_replace('public/', 'storage/', $sliderImage2);
        }

        // Update the name and description fields
        $slider->name = $request->name;
        $slider->description = $request->description;

        // Save the updated slider
        $slider->save();

        // Redirect or return a response
        return response()->json(['success' => 'slider updated successfully']);
    }

    public function destroy(Request $request)
    {
        $product=Slider::findOrFail($request->id);
        $product->delete();
        return response()->json(['success' => 'product deleted successfully']);
    }
}
