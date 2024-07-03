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
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="mb-2">Name*</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{ $user->name }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="mb-2">Email*</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" value="{{ $user->email }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="contact" class="mb-2">Contact No*</label>
                                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control" value="{{ $user->contact }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="bio" class="mb-2">Bio*</label>
                                    <input type="text" name="bio" id="bio" placeholder="Bio" class="form-control" value="{{ $user->bio }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="city" class="mb-2">City*</label>
                                    <input type="text" name="city" id="city" placeholder="City" class="form-control" value="{{ $user->city }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="country" class="mb-2">Country*</label>
                                    <input type="text" name="country" id="country" placeholder="Country" class="form-control" value="{{ $user->country }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="resume" class="mb-2">Resume*</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                @if ($user->resume)
                                <div class="col-md-6 mb-4">
                                    <label for="resume_link" class="mb-2">Your Current Resume</label>
                                    <a href="{{ asset('storage/' . $user->resume) }}" target="_blank" class="form-control">View</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer p-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

                <!-- Education Section -->
                <div class="card border-0 shadow mb-4">
                    <form action="{{route('add-education')}}" method="POST">

                        @csrf
                        @method('POST')
                        <div class="card-body p-4">
                            <h3 class="fs-4">Education History</h3>
                            @if ($user->educations->isNotEmpty())
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>College</th>
                                            <th>Degree</th>
                                            <th>Grade</th>
                                            <th>Skills Learned</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->educations as $education)
                                            <tr>
                                                <td>{{ $education->college }}</td>
                                                <td>{{ $education->degree }}</td>
                                                <td>{{ $education->grades }}</td>
                                                <td>{{ $education->skills_learned }}</td>
                                                <td>{{ $education->start }}</td>
                                                <td>{{ $education->end }}</td>
                                                <td><a href="#">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No education history found.</p>
                            @endif
                            <h3 class="fs-4 mb-1 mt-3">Add Education</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="college" class="mb-2">College*</label>
                                        <input type="text" name="college" id="college" placeholder="Enter College" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="degree" class="mb-2">Degree*</label>
                                        <input type="text" name="degree" id="degree" placeholder="Enter Degree" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="grades" class="mb-2">Grades*</label>
                                        <input type="text" name="grades" id="grades" placeholder="Enter Grades" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="skills_learned" class="mb-2">Skills Learned</label>
                                        <input type="text" name="skills_learned" id="skills_learned" placeholder="Enter Skills Learned" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="end" class="mb-2">End*</label>
                                        <input type="date" name="end" id="end" placeholder="Enter End Year" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start" class="mb-2">Start*</label>
                                        <input type="date" name="start" id="start" placeholder="Enter Start Year" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer p-4">
                            <input type="hidden" name="user_id" value="{{ $user->id}}">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>


                <!-- Certifications Section -->
                <div class="card border-0 shadow mb-4">
                    <form action="{{route('add-certification')}}" method="POST">

                        @csrf
                        @method('POST')
                        <div class="card-body p-4">
                            
                            <h3 class="fs-4">Certifications</h3>
                            @if ($user->certifications->isNotEmpty())
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Certification</th>
                                            <th>Issuing Authority</th>
                                            <th>Grade</th>
                                            <th>Year Obtained</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->certifications as $certification)
                                            <tr>
                                                <td>{{ $certification->name }}</td>
                                                <td>{{ $certification->institution }}</td>
                                                <td>{{ $certification->grade }}</td>
                                                <td>{{ $certification->year }}</td>
                                                <td>{{ $certification->duration }}</td>
                                                <td><a href="#">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No certifications found.</p>
                            @endif
                            <h3 class="fs-4 mb-1 mt-3">Add Certification</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="mb-2">Certification*</label>
                                        <input type="text" name="name" id="name" placeholder="Enter Certification" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="institution" class="mb-2">Issuing Authority*</label>
                                        <input type="text" name="institution" id="institution" placeholder="Enter Issuing Authority" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="grade" class="mb-2">Grade*</label>
                                        <input type="text" name="grade" id="grade" placeholder="Enter Grade" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="year" class="mb-2">Year Obtained*</label>
                                        <input type="date" name="year" id="year" class="form-control" value="">
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="duration" class="mb-2">Duration*</label>
                                        <input type="text" name="duration" id="duration" placeholder="Enter Duration" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer p-4">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>     
                
                <!-- Experience Section -->
                <div class="card border-0 shadow mb-4">
                    <form action="{{route('add-experience')}}" method="POST">

                        @csrf
                        @method('POST')
                        <div class="card-body p-4">
                            
                            <h3 class="fs-4">Experience</h3>
                            @if ($user->experiences->isNotEmpty())
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Role</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Skills</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->experiences as $experience)
                                            <tr>
                                                <td>{{ $experience->company }}</td>
                                                <td>{{ $experience->role }}</td>
                                                <td>{{ $experience->start }}</td>
                                                <td>{{ $experience->end }}</td>
                                                <td>{{ $experience->skills_gained }}</td>
                                                <td><a href="#">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No certifications found.</p>
                            @endif
                            <h3 class="fs-4 mb-1 mt-3">Add Experience</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="mb-2">Company*</label>
                                        <input type="text" name="company" id="name" placeholder="Enter Company Name" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="role" class="mb-2">Role*</label>
                                        <input type="text" name="role" id="role" placeholder="Enter Your Role" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start" class="mb-2">Start*</label>
                                        <input type="date" name="start" id="start" placeholder="Enter Start Date" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="end" class="mb-2">Last Date (leave if currently working)</label>
                                        <input type="date" name="end" id="end" class="form-control" value="">
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="skills_gained" class="mb-2">Skills Gained*</label>
                                        <input type="text" name="skills_gained" id="skills_gained" placeholder="Enter Skills" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer p-4">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-primary">Save</button>
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
