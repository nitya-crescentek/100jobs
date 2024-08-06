@extends('layouts.master')

@section('content')
<section class="section-3 py-5 bg-2">
    <div class="container">     
        <div class="row">
            <div class="col-6 col-md-10">
                <h2>Jobs:</h2>  
            </div>
            <div class="col-6 col-md-2">
                <div class="align-end">
                    <select name="sort" id="sort" class="form-control">
                        <option value="">Latest</option>
                        <option value="">Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            @include('components.all_jobs_sidebar')

            <div class="col-md-8 col-lg-9">
                <div class="job_listing_area">

                    <div id="job-results" class="job_lists">
                        @include('components.job_list')
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        let timer;

        function fetchResults() {
            $.ajax({
                url: '{{ route("search") }}',
                type: 'GET',
                data: $('#search-form').serialize(),
                success: function(response) {
                    $('#job-results').fadeOut(200, function() {
                        $(this).html(response).fadeIn(200);
                    });
                },
                error: function(xhr) {
                    console.error('AJAX request failed', xhr);
                }
            });
        }

        $('#search-form input, #search-form select').on('input', function() {
            clearTimeout(timer);
            timer = setTimeout(fetchResults, 400);
        });
    });
</script>
@endsection



