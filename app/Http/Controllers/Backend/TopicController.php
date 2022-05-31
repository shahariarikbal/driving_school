<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();
        return view('backend.topic.index', compact('topics'));
    }

    public function create()
    {
        $page = 'create';
        return view('backend.topic.create', compact('page'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')){
            $imageName = $request->name . time(). '.'. $request->image->extension();
            $request->image->move('assets/topic/', $imageName);
        }

        $topic = new Topic();
        $topic->name = $request->name;
        $topic->slug = str_replace(' ', '-', strtolower($request->name));
        $topic->image = $imageName;
        $topic->save();
        return redirect('/admin/topic/index')->with('success', 'Topic has been added');
    }

    public function edit(Topic $topic)
    {
        $page = 'edit';
        return view('backend.topic.create', compact('page', 'topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        if (isset($request->image)){
            if ($topic->image && file_exists('topic/'.$topic->image)){
                unlink('topic/'.$topic->image);
            }
            $imageName = $request->name . time(). '.'. $request->image->extension();
            $request->image->move('assets/topic/', $imageName);
            $topic->image = $imageName;
        }
        $topic->name = $request->name;
        $topic->slug = str_replace(' ', '-', strtolower($request->name));
        $topic->save();
        return redirect('/admin/topic/index')->with('success', 'Topic has been updated');
    }

    public function destroy(Topic $topic)
    {
        $topic = Topic::where('id', $topic->id)->first();
        if ($topic->image && file_exists('topic/'.$topic->image)){
            unlink('assets/topic/'.$topic->image);
        }
        $topic->delete();
        return redirect('/admin/topic/index')->with('success', 'Topic has been delete');
    }
}
