<div class="row">
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric">
            <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Currency</label>
            <input type="text" class="form-control" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '€ ', 'placeholder': '0'" inputmode="numeric" style="text-align: right;">
            <span class="font-13 text-muted">e.g "€ 9,95"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Currency</label>
            <input type="text" class="form-control" data-inputmask="'alias': 'numeric', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" inputmode="numeric" style="text-align: right;">
            <span class="font-13 text-muted">e.g "$ 9,95"</span>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label class="form-label">License Plate</label>
            <input type="text" class="form-control" data-inputmask-mask="[9-]AAA-999" inputmode="text">
            <span class="font-13 text-muted">e.g "9-ABC-123"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Decimal</label>
            <input type="text" class="form-control" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" inputmode="numeric" style="text-align: right;">
            <span class="font-13 text-muted">e.g "123,456,789"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">IP Address</label>
            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" inputmode="numeric">
            <span class="font-13 text-muted">e.g "123.123.123.123"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="text" class="form-control" data-inputmask="'alias': 'email'" inputmode="email">
            <span class="font-13 text-muted">e.g "support@adminkit.io"</span>
        </div>
    </div>
</div>