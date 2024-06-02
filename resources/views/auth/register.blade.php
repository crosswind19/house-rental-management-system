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
  <title>Register Page - Rentkit - Directory & Listings Bootstrap 5 Template.</title>


</head>

<body>
  <!-- content -->
  <div class="min-vh-100 py-md-10 py-lg-0 " style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/post-single-img.jpg')}}); no-repeat center center fixed; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <div class="container">
      <div class="row d-flex align-items-center min-vh-100 justify-content-end">
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
          <!-- card -->
          <div class="card border-0 shadow">
            <div class="card-body p-8">
              <h3 class="mb-4">Create Your Account</h3>
              <!-- form -->
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- email -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <!-- email -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- password -->
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!-- confirm password -->
                <div class="mb-3">
                  <label for="confirm-password" class="form-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <!-- text -->

                <div class="mb-2">
                  <p class="text-sm">By signing up you agree to Rental <strong class="text-dark">Terms
                      and Conditions</strong> and <strong class="text-dark">Privacy
                      Policy.</strong></p>
                </div>
                <!-- button -->

                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
              </form>
              <div class="mt-3">
                <p class="mb-0">Already have an account? <span class="ml-3"><a href="{{ route('login')}}">Login</a></span></p>
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
  <script src="../assets/js/theme.min.js"></script>