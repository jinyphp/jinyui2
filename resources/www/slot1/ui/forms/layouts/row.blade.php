<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form row</h5>
        <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
    </div>
    <div class="card-body">
        <form>

            <div class="row">
                <x-jiny-css::forms.row class="col-md-6">
                    <x-jiny-css::forms.label for="inputEmail4">
                        Email
                    </x-jiny-css::forms.label>
                    <x-jiny-css::forms.item>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </x-jiny-css::forms.item>
                </x-jiny-css::forms.row>

                <x-jiny-css::forms.row class="col-md-6">
                    <x-jiny-css::forms.label for="inputPassword4">
                        Password
                    </x-jiny-css::forms.label>
                    <x-jiny-css::forms.item>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </x-jiny-css::forms.item>
                </x-jiny-css::forms.row>
            </div>

            <x-jiny-css::forms.row>
                <x-jiny-css::forms.label for="inputAddress">
                    Address
                </x-jiny-css::forms.label>
                <x-jiny-css::forms.item>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </x-jiny-css::forms.item>
            </x-jiny-css::forms.row>

            <x-jiny-css::forms.row>
                <x-jiny-css::forms.label for="inputAddress2">
                    Address 2
                </x-jiny-css::forms.label>
                <x-jiny-css::forms.item>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </x-jiny-css::forms.item>
            </x-jiny-css::forms.row>



            <div class="row">
                <x-jiny-css::forms.row class="col-md-6">
                    <x-jiny-css::forms.label for="inputCity">
                        City
                    </x-jiny-css::forms.label>
                    <x-jiny-css::forms.item>
                        <input type="text" class="form-control" id="inputCity">
                    </x-jiny-css::forms.item>
                </x-jiny-css::forms.row>

                <x-jiny-css::forms.row class="col-md-4">
                    <x-jiny-css::forms.label for="inputState">
                        State
                    </x-jiny-css::forms.label>
                    <x-jiny-css::forms.item>
                        <select id="inputState" class="form-control">
                            <option selected="">Choose...</option>
                            <option>...</option>
                        </select>
                    </x-jiny-css::forms.item>
                </x-jiny-css::forms.row>

                <x-jiny-css::forms.row class="col-md-2">
                    <x-jiny-css::forms.label for="inputZip">
                        Zip
                    </x-jiny-css::forms.label>
                    <x-jiny-css::forms.item>
                        <input type="text" class="form-control" id="inputZip">
                    </x-jiny-css::forms.item>
                </x-jiny-css::forms.row>

            </div>

            <x-jiny-css::forms.row>
                <x-jiny-css::forms.item>
                    <x-jiny-css::forms.checkbox>
                        <span class="form-check-label">Check me out</span>
                    </x-jiny-css::forms.checkbox>
                </x-jiny-css::forms.item>
            </x-jiny-css::forms.row>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
