<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rentkit - Directory & Listings Bootstrap 5 Template.">


    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">


    <!-- Libs CSS -->

    <link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="../assets/libs/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
    <link href="../assets/libs/uppy/dist/uppy.min.css" rel="stylesheet">
    <link href="../assets/libs/litepicker/dist/css/litepicker.css" rel="stylesheet">
    <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
    <link href="../assets/libs/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}">
    <title>Login Page - Rentkit - Directory & Listings Bootstrap 5 Template.</title>


</head>

<body>
    <!-- content -->
    <div class="min-vh-100 py-md-10 py-lg-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/post-single-img.jpg')}}); no-repeat center center fixed; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="container">
            <div class="row d-flex align-items-center min-vh-100 justify-content-end">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- card -->
                    <div class="card shadow border-0">
                        <!-- card body -->
                        <div class="card-body p-8">
                            <h3 class="mb-4">Welcome back to RentPro</h3>
                            <!-- form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <!-- password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 mt-3 text-sm ">
                                    <!-- form check -->
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rememberme">{{ __('Remember Me') }}</label>
                                    </div>
                                    <!-- forgot password -->
                                    <div class="fw-bold">
                                        <a href="forget-password.html" class="text-inherit"> Forgot Password?</a>
                                    </div>
                                </div>
                                <!-- button -->
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                            </form>
                            <div class="mt-4">
                                <p class="mb-0">Don’t Have an Account?<a href="{{ route('register')}}"> Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scripts -->
    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-raty-js/lib/jquery.raty.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/libs/uppy/dist/uppy.min.js"></script>
    <script src="../assets/libs/litepicker/dist/litepicker.js"></script>
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/libs/leaflet/dist/leaflet.js"></script>
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
    <script src="../assets/libs/wnumb/wNumb.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('/assets/js/theme.min.js')}}"></script>