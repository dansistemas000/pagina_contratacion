@if(!isset($block_branch_office))
    @php( $block_branch_office = "")
@endif
<div class="row">
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Sucursal</span>
            @if($block_branch_office == "")
                <select class="select validate-select select-branch-office branch-offices auto-select" 
                    data="{{ $data_advisers->branch_office }}" name="branch-office">
                    <option value="0"></option>
                </select>
            @else
                <select class="select validate-select branch-offices auto-select" 
                    data="{{ $data_advisers->branch_office }}" block name="branch-office">
                    <option value="0"></option>
                </select>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Estado de sucursal</span>
            <input text-type="name" class="input-text branch-office-state validate-text" maxlength="55" 
            name="branch-office-state" value="{{ $data_advisers->branch_office_state }}"
            disabled required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Distrito</span>
            <input text-type="name" class="input-text district-input validate-text" maxlength="55" 
            name="district" value="{{ $data_advisers->district }}" 
            disabled required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-container">
            <span class='input-title'>Dirección de sucursal</span>
            <input text-type="description" class="input-text branch-office-address" maxlength="750"
            name="branch-office-address" value="{{ $data_advisers->branch_office_address }}" 
            title="{{ $data_advisers->branch_office_address }}" readonly 
            data-toggle="tooltip" required>
        </div>
    </div>
</div>