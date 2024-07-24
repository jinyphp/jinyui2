<style>
.dropzone {
    border: 2px dashed #dee2e6;
    background: #fff;
    border-radius: 6px;
    cursor: pointer;
    min-height: 150px;
    padding: 20px
}

.dropzone .dz-message {
    text-align: center;
    margin: 2rem 0
}

.dropzone.dz-started .dz-message {
    display: none
}
</style>

<!-- Dropzone File Upload -->
<form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container-fluid="#file-previews"
    data-upload-preview-template="#uploadPreviewTemplate">

    <div class="fallback">
        <input name="file" type="file" multiple />
    </div>

    <div class="dz-message needsclick">
        <!-- cloud-upload -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>

        
        <h3>Drop files here or click to upload.</h3>
        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
            <strong>not</strong> actually uploaded.)</span>
    </div>
</form>

<!-- Preview -->
<div class="dropzone-previews mt-3" id="file-previews">
    
</div>

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

<!-- plugin js -->
<script src="/assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="/assets/js/ui/component.fileupload.js"></script>