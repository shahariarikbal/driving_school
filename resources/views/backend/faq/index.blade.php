@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-alert"></i>
        <div>
            <h4>Manage Faq</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/faq/create') }}">Add Faq</a> / Faq /
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
                        <th class="">question</th>
                        <th class="">answer</th>
                        <th class="">is_active</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $faq->question ?? 'No  faq found' }}</td>
                            <td>{{ $faq->answer ?? 'No  answer found' }}</td>
                            <td>{{ $faq->is_active == 0 ? 'Inactive' : 'Active' }}</td>
                            <td>
                                <a href="{{ url('/admin/faq/edit/'.$faq->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ url('/admin/faq/delete/'.$faq->id) }}" onclick="return confirm('Are you sure permanently this faq ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
