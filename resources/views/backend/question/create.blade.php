@extends('backend.master')

@section('content')

    <div class="br-pagetitle">
        <i class="icon ion-help"></i>
        <div>
            <h4 class="text-capitalize">{{$page}} Question</h4>
            <p class="mg-b-0 text-capitalize">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/question/index') }}" class="text-capitalize">Manage Question</a> / {{ $page }} Question /
            </p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                @if($page == 'create' || $page == 'edit')
                <div class="col-md-12">
                    <form action="{{ $page == 'edit' ? url('admin/question/update/'.$question->id) : url('admin/question/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="topic_id">Select Topic</label>
                            <select name="topic_id" id="topic_id" class="form-control" required="">
                                @foreach (App\Models\Topic::orderBy('name', 'asc')->get() as $topic)
                                    <option value="{{ $topic->id }}"

                                        @if (isset($question) && $question->topic_id == $topic->id)
                                            selected 
                                        @endif

                                    >{{ $topic->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('topic_id'))
                                <div class="text-danger">{{ $errors->first('topic_id') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">question</label>
                            <input type="text" name="question" value="{{ $question->question ?? old('question') }}" class="form-control" placeholder="Enter question" required>
                            @if ($errors->has('question'))
                                <div class="text-danger">{{ $errors->first('question') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">answer</label><br>
                            <input type="radio" name="answer" value="1" id="yes" required
                                @if (isset($question) && $question->answer == 1)
                                    checked 
                                @endif
                            > <label for="yes">Yes</label>
                            <input type="radio" name="answer" value="0" class="ml-2" id="no" required
                                @if (isset($question) && $question->answer == 0)
                                    checked 
                                @endif
                            > <label for="no">No</label>

                            @if ($errors->has('answer'))
                                <div class="text-danger">{{ $errors->first('answer') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">explanation</label>
                            <input type="text" name="explanation" value="{{ $question->explanation ?? old('explanation') }}" class="form-control" placeholder="Enter explanation">
                            @if ($errors->has('explanation'))
                                <div class="text-danger">{{ $errors->first('explanation') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">marks</label>
                            <input type="number" name="marks" value="{{ $question->marks ?? old('marks') }}" class="form-control" placeholder="Enter marks" min="1" required>
                            @if ($errors->has('marks'))
                                <div class="text-danger">{{ $errors->first('marks') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" value="" class="form-control" onchange="imagePreview(event)">
                            <img src="" id="pre-logo"/>
                            @if(!empty($question->image))
                                <img src="{{ asset('assets/question/'.$question->image) }}" height="100" width="100"/>
                            @endif
                            @if ($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>



                        <div class="form-group">
                            <label for="is_active">Is active?</label>
                            <select name="is_active" id="is_active" class="form-control" required="">

                                @if ($page == 'create')
                                    <option value="1" selected="">Active</option>
                                    <option value="0" >Inactive</option>
                                @else
                                    <option value="1" {{ $question->is_active == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $question->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                                @endif
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
