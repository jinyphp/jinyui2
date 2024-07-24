<x-theme theme="adminkit">
    <style>
    .indicator2 {
        /*background: $primary;
        box-shadow: $box-shadow;*/
        border-radius: 50%;
        display: block;
        height: 1.125rem;
        width: 1.125rem;
        padding: 1px;

        text-align: center;
        transition: top .1s ease-out;
        font-size: 0.675rem;
        /*color: $white;*/

        position: absolute;
        top: 0;
    right: -8px;
    }

    a:hover .indicator2 {
        top: -4px;
    }

  a:focus {
    outline: 0;
  }
    </style>
    
    


    <a href="" class="bg-blue-100">
        <span class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        
        <span class="indicator2 bg-primary text-white ">5</span>
        </span>
        
    </a>

</x-theme>