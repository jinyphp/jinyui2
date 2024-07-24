<x-card>
    <x-card-header>
        <h5 class="card-title">Inline form</h5>
        <h6 class="card-subtitle text-muted">Single horizontal row.</h6>
    </x-card-header>
    <x-card-body>
        <form >
            <div class="row row-cols-md-auto align-items-center">
                
                <x-form-inline>
                    <x-form-label for="inlineFormInputName2">
                        Name
                    </x-form-label>
                    <x-form-item>
                        <input type="text" class="form-control mb-2 me-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                    </x-form-item>
                </x-form-inline>
                
                <x-form-inline>
                    <x-form-label for="inlineFormInputGroupUsername2">
                        Username
                    </x-form-label>
                    <x-form-item class="input-group mb-2 me-sm-2">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </x-form-item>
                </x-form-inline>

                <x-form-inline>
                    <div class="form-check mb-1 me-sm-2">
                        <input type="checkbox" class="form-check-input" id="customControlInline">
                        <label class="form-check-label" for="customControlInline">Remember me</label>
                    </div>
                </x-form-inline>
    
                <x-form-inline>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </x-form-inline>
    
            </div>
            
        </form>
    </x-card-body>
</x-card>
