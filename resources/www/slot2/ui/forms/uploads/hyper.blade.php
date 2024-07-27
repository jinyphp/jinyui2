<!-- plugin js -->
<script src="assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="assets/js/ui/component.fileupload.js"></script>


<!-- File Upload -->
<form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container-fluid="#file-previews"
    data-upload-preview-template="#uploadPreviewTemplate">
    <div class="fallback">
        <input name="file" type="file" multiple />
    </div>

    <div class="dz-message needsclick">
        <i class="h1 text-muted dripicons-cloud-upload"></i>
        <h3>Drop files here or click to upload.</h3>
        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
            <strong>not</strong> actually uploaded.)</span>
    </div>
</form>

<!-- Preview -->
<div class="dropzone-previews mt-3" id="file-previews"></div>

<!-- file preview template -->
<div class="d-none" id="uploadPreviewTemplate">
    <div class="card mt-1 mb-0 shadow-none border">
        <div class="p-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                </div>
                <div class="col ps-0">
                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                    <p class="mb-0" data-dz-size></p>
                </div>
                <div class="col-auto">
                    <!-- Button -->
                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                        <i class="dripicons-cross"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>