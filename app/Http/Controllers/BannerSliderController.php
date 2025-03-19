<?php

namespace App\Http\Controllers;

use App\Models\BannerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerSliderController extends Controller
{
    /**
     * Display the banner slider management page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slider = BannerSlider::first();
        return view('admin_views/manage_bannerSlider/add_bannerSlider', compact('slider'));
    }

    /**
     * Store a new banner slider.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (BannerSlider::exists()) {
            if ($request->ajax()) {
                return response()->json(['message' => 'Only one banner slider is allowed.'], 422);
            }
            return back()->with('error', 'Only one banner slider is allowed.');
        }

        $validated = $request->validate([
            'image1' => 'required|image|max:2048',
            'image2' => 'required|image|max:2048',
            'image3' => 'required|image|max:2048',
            'image4' => 'required|image|max:2048',
        ]);

        $paths = [];
        foreach ($validated as $key => $image) {
            $paths[$key] = $image->store('banners', 'public');
        }

        BannerSlider::create($paths);

        if ($request->ajax()) {
            return response()->json(['message' => 'Banner slider created successfully.']);
        }
        return back()->with('success', 'Banner slider created successfully.');
    }

    /**
     * Update a specific banner image.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = BannerSlider::findOrFail($id);

        $validated = $request->validate([
            'image' => 'required|image|max:2048',
            'image_number' => 'required|in:image1,image2,image3,image4',
        ]);

        // Delete old image if it exists
        if ($slider->{$validated['image_number']} &&
            Storage::disk('public')->exists($slider->{$validated['image_number']})) {
            Storage::disk('public')->delete($slider->{$validated['image_number']});
        }

        // Update with new image
        $path = $request->file('image')->store('banners', 'public');
        $slider->update([
            $validated['image_number'] => $path,
        ]);

        if ($request->ajax()) {
            return response()->json(['message' => 'Image updated successfully.']);
        }
        return back()->with('success', 'Image updated successfully.');
    }
}
