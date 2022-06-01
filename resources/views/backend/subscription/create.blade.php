@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-pound"></i>
        <div>
            <h4>Add Subscription</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/subscription/index') }}">Manage Subscription</a> / Add Subscription /
            </p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                @if($page == 'create' || $page == 'edit')
                <div class="col-md-12">
                    <form action="{{ $page == 'edit' ? url('admin/subscription/update/'.$subscription->id) : url('admin/subscription/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{ $subscription->title ?? old('title') }}" class="form-control" placeholder="Title" required>
                            @if ($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="number" name="duration" value="{{ $subscription->duration ?? old('duration') }}" class="form-control" placeholder="Duration" required>
                            @if ($errors->has('duration'))
                                <div class="text-danger">{{ $errors->first('duration') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{ $subscription->price ?? old('price') }}" class="form-control" placeholder="Price" required>
                            @if ($errors->has('price'))
                                <div class="text-danger">{{ $errors->first('price') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Features</label>
                            <textarea class="form-control" name="features" rows="5" placeholder="Features" required>{{ $subscription->features ?? old('features') }}</textarea>
                            @if ($errors->has('features'))
                                <div class="text-danger">{{ $errors->first('features') }}</div>
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
