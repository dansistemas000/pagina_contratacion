@if(!isset($block_main_info))
    @php( $block_main_info = "")
@endif
@if(!isset($block_status))
    @php( $block_status = "")
@endif
@if(!isset($block_adviser_number))
    @php( $block_adviser_number = "")
@endif
@if(!isset($block_email))
    @php( $block_email = "")
@endif
<div class="row">
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Nombre(s)</span>
            <input text-type="name" class="input-text validate-text" maxlength="50" 
            name="first-name" value="{{ $data_advisers->first_name }}" {{ $block_main_info }} required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Apellidos(s)</span>
            <input text-type="name" class="input-text validate-text" maxlength="50" 
            name="last-name" value="{{ $data_advisers->last_name }}" {{ $block_main_info }} required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Telefono</span>
            <input text-type="number" class="input-text validate-text" maxlength="20" 
            name="phone" value="{{ $data_advisers->phone }}" {{ $block_main_info }} required>
        </div>
	</div>
	<div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Correo electrónico</span>
            <input text-type="email" class="input-text validate-text" maxlength="100" 
            name="email" value="{{ $data_advisers->email }}" {{ $block_email }} required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Estatus</span>
            <select class="select advisers-status validate-select auto-select" 
            {{ $block_status }} data="{{ $data_advisers->status }}" name="status_id">
                <option value="0"></option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title input-title-top'>Sueños</span>
            <div class="dreams">
                <img class="gender" src="img/{{ $data_advisers->promotion_img }}">
                <strong>{{ $data_advisers->promotions }}</strong>
            </div>
        </div>
    </div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Numero de asesor</span>
            <input text-type="number" class="input-text validate-text adviser-num" maxlength="10" 
            name="agreement-num" value="{{ $data_advisers->agreement_num }}" 
            {{ $block_adviser_number }}>
        </div>
	</div>
</div>