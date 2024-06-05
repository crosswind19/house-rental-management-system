@extends('layouts.app')

@section('content')
<!-- listing slide -->
{{-- <div class="container pt-5 mt-5">
    <div class="ratio ratio-16x9 rounded-3" style="background-image: url('{{ Storage::url(json_decode($property->photo)[0]) }}'); background-size: cover; background-position: center;">        <div class="row">
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
</div> --}}
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                <div class="card mb-4">
                    <!-- listing detail head -->
                    <div class="card-body p-4">
                        <h2 class="mb-2"> {{$property->property_name}} </h2> 
                        <p class="mb-4 fs-6">{{$property->city}}, {{$property->state}}</p>
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
                
                <div class="card mb-4" id="gallery">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Gallery</h4>
                        <div class="zoom-gallery">
                            <div class="row">
                                @if($property->photo)
                                    @foreach(json_decode($property->photo) as $photo)
                                        <div class="col-md-4">
                                            <a href="{{ Storage::url($photo) }}" title="Property Photo">
                                                <img src="{{ Storage::url($photo) }}" class="img-fluid rounded-3 mb-4" alt="Property Photo">
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
                    <!-- listing widget -->
                    <div class="card mb-4 ">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="fw-bold">$120</h3><small class="text-muted ms-2">/ night</small>
                            </div>
                            <div>
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Your Stay</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="dateSelect" placeholder="Select Date" aria-label="Recipient's username">
                                            <span class="input-group-text bg-transparent"><i
                      class="mdi mdi-calendar-month-outline"></i></span>
                                        </div>
                                    </div>
                                    <!-- select -->
                                    <select class="select2">
                <option>Guest</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary " type="button">Check
                  Availability</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- listing widget -->
                    <!-- listing widget -->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <h5 class="mb-0">Tenant <span class="mdi mdi-medal text-primary float-right"></span></h5>
                            <div class="text-center mt-4">
                                <img src="../assets/images/avatar-3.jpg " alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="rounded-circle avatar avatar-lg mb-2">
                                <h5 class="mb-0">Juana Henry</h5>
                                <small>joined in january 2017</small>
                                <p class="mb-0 mx-5 mt-3">Duis varius finibus felis, a tincidunt sedmauris varius eudeunc aliquet ipsum odio id luctus quam dapibus sem.</p>
                            </div>
                        </div>
                        <div class="border-top card-body p-4 text-center">
                            <p class="mb-0">Response rate: <span class="text-primary">100%</span></p>
                            <p>Response time: <span class="text-primary">within an hour</span></p>
                            <div class="d-grid mx-8">
                                <a href="#" class="btn btn-dark">Contact Host</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- listing detail -->
                <div class="d-grid">
                    <a href="#" class="btn btn-light mb-4"><i class="mdi mdi-flag-variant-outline me-1"></i>Report this
        listing</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection