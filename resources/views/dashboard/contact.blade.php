@extends('dashboard.master')
@section('header')
@endsection
@section('content')
<div class="col-lg-9 col-md-8">
    <div class="mb-4">
        <h1 class="mb-0 h3">Welcome to Admin Dashboard.</h1>
    </div>

    <div class="row mb-5 g-4">
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span>Contact Us Messages</span>
                    <h3 class="mb-0 mt-4">{{count($allcontacts)}}</h3>
                </div>
            </div>
        </div>
       

    </div>

    <div class="row g-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-lg-5">
                <div class="mb-3 d-flex">
                    <h4 class="mb-0 m-2">Contact Us</h4>
                   
                  
                </div>

                <div class="accordion" id="accordionExampleOne">
                    @foreach($contacts as $key => $contact)
                    <div class="border mb-4 rounded-3 px-4 py-3">
                        <div class="d-flex align-items-start">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"></circle>
                                </svg>
                            </div>
                            <div class="d-lg-flex align-items-center justify-content-between w-100">
                                <div class="d-flex">
                                <img src='{{url("assets/images/avatar/fallback.jpg")}}' style='width:50px;height:50px;border-radius:50%'/>
                                    
                                    <div class="ms-4">
                                        <h5 class="mb-0">{{$contact->first_name}} - {{$contact->last_name}}</h5>
                                        <small>{{$contact->email}}</small>
                                    </div>
                                </div>
                                <div class="mt-4 mt-lg-0">
                                    <a href="#" class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#collapseDeviceTwo{{$key}}" aria-expanded="false" aria-controls="collapseDeviceTwo{{$key}}">
                                        See More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseDeviceTwo{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                            <div class="pt-4">
                                <div class="mb-4">
                                    <h6 class="mb-0">Details:</h6>
                                    <small>Phone : {{$contact->phone}}</small>
                                    <small>Email : {{$contact->phone}}</small>
                                </div>
                              

                                <h6 class="mb-1">Message :</h6>
                                <small>{{$contact->message}}</small>
                                <div class="mb-4">
                                    <h6 class="mb-0">Actions</h6>
                                    <a class='btn btn-primary' hrre='tel:{{$contact->phone}}'>Call</a>
                                    <a class='btn btn-info' hrre='https://wa.me/234{{substr($contact->phone,1)}}'>Message</a>
                                    <a class='btn btn-secondary' hrre='mailto:{{$contact->email}}'>Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class='pagination'>
                        {{ $contacts->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</div>

@endsection


@section('script')
@endsection