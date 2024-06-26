@extends('layouts.page')

@section('title', 'Property - ' . config('app.name'))

@section('content')

<!-- listing slide -->
<div class="container pt-5 mt-5">
    <div class="ratio ratio-16x9 rounded-3" style="background-image: url('{{ Storage::url(json_decode($property->photo)[0]) }}'); background-size: cover; background-position: center;">        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- listing badges -->
                <div class="position-absolute bottom-0 mb-5 ms-5">
                    <div>
                        <a href="#" class="btn btn-white btn-sm"> <span class="mdi mdi-heart me-1 text-danger"></span>Save</a>
                        <a href="#gallery" class="btn btn-white btn-sm">View Photos</a>
                    </div>
                </div>
                <!-- listing badges -->
            </div>
        </div>
    </div>
</div>
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                <div class="card mb-4">
                    <!-- listing detail head -->
                    <div class="card-body p-4">
                        <h2 class="mb-2"> {{$property->property_name}} </h2> 
                        <p class="mb-4 fs-6">{{$property->city}}, {{$property->state->name}}</p>
                        <p>{{$property->build_up_area}} SQFT</p>
                        <div class="text-sm">
                            <span class="me-2"><i class="mdi mdi-home text-primary"></i><span class="ms-2">{{$property->bedroom}} Bedroom</span></span>
                            <span class="me-2"><i class="mdi mdi-scale-bathroom text-primary"></i><span class="ms-2">{{$property->bathroom}} Bath</span></span>
                            <span class="me-2"><i class="mdi mdi-car text-primary"></i><span class="ms-2">{{$property->car_park}} Car Park</span></span>
                        </div>
                    </div>
                    <!-- listing detail head -->
                </div>
                <!-- listing detail -->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h4>Overview</h4>
                        {{-- <p>Convallis nulla felis id lacus. Nam lectus duiultricies ac augue ultrices mattis pellentesque one neqpulvinar quam turpissit amet suscipit turpis elementum in.auris laoreet porttitor lacus non rhoncusulla congue augue at
                            sagittis volutpat, arcu ipsum prpurus.Praesent dictum, arcu eu convallis accumsan, neque turpis convallis elit, nec lacinia neque tortor id mauris. </p>
                        <p class="mb-0">Phasellus eu leo rhoncus, cursus erat id, volutpat nisl. Proin sed laoreet felis. Aenean sollicitudin dictum augue, non scelerisque nulla cursus vitae. Mauris molestie, tellus sed vehicula ultricies, ex arcu semper nibh,
                            eu malesuada turpis metus a orci. Pellentesque consequat, tortor sit amet hendrerit ornare, mi erat ultricies eros, placerat auctor lacus erat a tortorefficitur non. Maecenas a molestie lorem. </p> --}}
                            <p>{!! nl2br(e($property->description)) !!}</p>
                    </div>
                </div>
                {{-- <div class="card mb-4">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Amenities</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-unstyled">
                                    <li class="list-item"><span class="mdi mdi-air-conditioner me-2 text-dark fs-5"></span>Air conditioning
                                    </li>
                                    <li class="list-item"><span class="mdi mdi-television-classic me-2 text-dark fs-5"></span>TV
                                    </li>
                                    <li class="list-item"><span class="mdi mdi-car-brake-parking me-2 text-dark fs-5"></span>Free parking on premises</li>
                                    <li class="list-item"><span class="mdi mdi-pool me-2 text-dark  fs-5"></span>Pool</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-unstyled">
                                    <li class="list-item"><span class="mdi mdi-thermometer-lines me-2 text-dark  fs-5"></span>Heating
                                    </li>
                                    <li class="list-item"><span class="mdi mdi-toilet me-2 text-dark  fs-5"></span>Toiletteries
                                    </li>
                                    <li class="list-item"><span class="mdi mdi-television me-2 text-dark  fs-5"></span>Desk for work
                                    </li>
                                    <li class="list-item"><span class="mdi mdi-washing-machine me-2 text-dark  fs-5"></span>Washing machine
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- review --}}
                {{-- <div class="card mb-4">
                    <div class="card-body p-4">
                        <h4>Reviews</h4>
                        <div class="row border-bottom mb-5 pb-5 mt-3">
                            <div class="col-md-2">
                                <div class="text-lg-center">
                                    <h2 class="display-5 fw-bold mb-0 lh-1">3.8</h2>
                                    <p class="mb-0">Reviews</p>
                                    <p><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-between">
                                    <div><span>Atmosphere</span></div>
                                    <div> <span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>                                                <span class="review-list-value">0.5</span></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><span>Security</span></div>
                                    <div> <span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>                                                <span class="review-list-value">0.5</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><span>Location</span></div>
                                    <div><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star-outline text-primary"></span>                                                <span>4.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><span>Facilities</span> </div>
                                    <div><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star-half text-primary"></span>
                                        <span>4.5</span></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-between">
                                    <div><span>Staff</span> </div>
                                    <div><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>
                                        <span>0.5</span></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><span>Cleanliness</span></div>
                                    <div><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>
                                        <span>0.5</span></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><span>Value of money</span></div>
                                    <div><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star-outline text-primary"></span>                                                <span>4.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div><img src="../assets/images/avatar-3.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-md avatar rounded-circle mb-3">
                                            <h5 class="mb-n1">James Duncan</h5>
                                            <small>30 May, 2021</small>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div>
                                            <h5 class="fw-bold mb-2">It was absolutely lovely.</h5>
                                            <p>Suspendisse potenti. Pellentesque sed elit a augue condimentum varius. Integer porttitor neque quis velit tempor malesuada ersusvelit. Fusce vitae nulla at magna hendrerit rint metus.
                                            </p>
                                            <span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div><img src="../assets/images/avatar-2.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="avatar-md avatar rounded-circle mb-3">
                                            <h5 class="mb-n1">Sameera Badami</h5>
                                            <small>30 May, 2021</small>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div>
                                            <h5 class="fw-bold mb-2">Superb Place for stay</h5>
                                            <p>The place is too good, the staff was very cooperative &responsive at any given time. What I appreciate the most is they arranged our stay in these times of crisis by doing their best in all manner. We
                                                are very grateful to them for that.
                                            </p>
                                            <span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span><span class="mdi mdi-star text-primary"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- listing detail -->
                </div> --}}
               
                <div class="card mb-4" id="gallery">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Gallery</h4>
                        <div class="zoom-gallery">
                            <div class="row">
                                @if($property->photo)
                                    @foreach(json_decode($property->photo) as $photo)
                                        <div class="col-md-4">
                                            <a href="{{ Storage::url($photo) }}" title="Property Photo">
                                                <img src="{{ Storage::url($photo) }}" class="img-fluid rounded-3 mb-4 fixed-height" alt="Property Photo">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- video --}}
                {{-- <div class="card mb-4">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Video</h4>
                        <div class="d-flex justify-content-center position-relative rounded py-16 border-white border rounded-lg " style="background-image: url(../assets/images/featured-img.jpg);">
                            <a class="popup-youtube icon-shape rounded-circle icon-xl text-decoration-none bg-white fs-3" href="https://www.youtube.com/watch?v=nb9gtT-BqRc">
                                <i class="mdi mdi-play"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h4 class="mb-1">Location</h4>
                        <p>Juana Henery’s place is located in Ahemedabad, Gujarat, India</p>
                        <div id="detailMap" class="listing-map"></div>
                    </div>
                </div>
                <!-- listing detail -->
                <!-- listing detail -->
                <div class="card mb-4 " id="faq">
                    <div class="card-body p-4">
                        <h4 class="mb-2">Frequently Ask Question</h4>
                        <p>Juana Henery’s place is located in Ahemedabad, Gujarat, India</p>
                        <div class="mb-3">
                            <h5 class="mb-1">Q. How manyhasellus velfelism pcommodo lacus?</h5>
                            <p>Suspendisse et risus non metus tincidunt aliquam. Aliquam ornare pellentesque eros necesdere fermentum. Aenean sit amet tellus nec ante dapibus congue at eget leo. </p>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-1">Q. Is there ferum efficitur feliendulla viverante sit ame?</h5>
                            <p>Phasellus vel felis fringilla pretium purus ucommodo lacuhasellus laoreet imperdiet arcuatesd posuere. Nunc posuere semper velit posuere sodales fringilla pretium. </p>
                        </div>
                        <div class="mb-0">
                            <h5 class="mb-1">Q. Why estibulum tristiqueorcid lobortis tincidun?</h5>
                            <p>Aliquam efficitur dolor interdum porttitor ultricieaecenas pretium volutpat commodtid dictum ipsumliquam scelerisque fermentum elitvel volutpat quam.</p>
                        </div>
                    </div>
                </div>
                <!-- listing detail -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-12 ">
                <!-- listing detail -->
                <div>
                     <!-- Booking Form -->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <h3 class="fw-bold">{{ $property->price }}</h3>
                                </div>
                                <div>
                                    <form action="{{ route('bookings.check', $property->id) }}" method="POST" onsubmit="combineTime()">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Select Date and Time for Viewing</label>
                                            <div class="input-group mb-3">
                                                <input type="date" class="form-control" id="date" name="date" value="{{session('date')}}" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="form-group">
                                                    <label for="hour-select">Hour:</label>
                                                    <select id="hour-select" class="form-control" name="hour" required></select>
                                                </div>
                                                <div class="form-group ml-2">
                                                    <label for="minute-select">Minute:</label>
                                                    <select id="minute-select" class="form-control" name="minute" required>
                                                        <option value="00">00</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" id="time" name="time">
                                        </div>
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary" type="submit">Check Availability</button>
                                        </div>
                                    </form>
                                    <!-- Success Message -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
                                    @if(session('availability'))
                                        @if(session('availability') == 'available')
                                            <div class="alert alert-success mt-3">The slot is available!</div>
                                            <form action="{{ route('bookings.store', $property->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="date" value="{{ session('date') }}">
                                                <input type="hidden" name="time" value="{{ session('time') }}">
                                                <div class="mb-3">
                                                    <label for="message" class="form-label">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                                </div>
                                                <button class="btn btn-success mt-2" type="submit">Register Booking for {{session('date')}}, {{session('time')}}</button>
                                            </form>
                                        @elseif(session('availability') == 'unavailable')
                                            <div class="alert alert-danger mt-3">The slot is not available.</div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                    </div>
                    <!-- Hosted by section -->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <h5 class="mb-0">Hosted by <span class="mdi mdi-medal text-primary float-right"></span></h5>
                            <div class="text-center mt-4">
                                <img src="{{ $user->avatar_url ?? '../assets/images/avatar-3.jpg' }}" alt="{{ $user->name }}" class="rounded-circle avatar avatar-lg mb-2">
                                <h5 class="mb-0">{{ $user->name }}</h5>
                                <small>joined in {{ $user->created_at->format('F Y') }}</small>
                                <p class="mb-0 mx-5 mt-3">{{ $user->bio ?? 'No bio available.' }}</p>
                            </div>
                        </div>
                        <div class="border-top card-body p-4 text-center">
                            <p class="mb-0">Response rate: <span class="text-primary">{{ $user->response_rate ?? 'N/A' }}</span></p>
                            <p>Response time: <span class="text-primary">{{ $user->response_time ?? 'N/A' }}</span></p>
                            <div class="d-grid mx-8">
                                <a href="#" class="btn btn-dark">Contact Host</a>
                            </div>
                        </div>
                    </div>
                <div class="d-grid">
                    <a href="#" class="btn btn-light mb-4"><i class="mdi mdi-flag-variant-outline me-1"></i>Report this
        listing</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-lg-12 pb-7 bg-white" id="similarspace">
    <div class="container">
        <div class="row">
            <!-- section heading  -->
            <div class=" col-md-12 col-12">
                <div class="mb-8 text-center">
                    <h2 class="mb-0">Similar Places to Stay</h2>
                </div>
            </div>
            <!-- section heading  -->
        </div>
        <div class="row">
            <div class="col-md-4 col-12">
                <!-- listing block  -->
                <div class="mb-4 mb-lg-0">
                    <div class="position-relative">
                        <div id="listcarouselTwo" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#listcarouselTwo" data-bs-slide-to="0" class="active rounded-circle"></li>
                                <li data-bs-target="#listcarouselTwo" data-bs-slide-to="1" class="rounded-circle"></li>
                                <li data-bs-target="#listcarouselTwo" data-bs-slide-to="2" class="rounded-circle"></li>
                            </ol>
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
                        <span class="badge bg-danger position-absolute start-0 ms-3 mt-3 top-0 z-1">Featured</span>
                    </div>
                    <div class="mt-3">
                        <h4 class="mb-0"> <a href="list-single.html" class="text-inherit">Beautiful Cozy Home</a></h4>
                        <p class="text-sm font-weight-semi-bold">Udaipur, Rajasthan, India</p>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class=" h5">{{$property->price}}</span>
                                {{-- <span class="text-sm font-weight-semi-bold ms-1">/night</span> --}}
                            </div>
                            <div>
                                <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                <span class="font-weight-semi-bold  text-sm"><span class="text-dark">5.0</span> (8)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- listing block  -->
            </div>
            <div class="col-md-4 col-12">
                <!-- listing block  -->
                <div class="mb-4 mb-lg-0">
                    <div class="position-relative">
                        <a href="list-single.html"> <img src="../assets/images/listing-img-2.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 rounded-3"></a>
                        <div class="btn-wishlist"></div>
                        <span class="badge bg-info position-absolute start-0 ms-3 mt-3">Promoted</span>
                    </div>
                    <div class="mt-3">
                        <div>
                            <h4 class="mb-0"> <a href="list-single.html" class="text-inherit">Affordable Long
              Term Room</a></h4>
                            <p class="text-sm font-weight-semi-bold">Daman, Daman and Diu, India</p>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class=" h5">$250</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                            </div>
                            <div>
                                <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.9</span> (6)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- listing block  -->
            </div>
            <div class="col-md-4 col-12">
                <!-- listing block  -->
                <div class="mb-4 mb-lg-0">
                    <div class="position-relative">
                        <div id="listcarouselThird" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#listcarouselThird" data-bs-slide-to="0" class="active rounded-circle"></li>
                                <li data-bs-target="#listcarouselThird" data-bs-slide-to="1" class="rounded-circle"></li>
                                <li data-bs-target="#listcarouselThird" data-bs-slide-to="2" class="rounded-circle"></li>
                            </ol>
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
                            <a class="carousel-control-prev" href="#listcarouselThird" role="button" data-bs-slide="prev">
                                <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#listcarouselThird" role="button" data-bs-slide="next">
                                <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                        <div class="btn-wishlist"></div>

                    </div>
                    <div class="mt-3">

                        <h4 class="mb-0"> <a href="list-single.html" class="text-inherit">Entire 3 BHK Cozy
            Apartment</a>
                        </h4>
                        <p class="text-sm font-weight-semi-bold">Ahmedabad, Gujarat, India</p>

                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class=" h5">$180</span><span class="text-sm font-weight-semi-bold ms-1">/night</span>
                            </div>
                            <div>
                                <span class="mdi mdi-star me-1 text-primary text-sm"></span>
                                <span class="font-weight-semi-bold  text-sm"><span class="text-dark">4.7</span> (4)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- listing block  -->
            </div>
        </div>
    </div>
</div>

<style>
    .fixed-height {
        height: 200px; /* Set your desired height */
        width: 100%;
        object-fit: cover; /* Ensures the image covers the area without distortion */
    }
</style>

<script>
    
</script>
@endsection