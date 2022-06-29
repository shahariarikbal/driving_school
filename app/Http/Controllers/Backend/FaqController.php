<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('id', 'asc')->get();
        return view('backend.faq.index', compact('faqs'));
    }

    public function create()
    {
        $page = 'create';
        return view('backend.faq.create', compact('page'));
    }

    public function store(Request $request)
    {

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->is_active = $request->is_active;

        $faq->save();

        return redirect('/admin/faq/index')->with('success', 'Faq has been added');
    }

    public function edit(Faq $faq)
    {
        $page = 'edit';
        return view('backend.faq.create', compact('page', 'faq'));
    }

    public function update(Request $request, Faq $faq)
    {

        if ($faq == null) {
        	return redirect()->back()->with('error', 'Faq not found');
        }
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->is_active = $request->is_active;

        $faq->save();

        
        return redirect('/admin/faq/index')->with('success', 'Faq has been updated');
    }

    public function destroy(Faq $faq)
    {
    	// return $faq;
    	//if faq is not found   	
        if ($faq == null) {
        	return redirect()->back()->with('error', 'Faq not found');
        }

    	// faq delete
        $faq->delete();

        return redirect('/admin/faq/index')->with('success', 'Faq has been deleted');
    }
}
