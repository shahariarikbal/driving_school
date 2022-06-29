<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Subscription;
use App\Models\Topic;
use App\Models\TopicUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function exam($topic_slug)
    {
    	$topic = Topic::where('slug', $topic_slug)->first();

    	if ($topic == null) {
    		return redirect()->back()->with('error', 'Topic not found.');
    	}

    	if (!$topic->questions || $topic->questions->count() == 0) {
    		return redirect()->back()->with('error', 'Exam not available for this category. Please try later');
    	}

    	// return $topic->questions;
    	if (!Auth::check()) {
    		return redirect('/login');
    	}

        return view('frontend.topics.exam', compact('topic'));
    }

    public function exam_store(Request $request,$topic_id){
    	// return $request->question_*;
    	// return $request->all();

    	$topic = Topic::find($topic_id);

    	if ($topic == null) {
    		return redirect()->back()->with('error', 'Topic not found.');
    	}

    	// total marks count 
    	$total_marks = 0;
    	foreach ($topic->questions as $question) {
    		$total_marks += $question->marks;
    	}
    	// return $total_marks;

    	// correct answer bair koro koto marks paise 
    	$correct_marks = 0;
    	if ($request->question) {
	    		
	    	foreach ($request->question as $quetion_id => $answer) {
	    		$db_question = Question::find($quetion_id);
	    		if (!$db_question) {
	    			continue;
	    		}

	    		if ($db_question->answer == (int)$answer) {
	    			$correct_marks += $db_question->marks;
	    		}

	    	}

    	}
		// return $correct_marks;
    	// then eita save koro
    	$topic_user = new TopicUser;

    	if(($old_topic_user = TopicUser::where('user_id', Auth::user()->id)->where('topic_id', $topic->id)->first()) != null){
    		$topic_user = $old_topic_user;
    	}

    	$topic_user->topic_id = $topic->id;
    	$topic_user->user_id = Auth::user()->id;
    	$topic_user->total_marks = $correct_marks;

    	$topic_user->save();

    	// output e dekhao //pass or fail kina
    	$is_passed = false;
    	if(($correct_marks/$total_marks) >= 0.5){
    		$is_passed = true;
    	}


    	return view('frontend.topics.result', compact('topic_user', 'correct_marks', 'total_marks','topic', 'is_passed'));


    }
}