<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('topic_id', 'asc')->get();
        return view('backend.question.index', compact('questions'));
    }

    public function create()
    {
        $page = 'create';
        return view('backend.question.create', compact('page'));
    }

    public function store(Request $request)
    {
    	// return $request->all();
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png,bmp,tiff|max:4096',
        ]);

        $question = new Question();

        $question->topic_id = $request->topic_id;
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->explanation = $request->explanation;
        $question->marks = $request->marks;
        $question->is_active = $request->is_active;

        if ($request->file('image')){
            $imageName = time(). '.'. $request->image->extension();
            $request->image->move('assets/question/', $imageName);
        	$question->image = $imageName;
        }

        $question->save();

        return redirect('/admin/question/index')->with('success', 'Question has been added');
    }

    public function edit(Question $question)
    {
        $page = 'edit';
        return view('backend.question.create', compact('page', 'question'));
    }

    public function update(Request $request, Question $question)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png,bmp,tiff|max:4096',
        ]);

        if ($question == null) {
        	return redirect()->back()->with('error', 'Question not found');
        }
		
		$question->topic_id = $request->topic_id;
		$question->question = $request->question;
		$question->answer = $request->answer;
		$question->explanation = $request->explanation;
		$question->marks = $request->marks;
		$question->is_active = $request->is_active;

        if ($request->file('image')){
	        if ($question->image && $question->image != 'sample.jpg' && file_exists('assets/question/'.$question->image)){
	            unlink('assets/question/'.$question->image);
	        }

            $imageName = time(). '.'. $request->image->extension();
            $request->image->move('assets/question/', $imageName);
        	$question->image = $imageName;
        }

        $question->save();
        
        return redirect('/admin/question/index')->with('success', 'Question has been updated');
    }

    public function destroy(Question $question)
    {
    	//if question is not found   	
        if ($question == null) {
        	return redirect()->back()->with('error', 'Question not found');
        }

    	// image delete
        if ($question->image && $question->image != 'sample.jpg' && file_exists('assets/question/'.$question->image)){
            unlink('assets/question/'.$question->image);
        }

    	// question delete
        $question->delete();

        return redirect('/admin/question/index')->with('success', 'Question has been deleted');
    }
}
