<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>
basic
<label for="customRange1" class="form-label">Example range</label>
<input type="range" class="form-range" id="customRange1">

Disabled
<label for="disabledRange" class="form-label">Disabled range</label>
<input type="range" class="form-range" id="disabledRange" disabled>


Min and max
<label for="customRange2" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" id="customRange2">


Steps
<label for="customRange3" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">


<div class="mb-0">
    <label for="example-range" class="form-label">Range</label>
    <input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
</div>

        </x-www-uidemo>
