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
            <p>No education history found.</p>
        @endif

    </div>
    <div class="card-footer p-4">
        <a href="{{route('create-education')}}"><button type="button" class="btn btn-primary">Add Education</button></a>
    </div>
</div>