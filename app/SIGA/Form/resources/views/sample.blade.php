<div class="card">
    <div class="card-header"><strong>Basic Form</strong> Elements</div>
    <div class="card-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Static</label>
                <div class="col-md-9">
                    <p class="form-control-static">Username</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
                <div class="col-md-9">
                    <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text"><span class="help-block">This is a help text</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                <div class="col-md-9">
                    <input class="form-control" id="email-input" type="email" name="email-input" placeholder="Enter Email" autocomplete="email"><span class="help-block">Please enter your email</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="password-input">Password</label>
                <div class="col-md-9">
                    <input class="form-control" id="password-input" type="password" name="password-input" placeholder="Password" autocomplete="new-password"><span class="help-block">Please enter a complex password</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="date-input">Date Input</label>
                <div class="col-md-9">
                    <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block">Please enter a valid date</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                <div class="col-md-9">
                    <input class="form-control" id="disabled-input" type="text" name="disabled-input" placeholder="Disabled" disabled="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="Content.."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select1">Select</label>
                <div class="col-md-9">
                    <select class="form-control" id="select1" name="select1">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                <div class="col-md-9">
                    <select class="form-control form-control-lg" id="select2" name="select2">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                <div class="col-md-9">
                    <select class="form-control form-control-sm" id="select3" name="select3">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                <div class="col-md-9">
                    <select class="form-control" id="disabledSelect" disabled="">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                <div class="col-md-9">
                    <select class="form-control" id="multiple-select" name="multiple-select" size="5" multiple="">
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                        <option value="4">Option #4</option>
                        <option value="5">Option #5</option>
                        <option value="6">Option #6</option>
                        <option value="7">Option #7</option>
                        <option value="8">Option #8</option>
                        <option value="9">Option #9</option>
                        <option value="10">Option #10</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Radios</label>
                <div class="col-md-9 col-form-label">
                    <div class="form-check">
                        <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                        <label class="form-check-label" for="radio1">Option 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                        <label class="form-check-label" for="radio2">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                        <label class="form-check-label" for="radio3">Option 3</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Inline Radios</label>
                <div class="col-md-9 col-form-label">
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                        <label class="form-check-label" for="inline-radio1">One</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                        <label class="form-check-label" for="inline-radio2">Two</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                        <label class="form-check-label" for="inline-radio3">Three</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Checkboxes</label>
                <div class="col-md-9 col-form-label">
                    <div class="form-check checkbox">
                        <input class="form-check-input" id="check1" type="checkbox" value="">
                        <label class="form-check-label" for="check1">Option 1</label>
                    </div>
                    <div class="form-check checkbox">
                        <input class="form-check-input" id="check2" type="checkbox" value="">
                        <label class="form-check-label" for="check2">Option 2</label>
                    </div>
                    <div class="form-check checkbox">
                        <input class="form-check-input" id="check3" type="checkbox" value="">
                        <label class="form-check-label" for="check3">Option 3</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                <div class="col-md-9 col-form-label">
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                        <label class="form-check-label" for="inline-checkbox1">One</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                        <label class="form-check-label" for="inline-checkbox2">Two</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                        <label class="form-check-label" for="inline-checkbox3">Three</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="file-input">File input</label>
                <div class="col-md-9">
                    <input id="file-input" type="file" name="file-input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                <div class="col-md-9">
                    <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
        <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
    </div>
</div>

<div class="form-row">
    <div class="col-3">
        <label>Single Select</label>
        <select class="c-multi-select" id="select-1" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select"><span class="c-multi-select-selection" style="display: none;">duplicate</span><input class="c-multi-select-search" placeholder="duplicate"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0" style="">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0" style="">bug</div><div class="c-multi-select-option c-multi-selected" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup" style=""><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0" style="">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0" style="">bug2</div></div></div></div>
    </div>
    <div class="col-3">
        <label>Multiple Select - text selection</label>
        <select class="c-multi-select" id="select-2" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection" style="">duplicate</span><input class="c-multi-select-search" placeholder="" size="1"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0" style="">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0" style="">bug</div><div class="c-multi-select-option c-multi-selected" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup" style=""><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0" style="">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0" style="">bug2</div></div></div></div>
    </div>
    <div class="col-3">
        <label>Multiple Select - tag selection</label>
        <select class="c-multi-select" id="select-3" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-selection-tags"><span class="c-multi-select-selection" style=""><span class="c-multi-select-tag" data-value="2">duplicate<span class="c-multi-select-tag-delete close" aria-label="Close"><span aria-hidden="true">×</span></span></span></span><input class="c-multi-select-search" placeholder="" size="2"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0" style="display: none;">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0" style="display: none;">bug</div><div class="c-multi-select-option c-multi-selected" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup" style="display: none;"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0" style="display: none;">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0" style="display: none;">bug2</div></div></div></div>
    </div>
    <div class="col-3">
        <label>Multiple Select - counter selection</label>
        <select class="c-multi-select" id="select-4" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection" style="display: none;">2 item(s) selected</span><input class="c-multi-select-search" placeholder="2 item(s) selected"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0" style="display: none;">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0" style="display: none;">bug</div><div class="c-multi-select-option c-multi-selected" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option c-multi-selected" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup" style="display: none;"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0" style="display: none;">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0" style="display: none;">bug2</div></div></div></div>
    </div>
</div>
