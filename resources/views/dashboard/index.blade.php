@extends('dashboard.master')

@section('content')



    @include('dashboard.body.index')




    @include('dashboard.layouts.footer')



      @section('scripts')
      <script src="{{ asset('admin/libs/chart.js/chart.min.js') }}"></script>
      <script src="{{ asset('admin/js/pages/chartjs.init.js') }}"></script>


      @endsection


@endsection




