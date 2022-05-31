@extends('backend.master')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-play"></i>
        <div>
            <h4>Manage Lesson</h4>
            <p class="mg-b-0">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                / <a href="{{ url('admin/lesson/create') }}">Add Lesson</a> / Lesson /
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
                        <th class="text-capitalize">image</th>
                        <th class="text-capitalize">title</th>
                        <th class="text-capitalize">description</th>
                        <th class="text-capitalize">type/priority</th>
                        <th class="text-capitalize">is_active</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if ($file->image)
                                <img src="{{ asset('assets/files/' . $file->image) }}" width="50" height="50" alt="" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter{{ $file->id }}">



                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $file->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $file->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">                                        
                                            @if ($file->file)
                                            <video width="100%" controls>
                                              <source src="{{ asset('assets/files/' . $file->file) }}?file={{$file->id}}" type="video/mp4">
                                              {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                            </video>
                                            @endif
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                @endif
                            </td>
                            <td>{{ $file->title ?? 'No  title found' }}</td>
                            <td>{{ $file->description ?? 'No  description found' }}</td>
                            <td>{{ $file->type ?? 'No  type found' }}</td>
                            <td>
                                @if ($file->is_active)
                                    <div class="badge badge-success">Active</div>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/admin/lesson/edit/'.$file->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ url('/admin/lesson/delete/'.$file->id) }}" onclick="return confirm('Are you sure permanently this file ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
@endsection
