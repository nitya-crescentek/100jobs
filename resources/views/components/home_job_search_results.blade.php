@if($jobs->count())
    @foreach($jobs as $job)
        <div class="job-item results">
            <a href = {{route('single-job', $job->id)}}>
                <h5>{{ $job->role }}</h5>
            </a>
        </div>
    @endforeach
    <div class="job-item view-alljobs">
        <a href={{route('jobs')}}><p>View All Vacancies</p></a>
    </div>
@else
    <div class="job-item results none">
        <p>No jobs found.</p>
    </div>
    <div class="job-item view-alljobs">
        <a href={{route('jobs')}}><p>View All Vacancies</p></a>
    </div>
@endif