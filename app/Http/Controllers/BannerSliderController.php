<?php

// app/Http/Controllers/BannerSliderController.php

namespace App\Http\Controllers;

use App\Models\BannerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerSliderController extends Controller
{
    public function index()
    {
        $slider = BannerSlider::first();
        return view('admin_views/manage_bannerSlider/add_bannerSlider');
    }

    public function store(Request $request)
    {
        if (BannerSlider::exists()) {
            return back()->with('error', 'Only one banner slider is allowed.');
        }

        $validated = $request->validate([
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'image4' => 'required|image',
        ]);

        $paths = [];
        foreach ($validated as $key => $image) {
            $paths[$key] = $image->store('banners', 'public');
        }

        BannerSlider::create($paths);
        return back()->with('success', 'Banner slider created successfully.');
    }

    public function update(Request $request, $id)
    {
        $slider = BannerSlider::findOrFail($id);

        $validated = $request->validate([
            'image' => 'required|image',
            'image_number' => 'required|in:image1,image2,image3,image4',
        ]);

        // Delete old image
        Storage::disk('public')->delete($slider->{$validated['image_number']});

        // Update with new image
        $slider->update([
            $validated['image_number'] => $validated['image']->store('banners', 'public'),
        ]);

        return back()->with('success', 'Image updated successfully.');
    }
}