<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SingleImageController extends Controller
{

    public function show($id)
    {
        $slider = Slider::find($id);
        $latestSliders = Slider::latest()->take(5)->get();
        if (!$slider) {
            abort(404, 'Slider not found');
        }

        return view('single', [
            'sliders' => [$slider],// Ensure it's an array for the loop
            'latestSliders'=>$latestSliders
        ]);
    }
}
