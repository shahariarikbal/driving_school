<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::orderBy('id', 'desc')->get();
        return view('backend.subscription.index', compact('subscriptions'));
    }

    public function create()
    {
        $page = 'create';
        return view('backend.subscription.create', compact('page'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'features' => 'required',
        ]);

        $subscription = new Subscription();
        $subscription->title = trim($request->title);
        $subscription->duration = $request->duration;
        $subscription->price = $request->price;
        $subscription->features = $request->features;
        $subscription->save();
        return redirect('/admin/subscription/index')->with('success', 'Subscription has been added');
    }

    public function edit(Subscription $subscription)
    {
        $page = 'create';
        return view('backend.subscription.create', compact('page', 'subscription'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $this->validate($request,[
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'features' => 'required',
        ]);
        $subscription->title = trim($request->title);
        $subscription->duration = $request->duration;
        $subscription->price = $request->price;
        $subscription->features = $request->features;
        $subscription->save();
        return redirect('/admin/subscription/index')->with('success', 'Subscription has been updated');
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect('/admin/subscription/index')->with('success', 'Subscription has been deleted');
    }
}
