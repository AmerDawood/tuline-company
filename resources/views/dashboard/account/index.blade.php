@extends('dashboard.master')

@section('content')



<div class="page-content">
    <div class="container-fluid">
        @if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Social Account</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="live-preview">
                            <form action="{{ route('account.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="employeeName"
                                        placeholder="Enter email" name="email" value="{{ $account->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">FAX</label>
                                    <input type="text" class="form-control" id="employeeName"
                                        placeholder="Enter fax" name="fax" value="{{ $account->fax }}">
                                </div>

                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="employeeName"
                                        placeholder="Enter phone number" name="phone" value="{{ $account->phone }}">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Accounts</button>
                                </div>
                            </form>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>







        @include('dashboard.layouts.footer')



      @section('scripts')


      @endsection


@endsection




