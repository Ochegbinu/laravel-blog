<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {
        return view('about_us');
    }

    public function contactUs()
    {
        return view('contact_us');
    }
    public function blogEntries()
    {
        return view('blog_entries');
    }
}
