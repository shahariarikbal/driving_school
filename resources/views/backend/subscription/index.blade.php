@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-pound"></i>
        <div>
            <h4>Manage Subscription</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/subscription/create') }}">Add Subscription</a> / Subscription /
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
                        <th class="">Title</th>
                        <th class="">Duration</th>
                        <th class="">Price</th>
                        <th class="">Feature</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscriptions as $subscription)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $subscription->title }}</td>
                            <td>{{ $subscription->duration }}</td>
                            <td>{{ $subscription->price }}</td>
                            <td>{{ $subscription->features }}</td>
                            <td>
                                <a href="{{ url('/admin/subscription/edit/'.$subscription->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('/admin/subscription/delete/'.$subscription->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
