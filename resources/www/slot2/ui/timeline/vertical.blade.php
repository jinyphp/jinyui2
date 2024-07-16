@push('style')
<style>
.wrapper {
    background-color: #009578;
}

.timeline {
    margin: 0 auto;
    max-width: 750px;
    padding: 25px;
    display: grid;
    color: #ffffff;

    grid-template-columns: 1fr 3px 1fr;


}
.timeline__component {
    margin: 0 20px 20px 20px;
}
.timeline__date--right {
    text-align: right;
}
.timeline__middle {
    position:relative;
    background-color: white;
}
.timeline__point {
    background:white;

    position: absolute;
    top: 0;
    left:50%;
    width:15px;
    height:15px;    
    transform: translateX(-50%);
    border-radius: 50%


}
.timeline__component--bg {
    padding: 1.5em;
    background-color: gray;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
    border-radius: 10px;
}
.timeline_title {
    margin:0;
    font-size:1.15em;
    font-weight: bold;
}
.timeline_patagraph {
    line-height: 1.5;
}
.timeline__point--bottom {
    top:initial;
    bottom: 0;
}
</style>
@endpush

<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">                        
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">ui</a></li>
                        	<li class="breadcrumb-item active">Timeline</li>
                    	</ol>                        
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Timeline</h1>
                            <p>
                                
                            </p>
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

    <div class="timeline">

        <div class="timeline__component">
            <div class="timeline__date timeline__date--right">
                2021년 7월 15일
            </div>
        </div>

        <div class="timeline__middle">
            <div class="timeline__point"></div>
        </div>

        <div class="timeline__component timeline__component--bg">
         
            <h2 class="timeline_title">타이틀</h2>
            <p class="timeline_patagraph">fdasdjlkasldflk</p>
        </div>

        
        <div class="timeline__component">
            <div class="timeline__date timeline__date--right">
                2021년 7월 15일
            </div>
        </div>

        <div class="timeline__middle">
            <div class="timeline__point"></div>
            <div class="timeline__point timeline__point--bottom"></div>
        </div>

        <div class="timeline__component timeline__component--bg">
         
            <h2 class="timeline_title">타이틀</h2>
            <p class="timeline_patagraph">fdasdjlkasldflk</p>
        </div>



    </div>

        </x-container-fluid>
        
    </x-theme-layout>
</x-theme>


