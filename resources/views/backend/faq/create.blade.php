@extends('backend.master')

@section('content')

    <div class="br-pagetitle">
        <i class="icon ion-alert"></i>
        <div>
            <h4 class="text-capitalize">{{$page}} Faq</h4>
            <p class="mg-b-0 text-capitalize">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/faq/index') }}" class="text-capitalize">Manage Faq</a> / {{ $page }} Faq /
            </p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                @if($page == 'create' || $page == 'edit')
                <div class="col-md-12">
                    <form action="{{ $page == 'edit' ? url('admin/faq/update/'.$faq->id) : url('admin/faq/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">question</label>
                            <input type="text" name="question" value="{{ $faq->question ?? old('question') }}" class="form-control" placeholder="Enter question" required>
                            @if ($errors->has('question'))
                                <div class="text-danger">{{ $errors->first('question') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">answer</label>
                            <input type="text" name="answer" value="{{ $faq->answer ?? old('answer') }}" class="form-control" placeholder="Enter answer" required>
                            @if ($errors->has('answer'))
                                <div class="text-danger">{{ $errors->first('answer') }}</div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="is_active">Is active?</label>
                            <select name="is_active" id="is_active" class="form-control" required="">

                                @if ($page == 'create')
                                    <option value="1" selected="">Active</option>
                                    <option value="0" >Inactive</option>
                                @else
                                    <option value="1" {{ $faq->is_active == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $faq->is_active == 0 ? 'selected' : '' }}>Inactive</option>
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
