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

                    <div class="card-body p-4">
                        <h3 class="fs-4 mb-1">My Profile</h3>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="name" class="mb-2">Name: {{ $user->name }}</label>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="email" class="mb-2">Email: {{ $user->email }}</label>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="contact" class="mb-2">Contact No: {{ $user->contact }}</label>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="bio" class="mb-2">Bio : {{ $user->bio }}</label>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="city" class="mb-2">City: {{ $user->city }}</label>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="country" class="mb-2">Country: {{ $user->country }}</label>
                            </div>
                            @if ($user->resume)
                            <div class="col-md-6 mb-1">
                                <a href="{{ asset('storage/' . $user->resume) }}" target="_blank" class="">View Resume</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer p-4">
                        <a href="{{route('edit-profile', $user->id)}}"><button type="submit" class="btn btn-primary">Edit Profile</button></a>
                    </div>
                    
                </div>

                <!-- Education Section -->
                <div class="card border-0 shadow mb-4">
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
                                            <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No education history found.</p>
                        @endif

                    </div>
                    <div class="card-footer p-4">
                        <a href="{{route('create-education')}}"><button type="button" class="btn btn-primary">Add Education</button></a>
                    </div>
                </div>


                <!-- Certifications Section -->
                <div class="card border-0 shadow mb-4">
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
                                            <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No certifications found.</p>
                        @endif
                        
                    </div>
                    <div class="card-footer p-4">
                        <a href="{{route('create-certification')}}"><button type="button" class="btn btn-primary">Add certifications</button></a>
                    </div>
                </div>     
                
                <!-- Experience Section -->
                <div class="card border-0 shadow mb-4">
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
                                            <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No certifications found.</p>
                        @endif

                    </div>
                    <div class="card-footer p-4">
                        <a href="{{route('create-experience')}}"><button type="button" class="btn btn-primary">Add Experience</button></a>
                    </div>
                </div>

                {{-- <div class="card border-0 shadow mb-4">
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
                </div> --}}

            </div>
        </div>
    </div>

</section>

@include('layouts.partials.user_avatar')

@endsection
