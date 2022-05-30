<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class FrontendController extends Controller
{	
    public function lessons()
    {
        return view('frontend.lessons.index');
    }
}