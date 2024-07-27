<div class="card">
    <div class="card-header">
        <h5 class="card-title">Basic form</h5>
        <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
    </div>
    <div class="card-body">

        <form>

            <x-form-row>
                <x-form-label>
                    Email address
                </x-form-label>
                <x-form-item>
                    <input type="email" class="form-control" placeholder="Email">
                </x-form-item>
            </x-form-row>

            <x-form-row>
                <x-form-label>
                    Password
                </x-form-label>
                <x-form-item>
                    {!! CPassword()->addClass("form-control")->setPlaceholder("Password") !!}
                </x-form-item>
            </x-form-row>


            <x-form-row>
                <x-form-label>
                    Textarea
                </x-form-label>
                <x-form-item>
                    {!! CTextarea()->addClass("form-control")->setPlaceholder("Textarea")->setRows(5) !!}
                </x-form-item>
            </x-form-row>


            <x-form-row>
                <x-form-label class="w-100">
                    File input
                </x-form-label>
                <x-form-item>
                    <input type="file">
                </x-form-item>
                <small class="form-text text-muted">Example block-level help text here.</small>
            </x-form-row>

            <x-form-row>
                <x-form-item>
                    <x-jiny-css::forms.checkbox>
                        <span class="form-check-label">Check me out</span>
                    </x-jiny-css::forms.checkbox>
                </x-form-item>
            </x-form-row>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
