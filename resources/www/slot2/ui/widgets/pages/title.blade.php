<!-- start page title -->
<x-row >
    <x-col class="col-8">
        <div class="page-title-box">                        
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                <li class="breadcrumb-item active">Images</li>
            </ol>                        
        
            <div class="mb-3">
                @if (isset($title))
                    <h1 class="h3 d-inline align-middle">{{$title}}</h1>
                @endif
                @if (isset($subtitle))
                    <p>{{$subtitle}}</p>
                @endif                
            </div>
        </div>
    </x-col>
</x-row>  
<!-- end page title -->