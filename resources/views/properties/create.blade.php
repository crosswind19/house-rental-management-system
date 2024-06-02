@extends('layouts.app')

@section('content')
<!-- main wrapper  -->
<div class="main-wrapper">
        
    <!-- pageheader  -->
    <div class="py-6 py-lg-8 ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-12 text-center">
                    <h1>Listing Submission</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- form  -->
    <div class="pb-lg-11 pb-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Step 1 -->
                        <div class="row mb-8">
                            <div class="col-12">
                                <div class="mb-4 border-bottom pb-2">
                                    <h4 class="mb-0">Basic information</h4>
                                </div>
                            </div>
                            <!-- property name  -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="property_name" class="form-label">Property Name</label>
                                    <input type="text" class="form-control" id="property_name"
                                        placeholder="Enter Your Property Name" name="property_name" value="{{old('property_name')}}" required>
                                        @error('property_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <!-- property type  -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="property_type" class="form-label">Property Type</label>
                                    <select class="select2 form-control @error('property_type') is-invalid @enderror" id="property_type" name="property_type">
                                        <option value="Condo" {{ old('property_type') == 'Condo' ? 'selected' : '' }}>Condo</option>
                                        <option value="Landed" {{ old('property_type') == 'Landed' ? 'selected' : '' }}>Landed</option>
                                    </select>
                                    @error('property_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- furnishing_status  -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="furnishing" class="form-label">Furnishing Status</label>
                                    <select class="select2 form-control @error('furnishing') is-invalid @enderror" id="furnishing" name="furnishing">
                                        <option value="Fully Furnished" {{ old('furnishing') == 'Fully Furnished' ? 'selected' : '' }}>Fully Furnished</option>
                                        <option value="Partial Furnish" {{ old('furnishing') == 'Partial Furnish' ? 'selected' : '' }}>Partial Furnish</option>
                                        <option value="Retail" {{ old('furnishing') == 'Retail' ? 'selected' : '' }}>No Furnish</option>
                                    </select>
                                    @error('furnishing')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- build_up_area -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="build_up_area" class="form-label">Build Up Area (SQFT)</label>
                                    <input type="text" class="form-control @error('build_up_area') is-invalid @enderror" id="build_up_area"
                                        placeholder="Enter Your Area SQFT" name="build_up_area" value="{{ old('build_up_area') }}" required>
                                    @error('build_up_area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- address -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Street Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                        placeholder="Enter Your Street Address" name="address" value="{{ old('address') }}" required>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- country -->
                            <div class="col-md-12 col-12">
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="select2 form-control @error('country') is-invalid @enderror" id="country" name="country">
                                        <option value="Malaysia" {{ old('country') == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- state -->
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <select class="select2 form-control @error('state') is-invalid @enderror" id="state" name="state">
                                        <option value="Johor" {{ old('state') == 'Johor' ? 'selected' : '' }}>Johor</option>
                                        <option value="Kedah" {{ old('state') == 'Kedah' ? 'selected' : '' }}>Kedah</option>
                                        <option value="Kelantan" {{ old('state') == 'Kelantan' ? 'selected' : '' }}>Kelantan</option>
                                        <option value="Malacca" {{ old('state') == 'Malacca' ? 'selected' : '' }}>Malacca</option>
                                        <option value="Negeri Sembilan" {{ old('state') == 'Negeri Sembilan' ? 'selected' : '' }}>Negeri Sembilan</option>
                                        <option value="Pahang" {{ old('state') == 'Pahang' ? 'selected' : '' }}>Pahang</option>
                                        <option value="Penang" {{ old('state') == 'Penang' ? 'selected' : '' }}>Penang</option>
                                        <option value="Perak" {{ old('state') == 'Perak' ? 'selected' : '' }}>Perak</option>
                                        <option value="Perlis" {{ old('state') == 'Perlis' ? 'selected' : '' }}>Perlis</option>
                                        <option value="Sabah" {{ old('state') == 'Sabah' ? 'selected' : '' }}>Sabah</option>
                                        <option value="Sarawak" {{ old('state') == 'Sarawak' ? 'selected' : '' }}>Sarawak</option>
                                        <option value="Selangor" {{ old('state') == 'Selangor' ? 'selected' : '' }}>Selangor</option>
                                        <option value="Terengganu" {{ old('state') == 'Terengganu' ? 'selected' : '' }}>Terengganu</option>
                                        <option value="Kuala Lumpur" {{ old('state') == 'Kuala Lumpur' ? 'selected' : '' }}>Kuala Lumpur</option>
                                        <option value="Labuan" {{ old('state') == 'Labuan' ? 'selected' : '' }}>Labuan</option>
                                        <option value="Putrajaya" {{ old('state') == 'Putrajaya' ? 'selected' : '' }}>Putrajaya</option>
                                    </select>
                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- city -->
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <textarea class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="e.g Bukit Jalil" rows="1">{{ old('city') }}</textarea>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- zip code -->
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" placeholder="e.g 57000"
                                        name="zipcode" value="{{ old('zipcode') }}" required>
                                    @error('zipcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="bedroom" class="form-label">Bedroom</label>
                                    <input type="text" class="form-control @error('bedroom') is-invalid @enderror" id="bedroom" placeholder="e.g 57000"
                                        name="bedroom" value="{{ old('bedroom') }}" required>
                                    @error('bedroom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="bathroom" class="form-label">Bathroom</label>
                                    <input type="text" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom" placeholder="e.g 57000"
                                        name="bathroom" value="{{ old('bathroom') }}" required>
                                    @error('bathroom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="car_park" class="form-label">Car Park</label>
                                    <input type="text" class="form-control @error('car_park') is-invalid @enderror" id="car_park" placeholder="e.g 57000"
                                        name="car_park" value="{{ old('car_park') }}" required>
                                    @error('car_park')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Step 2 -->
                            {{-- <div class="row mb-8">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mb-4 border-bottom pb-2">
                                        <h4 class="mb-0">Disposition & Amenities</h4>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- bedroom list -->
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-dark">Bedroom</p>
                                        </div>
                                        <div class="input-group w-auto justify-content-end align-items-center">
                                            <input type="button" value="-"
                                                class="button-minus border bg-white rounded-circle  icon-shape icon-sm mx-1 lh-0"
                                                data-field="bedroom">
                                            <input type="number" step="1" max="10" value="{{ old('bedroom', 0) }}" name="bedroom"
                                                class="quantity-field border-0 text-center w-25 @error('bedroom') is-invalid @enderror">
                                            <input type="button" value="+"
                                                class="button-plus border bg-white rounded-circle icon-shape icon-sm lh-0"
                                                data-field="bedroom">
                                            @error('bedroom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- bathroom list -->
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-dark">Bathroom</p>
                                        </div>
                                        <div class="input-group w-auto justify-content-end align-items-center">
                                            <input type="button" value="-"
                                                class="button-minus border bg-white rounded-circle  icon-shape icon-sm mx-1 lh-0"
                                                data-field="bathroom">
                                            <input type="number" step="1" max="10" value="{{ old('bathroom', 0) }}" name="bathroom"
                                                class="quantity-field border-0 text-center w-25 @error('bathroom') is-invalid @enderror">
                                            <input type="button" value="+"
                                                class="button-plus border bg-white rounded-circle icon-shape icon-sm lh-0"
                                                data-field="bathroom">
                                            @error('bathroom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- car park -->
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-dark">Car Park</p>
                                        </div>
                                        <div class="input-group w-auto justify-content-end align-items-center">
                                            <input type="button" value="-"
                                                class="button-minus border bg-white rounded-circle  icon-shape icon-sm mx-1 lh-0"
                                                data-field="car_park">
                                            <input type="number" step="1" max="10" value="{{ old('car_park', 0) }}" name="car_park"
                                                class="quantity-field border-0 text-center w-25 @error('car_park') is-invalid @enderror">
                                            <input type="button" value="+"
                                                class="button-plus border bg-white rounded-circle icon-shape icon-sm lh-0"
                                                data-field="car_park">
                                            @error('car_park')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-12 mt-4">
                                <div class="mb-4 border-bottom pb-2">
                                    <h4 class="mb-0">Amenities</h4>
                                </div>
                            </div> --}}
                            <!-- checkboxs  -->
                            {{-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="balcony">
                                    <label class="form-check-label" for="balcony">Balcony</label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="balcony">
                                    <label class="form-check-label" for="balcony">Balcony</label>
                                </div>
                            </div> --}}
                            
                            
                        </div>
                        <div class="row mb-8">
                            <div class="col-lg-12">
                                <div class="mb-4 border-bottom pb-2">
                                    <h4 class="mb-0">Description</h4>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-8">
                                <textarea name="description" id="description" rows="10" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-lg-12 mt-5 mt-md-0">
                                <small>Write a quick summary of your place. You can highlight what’s special about your space</small>
                            </div>
                        </div>
                        <!-- gallery  -->
                        <div class="row mb-8">
                            <div class="col-lg-12">
                                <div class="mb-4 border-bottom pb-2">
                                    <h4 class="mb-0">Add Gallery Images </h4>
                                </div>
                            </div>
                            <!-- upload images  -->
                            {{-- <div class="col-lg-12">
                                <div id="drag-drop-area"></div>
                                <small class="mt-1">In asemeu lectus viverra aliquet ac quis magestibulum ac tempor
                                    magnteger.</small>
                            </div> --}}
                            
                        </div>
                        <div class="row" style="margin: 2% 8%">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Select Multiple Images</label>
                                <input type="file" class="form-control" id="photo" name="photo[]" multiple>
                                @foreach ($errors->get('photo.*') as $messages)
                                    @foreach ($messages as $message)
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @endforeach
                                @endforeach
                            </div>
                        <!-- price  -->
                        <div class="row mb-8">
                            <div class="col-lg-12">
                                <div class="mb-4 border-bottom pb-2">
                                    <h4 class="mb-0">Price </h4>
                                </div>
                            </div>
                            <!-- upload images  -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control " id="price"
                                        placeholder="Enter Your Price" name="price" required>
                                </div>
                            </div>

                        </div>
                        
                        <!-- submit button  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection