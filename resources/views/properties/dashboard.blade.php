@extends('layouts.app')

@section('content')

<!-- Container fluid -->
<div class="container-fluid px-lg-10  p-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class=" mb-4 d-flex justify-content-between align-items-center">
          <div>
            <h1 class="mb-0 fw-bold h2">Your Listings</h1>

          </div>
          <div class="d-flex">

            <a href="{{ route('properties.create')}}" class="btn btn-primary">Create a new Listing</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm border-0">
          <div class="card-header d-flex justify-content-between p-4 bg-white border-bottom-0">
            <div>
              <form class="d-flex align-items-center">

                <input type="search" class="form-control" placeholder="Search by name, tags etc..." />
              </form>
            </div>
            <div class="btn btn-outline-white border text-muted">

              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-sliders">
                <line x1="4" y1="21" x2="4" y2="14"></line>
                <line x1="4" y1="10" x2="4" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12" y2="3"></line>
                <line x1="20" y1="21" x2="20" y2="16"></line>
                <line x1="20" y1="12" x2="20" y2="3"></line>
                <line x1="1" y1="14" x2="7" y2="14"></line>
                <line x1="9" y1="8" x2="15" y2="8"></line>
                <line x1="17" y1="16" x2="23" y2="16"></line>
              </svg>
            </div>

          </div>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead class="table-light">
                <tr>
                  <th class="border-top-0 border-bottom-0 ">Listing </th>
                  <th class="border-top-0 border-bottom-0">Status</th>
                  <th class="border-top-0 border-bottom-0">Booking</th>
                  <th class="border-top-0 border-bottom-0">Location</th>
                  <th class="border-top-0 border-bottom-0">Reviews</th>
                  <th class="border-top-0 border-bottom-0">Last modified</th>
                  <th class="border-top-0 border-bottom-0"></th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-1.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Beautiful Cozy Home</a></h5>
                        <small class="text-muted">1009 Java Lane Batesburg, SC 29006</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Ahmedabad</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>23 Reviews</span></td>
                  <td class="align-middle">May 26, 2022</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                  <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-2.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Beautiful Cozy Home</a></h5>
                        <small class="text-muted">1009 Java Lane Batesburg, SC 29006</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-danger">
                      Inactive
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-muted" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Surat</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>41 Reviews</span></td>
                  <td class="align-middle">May 30, 2022</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-3.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Entire 3 BHK Cozy Apartment</a></h5>
                        <small class="text-muted">Ahmedabad, Gujarat, India</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Rajkot</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>41 Reviews</span></td>
                  <td class="align-middle">3 days ago</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-4.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Private Room No 4 - Boulevard View</a></h5>
                        <small class="text-muted">Udaipur, Rajasthan, India</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Udaipur</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>75 Reviews</span></td>
                  <td class="align-middle">24 May</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-5.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Modern & flexible home</a></h5>
                        <small class="text-muted">1009 Java Lane Batesburg, SC 29006</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Maldives</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>86 Reviews</span></td>
                  <td class="align-middle">29 May</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-6.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">HANUMAN | A Luxury Pool Villa | 3-Bedroom</a></h5>
                        <small class="text-muted">Surat Thani, Koh Samui, Thailand </small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Thailand</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>98 Reviews</span></td>
                  <td class="align-middle">24 May</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-7.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">house with amazing view of sea & sunset</a></h5>
                        <small class="text-muted">1009 Java Lane Batesburg, SC 29006 </small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Greece</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>44 Reviews</span></td>
                  <td class="align-middle">22 May</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
                <tr>

                  <td class="">
                    <div class="d-flex align-items-center">
                      <a href="#"> <img src="../../assets/images/listing-img-8.jpg" alt=""
                          class=" rounded img-4by3-md "></a>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1"> <a href="#" class="text-inherit">Beach Studios, Vathi, Sifnos</a></h5>
                        <small class="text-muted">Vathi, Sifnos, Greece </small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle"><span class="badge bg-success">
                      Active
                    </span></td>
                  <td class="align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-lightning-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                    </svg>
                  </td>
                  <td class="align-middle">Greece</td>
                  <td class="align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-star-fill text-primary me-2 align-text-top"
                      viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><span>13 Reviews</span></td>
                  <td class="align-middle">2:55PM</td>
                  <td class="text-muted align-middle border-top-0 text-end">
                    <span class="dropdown dropstart">
                      <a class="" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                        data-bs-offset="-20,20" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1"></circle>
                          <circle cx="12" cy="5" r="1"></circle>
                          <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="courseDropdown2" style="">

                        <a class="dropdown-item" href="#">
                          Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          Relist
                        </a>
                        <a class="dropdown-item" href="#">
                          Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          Unlist
                        </a>
                        <a class="dropdown-item" href="#">
                          Delete
                        </a>

                      </span>
                    </span>
                  </td>
                </tr>
               
              </tbody>
            </table>
          </div>
          <div class="px-4 pb-4">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                      <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-left"></i></a>
                  </li>
                  <li class="page-item active">
                      <a class="page-link mx-1 rounded" href="#">1</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#">2</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#">3</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                  </li>
              </ul>
          </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection