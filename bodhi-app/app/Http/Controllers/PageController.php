<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Keep the home page lightweight but with enough featured speakers for the carousel.
        // The "Complete Directory" link leads to the full speaker list.
        $speakers = \App\Models\Speaker::take(12)->get();
        $schedules = \App\Models\Schedule::take(3)->get();
        $sponsors = \App\Models\Sponsor::all();
        return view('home', compact('speakers', 'schedules', 'sponsors'));
    }

    public function about()
    {
        return view('about');
    }

    public function speakers()
    {
        $speakers = \App\Models\Speaker::all();
        return view('speakers', compact('speakers'));
    }

    public function schedule()
    {
        $schedules = \App\Models\Schedule::all();
        return view('schedule', compact('schedules'));
    }
}
