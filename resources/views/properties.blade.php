@extends('layouts.page')

@section('title', 'Properties - ' . config('app.name'))
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
@endsection
@section('content')
<div class="pt-8">

</div>
<div class="py-8 py-lg-8 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12">
                <h1 class="display-5 fw-bold mb-2">Listing Grid View</h1>
                <p class="lead">Explore our all-in-one rental platform, where you can find a variety of rental options to suit all your needs, easily accessible in one convenient location.
                </p>
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb" class="mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Listing Grid View</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div class="pb-lg-11 pb-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- card -->
                <div class=" position-sticky overflow-hidden h-auto top-0">
                    <div class="card mb-3">
                        <h4 class="card-header bg-white px-4 py-3"><span class="text-primary me-2"><i class="mdi mdi-tune"></i></span>Filter
                        </h4>
                        <!-- filter widget -->
                        <div class="card-body p-4 border-bottom">
                            <h5>Review Rating</h5>
                            <div class="mt-3">
                                <!-- radio -->
                                <div class="form-check text-primary">
                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio1"><span class="mdi mdi-star"></span> <span class="mdi mdi-star"></span> <span class="mdi mdi-star"></span> <span class="mdi mdi-star"></span>
              <span class="mdi mdi-star "></span></label>
                                </div>
                                <!-- radio -->
                                <div class="form-check custom-radio text-primary">
                                    <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio2"><span class="mdi mdi-star"></span> <span
                class="mdi mdi-star"></span> <span class="mdi mdi-star"></span> <span
                class="mdi mdi-star"></span>
            </label>
                                </div>
                                <!-- radio -->
                                <div class="form-check custom-radio text-primary">
                                    <input type="radio" id="customRadio3" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio3"><span class="mdi mdi-star"></span> <span
                class="mdi mdi-star"></span> <span class="mdi mdi-star"></span> </label>
                                </div>
                                <!-- radio -->
                                <div class="form-check custom-radio text-primary">
                                    <input type="radio" id="customRadio4" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio4"><span class="mdi mdi-star"></span> <span
                class="mdi mdi-star"></span> </label>
                                </div>
                                <!-- radio -->
                                <div class="form-check custom-radio text-primary">
                                    <input type="radio" id="customRadio5" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio5"><span class="mdi mdi-star"></span> </label>
                                </div>
                            </div>
                        </div>
                        <!-- filter widget -->

                        <div class="card-body p-4 border-bottom">
                            <h5 class="mb-4"> Pricing </h5>
                            <div class="price-menu-body mt-6">
                                <div id="slider-padding"></div>
                            </div>

                        </div>
                        <!-- filter widget -->
                        <div class="card-body p-4 border-bottom">
                            <h5>Amenities </h5>
                            <div class="mt-3">
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">Doorman
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                    <label class="form-check-label" for="customCheck2">Free parking
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                    <label class="form-check-label" for="customCheck3">Heating
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                    <label class="form-check-label" for="customCheck4">Hair dryer
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck5">
                                    <label class="form-check-label" for="customCheck5">Toiletteries </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck6">
                                    <label class="form-check-label" for="customCheck6">Pool
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck7">
                                    <label class="form-check-label" for="customCheck7">Wifi
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck8">
                                    <label class="form-check-label" for="customCheck8">Washing machine
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck9">
                                    <label class="form-check-label" for="customCheck9">Indoor fireplace
            </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck10">
                                    <label class="form-check-label" for="customCheck10">Desk for work
            </label>
                                </div>
                            </div>
                        </div>
                        <!-- filter widget -->
                        <!-- search -->
                        <div class="card-body p-4">
                            <a href="#" class="btn btn-primary btn-block">Search</a>
                        </div>
                        <!-- filter widget -->
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8  col-12">
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-4 col-8">
                        <div class="sorting">
                            <!-- select form -->
                            <select class="select2">
            <option selected>Default</option>
            <option value="1">Most Viewed</option>
            <option value="2">Newest Listing</option>
            <option value="3">Older Listing</option>
          </select>
                        </div>
                        <!-- select form -->
                    </div>
                    {{-- <div class="col-lg-9 col-md-8 col-4 text-end">
                        <div>
                            <a href="listing-list-view.html" class=" icon-shape icon-md  text-primary border rounded-1"><i class="mdi mdi-format-list-bulleted"></i></a>
                            <a href="listing-grid-view.html" class="active icon-shape icon-md bg-primary text-white border-primary rounded-1"><i class="mdi mdi-view-grid"></i></a>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    @foreach($properties as $property)
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <div id="listcarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="0" class="active rounded-circle"></li>
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="1" class="rounded-circle"></li>
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="2" class="rounded-circle"></li>
                                    </ol>
                                    <!-- carousel  -->
                                    <div class="carousel-inner rounded-3">
                                        @if($property->photo)
                                            @foreach(json_decode($property->photo) as $photo)
                                            <div class="carousel-item active">
                                                <img src="{{ Storage::url($photo) }}" alt="Property Photo" width="100">
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#listcarousel" role="button" data-bs-slide="prev">
                                        <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#listcarousel" role="button" data-bs-slide="next">
                                        <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                                <div class="btn-wishlist"></div>
                                <span class="badge bg-danger position-absolute top-0 ms-3 mt-3 z-1 ">Featured</span>
                            </div>
                            <div class="mt-3">
                                <h4 class="mb-0 text-truncate"> <a href="{{ route('property', $property->id) }}" class="text-inherit">{{ $property->property_name}}</a></h4>
                                <p class="text-sm font-weight-semi-bold">Udaipur, Rajasthan, India</p>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class="h5">$100</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">5.0</span> (8)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <div id="listcarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="0" class="active rounded-circle"></li>
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="1" class="rounded-circle"></li>
                                        <li data-bs-target="#listcarousel" data-bs-slide-to="2" class="rounded-circle"></li>
                                    </ol>
                                    <!-- carousel  -->
                                    <div class="carousel-inner rounded-3">
                                        <div class="carousel-item active">
                                            <img src="../assets/images/listing-img-4.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-5.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-6.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#listcarousel" role="button" data-bs-slide="prev">
                                        <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#listcarousel" role="button" data-bs-slide="next">
                                        <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                                <div class="btn-wishlist"></div>
                                <span class="badge bg-danger position-absolute top-0 ms-3 mt-3 z-1 ">Featured</span>
                            </div>
                            <div class="mt-3">
                                <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Beautiful Cozy Home</a></h4>
                                <p class="text-sm font-weight-semi-bold">Udaipur, Rajasthan, India</p>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class="h5">$100</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">5.0</span> (8)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <a href="list-single.html"> <img src="../assets/images/listing-img-2.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 rounded-3"></a>
                                <div class="btn-wishlist"></div>
                                <span class="badge bg-warning text-dark position-absolute start-0 ms-3 mt-3">Promoted</span>
                            </div>
                            <div class="mt-3">
                                <div>
                                    <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Affordable Long Term Room</a>
                                    </h4>
                                    <p class="text-sm font-weight-semi-bold">Daman, Daman and Diu, India</p>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class=" h5">$250</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.9</span> (6)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <div id="listcarouselTwo" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#listcarouselTwo" data-bs-slide-to="0" class="active rounded-circle"></li>
                                        <li data-bs-target="#listcarouselTwo" data-bs-slide-to="1" class="rounded-circle"></li>
                                        <li data-bs-target="#listcarouselTwo" data-bs-slide-to="2" class="rounded-circle"></li>
                                    </ol>
                                    <!-- carousel  -->
                                    <div class="carousel-inner rounded-3">
                                        <div class="carousel-item active">
                                            <img src="../assets/images/listing-img-1.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-2.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-3.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#listcarouselTwo" role="button" data-bs-slide="prev">
                                        <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#listcarouselTwo" role="button" data-bs-slide="next">
                                        <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                                <div class="btn-wishlist"></div>
                            </div>
                            <div class="mt-3">
                                <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Entire 3 BHK Cozy Apartment</a>
                                </h4>
                                <p class="text-sm font-weight-semi-bold">Ahmedabad, Gujarat, India</p>

                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class=" h5">$180</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.7</span> (4)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <a href="list-single.html">

                                    <img src="../assets/images/listing-img-5.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 rounded-3">
                                </a>
                                <div class="btn-wishlist"></div>

                            </div>
                            <div class="mt-3">
                                <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Private Room No 4 - Boulevard View</a></h4>
                                <p class="text-sm font-weight-semi-bold">Jaipur, Rajasthan, India</p>

                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class="h5">$150</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">5.0</span> (8)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <div id="listcarouselThree" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#listcarouselThree" data-bs-slide-to="0" class="active rounded-circle"></li>
                                        <li data-bs-target="#listcarouselThree" data-bs-slide-to="1" class="rounded-circle"></li>
                                        <li data-bs-target="#listcarouselThree" data-bs-slide-to="2" class="rounded-circle"></li>
                                    </ol>
                                    <!-- carousel  -->
                                    <div class="carousel-inner rounded-3">
                                        <div class="carousel-item active">
                                            <img src="../assets/images/listing-img-4.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-5.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/listing-img-6.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#listcarouselThree" role="button" data-bs-slide="prev">
                                        <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#listcarouselThree" role="button" data-bs-slide="next">
                                        <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                                <div class="btn-wishlist"></div>

                            </div>
                            <div class="mt-3">
                                <div>
                                    <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Spacious 2 Bed Family Apartments for vacation</a>
                                    </h4>
                                    <p class="text-sm font-weight-semi-bold">Ahmedabad, Gujarat, India</p>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class=" h5">$150</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.9</span> (6)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- listing block -->
                        <div class="mb-6">
                            <div class="position-relative">
                                <a href="list-single.html"> <img src="../assets/images/listing-img-3.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 rounded-3"></a>
                                <div class="btn-wishlist"></div>
                            </div>
                            <div class="mt-3">
                                <h4 class="mb-0 text-truncate"> <a href="list-single.html" class="text-inherit">Ground floor in bungalow; serene & well-connected</a>
                                </h4>
                                <p class="text-sm font-weight-semi-bold">Rajkot, Gujarat, India</p>

                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <span class=" h5">$180</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                                    </div>
                                    <div>
                                        <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                        <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.7</span> (4)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block -->
                    </div> --}}


                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection