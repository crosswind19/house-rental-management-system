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

  <link href="./assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
  <link href="./assets/libs/animate.css/animate.min.css" rel="stylesheet">
  <link href="./assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
  <link href="./assets/libs/uppy/dist/uppy.min.css" rel="stylesheet">
  <link href="./assets/libs/litepicker/dist/css/litepicker.css" rel="stylesheet">
  <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
  <link href="./assets/libs/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">



  <!-- Theme CSS -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
  <title>Homepage - Rentkit - Directory & Listings Bootstrap 5 Template.</title>
</head>

<body class="">


  <!-- navbar -->
  <!-- navbar -->
  <div class="nav-header nav-header-classic menu-space header-position header-white">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg">
                      <a class="navbar-brand" href="./index.html"> <img src="./assets/images/logo.svg" alt="Rentkit Directory & Listing Bootstrap 5 Theme"></a>
                      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto ms-lg-3">
                              <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Home
                  </a>
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
                              <li class="nav-item dropdown menu_list">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarExplore" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Explore
                  </a>
                                  <div class="dropdown-menu w-100 p-0" aria-labelledby="navbarExplore">
                                      <div class="row g-0">
                                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-none">
                                              <div class="dropdown-img " style="background-image: url(./assets/images/dropdown-img.jpg);">
                                                  <div class="dropdown-img-caption">
                                                      <h2 class="text-white mb-1">Want Experience on Rentkit ?</h2>
                                                      <p class="mb-4">Experience a level of our quality in both design &amp; customization works.
                                                      </p>
                                                      <a href="./pages/add-listing.html" class="btn btn-primary">
                              
                            </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12 col-md-12 col-lg-6">
                                              <div class="row m-3 m-lg-6">
                                                  <div class="col-md-3">
                                                      <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Listing</h5>
                                                      <ul class="list-unstyled">
                                                          <li><a class="dropdown-item" href="./pages/listing-list-view.html">
                                  Listing View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/listing-grid-view.html">
                                  Grid View</a>
                                                          </li>
                                                          <li>
                                                              <a class="dropdown-item" href="./pages/list-with-map.html">
                                  List With Map</a>
                                                          </li>
                                                          <li>
                                                              <a class="dropdown-item" href="./pages/grid-with-map.html">
                                  Grid With Map</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/listing-category.html">
                                  Listing Category</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/list-single.html">
                                  Listing Single</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/add-listing.html">
                                  Add Listing</a>
                                                          </li>

                                                      </ul>
                                                  </div>

                                                  <div class="col-md-3">
                                                      <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Other Pages</h5>
                                                      <ul class="mega-menu-list list-unstyled">
                                                          <li><a class="dropdown-item" href="./pages/about.html">
                                About us</a>
                                                          </li>
                                                          <li>
                                                              <a class="dropdown-item" href="./pages/contact-us.html">
                                Contact</a>
                                                          </li>

                                                          <li><a class="dropdown-item" href="./pages/faq.html">
                                  Faq</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/pricing.html">
                                  Pricing</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/checkout-page.html">
                                Checkout</a>
                                                          </li>

                                                          <li><a class="dropdown-item" href="./pages/coming-soon.html">
                                Coming Soon</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/404-error.html">
                                  404 Error</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Author</h5>
                                                      <ul class="list-unstyled">
                                                          <li><a class="dropdown-item" href="./pages/author-list.html">
                                  List</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/author-reviews.html">
                                  Reviews</a>
                                                          </li>
                                                          <li>
                                                              <a class="dropdown-item" href="./pages/author-favourite.html">
                                  Favourite</a>
                                                          </li>

                                                      </ul>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Account</h5>
                                                      <ul class="mega-menu-list list-unstyled">
                                                          <li><a class="dropdown-item" href="./pages/signin.html">
                                  Login</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="./pages/signup.html">
                                  Register</a>
                                                          </li>
                                                          <li>
                                                              <a class="dropdown-item" href="./pages/forget-password.html">
                                  Forgot Password</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                      <li><a href="./pages/blog.html" class="dropdown-item">Blog</a></li>
                                      <li><a href="./pages/blog-author.html" class="dropdown-item">Author</a></li>
                                      <li><a href="./pages/blog-category.html" class="dropdown-item">Category</a></li>
                                      <li><a href="./pages/blog-single.html" class="dropdown-item">Single</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="./pages/dashboard/overview.html">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="./docs/index.html">Docs</a>
                              </li>
                          </ul>

                          @if (Auth::check() && (Auth::user()->roles == 3))
                          

                              <li class="nav-item dropdown list-unstyled me-2">
                                <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span>Welcome, {{ Auth::user()->name }}</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index.html">My Profile</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                            </li>

                              

                              <a href="./pages/add-listing.html" class="btn btn-secondary d-none d-lg-block me-2">Rent Out Area</a>
                          
                              <a href="./pages/add-listing.html" class="btn btn-primary d-none d-lg-block">Dashboard</a>


                          
                          @else

                          <a href="./pages/add-listing.html" class="btn btn-secondary d-none d-lg-block me-2">Rent Out Area</a>
                          
                          <a href="{{ route('login') }}" class="btn btn-primary d-none d-lg-block">Login</a>


                          
                          @endif 

                          
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </div>

  <!-- main wrapper -->

  <div class="d-flex flex-wrap w-100">
    <div class="flex-1" style="min-width: 0;">
      <!-- hero image -->
      <div class="w-100">
        <div class="position-relative d-flex pt-lg-6 flex-column min-vh-xl-100">
          <span class="position-absolute top-0 end-0 bottom-0 start-0" style=" background-size: cover;
    background-position: 50%; background-image: url(assets/images/hero-img-one.jpg);">

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
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="./assets/libs/select2/dist/js/select2.full.min.js"></script>
  <script src="./assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="./assets/libs/jquery-raty-js/lib/jquery.raty.js"></script>
  <script src="./assets/libs/quill/dist/quill.min.js"></script>
  <script src="./assets/libs/uppy/dist/uppy.min.js"></script>
  <script src="./assets/libs/litepicker/dist/litepicker.js"></script>
  <script src="./assets/libs/prismjs/prism.js"></script>
  <script src="./assets/libs/leaflet/dist/leaflet.js"></script>
  <script src="./assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="./assets/libs/nouislider/dist/nouislider.min.js"></script>
  <script src="./assets/libs/wnumb/wNumb.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

  <!-- Theme JS -->
  <script src="./assets/js/theme.min.js"></script>