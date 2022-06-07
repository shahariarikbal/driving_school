@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-pound"></i>
        <div>
            <h4>Manage Topic</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/user/index') }}">Manage user</a>
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
                        <th class="">Name</th>
                        <th class="">Email</th>
                        <th class="">Phone</th>
                        <th class="">Is Paid</th>
                        <th class="">Is Active</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @if($user->is_paid == 0)
                                    <span class="text-danger">Pending</span>
                                @else
                                    <span class="text-success">Paid</span>
                                @endif
                            </td>
                            <td>
                                @if($user->is_active == 0)
                                    <span class="text-danger">Not Active</span>
                                @else
                                    <span class="text-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/admin/user/active/'.$user->id) }}" class="btn btn-primary btn-sm">Active</a>
                                <a href="{{ url('/admin/user/paid/'.$user->id) }}" class="btn btn-success btn-sm">Paid</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
