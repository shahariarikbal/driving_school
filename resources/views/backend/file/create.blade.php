@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-play"></i>
        <div>
            <h4>Add Lesson</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/lesson/index') }}">Manage Lesson</a> / Add Lesson /
            </p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                @if($page == 'create' || $page == 'edit')
                <div class="col-md-12">
                    <form action="{{ $page == 'edit' ? url('admin/lesson/update/'.$file->id) : url('admin/lesson/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">video lesson file (Please select a mp4 file)</label>
                            <input type="file" name="videoFile" value="" class="form-control" accept=".mp4" {{ $page == 'create' ? 'required' : '' }}>
                            @if ($errors->has('videoFile'))
                                <div class="text-danger">{{ $errors->first('videoFile') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" name="image" value="" class="form-control" onchange="imagePreview(event)" {{ $page == 'create' ? 'required' : '' }}>
                            <img src="" id="pre-logo" class="mt-3" />
                            @if(!empty($file->image))
                                <img src="{{ asset('/assets/files/'.$file->image) }}" height="100" width="100" class="my-3" />
                            @endif
                            @if ($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">title</label>
                            <input type="text" name="title" value="{{ $file->title ?? old('title') }}" class="form-control" placeholder="Lesson title" required>
                            @if ($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <input type="text" name="description" value="{{ $file->description ?? old('description') }}" class="form-control" placeholder="Lesson description" required>
                            @if ($errors->has('description'))
                                <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">type/priority</label>
                            <input type="text" name="type" value="{{ $file->type ?? old('type') }}" class="form-control" placeholder="Enter 'intro' or 1,2,3 to set priority" required>
                            @if ($errors->has('type'))
                                <div class="text-danger">{{ $errors->first('type') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Active</label>
                            <select name="is_active" id="is_active" class="form-control" required>
                                <option value="1" {{ $page=='edit' && $file->is_active == 1 ? 'selected' : old('is_active') }}>Yes</option>
                                <option value="0" {{ $page=='edit' && $file->is_active == 0 ? 'selected' : old('is_active') }}>No</option>
                            </select>
                            @if ($errors->has('is_active'))
                                <div class="text-danger">{{ $errors->first('is_active') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-teal mt-3">Submit</button>
                        </div>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div><!-- br-pagebody -->
@endsection

@push('script')
    <script>
        function imagePreview(e){
            if (e.target.files[0]) {
                let image = e.target.files[0];
                if(image['type'] === 'image/jpeg' || image['type'] === 'image/png' || image['type'] === 'image/webp' || image['type'] === 'image/gif'){
                    let reader = new FileReader();
                    reader.onload = function ()
                    {
                        let output = document.getElementById('pre-logo');
                        output.src = reader.result;
                        output.style.display = "block";
                        output.style.width = "10%";
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }else{
                   alert('This is not image file. Please input e valid image.');
                }
            }
        }
    </script>
@endpush
