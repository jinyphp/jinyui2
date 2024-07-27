<div class="card">
    <div class="card-header">
        <h5 class="card-title">Horizontal form</h5>
        <h6 class="card-subtitle text-muted">Horizontal Bootstrap layout.</h6>
    </div>
    <div class="card-body">

        <form>

            {{ xFormItem()->setLabel('이메일11') }}
            {{ xFormItem()->setItem( xInputEmail('email')->setWidth("standard")->setPlaceholder('Email') ) }}
            {!! xFormItem()->horizontal()->addClass('mb-3') !!}



            <x-form-hor>
                <x-form-label>이메일(email)</x-form-label>
                <x-form-item>
                    {!! xInputEmail('email')->setWidth("standard")->setPlaceholder('Email') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>
                    Password
                </x-form-label>
                <x-form-item>
                    <input type="password" class="form-control" placeholder="Password">
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label class="col-form-label">
                    Textarea
                </x-form-label>
                <x-form-item>
                    <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                </x-form-item>
            </x-form-hor>
        



          
            <fieldset>
                <x-form-hor>
                    <x-form-label class="col-form-label pt-sm-0 ">
                        Radios
                    </x-form-label>
                    <x-form-item>
                        
                        <x-form-radio name="radio-3" checked="">
                            <span class="form-check-label">Default radio</span>
                        </x-form-radio>

                        <x-form-radio name="radio-3">
                            <span class="form-check-label">Second default radio</span>
                        </x-form-radio>

                        <x-form-radio name="radio-3" disabled="">
                            <span class="form-check-label">Disabled radio</span>
                        </x-form-radio>                        

                    </x-form-item>
                </x-form-hor>
            </fieldset>
        
            
        
            <x-form-hor>
                <x-form-label class="col-form-label pt-sm-0">
                    Checkbox
                </x-form-label>
                <x-form-item>
                    <x-form-checkbox>
                        <span class="form-check-label">Check me out</span>
                    </x-form-checkbox>
                </x-form-item>
            </x-form-hor>
            
            

            <x-form-hor>
                <x-form-item class="ms-sm-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </x-form-item>
            </x-form-hor>
            



    
        </form>
    </div>
</div>