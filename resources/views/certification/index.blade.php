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
        <a href="{{route('create-certification')}}"><button type="button" class="btn btn-primary">Add certifications</button></a>
    </div>
</div>    