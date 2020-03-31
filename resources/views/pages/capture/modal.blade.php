<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="ConsentForm">
                <div class="modal-body">

                        <div class="form-group">
                            <label>Post publicly?</label>
                            <div class="kt-radio-inline">
                                <label class="kt-radio">
                                    <input type="radio" name="public" value="1" required > Yes
                                    <span></span>
                                </label>
                                <label class="kt-radio">
                                    <input type="radio" name="public" value="0" required> No
                                    <span></span>
                                </label>
                            </div>
                            <span class="form-text text-muted">If posted publicly, other parents can hear what you have to say.</span>
                        </div>
                        <div class="form-group">
                            <label>May we transcribe your recording?</label>
                            <div class="kt-radio-inline">
                                <label class="kt-radio">
                                    <input type="radio" name="transcribe" value="1" > Yes
                                    <span></span>
                                </label>
                                <label class="kt-radio">
                                    <input type="radio" name="transcribe" value="0"> No
                                    <span></span>
                                </label>
                            </div>
                            <span class="form-text text-muted">If posted transcribed, your recording will help a lot more people.</span>
                        </div>
                        <div class="form-group">
                            <label>Can we share your recording/transcripts?</label>
                            <div class="kt-radio-inline">
                                <label class="kt-radio">
                                    <input type="radio" name="share" value="1" > Yes
                                    <span></span>
                                </label>
                                <label class="kt-radio">
                                    <input type="radio" name="share" value="0"> No
                                    <span></span>
                                </label>
                            </div>
                            <span class="form-text text-muted">If shared, your recording will help a lot more people.</span>
                        </div>
                        <div class="form-group">
                            <label>Are you willing to contribute to science?</label>
                            <div class="kt-radio-inline">
                                <label class="kt-radio">
                                    <input type="radio" name="contribute" value="1" > Yes
                                    <span></span>
                                </label>
                                <label class="kt-radio">
                                    <input type="radio" name="contribute" value="0"> No
                                    <span></span>
                                </label>
                            </div>
                            <span class="form-text text-muted">We will never spam you.</span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="upload">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>