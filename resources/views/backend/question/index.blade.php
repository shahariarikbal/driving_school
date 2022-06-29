@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-help"></i>
        <div>
            <h4>Manage Question</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/question/create') }}">Add Question</a> / Question /
            </p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="table-wrapper table-responsive">
                <table id="datatable3" class="table display nowrap">
                    <thead>
                    <tr>
                        <th class="">#</th>
                        <th class="">image</th>
                        <th class="">topic</th>
                        <th class="">question</th>
                        <th class="">answer</th>
                        <th class="">explanation</th>
                        <th class="">marks</th>
                        <th class="">is_active</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($question->image)
                                    <img src="{{ asset('/assets/question/'.$question->image) }}" height="50" width="50" />
                                @else
                                    <span>No image found</span>
                                @endif
                            </td>
                            <td>{{ $question->topic->name ?? 'No  topic_id found' }}</td>
                            <td>{{ $question->question ?? 'No  question found' }}</td>
                            <td>{{ $question->answer == 0 ? 'True' : 'False' }}</td>
                            <td>{{ $question->explanation ?? 'No  explanation found' }}</td>
                            <td>{{ $question->marks ?? 'No  marks found' }}</td>
                            <td>{{ $faq->is_active == 0 ? 'Inactive' : 'Active' }}</td>
                            <td>
                                <a href="{{ url('/admin/question/edit/'.$question->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ url('/admin/question/delete/'.$question->id) }}" onclick="return confirm('Are you sure permanently this question ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
