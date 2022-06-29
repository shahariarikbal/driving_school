<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function lessons()
    {
        return view('frontend.lessons.index');
    }

    public function topics()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();
        return view('frontend.topics.index', compact('topics'));
    }

    public function price()
    {
        $prices = Subscription::orderBy('duration', 'asc')->get();
        return view('frontend.price.index', compact('prices'));
    }

    public function enrolled($id)
    {
        $enrolled = User::where('id', auth()->user()->id)->first();
        if ($enrolled == null){
            return redirect()->back()->with('error', 'Subscription not found');
        }
        $enrolled->subscription_id = $id;
        $enrolled->save();
        return redirect('/')->with('success', 'Your subscription request has been submitted. Please wait for admin approval.');
    }
}
