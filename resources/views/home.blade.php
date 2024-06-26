@extends('layouts.page')

@section('title', 'Homepage - ' . config('app.name'))

@section('content')
  <!-- Title -->


  <div class="d-flex flex-wrap w-100">
    <div class="flex-1" style="min-width: 0;">
      <!-- hero image -->
      <div class="w-100">
        <div class="position-relative d-flex pt-lg-6 flex-column min-vh-xl-100">
          <span class="position-absolute top-0 end-0 bottom-0 start-0" style=" background-size: cover;
    background-position: 50%; background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/hero-img-one.jpg')}});">

          </span>
          <div class="position-relative d-flex flex-column justify-content-center pt-12 z-2">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <!-- content -->
                  <div class="py-lg-20 py-6 py-md-14 position-relative">
                    <div class="text-center mb-10">
                      <h1 class="text-white display-3 fw-bold mb-1">Find the great rentalsss </h1>
                      <p class="lead text-white">Find and book rental rooms, hotels, villa, and trip.</p>
                    </div>
                    <!-- form -->
                    <div class="card border-0 p-3 search-form">
                      <div class="row">
                        <div class="col-sm">
                          <select class="select2">
                            <option>Where</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Surat">Surat</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Udaipur">Udaipur</option>
                            <option value="Daman">Daman</option>
                            <option value="Pune">Pune</option>
                            <option value="Jaipur">Jaipur</option>
                          </select></div>
                        <div class="col-sm form-group border-start-md border-end-md   ">
                          <input type="text" id="dateSelect" class="form-control border-0 "
                            placeholder="Check in / Check out">
                        </div>
                        <div class="col-sm">
                          <select class="select2">
                            <option>Guest</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                        <div class="col-sm-2">
                          <div class="d-grid ">
                            <a href="#" class="btn btn-primary">Search</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section cities-->
      <div class="py-lg-11 py-7 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-12 text-center">
              <div class="mb-8">
                <h2 class="mb-1">Featured Rental Cities </h2>
                <p class="mb-0">Discover thousands of homes for rent in 50+ countries.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="row">
              <!-- card-->
              <div class="d-flex align-items-lg-stretch col-md-6 col-12 mb-4">
                <div class="card w-100 border-0 overlay-bg img-hover "
                  style="background-image: url(assets/images/listing-img-1.jpg); background-size: cover;">

                  <div class="pt-4 ps-4 pb-18 z-1">
                    <h3 class="text-white mb-0">New York</h3>
                    <p class="text-white mb-0">87 rentals</p>
                  </div>
                  <a href="pages/listing-category.html" class="stretched-link"></a>

                </div>


              </div>
              <!-- card -->
              <div class="d-flex align-items-lg-stretch col-md-3 col-12 mb-4">
                <div class="card w-100 border-0 overlay-bg img-hover "
                  style="background-image: url(assets/images/listing-img-2.jpg); background-size: cover; background-position: center center;">

                  <div class="pt-4 ps-4 pb-18 z-1">
                    <h3 class="text-white mb-0">Tokyo</h3>
                    <p class="text-white mb-0">68 rentals</p>
                  </div>
                  <a href="pages/listing-category.html" class="stretched-link"></a>

                </div>


              </div>
              <!-- card -->
              <div class="d-flex align-items-lg-stretch col-md-3 col-12 mb-4">
                <div class="card w-100 border-0 overlay-bg img-hover "
                  style="background-image: url(assets/images/listing-img-3.jpg); background-size: cover; background-position: center center;">

                  <div class="pt-4 ps-4 pb-18 z-1">
                    <h3 class="text-white mb-0">Australia</h3>
                    <p class="text-white mb-0">54 rentals</p>
                  </div>
                  <a href="pages/listing-category.html" class="stretched-link"></a>

                </div>


              </div>
              <!-- card -->
              <div class="d-flex align-items-lg-stretch col-md-6 col-12 mb-4">
                <div class="card w-100 border-0 overlay-bg img-hover "
                  style="background-image: url(assets/images/listing-img-4.jpg); background-size: cover; background-position: center center;">

                  <div class="pt-4 ps-4 pb-18 z-1">
                    <h3 class="text-white mb-0">Paris</h3>
                    <p class="text-white mb-0">221 rentals</p>
                  </div>
                  <a href="pages/listing-category.html" class="stretched-link"></a>

                </div>


              </div>
              <!-- card -->
              <div class="d-flex align-items-lg-stretch col-md-6 col-12 mb-4">
                <div class="card w-100 border-0 overlay-bg img-hover "
                  style="background-image: url(assets/images/listing-img-5.jpg); background-size: cover; background-position: center center;">

                  <div class="pt-4 ps-4 pb-18 z-1">
                    <h3 class="text-white mb-0">Chicago</h3>
                    <p class="text-white mb-0">143 rentals</p>
                  </div>
                  <a href="pages/listing-category.html" class="stretched-link"></a>

                </div>


              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- section listing -->
      <div class="py-lg-11 py-7">
        <div class="container">
          <div class="row">
            <!-- section heading -->
            <div class="col-md-12 col-sm-12 col-12">
              <div class="mb-8 text-center">
                <h2 class="mb-1">Explore Our Listing</h2>
                <p>Aliquam ornare pellentesque eros nec fermentum. </p>
              </div>
            </div>

          </div>
          <div class="row">
            @foreach($properties as $property)
                <div class="col-md-4 col-12">
                    <!-- listing block -->
                    <div class="mb-4 mb-lg-0">
                        <div class="position-relative">
                            @if($property->photo)
                                @php
                                    $photos = json_decode($property->photo);
                                @endphp
                                @if(count($photos) > 0)
                                    <div id="carousel-{{ $property->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                        <ol class="carousel-indicators">
                                            @foreach($photos as $index => $photo)
                                                <li data-bs-target="#carousel-{{ $property->id }}" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }} rounded-circle"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner rounded-3">
                                            @foreach($photos as $index => $photo)
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img src="{{ Storage::url($photo) }}" alt="Property Photo" class="w-100">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-{{ $property->id }}" role="button" data-bs-slide="prev">
                                            <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-{{ $property->id }}" role="button" data-bs-slide="next">
                                            <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                @endif
                            @endif
                            <div class="btn-wishlist"></div>
                            <span class="badge bg-danger position-absolute top-0 ms-3 mt-3 z-1">Featured</span>
                        </div>
                        <div class="mt-3">
                            <h4 class="mb-0"> <a href="{{ route('properties.show', $property->id) }}" class="text-inherit">{{ $property->property_name }}</a></h4>
                            <p class="text-sm font-weight-semi-bold">{{ $property->city }}, {{ $property->state }}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <span class="h5">${{ $property->price }}</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                </div>
                                <div>
                                    <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                    <span class="font-weight-semi-bold text-sm"><span class="text-dark">5.0</span>(8)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- listing block -->
                </div>
            @endforeach
        </div>
        </div>
      </div>
      <!-- section process -->
      <div class="py-lg-11 py-7 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-12 text-center">
              <!-- section heading-->
              <div class="mb-8">
                <h2 class="mb-1">Our working Process</h2>
                <p>Aliquam ornare pellentesque eros nec fermentum. </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
              <!-- card-->
              <div class="card mb-3 mb-lg-0 border-0 shadow-sm">
                <div class="card-body p-6 ">
                  <div class="icon-shape icon-md bg-primary text-white mb-5 rounded-circle">1</div>
                  <h4 class="mb-2">Create a listing for free</h4>
                  <p class="mb-0">Morbi elit sem iaculis quis blandit onewse necpulvinar vitae lectus one enean
                    suultricesut. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
              <!-- card-->
              <div class="card mb-3 mb-lg-0 border-0 shadow-sm">
                <div class="card-body p-6 ">
                  <div class="icon-shape icon-md bg-primary text-white mb-5 rounded-circle">2</div>
                  <h4 class="mb-2">How you host is up to you</h4>
                  <p class="mb-0">Vestibulum auctor mximus estquinia vulputate etesd phasellus fermede ntum utodio
                    aliquam laoreete. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
              <!-- card-->
              <div class="card mb-3 mb-lg-0 border-0 shadow-sm">
                <div class="card-body p-6 ">
                  <div class="icon-shape icon-md bg-primary text-white mb-5 rounded-circle">3</div>
                  <h4 class="mb-2">Welcome your first guests</h4>
                  <p class="mb-0">Phasellus pulvinar volutpat justo quispose suere ested lorem ipsume volutpat dui id
                    nulla perdietin. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section reviews-->
      <div class="py-lg-11 py-7">
        <div class="container">
          <div class="row">
            <!-- section heading -->
            <div class="col-md-12 col-sm-12 col-12 text-center">
              <div class="mb-8">
                <h2 class="mb-1">Our Customer Reviews </h2>
                <p>Happy guest stay longer! At Rentkit we care about matching quality.
                </p>
              </div>
            </div>
          </div>
          <div class="theme-carousel">
            <div class="owl-carousel owl-theme owl-testimonial">
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Nam risus dui consequatet magna vitae blandit hendrerit risustesque ante varius
                      iaculis feugiat nulla metustiam auctor malesuada.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-1.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">James Duncan</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Vivamus vel imperdiet purus ante id fermentum libero luctus sit ametonec dictum
                      risus vitaenicuus acese mollis dolor porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-2.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">Had an amazing time</h3>
                    <p class="mb-4 ">Sollicitudin purus ante id fermentum libero luctusivamus vel imperdiet eniroin
                      sit ametonec dictum mollis dolor porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-3.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Nam risus dui consequatet magna vitae blandit hendrerit risustesque ante varius
                      iaculis nibh ieuismod auctor malesuada.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-1.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">James Duncan</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Vivamus vel imperdiet ante id fermentum libero luctus sit ametonec dictum risus
                      vitaenicuus acese mollis dolor porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-2.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">Had an amazing time</h3>
                    <p class="mb-4 ">Sollicitudin purus luctusivamus vel imperdiet eniroin sit ametonec dictum risus
                      vitaenicuus acese mollis dolor porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-3.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-xs rounded-circle me-2 w-100">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Nam risus dui consequatet risustesque ante varius iaculis nibh ieuismod leouce
                      feugiat nulla metustiam auctor malesuada.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-1.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">James Duncan</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">It was absolutely lovely</h3>
                    <p class="mb-4 ">Vivamus vel imperdiet eniroin sollicitudin purus ante id fermentum libero luctus
                      sit ametonec dictum porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-2.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
              <div class="item">
                <!-- testimonial -->
                <div class="card">
                  <div class="card-body p-5">
                    <h3 class="h4 mb-2">Had an amazing time</h3>
                    <p class="mb-4 ">Sollicitudin purus ante id fermentum libero luctusivamus vel imperdiet eniroin
                      sit ametonec dictum risus vitaenicuus acese mollis dolor porttitort convvariun.</p>
                    <div class="d-flex justify-content-between">
                      <div class="text-primary align-self-center text-sm">
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star"></span>
                        <span class="mdi mdi-star-half"></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar-3.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 avatar-xs rounded-circle me-2">
                        <span class="text-sm  font-weight-semi-bold">Richard Jason</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- testimonial -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section post  -->
      <div class="py-lg-11 py-7 bg-light">
        <div class="container">
          <div class="row">
            <!-- section heading -->
            <div class="col-md-12 col-sm-12 col-12 text-center">
              <div class="mb-8">
                <h2 class="mb-1">Latest From Blog Posts </h2>
                <p>We want to make sure that you get to explore as much.
                </p>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="mb-6 mb-md-0">
                <!-- post classic block -->

                  <a href="pages/blog-single.html"><img src="assets/images/listing-img-1.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme"
                      class="w-100 rounded-3 img-hover"></a>


                <div class="mt-4">
                  <div class="text-sm mb-1">
                    <span class="me-2 font-weight-semi-bold">Oct 17, 2021</span>
                    <span class="font-weight-semi-bold"><a href="#">Experiance</a> </span>
                  </div>
                  <h4 class="mb-0"><a href="pages/blog-single.html" class="text-inherit">Aenean laoreet neque bibendum
                      mi ullamcorper accumsan. </a>
                  </h4>

                  <!-- postmeta-->
                </div>
              </div>
            </div>
            <!-- /.post classic block -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="mb-6 mb-md-0">
                <!-- post classic block -->

                  <a href="pages/blog-single.html"><img src="assets/images/listing-img-2.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme"
                      class="w-100 rounded-3 img-hover"></a>


                <div class="mt-4">
                  <div class="text-sm mb-1">
                    <span class="me-2 font-weight-semi-bold">Oct 16, 2021</span>
                    <span class="font-weight-semi-bold"><a href="#">Homes</a></span>
                  </div>
                  <h4 class="mb-0"><a href="pages/blog-single.html" class="text-inherit">Nunc eu quam et massa tempus
                      vehicula.</a></h4>

                </div>
              </div>
            </div>
            <!-- /.post classic block -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-md-none d-lg-block">
              <div class="mb-6 mb-md-0">
                <!-- post classic block -->
                  <a href="pages/blog-single.html"><img src="assets/images/listing-img-3.jpg"  alt="Rentkit Directory & Listing Bootstrap 5 Theme"
                      class="w-100 rounded-3 img-hover"></a>

                <div class="mt-4">
                  <div class="text-sm mb-1">
                    <span class="me-2 font-weight-semi-bold">Oct 15, 2021</span>
                    <span class="font-weight-semi-bold"><a href="#">Company</a></span>
                  </div>
                  <h4 class="mb-0"><a href="pages/blog-single.html" class="text-inherit"> Lorem ipsum dolor sit amet
                      simon consectetur adipisicing elit.</a></h4>
                </div>
              </div>
            </div>
            <!-- /.post classic block -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4">
              <a href="pages/blog.html" class="btn btn-primary">More Blogs</a>
            </div>
          </div>
        </div>
      </div>
      <!-- cta  -->
      <div class="py-xl-17 py-7 " style="background:url(assets/images/call-action-img.jpg)no-repeat">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
              <h2 class="text-white mb-2 display-5">Want To Become Host?</h2>
              <p class="text-white mb-6 lead">Fusce ut varius estfacilisis tellusecenas ornare suscipit justsed
                dapibus
                ante.
              </p>
              <a href="pages/add-listing.html" class="btn btn-white ">List your space</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  @endsection