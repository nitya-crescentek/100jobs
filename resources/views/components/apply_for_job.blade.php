<div class="modal fade" id="apply-for-job" tabindex="-1" aria-labelledby="ApplyJob" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title pb-0" id="ApplyJob">Want to apply for this job?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="post" action="{{ route('submit-job-application') }}" enctype="multipart/form-data">

                  @csrf
                  @method('post')

                  <div class="mb-3">
                      <label for="qualified" class="form-label">Are you qualified for this role?</label>
                      <div>
                          <input type="radio" id="qualified-yes" name="qualified" value="yes">
                          <label for="qualified-yes">Yes</label>
                      </div>
                      <div>
                          <input type="radio" id="qualified-no" name="qualified" value="no">
                          <label for="qualified-no">No</label>
                      </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <input type="hidden" value="{{$job->id}}" name="job_id">
                    <button type="submit" class="btn btn-primary mx-3">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div>
