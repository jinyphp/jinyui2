@push('css')
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
@endpush
@push('scripts')
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        	<li class="breadcrumb-item active">Editors</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Editors</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Quill</h5>
                            <h6 class="card-subtitle text-muted">Modern WYSIWYG editor built for compatibility and extensibility.</h6>
                        </div>
                        <div class="card-body">
                            <div class="clearfix">

                                <div id="snow-editor">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var toolbarOptions = [
                                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                ['blockquote', 'code-block'],

                                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                                [{ 'direction': 'rtl' }],                         // text direction

                                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                                [{ 'font': [] }],
                                [{ 'align': [] }],

                                ['clean']                                         // remove formatting button
                            ];

                        var container-fluid = document.getElementById('quill-editor');
                        var editor = new Quill(container-fluid,{
                            modules: {
                                toolbar: toolbarOptions
                            },
                            theme: 'snow'
                        });
                    });
                </script>
                --}}
                <script>
                    var quill = new Quill("#snow-editor", {
                            theme: "snow",
                            modules: {
                                toolbar: [
                                    [{
                                        font: []
                                    }, {
                                        size: []
                                    }],
                                    ["bold", "italic", "underline", "strike"],
                                    [{
                                        color: []
                                    }, {
                                        background: []
                                    }],
                                    [{
                                        script: "super"
                                    }, {
                                        script: "sub"
                                    }],
                                    [{
                                        header: [!1, 1, 2, 3, 4, 5, 6]
                                    }, "blockquote", "code-block"],
                                    [{
                                        list: "ordered"
                                    }, {
                                        list: "bullet"
                                    }, {
                                        indent: "-1"
                                    }, {
                                        indent: "+1"
                                    }],
                                    ["direction", {
                                        align: []
                                    }],
                                    ["link", "image", "video"],
                                    ["clean"]
                                ]
                            }
                        });
                </script>




            </div>

        </x-www-uidemo>
