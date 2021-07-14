@if(!isset($block_expenses))
	@php( $block_expenses = "")
@endif
<div class="row">
	<div class="col-md-6">
		<div class="expenses">
			<div class="well">
				<h6>Dependientes económicos</h6>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de esposo(a)</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_spouse }}" 
	                    name="monthly-spouse" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Colegiatura de hijo(s)</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->children_college }}"
	                    name="children-college" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de hijo(s)</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_children }}" 
	                    name="monthly-children" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de padre(s)</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_parents }}" 
	                    name="monthly-parents" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de otro(s)</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_dependents_other }}" 
	                    name="monthly-dependents-other" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<h5>Subtotal: $<span class="subtotal-sum">0</span></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expenses">
			<div class="well">
				<h6>Vivienda</h6>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de hipoteca</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_mortgage }}"
	                    name="monthly-mortgage" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Habitantes en su casa</span>
	                    <input text-type="number" class="input-text validate-text" 
	                    maxlength="10" value="{{ $data_advisers->inhabitants_home }}"
	                    name="inhabitants-home" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de mantenimiento</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_maintenance }}" 
	                    name="monthly-maintenance" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual extra de su hogar</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_home_extra }}" 
	                    name="monthly-home-extra" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-12">
					<h5>Subtotal: $<span class="subtotal-sum">0</span></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="expenses">
			<div class="well">
				<h6>Gastos deudas y ahorro</h6>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de alimentación</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_foods }}" 
	                    name="monthly-foods" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de gas</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_gas }}"
	                    name="monthly-gas" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de agua</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_water }}"
	                    name="monthly-water" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de luz</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_light }}"
	                    name="monthly-light" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de teléfono</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10"  value="{{ $data_advisers->monthly_phone }}"
	                    name="monthly-phone" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de predial</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_predial }}"
	                    name="monthly-predial" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de gasolina</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_gasoline }}"
	                    name="monthly-gasoline" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de transporte</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_transport }}" 
	                    name="monthly-transport" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de TV de paga</span>
	                    <input text-type="decimal" class="input-text validate-text sum" 
	                    maxlength="10" value="{{ $data_advisers->monthly_tv }}"
	                    name="monthly-tv" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Gasto mensual de otros</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_extra }}"
	                    name="monthly-extra" {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6">
					<div class="input-container">
	                    <span class='input-title'>Ahorro mensual</span>
	                    <input text-type="decimal" class="input-text validate-text sum"
	                    maxlength="10" value="{{ $data_advisers->monthly_savings }}"
	                    name="monthly-savings"  {{ $block_expenses }} required>
	                </div>
				</div>
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<h5>Subtotal: $<span class="subtotal-sum">0</span></h5>
				</div>
				<div class="col-md-6">
					<h5>Total de todos los gastos: $<span class="total-sum">0</span></h5>
				</div>
			</div>
		</div>
	</div>
</div>