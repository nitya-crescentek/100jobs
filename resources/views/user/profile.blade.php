@extends('layouts.master')

@section('content')

{{-- <h2 class="text-center">Welcome! {{ Auth::user()->name }}</h2> --}}

<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Account Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row"> 

            @include('layouts.partials.profile_sidebar')

            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body  p-4">
                        <h3 class="fs-4 mb-1">My Profile</h3>
                        <div class="mb-4">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" placeholder="Enter Name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Email*</label>
                            <input type="email" placeholder="Enter Email" class="form-control" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Contact No*</label>
                            <input type="number" placeholder="Contact" class="form-control" value="{{ Auth::user()->contact }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Bio*</label>
                            <input type="text" placeholder="bio" class="form-control" value="{{ Auth::user()->bio }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">City*</label>
                            <input type="text" placeholder="City" class="form-control" value="{{ Auth::user()->city }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Country*</label>
                            <input type="text" placeholder="Country" class="form-control" value="{{ Auth::user()->country }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Resume*</label>
                            <input type="text" placeholder="Resume" class="form-control" value="{{ Auth::user()->resume }}">
                        </div>                        
                    </div>
                    <div class="card-footer  p-4">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>

                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h3 class="fs-4 mb-1">Change Password</h3>
                        <div class="mb-4">
                            <label for="" class="mb-2">Old Password*</label>
                            <input type="password" placeholder="Old Password" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">New Password*</label>
                            <input type="password" placeholder="New Password" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Confirm Password*</label>
                            <input type="password" placeholder="Confirm Password" class="form-control">
                        </div>                        
                    </div>
                    <div class="card-footer  p-4">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

@include('layouts.partials.user_avatar')


@endsection