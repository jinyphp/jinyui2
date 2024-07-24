<style>

/* ###### 5.11 Select2 ###### */
.select2-results__option {
    border-radius: 0;
    margin-bottom: 1px;
    font-size: 13px;
}

.select2-container-fluid--default .select2-selection--single {
    background-color: #fff;
    border-color: #cdd4e0;
    border-radius: 3px;
    height: 38px;
    outline: none;
    border-radius: 0;
}

.select2-container-fluid--default .select2-selection--single .select2-selection__rendered {
    color: #596882;
    line-height: calc(1.5em + 0.75rem + 2px)-0.1rem;
    padding-left: 0.75rem;
    height: 100%;
    display: flex;
    align-items: center;
}

.select2-container-fluid--default .select2-selection--single .select2-selection__placeholder {
    color: #7987a1;
}

.select2-container-fluid--default .select2-selection--single .select2-selection__arrow {
    width: 30px;
    height: 38px;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container-fluid--default .select2-selection--single .select2-selection__arrow b {
    margin-top: -3px;
}

.select2-container-fluid--default .select2-selection--multiple {
    background-color: #fff;
    border-color: #cdd4e0;
    border-radius: 0;
    min-height: 38px;
    outline: none;
}

.select2-container-fluid--default .select2-selection--multiple .select2-selection__rendered {
    padding: 0 4px;
}

.select2-container-fluid--default .select2-selection--multiple .select2-selection__choice {
    position: relative;
    margin-top: 5px;
    margin-right: 4px;
    padding: 3px 10px 3px 20px;
    border-color: transparent;
    border-radius: 0;
    background-color: #5b47fb;
    color: #fff;
    line-height: 1.45;
}

.select2-container-fluid--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff;
    opacity: .5;
    font-size: 12px;
    display: inline-block;
    position: absolute;
    top: 4px;
    left: 7px;
}

.select2-container-fluid--default.select2-container-fluid--focus .select2-selection--multiple {
    border-color: #cdd4e0;
}

.select2-container-fluid--default .select2-search--dropdown .select2-search__field {
    border-color: #cdd4e0;
    border-radius: 0;
}

.select2-container-fluid--default .select2-results__option[aria-selected="true"] {
    background-color: white;
}

.select2-container-fluid--default .select2-results__option--highlighted[aria-selected] {
    background-color: #5b47fb;
}

.select2-container-fluid--default .select2-results>.select2-results__options {
    margin: 4px;
}

.select2-container-fluid--default .select2-search--inline .select2-search__field {
    margin-top: 7px;
    line-height: 26px;
    padding-left: 7px;
    opacity: 1;
}

.select2-container-fluid--default.select2-container-fluid--disabled .select2-selection__choice {
    padding-left: 10px;
    background-color: #97a3b9;
}

.select2-container-fluid--default.select2-container-fluid--disabled .select2-selection__choice .select2-selection__choice__remove {
    display: none;
}

.select2-container-fluid--open .select2-selection--single,
.select2-container-fluid--open .select2-selection--multiple {
    background-color: #fff;
    border-color: #cdd4e0;
}

.select2-container-fluid--open .select2-dropdown--above {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container-fluid--open .select2-dropdown--below {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    top: 0;
}

.select2-dropdown {
    border-color: #cdd4e0;
    z-index: 200;
}

.select2-search--dropdown {
    padding-bottom: 0;
}

.select2-results__option {
    padding: 6px 10px;
    font-size: 0.875rem;
}

.has-success .select2-container-fluid--default .select2-selection--single,
.parsley-select.parsley-success .select2-container-fluid--default .select2-selection--single {
    border-color: #3bb001;
}

.has-warning .select2-container-fluid--default .select2-selection--single {
    border-color: #ffc107;
}

.has-danger .select2-container-fluid--default .select2-selection--single,
.parsley-select.parsley-error .select2-container-fluid--default .select2-selection--single {
    border-color: #dc3545;
}

.select2-xs+.select2-container-fluid {
    font-size: 12px;
}

.select2-dropdown-xs .select2-results__option {
    font-size: 12px;
}

.select2-sm+.select2-container-fluid {
    font-size: 14px;
}

.select2-dropdown-sm .select2-results__option {
    font-size: 14px;
}

.select2-bd-0+.select2-container-fluid--default .select2-selection--single {
    border-width: 0;
}

.bg-gray+.select2-container-fluid--default .select2-selection--single {
    background-color: #455473;
}

.bg-gray+.select2-container-fluid--default .select2-selection--single .select2-selection__rendered {
    color: #cdd4e0;
}
</style>

@push('scripts')
    <script src="https://bootstrapdash.com/demo/azia/v1.0.0/lib/jquery/jquery.min.js"></script>
    <script src="https://bootstrapdash.com/demo/azia/v1.0.0/lib/select2/js/select2.min.js"></script>
@endpush


<x-www-uidemo>
            <div class="az-content-label mg-b-5">Select<span class="tx-sserif">2</span> Box</div>
            <p class="mg-b-20">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
            <div class="row row-sm mg-b-20" data-select2-id="22">
                <div class="col-lg-4" data-select2-id="21">
                  <p class="mg-b-10">Single Select</p>
                  <select class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
                    <option label="Choose one" data-select2-id="15"></option>
                    <option value="Firefox" data-select2-id="25">Firefox</option>
                    <option value="Chrome" data-select2-id="26">Chrome</option>
                    <option value="Safari" data-select2-id="27">Safari</option>
                    <option value="Opera" data-select2-id="28">Opera</option>
                    <option value="Internet Explorer" data-select2-id="29">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--below" dir="ltr" data-select2-id="14" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-2gkb-container-fluid"><span class="select2-selection__rendered" id="select2-2gkb-container-fluid" role="textbox" aria-readonly="true" title="Chrome">Chrome</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0" data-select2-id="39">
                  <p class="mg-b-10">Single Select with Search</p>
                  <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option label="Choose one" data-select2-id="3"></option>
                    <option value="Firefox" data-select2-id="40">Firefox</option>
                    <option value="Chrome" data-select2-id="41">Chrome</option>
                    <option value="Safari" data-select2-id="42">Safari</option>
                    <option value="Opera" data-select2-id="43">Opera</option>
                    <option value="Internet Explorer" data-select2-id="44">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--below" dir="ltr" data-select2-id="2" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-k7id-container-fluid"><span class="select2-selection__rendered" id="select2-k7id-container-fluid" role="textbox" aria-readonly="true" title="Chrome">Chrome</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                  <p class="mg-b-10">Single Select (Disabled)</p>
                  <select class="form-control select2 select2-hidden-accessible" disabled="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                    <option label="Choose one" data-select2-id="6"></option>
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--disabled" dir="ltr" data-select2-id="5" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-4tng-container-fluid"><span class="select2-selection__rendered" id="select2-4tng-container-fluid" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col-4 -->
              </div>

            <div class="row row-sm mg-b-20">
                <div class="col-lg-4" data-select2-id="31">
                  <p class="mg-b-10">Multiple Select</p>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    <option value="Firefox" data-select2-id="32">Firefox</option>
                    <option value="Chrome" data-select2-id="33">Chrome</option>
                    <option value="Safari" data-select2-id="34">Safari</option>
                    <option value="Opera" data-select2-id="35">Opera</option>
                    <option value="Internet Explorer" data-select2-id="36">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--below" dir="ltr" data-select2-id="8" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Safari" data-select2-id="37"><span class="select2-selection__choice__remove" role="presentation">×</span>Safari</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col -->

                <div class="col-lg-4">
                  <p class="mg-b-10">Multiple Select with Pre-Filled Input</p>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option value="Firefox" selected="" data-select2-id="11">Firefox</option>
                    <option value="Chrome" data-select2-id="46">Chrome</option>
                    <option value="Safari" data-select2-id="47">Safari</option>
                    <option value="Opera" data-select2-id="48">Opera</option>
                    <option value="Internet Explorer" data-select2-id="49">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--below" dir="ltr" data-select2-id="10" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Opera" data-select2-id="52"><span class="select2-selection__choice__remove" role="presentation">×</span>Opera</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col -->
                <div class="col-lg-4">
                  <p class="mg-b-10">Multiple Select (Disabled)</p>
                  <select class="form-control select2-no-search select2-hidden-accessible" multiple="" disabled="" data-select2-id="16" tabindex="-1" aria-hidden="true">
                    <option value="Firefox" selected="" data-select2-id="18">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select><span class="select2 select2-container-fluid select2-container-fluid--default select2-container-fluid--disabled select2-container-fluid--focus" dir="ltr" data-select2-id="17" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Firefox" data-select2-id="19"><span class="select2-selection__choice__remove" role="presentation">×</span>Firefox</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" disabled="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div><!-- col -->
            </div>

        </x-www-uidemo>
