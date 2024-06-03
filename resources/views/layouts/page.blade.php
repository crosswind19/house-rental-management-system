<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Rentkit - Directory & Listings Bootstrap 5 Template.">


  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">


  <!-- Libs CSS -->

  <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/nouislider/dist/nouislider.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/uppy/dist/uppy.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/litepicker/dist/css/litepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">



  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
  {{-- <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
  <title>Homepage - Rentkit - Directory & Listings Bootstrap 5 Template.</title>
</head>

<body class="">


  <!-- navbar -->
  <!-- navbar -->
  @if(Route::is('home'))
  <div class="nav-header nav-header-classic menu-space header-position header-white">
  @else
  <div class="nav-header nav-header-classic menu-space header-position header-dark">
  @endif
  
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg">
                      <a class="navbar-brand" href="{{route('home')}}"> <img src="{{ asset('assets/images/logo.svg')}}" alt="Rentkit Directory & Listing Bootstrap 5 Theme"></a>
                      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto ms-lg-3">
                              <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="./index.html">Classic</a></li>
                                      <li><a class="dropdown-item" href="./pages/modern.html">Modern</a></li>
                                      <li><a class="dropdown-item" href="./pages/hotel-finder.html">Hotel</a></li>
                                      <li><a class="dropdown-item" href="./pages/real-estate.html">Real Estate <span class="badge bg-primary">New</span></a></li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                      </form>
                                      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                  </ul>
                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('properties')}}">Properties</a>
                            </li>
                                  
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('properties.index') }}" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Property Type</a>
                                <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                    <li><a href="./pages/blog.html" class="dropdown-item">Apartment</a></li>
                                    <li><a href="./pages/blog-author.html" class="dropdown-item">Author</a></li>
                                    <li><a href="./pages/blog-category.html" class="dropdown-item">Category</a></li>
                                    <li><a href="./pages/blog-single.html" class="dropdown-item">Single</a></li>
                                </ul>
                            </li>
                            
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('dashboard')}}">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="./docs/index.html">Docs</a>
                              </li>
                          </ul>

                          @if (Auth::check() && (Auth::user()->roles == 3))
                                <a class="nav-link dropdown-toggle pe-3" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span>Welcome, {{ Auth::user()->name }}</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index.html">My Profile</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                    </form>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                              <a href="{{ route('dashboard')}}" class="btn btn-primary d-none d-lg-block">Dashboard</a>
                          @else
                          {{-- <a href="./pages/add-listing.html" class="btn btn-secondary d-none d-lg-block me-2">Rent Out Area</a> --}}
                          <a href="{{ route('login') }}" class="btn btn-primary d-none d-lg-block">Login</a>
                          @endif 
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </div>

  <!-- main wrapper -->

        @yield('content')
       <!-- footer  -->
        <!-- footer section -->
        <div class="footer pt-14 bg-dark ">
          <div class="container">
            <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <!-- footer widget  -->
                <div class="mb-14">
                  <h4 class=" mb-3 text-white">Explore Rentkit</h4>
                  <div>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-reset lh-lg">List your property</a></li>
                      <li><a href="#" class="text-reset lh-lg">Book with Confidence</a></li>
                      <li><a href="#" class="text-reset lh-lg">Trust & Safety</a></li>
                      <li><a href="#" class="text-reset lh-lg">Vacation rental guides</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <!-- footer widget  -->
                <div class="mb-14">
                  <h4 class=" mb-3  text-white" >For Owner</h4>
                  <div>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-reset lh-lg">How it works</a></li>
                      <li><a href="#" class="text-reset lh-lg">Pricing</a></li>
                      <li><a href="#" class="text-reset lh-lg">Join as Owner</a></li>
                      <li><a href="#" class="text-reset lh-lg">Help centre</a> </li>
                      <li><a href="#" class="text-reset lh-lg">Mobile App</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <div class="mb-14">
                  <h4 class=" mb-3  text-white">Company</h4>
                  <div>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-reset lh-lg">About us</a></li>
                      <li><a href="#" class="text-reset lh-lg">Careers</a></li>
                      <li><a href="#" class="text-reset lh-lg">Clients</a></li>
                      <li><a href="#" class="text-reset lh-lg">Team</a> </li>
                      <li><a href="#" class="text-reset lh-lg">Help Center</a></li>
                      <li><a href="#" class="text-reset lh-lg">Press</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- footer widget  -->
              <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <div class="mb-14">
                  <h4 class=" mb-3  text-white">Social</h4>
                  <div>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-reset lh-lg">Facebook</a></li>
                      <li><a href="#" class="text-reset lh-lg">Twitter</a></li>
                      <li><a href="#" class="text-reset lh-lg">Linkedin</a></li>
                      <li><a href="#" class="text-reset lh-lg">Google</a></li>
                      <li><a href="#" class="text-reset lh-lg">Instagram</a></li>
                    </ul>
                  </div>
                  <!-- footer widget  -->
                </div>
              </div>
              <!-- footer widget  -->
              <div class="col-xl-4 col-lg-4 col-md-8 col-12">
                <div class="mb-14">
                  <h4 class=" mb-3  text-white">Rentkit deals in your inbox ?</h4>
                  <p class="text-reset  ">Get special offers, travel inspiration, and more from Rentkit </p>
                  <form>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="subscriber">
                      <span class="btn btn-primary" id="subscriber">Subscribe</span>
                    </div>



                  </form>
                  <!-- footer widget  -->
                </div>
              </div>
              <div class="col-md-12 col-12">
                <p class="fs-6 text-gray-500">© 2021 Rentkit. All rights reserved.</p>
              </div>
            </div>
            <!-- tiny footer  -->
            <!-- footer section -->
          </div>
          <!-- footer section -->
        </div>
    </div>
  </div>
    <!-- scripts  -->
  <!-- Libs JS -->
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery-raty-js/lib/jquery.raty.js')}}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('assets/libs/uppy/dist/uppy.min.js')}}"></script>
    <script src="{{ asset('assets/libs/litepicker/dist/litepicker.js')}}"></script>
    <script src="{{ asset('assets/libs/prismjs/prism.js')}}"></script>
    <script src="{{ asset('assets/libs/leaflet/dist/leaflet.js')}}"></script>
    <script src="{{ asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/libs/nouislider/dist/nouislider.min.js')}}"></script>
    <script src="{{ asset('assets/libs/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

  <!-- Theme JS -->
  <script src="{{ asset('assets/js/theme.min.js')}}"></script>