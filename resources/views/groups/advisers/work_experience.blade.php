@php
    $session = \Session::get('fuerza_maestra_session_user');
    $group_id = $session["group_id"];

    if(!isset($block_experience)){
        $block_experience = "";
    }
    $hidden = "d-none";
    $hidden_link = "";
    $hidden_container = "";
    $checkbox_experience = true;
    $text_job = "Agregar otro empleo";
    $arrows = "fa-angle-double-down";
    
    if($data_advisers->company_name_2 != ""){
        $hidden = "";
        $hidden_link = "d-none";
    }

 
    if($group_id == 3){
        if($data_advisers->work_experience != 1 && $data_advisers->status_id != 10){
            // $hidden_container = "d-none";
            $checkbox_experience = false;
        }
    }else{
        
        if($data_advisers->company_name_2 != ""){
            $text_job = "Quitar empleo";
            $arrows = "fa-angle-double-up";
        }
        
        $hidden_link = "";
        if($data_advisers->work_experience != 1){
            // $hidden_container = "d-none";
            $checkbox_experience = false;
        }
    }

    if($block_experience != ""){
        $hidden_link = "d-none";
    }
    
@endphp

<div class="row">
    {{--<div class="col-md-12">
        <h5>¿Tiene experiencia laboral?</h5>
    </div>
     <div class="col-md-12">
        <div class="onoffswitch1">
            @if($checkbox_experience)
                <input type="checkbox" name="work-experience" 
                class="onoffswitch1-checkbox checkbox-experience" id="experience" {{ $block_experience }} checked>
            @else
                <input type="checkbox" name="work-experience" 
                class="onoffswitch1-checkbox checkbox-experience" id="experience" {{ $block_experience }}>
            @endif
            <label class="onoffswitch1-label" for="experience">
                <span class="onoffswitch1-switch"></span>
                <span class="onoffswitch1-inner"></span>
            </label>
        </div>
    </div> --}}
</div>
<div class="container-experience {{ $hidden_container }}">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <h6>Último empleo:</h6>
        </div>
    	<div class="col-md-8">
            <div class="input-container">
                <span class='input-title'>Nombre compañia</span>
                <input text-type="description" class="input-text validate-text" maxlength="50" name="company-name" value="{{ $data_advisers->company_name }}" required {{ $block_experience }}>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <span class='input-title'>Tel. Compañia</span>
                <input text-type="number" class="input-text validate-text" maxlength="15" name="company-tel" value="{{ $data_advisers->company_tel }}" required {{ $block_experience }}>
            </div>
        </div>
        <div class="col-md-8">
            <div class="input-container">
                <span class='input-title'>Puesto desempeñado</span>
                <input text-type="description" class="input-text validate-text" maxlength="50" name="company-job" value="{{ $data_advisers->company_job }}" required {{ $block_experience }}>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <span class='input-title'>Tiempo que prestó sus servicios</span>
                <input text-type="description" class="input-text validate-text" maxlength="40" name="company-job-time" value="{{ $data_advisers->company_job_time }}" required {{ $block_experience }}>
            </div>
        </div>
        <div class="col-md-4">
            ¿Se puede solicitar informes de usted?
        </div>
        <div class="col-md-4">
            <div class="onoffswitch1">
                @if($data_advisers->request_reports == 1)
                    <input type="checkbox" name="request-reports" 
                    class="onoffswitch1-checkbox" id="info" checked {{ $block_experience }}>
                @else
                    <input type="checkbox" name="request-reports" 
                    class="onoffswitch1-checkbox" id="info" {{ $block_experience }}>
                @endif
                <label class="onoffswitch1-label" for="info">
                    <span class="onoffswitch1-switch"></span>
                    <span class="onoffswitch1-inner"></span>
                </label>
            </div>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-12">
            <div class="input-container">
                <span class='input-title'>Motivo de su separación</span>
                <textarea text-type="description" class="input-text validate-text" maxlength="200" name="parting-reason" required {{ $block_experience }}>{{ $data_advisers->parting_reason }}</textarea>
            </div>
        </div>
        <div class="col-md-12 {{ $hidden_link }}">
            <center><a href="#" class="add-work-experience link"><strong><span class="fa {{ $arrows }}"></span>&nbsp;<b>{{ $text_job }}</b>&nbsp;<span class="fa {{ $arrows }}"></span></strong></a></center>
        </div>
        <div class="col-md-12 other-experience {{ $hidden }}">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <h6>Empleo anterior al último:</h6>
                </div>
                <div class="col-md-8">
                    <div class="input-container">
                        <span class='input-title'>Nombre compañia</span>
                        <input text-type="description" class="input-text validate-text" maxlength="50" name="company-name-2" value="{{ $data_advisers->company_name_2 }}" required {{ $block_experience }}>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-container">
                        <span class='input-title'>Tel. Compañia</span>
                        <input text-type="number" class="input-text validate-text" maxlength="15" name="company-tel-2" value="{{ $data_advisers->company_tel_2 }}" required {{ $block_experience }}>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="input-container">
                        <span class='input-title'>Puesto desempeñado</span>
                        <input text-type="description" class="input-text validate-text" maxlength="50" name="company-job-2" value="{{ $data_advisers->company_job_2 }}" required {{ $block_experience }}>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-container">
                        <span class='input-title'>Tiempo que prestó sus servicios</span>
                        <input text-type="description" class="input-text validate-text" maxlength="40" name="company-job-time-2" value="{{ $data_advisers->company_job_time_2 }}" required {{ $block_experience }}>
                    </div>
                </div>
                <div class="col-md-4">
                    ¿Se puede solicitar informes de usted?
                </div>
                <div class="col-md-4">
                    <div class="onoffswitch1">
                        @if($data_advisers->request_reports_2 == 1)
                            <input type="checkbox" name="request-reports-2" 
                            class="onoffswitch1-checkbox" id="info-2" checked {{ $block_experience }}>
                        @else
                            <input type="checkbox" name="request-reports-2" 
                            class="onoffswitch1-checkbox" id="info-2" {{ $block_experience }}>
                        @endif
                        <label class="onoffswitch1-label" for="info-2">
                            <span class="onoffswitch1-switch"></span>
                            <span class="onoffswitch1-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-12">
                    <div class="input-container">
                        <span class='input-title'>Motivo de su separación</span>
                        <textarea text-type="description" class="input-text validate-text" maxlength="200" name="parting-reason-2" required {{ $block_experience }}>{{ $data_advisers->parting_reason_2 }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
