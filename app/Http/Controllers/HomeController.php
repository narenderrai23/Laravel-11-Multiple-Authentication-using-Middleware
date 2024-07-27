<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $sliders = Slider::orderBy("created_at", "desc")->get();
        return view('frontend.index', [
            'sliders' => $sliders
        ]);
    }
}
