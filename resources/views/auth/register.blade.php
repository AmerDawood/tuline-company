<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

@include('dashboard.layouts.head')

<body>

    <body>

        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                <div class="bg-overlay"></div>

                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.html" class="d-inline-block auth-logo">
                                        {{-- <img src="assets/images/logo-light.png" alt="" height="20"> --}}
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Welcome Back !</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue to Velzon.</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="{{ route('register') }}" method="POST">

                                            @csrf

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Name</label>
                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="email" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email</label>
                                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input  @error('password') is-invalid @enderror" placeholder="Enter password" id="password-input" name="password">

                                                    @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input  @error('password_confirmation') is-invalid @enderror" placeholder="Enter Password Confirmation" id="confirm-password-input" name="password_confirmation">

                                                    @error('password_confirmation')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>


                        </div>
                    </div>
                    <!-- end row -->
                </div>
        </div>
                <!-- end container -->


            <!-- end auth page content -->




    <!-- JAVASCRIPT -->
     @include('dashboard.layouts.scripts')
</body>

</html>
