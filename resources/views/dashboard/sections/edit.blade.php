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
                    <h4 class="card-title mb-0 flex-grow-1">Create Section</h4>
                </div><!-- end card header -->
                <div class="card-body">

                    <form action="{{ route('sections.update',$section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="live-preview">
                            <form action="">
                                @include('dashboard.sections._form')
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Section</button>
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




