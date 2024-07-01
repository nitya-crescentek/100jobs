@extends('layouts.master')

@section('content')

{{-- <h2 class="text-center">Welcome! {{ $user->name }}</h2> --}}

<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Account Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">

            @include('layouts.partials.profile_sidebar')

            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                    <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')

                        <div class="card-body p-4">
                            <h3 class="fs-4 mb-1">My Profile</h3>
                            <div class="mb-4">
                                <label for="name" class="mb-2">Name*</label>
                                <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="mb-2">Email*</label>
                                <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="mb-4">
                                <label for="contact" class="mb-2">Contact No*</label>
                                <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control" value="{{ $user->contact }}">
                            </div>
                            <div class="mb-4">
                                <label for="bio" class="mb-2">Bio*</label>
                                <input type="text" name="bio" id="bio" placeholder="Bio" class="form-control" value="{{ $user->bio }}">
                            </div>
                            <div class="mb-4">
                                <label for="city" class="mb-2">City*</label>
                                <input type="text" name="city" id="city" placeholder="City" class="form-control" value="{{ $user->city }}">
                            </div>
                            <div class="mb-4">
                                <label for="country" class="mb-2">Country*</label>
                                <input type="text" name="country" id="country" placeholder="Country" class="form-control" value="{{ $user->country }}">
                            </div>
                            <div class="mb-4">
                                <label for="resume" class="mb-2">Resume*</label>
                                <input type="file" name="resume" id="resume" class="form-control">
                            </div>
                            @if ($user->resume)
                            <div class="mb-4">
                                <label for="resume_link" class="mb-2">Your Current Resume</label>
                                <a href="{{ asset('storage/' . $user->resume) }}" target="_blank" class="form-control">View</a>
                            </div>
                            @endif
                        </div>
                        <div class="card-footer p-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h3 class="fs-4 mb-1">Change Password</h3>
                        <div class="mb-4">
                            <label for="old_password" class="mb-2">Old Password*</label>
                            <input type="password" name="old_password" id="old_password" placeholder="Old Password" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="new_password" class="mb-2">New Password*</label>
                            <input type="password" name="new_password" id="new_password" placeholder="New Password" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="confirm_password" class="mb-2">Confirm Password*</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control">
                        </div>                        
                    </div>
                    <div class="card-footer p-4">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.partials.user_avatar')

@endsection
