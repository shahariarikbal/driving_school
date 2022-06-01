@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-pound"></i>
        <div>
            <h4>Manage Topic</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/topic/create') }}">Add Topic</a> / Topic /
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
                        <th class="">Image</th>
                        <th class="">Name</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($topics as $topic)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($topic->image)
                                    <img src="{{ asset('/assets/topic/'.$topic->image) }}" height="50" width="50" />
                                @else
                                    <span>No image found</span>
                                @endif
                            </td>
                            <td>{{ $topic->name ?? 'No  name found' }}</td>
                            <td>
                                <a href="{{ url('/admin/topic/edit/'.$topic->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ url('/admin/topic/delete/'.$topic->id) }}" onclick="return confirm('Are you sure permanently this topic ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
