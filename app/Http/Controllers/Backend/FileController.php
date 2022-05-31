<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::orderBy('created_at', 'desc')->get();
        return view('backend.file.index', compact('files'));
    }

    public function create()
    {
        $page = 'create';
        return view('backend.file.create', compact('page'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'videoFile' => 'required|mimes:mp4',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
        ]);

        // if intro type data already exists
        if($request->type == 'intro'){
            $old_intro_file = File::where('type', 'intro')->first();
            if($old_intro_file){
                return redirect()->back()->with('error', 'An intro file already exists in database. Please delete that first.');
            }
        }

        $file = new File();


        if ($request->file('videoFile')){
            $videoFileName = str_replace(' ', '-', strtolower($request->title)) . time(). '.'. $request->videoFile->extension();
            $request->videoFile->move('assets/files', $videoFileName);
            $file->file = $videoFileName;
        }

        if ($request->file('image')){
            $imageName = str_replace(' ', '-', strtolower($request->title)) . time(). '.'. $request->image->extension();
            $request->image->move('assets/files', $imageName);
            $file->image = $imageName;
        }

        // return $request->all();

        $file->title = $request->title;
        $file->description = $request->description;
        $file->type = $request->type;
        $file->is_active = $request->is_active;
        $file->save();

        return redirect('/admin/lesson/index')->with('success', 'Lesson has been added');
    }

    public function edit($id)
    {
        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error', 'File not found.');
        }

        $page = 'edit';
        return view('backend.file.create', compact('page', 'file'));
    }

    public function update(Request $request, $id)
    {
        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error', 'File not found.');
        }


        $this->validate($request, [
            'videoFile' => 'mimes:mp4',
            'image' => 'mimes:jpg,jpeg,png,bmp,tiff',
        ]);


        if ($request->file('videoFile')){
            if ($file->file && file_exists('assets/files/'.$file->file)){
                unlink('assets/files/'.$file->file);
            }

            $videoFileName = str_replace(' ', '-', strtolower($request->title)) . time(). '.'. $request->videoFile->extension();
            $request->videoFile->move('assets/files', $videoFileName);
            $file->file = $videoFileName;
        }

        if ($request->file('image')){
            if ($file->image && file_exists('assets/files/'.$file->image)){
                unlink('assets/files/'.$file->image);
            }

            $imageName = str_replace(' ', '-', strtolower($request->title)) . time(). '.'. $request->image->extension();
            $request->image->move('assets/files', $imageName);
            $file->image = $imageName;
        }
        // return $request->all();

        $file->title = $request->title;
        $file->description = $request->description;
        $file->type = $request->type;
        $file->is_active = $request->is_active;
        $file->save();

        return redirect('/admin/lesson/index')->with('success', 'Lesson has been updated');
    }

    public function delete($id)
    {
        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error', 'File not found.');
        }

        if ($file->file && file_exists('assets/files/'.$file->file)){
            unlink('assets/files/'.$file->file);
        }

        if ($file->image && file_exists('assets/files/'.$file->image)){
            unlink('assets/files/'.$file->image);
        }

        $file->delete();

        return redirect('/admin/lesson/index')->with('success', 'Lesson has been deleted');
    }
}
