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

    public function quiz()
    {
        $categories = Topic::orderBy('created_at', 'desc')->get();
        return view('frontend.quiz.index', compact('categories'));
    }
}
