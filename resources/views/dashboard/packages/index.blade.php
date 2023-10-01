@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">All Services</h4>
                        <div class="flex-shrink-0">
                            <a href="{{ route('packages.create') }}" class="btn btn-primary">Create Package</a>
                        </div>

                    </div><!-- end card header -->

                    <div class="card-body">

                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                    @foreach ($packages as  $package)

                                        <tr>
                                            <td class="fw-medium">{{ $package->id }}</td>
                                            <td>{{ $package->title }}</td>
                                            <td>{{ $package->price }}</td>

                                            <td><img src="{{ asset('uploads/packages/'.$package->image) }}" width="80" height="80" alt=""></td>

                                            <td>{{ $package->created_at->diffForHumans()  }}</td>

                                            <td>
                                              <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                {{-- <a href="" class="btn btn-success btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}


                                                <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                                <div style="padding: 20px">
                                    {{ $packages->links() }}

                                    </div>
                            </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>


        </div>
    </div>

@endsection
