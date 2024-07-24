<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>

    .select2-container-fluid {
        width: 100% !important
    }

    .select2-container-fluid .select2-selection--single {
        border: 1px solid #dee2e6;
        height: calc(1.5em + (.9rem + 2px));
        background-color: #fff;
        outline: 0
    }

    .select2-container-fluid .select2-selection--single .select2-selection__rendered {
        line-height: 36px;
        padding-left: 12px;
        color: #6c757d
    }

    .select2-container-fluid .select2-selection--single .select2-selection__arrow {
        height: 34px;
        width: 34px;
        right: 3px
    }

    .select2-container-fluid .select2-selection--single .select2-selection__arrow b {
        border-color: #98a6ad transparent transparent transparent;
        border-width: 6px 6px 0 6px
    }

    .select2-container-fluid--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #98a6ad transparent !important;
        border-width: 0 6px 6px 6px !important
    }

    .select2-results__option {
        padding: 6px 12px
    }

    .select2-dropdown {
        border: 1px solid #e7ebf0;
        -webkit-box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);
        box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);
        background-color: #fff
    }

    .select2-container-fluid--default .select2-search--dropdown {
        padding: 10px;
        background-color: #fff
    }

    .select2-container-fluid--default .select2-search--dropdown .select2-search__field {
        outline: 0;
        border: 1px solid #dee2e6;
        background-color: #fff;
        color: #6c757d
    }

    .select2-container-fluid--default .select2-results__option--highlighted[aria-selected] {
        background-color: #727cf5
    }

    .select2-container-fluid--default .select2-results__option[aria-selected=true] {
        background-color: #fff;
        color: #313a46
    }

    .select2-container-fluid--default .select2-results__option[aria-selected=true]:hover {
        background-color: #727cf5;
        color: #fff
    }

    .select2-container-fluid .select2-selection--multiple {
        min-height: calc(1.5em + (.9rem + 2px));
        border: 1px solid #dee2e6 !important;
        background-color: #fff
    }

    .select2-container-fluid .select2-selection--multiple .select2-selection__rendered {
        padding: 1px 10px
    }

    .select2-container-fluid .select2-selection--multiple .select2-search__field {
        border: 0;
        color: #6c757d
    }

    .select2-container-fluid .select2-selection--multiple .select2-selection__choice {
        background-color: #727cf5;
        border: none;
        color: #fff;
        border-radius: 3px;
        padding: 0 7px;
        margin-top: 6px
    }

    .select2-container-fluid .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff;
        margin-right: 5px
    }

    .select2-container-fluid .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #fff
    }

    .select2-container-fluid .select2-search--inline .select2-search__field {
        margin-top: 7px
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__arrow {
        right: 1px;
        left: auto
    }

    [dir=rtl] .select2-container-fluid--open .select2-dropdown {
        left: auto;
        right: 0
    }
    .select2-container-fluid {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle
    }

    .select2-container-fluid .select2-selection--single {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 28px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none
    }

    .select2-container-fluid .select2-selection--single .select2-selection__rendered {
        display: block;
        padding-left: 8px;
        padding-right: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .select2-container-fluid .select2-selection--single .select2-selection__clear {
        position: relative
    }

    .select2-container-fluid[dir=rtl] .select2-selection--single .select2-selection__rendered {
        padding-right: 8px;
        padding-left: 20px
    }

    .select2-container-fluid .select2-selection--multiple {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        min-height: 32px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none
    }

    .select2-container-fluid .select2-selection--multiple .select2-selection__rendered {
        display: inline-block;
        overflow: hidden;
        padding-left: 8px;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .select2-container-fluid .select2-search--inline {
        float: left
    }

    .select2-container-fluid .select2-search--inline .select2-search__field {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: none;
        font-size: 100%;
        margin-top: 5px;
        padding: 0
    }

    .select2-container-fluid .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
        -webkit-appearance: none
    }

    .select2-dropdown {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: block;
        position: absolute;
        left: -100000px;
        width: 100%;
        z-index: 1051
    }

    .select2-results {
        display: block
    }

    .select2-results__options {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .select2-results__option {
        padding: 6px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none
    }

    .select2-results__option[aria-selected] {
        cursor: pointer
    }

    .select2-container-fluid--open .select2-dropdown {
        left: 0
    }

    .select2-container-fluid--open .select2-dropdown--above {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .select2-container-fluid--open .select2-dropdown--below {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .select2-search--dropdown {
        display: block;
        padding: 4px
    }

    .select2-search--dropdown .select2-search__field {
        padding: 4px;
        width: 100%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
        -webkit-appearance: none
    }

    .select2-search--dropdown.select2-search--hide {
        display: none
    }

    .select2-close-mask {
        border: 0;
        margin: 0;
        padding: 0;
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        min-height: 100%;
        min-width: 100%;
        height: auto;
        width: auto;
        opacity: 0;
        z-index: 99;
        background-color: #fff
    }

    .select2-hidden-accessible {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
        white-space: nowrap !important
    }

    .select2-container-fluid--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: 700
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__placeholder {
        color: #999
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px
    }

    .select2-container-fluid--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0
    }

    .select2-container-fluid--default[dir=rtl] .select2-selection--single .select2-selection__clear {
        float: left
    }

    .select2-container-fluid--default[dir=rtl] .select2-selection--single .select2-selection__arrow {
        left: 1px;
        right: auto
    }

    .select2-container-fluid--default.select2-container-fluid--disabled .select2-selection--single {
        background-color: #eee;
        cursor: default
    }

    .select2-container-fluid--default.select2-container-fluid--disabled .select2-selection--single .select2-selection__clear {
        display: none
    }

    .select2-container-fluid--default.select2-container-fluid--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #888 transparent;
        border-width: 0 4px 5px 4px
    }

    .select2-container-fluid--default .select2-selection--multiple {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__rendered {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        padding: 0 5px;
        width: 100%
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__rendered li {
        list-style: none
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: 700;
        margin-top: 5px;
        margin-right: 10px;
        padding: 1px
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__choice {
        background-color: #e4e4e4;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #999;
        cursor: pointer;
        display: inline-block;
        font-weight: 700;
        margin-right: 2px
    }

    .select2-container-fluid--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #333
    }

    .select2-container-fluid--default[dir=rtl] .select2-selection--multiple .select2-search--inline,
    .select2-container-fluid--default[dir=rtl] .select2-selection--multiple .select2-selection__choice {
        float: right
    }

    .select2-container-fluid--default[dir=rtl] .select2-selection--multiple .select2-selection__choice {
        margin-left: 5px;
        margin-right: auto
    }

    .select2-container-fluid--default[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove {
        margin-left: 2px;
        margin-right: auto
    }

    .select2-container-fluid--default.select2-container-fluid--focus .select2-selection--multiple {
        border: solid #000 1px;
        outline: 0
    }

    .select2-container-fluid--default.select2-container-fluid--disabled .select2-selection--multiple {
        background-color: #eee;
        cursor: default
    }

    .select2-container-fluid--default.select2-container-fluid--disabled .select2-selection__choice__remove {
        display: none
    }

    .select2-container-fluid--default.select2-container-fluid--open.select2-container-fluid--above .select2-selection--multiple,
    .select2-container-fluid--default.select2-container-fluid--open.select2-container-fluid--above .select2-selection--single {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .select2-container-fluid--default.select2-container-fluid--open.select2-container-fluid--below .select2-selection--multiple,
    .select2-container-fluid--default.select2-container-fluid--open.select2-container-fluid--below .select2-selection--single {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .select2-container-fluid--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #aaa
    }

    .select2-container-fluid--default .select2-search--inline .select2-search__field {
        background: 0 0;
        border: none;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-appearance: textfield
    }

    .select2-container-fluid--default .select2-results>.select2-results__options {
        max-height: 200px;
        overflow-y: auto
    }

    .select2-container-fluid--default .select2-results__option[role=group] {
        padding: 0
    }

    .select2-container-fluid--default .select2-results__option[aria-disabled=true] {
        color: #999
    }

    .select2-container-fluid--default .select2-results__option[aria-selected=true] {
        background-color: #ddd
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option {
        padding-left: 1em
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__group {
        padding-left: 0
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -1em;
        padding-left: 2em
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -2em;
        padding-left: 3em
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -3em;
        padding-left: 4em
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -4em;
        padding-left: 5em
    }

    .select2-container-fluid--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -5em;
        padding-left: 6em
    }

    .select2-container-fluid--default .select2-results__option--highlighted[aria-selected] {
        background-color: #5897fb;
        color: #fff
    }

    .select2-container-fluid--default .select2-results__group {
        cursor: default;
        display: block;
        padding: 6px
    }

    .select2-container-fluid--classic .select2-selection--single {
        background-color: #f7f7f7;
        border: 1px solid #aaa;
        border-radius: 4px;
        outline: 0;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #fff), to(#eee));
        background-image: linear-gradient(to bottom, #fff 50%, #eee 100%);
        background-repeat: repeat-x
    }

    .select2-container-fluid--classic .select2-selection--single:focus {
        border: 1px solid #5897fb
    }

    .select2-container-fluid--classic .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px
    }

    .select2-container-fluid--classic .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: 700;
        margin-right: 10px
    }

    .select2-container-fluid--classic .select2-selection--single .select2-selection__placeholder {
        color: #999
    }

    .select2-container-fluid--classic .select2-selection--single .select2-selection__arrow {
        background-color: #ddd;
        border: none;
        border-left: 1px solid #aaa;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        height: 26px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eee), to(#ccc));
        background-image: linear-gradient(to bottom, #eee 50%, #ccc 100%);
        background-repeat: repeat-x
    }

    .select2-container-fluid--classic .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0
    }

    .select2-container-fluid--classic[dir=rtl] .select2-selection--single .select2-selection__clear {
        float: left
    }

    .select2-container-fluid--classic[dir=rtl] .select2-selection--single .select2-selection__arrow {
        border: none;
        border-right: 1px solid #aaa;
        border-radius: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        left: 1px;
        right: auto
    }

    .select2-container-fluid--classic.select2-container-fluid--open .select2-selection--single {
        border: 1px solid #5897fb
    }

    .select2-container-fluid--classic.select2-container-fluid--open .select2-selection--single .select2-selection__arrow {
        background: 0 0;
        border: none
    }

    .select2-container-fluid--classic.select2-container-fluid--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #888 transparent;
        border-width: 0 4px 5px 4px
    }

    .select2-container-fluid--classic.select2-container-fluid--open.select2-container-fluid--above .select2-selection--single {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), color-stop(50%, #eee));
        background-image: linear-gradient(to bottom, #fff 0, #eee 50%);
        background-repeat: repeat-x
    }

    .select2-container-fluid--classic.select2-container-fluid--open.select2-container-fluid--below .select2-selection--single {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eee), to(#fff));
        background-image: linear-gradient(to bottom, #eee 50%, #fff 100%);
        background-repeat: repeat-x
    }

    .select2-container-fluid--classic .select2-selection--multiple {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text;
        outline: 0
    }

    .select2-container-fluid--classic .select2-selection--multiple:focus {
        border: 1px solid #5897fb
    }

    .select2-container-fluid--classic .select2-selection--multiple .select2-selection__rendered {
        list-style: none;
        margin: 0;
        padding: 0 5px
    }

    .select2-container-fluid--classic .select2-selection--multiple .select2-selection__clear {
        display: none
    }

    .select2-container-fluid--classic .select2-selection--multiple .select2-selection__choice {
        background-color: #e4e4e4;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px
    }

    .select2-container-fluid--classic .select2-selection--multiple .select2-selection__choice__remove {
        color: #888;
        cursor: pointer;
        display: inline-block;
        font-weight: 700;
        margin-right: 2px
    }

    .select2-container-fluid--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #555
    }

    .select2-container-fluid--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice {
        float: right;
        margin-left: 5px;
        margin-right: auto
    }

    .select2-container-fluid--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove {
        margin-left: 2px;
        margin-right: auto
    }

    .select2-container-fluid--classic.select2-container-fluid--open .select2-selection--multiple {
        border: 1px solid #5897fb
    }

    .select2-container-fluid--classic.select2-container-fluid--open.select2-container-fluid--above .select2-selection--multiple {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .select2-container-fluid--classic.select2-container-fluid--open.select2-container-fluid--below .select2-selection--multiple {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .select2-container-fluid--classic .select2-search--dropdown .select2-search__field {
        border: 1px solid #aaa;
        outline: 0
    }

    .select2-container-fluid--classic .select2-search--inline .select2-search__field {
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .select2-container-fluid--classic .select2-dropdown {
        background-color: #fff;
        border: 1px solid transparent
    }

    .select2-container-fluid--classic .select2-dropdown--above {
        border-bottom: none
    }

    .select2-container-fluid--classic .select2-dropdown--below {
        border-top: none
    }

    .select2-container-fluid--classic .select2-results>.select2-results__options {
        max-height: 200px;
        overflow-y: auto
    }

    .select2-container-fluid--classic .select2-results__option[role=group] {
        padding: 0
    }

    .select2-container-fluid--classic .select2-results__option[aria-disabled=true] {
        color: grey
    }

    .select2-container-fluid--classic .select2-results__option--highlighted[aria-selected] {
        background-color: #3875d7;
        color: #fff
    }

    .select2-container-fluid--classic .select2-results__group {
        cursor: default;
        display: block;
        padding: 6px
    }

    .select2-container-fluid--classic.select2-container-fluid--open .select2-dropdown {
        border-color: #5897fb
    }

</style>

<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            Select2
                        </x-card-header>
                        <x-card-body>
                            <p class="mb-1 fw-bold text-muted">Single Select</p>
                            <p class="text-muted font-14">
                                Select2 can take a regular select box like this...
                            </p>


                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                            <span class="select2 select2-container-fluid select2-container-fluid--default" dir="ltr" data-select2-id="2" style="width: 754.5px;">
                                <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-l89j-container-fluid">
                                        <span class="select2-selection__rendered" id="select2-l89j-container-fluid" role="textbox" aria-readonly="true" title="Select">Select</span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                    </span>
                                </span>
                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                            </span>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>
                            <p class="mb-1 fw-bold text-muted">Multiple Select</p>
                                    <p class="text-muted font-14">
                                        Select2 can take a regular select box like this...
                                    </p>

                                    <select class="select2 form-control select2-multiple select2-hidden-accessible" data-toggle="select2" multiple="" data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select><span class="select2 select2-container-fluid select2-container-fluid--default" dir="ltr" data-select2-id="5" style="width: 754.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Choose ..." style="width: 732.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>
        </x-www-uidemo>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
