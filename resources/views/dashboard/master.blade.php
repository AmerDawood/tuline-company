<!doctype html>


    <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable"
    @if (app()->currentLocale() == 'ar') dir="rtl"
      @else
      dir="" @endif>

@include('dashboard.layouts.head')

<body>
    <script>
        // Initialize Toastr
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right', // Adjust this based on your layout
        };
    </script>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('dashboard.layouts.header')

        <!-- ========== App Menu ========== -->
          @include('dashboard.layouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>




        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <div class="main-content">

        @yield('content')

        <!-- End Page-content -->

    </div>

    <!-- JAVASCRIPT -->
     @include('dashboard.layouts.scripts')
</body>

</html>
