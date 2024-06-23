@push('css')
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
@endpush
@push('scripts')
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
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
                            <h5 class="card-title">Bubble</h5>
                            <h6 class="card-subtitle text-muted">Bubble is a simple tooltip based theme for Quill.</h6>
                        </div>
                        <div class="card-body">
                            <div id="quill-bubble-editor" class="ql-container-fluid ql-bubble">

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var container-fluid = document.getElementById('quill-bubble-editor');
                        var editor = new Quill(container-fluid);
                    });
                </script>
            </div>

        </x-www-uidemo>
