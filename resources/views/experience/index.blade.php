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
                            <td>
                                <div class="action-dots">
                                    <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
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