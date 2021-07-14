@if(!isset($block_extra))
    @php( $block_extra = "")
@endif
@if(!isset($postal_code))
    @php( $postal_code = "")
@endif
<div class="row">
    <div class="col-md-12">
        <div class="address-process">
            <i class='fa fa-spinner fa-pulse'></i>
            <span>Procesando...</span>
        </div> 
    </div>
	<div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Código postal</span>
            <input text-type="number" class="input-text postal validate-text" maxlength="5"name="postal-code" value="{{ $data_advisers->postal_code }}" {{ $block_extra }} required {{ $postal_code }}>
            @if($postal_code == "")
                <button class="fa fa-search icon-on-input postal-code" title="Buscar dirección" aria-hidden="true"></button>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Estado</span>
            <input text-type="name" class="input-text validate-text state-input" maxlength="75" 
            name="state" value="{{ $data_advisers->state }}" readonly required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Delegación o municipio</span>
            <input text-type="description" class="input-text validate-text town-input" maxlength="100" 
            name="town" value="{{ $data_advisers->town }}" readonly required>
        </div>
    </div>
    <div class="col-md-8">
        <div class="input-container">
            <span class='input-title'>Colonia</span>
            @if($block_extra == "")
                <select class="select validate-select colony auto-select" 
            data="{{ $data_advisers->colony }}" name="colony">
                <option value="0"></option>
            </select>
            @else
                <select class="select validate-select colony auto-select" 
            data="{{ $data_advisers->colony }}" block name="colony">
                <option value="0"></option>
            </select>
            @endif
        </div>
    </div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Calle</span>
            <input text-type="description" class="input-text validate-text" maxlength="100" 
            name="street" value="{{ $data_advisers->street }}" {{ $block_extra }} required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Número exterior</span>
            <input text-type="description" class="input-text validate-text" maxlength="20" 
            name="outside-number" value="{{ $data_advisers->outside_number }}" {{ $block_extra }}>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Número interior</span>
            <input text-type="description" class="input-text validate-text" maxlength="20" 
            name="inside-number" value="{{ $data_advisers->inside_number }}" {{ $block_extra }}>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Seleccione su sexo</span>
            <select class="select validate-select auto-select" {{ $block_extra }}
                data="{{ $data_advisers->gender }}"  name="gender">
                <option value="0"></option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
            </select>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Seleccione su estado civil</span>
            <select class="select validate-select auto-select" {{ $block_extra }}
                data="{{ $data_advisers->marital_status }}" name="marital-status">
                <option value="0"></option>
                <option value="Soltero(a)">Soltero(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viudo(a)">Viudo(a)</option>
            </select>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Fecha de nacimiento</span>
            <input text-type="description" class="input-text datepicker validate-text" 
            maxlength="20" name="birth-date" value="{{ $data_advisers->birth_date }}"
            required readonly {{ $block_extra }}>
        </div>
	</div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Lugar de nacimiento</span>
            <input text-type="description" class="input-text validate-text" 
            maxlength="20" name="birth-place" value="{{ $data_advisers->birth_place }}"
            required {{ $block_extra }}>
        </div>
    </div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>RFC</span>
            <input text-type="alpha-numeric" class="input-text validate-text" maxlength="20" 
            name="rfc" value="{{ $data_advisers->rfc }}" {{ $block_extra }} required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>CURP</span>
            <input text-type="alpha-numeric" class="input-text validate-text" maxlength="50" 
            name="curp" value="{{ $data_advisers->curp }}" {{ $block_extra }} required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Nacionalidad</span>
            <input text-type="name" class="input-text validate-text" maxlength="50" 
            name="nationality" value="{{ $data_advisers->nationality }}" {{ $block_extra }} 
            required>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Talla de playera</span>
            <select class="select validate-select auto-select" {{ $block_extra }}
            data="{{ $data_advisers->size }}" name="size">
                <option value="0"></option>
                <option value="Chica">Chica</option>
                <option value="Mediana">Mediana</option>
                <option value="Grande">Grande</option>
                <option value="Extra Grande">Extra Grande</option>
            </select>
        </div>
	</div>
	<div class="col-md-4">
		<div class="input-container">
            <span class='input-title'>Tipo de contacto</span>
            <select class="select validate-select auto-select" {{ $block_extra }}
                data="{{ $data_advisers->contact }}" name="contact">
                <option value="0"></option>
                <option value="Outsourcing">Outsourcing</option>
                <option value="Bolsa de trabajo electrónica">Bolsa de trabajo electrónica</option>
                <option value="Reclutador">Reclutador</option>
                <option value="Volante">Volante</option>
                <option value="Poster sucursal">Poster sucursal</option>
                <option value="Poster sucursal">Referenciado por Asesor</option>
                <option value="Poster sucursal">Referenciado por Coordinador</option>
                <option value="facebook">Facebook</option>
                <option value="google">Google</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
	</div>
        <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Experiencia en ventas</span>
            <select class="select validate-select auto-select" 
            data="{{ $data_advisers->experience }}"  name="experience">
                <option value="0"></option>
                <option value="Sin experiencia">Sin experiencia</option>
                <option value="Con experiencia en ventas">Con experiencia en ventas</option>
                <option value="Con experiencia en el giro">Con experiencia en el giro</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>No. Hijos</span>
            <input text-type="number" class="input-text validate-text" maxlength="2" 
            name="sons" value="{{ $data_advisers->sons }}"  required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-container">
            <span class='input-title'>Escolaridad</span>
            <select class="select validate-select auto-select" 
            data="{{ $data_advisers->scholarship }}"  name="scholarship">
                <option value="0"></option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Bachillerato">Bachillerato</option>
                <option value="Licenciatura">Licenciatura</option>
            </select>
        </div>
    </div>
</div>