<div class="row">
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>Acta de nacimiento</span>
                  <input type="file" name="birth-certificate" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->birth_certificate != "")
                        <div class="documents-file">
                        <img src="documents/{{ $advisers_documents->birth_certificate }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>INE</span>
                  <input type="file" name="ine" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->ine != "")
                        <div class="documents-file">
                        <img src="documents/{{ $advisers_documents->ine }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>Curp</span>
                  <input type="file" name="curp" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->curp != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->curp }}?{{ time() }}" 
                              onerror="img_error($(this))"/>
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>RFC</span>
                  <input type="file" name="rfc" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->rfc != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->rfc }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>Comprobante de domicilio</span>
                  <input type="file" name="proof-address" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->proof_address != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->proof_address }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>Estado de cuenta bancario</span>
                  <input type="file" name="account-status" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->account_status != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->account_status }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="input-container">
                  <span class='input-title input-title-top'>Carta responsiva</span>
                  <input type="file" name="responsive" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file" required format="jpg">
                  @if($advisers_documents->responsive != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->responsive }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div>
</div>
<div class="row">
      <div class="col-md-12"><hr></div>
      <div class="col-md-6">
            <div class="input-container">
                  <span class='input-title input-title-top'>Contrato</span>
                  <input type="file" name="agreement" accept='application/pdf' title="Buscar archivo" 
                  class="input-file"  format="pdf">
                  @if($advisers_documents->agreement != "")
                        @if(file_exists("documents/".$advisers_documents->agreement))
                              <div class="documents-file">
                                    <embed  src="documents/{{ $advisers_documents->agreement }}?{{ time() }}" type="application/pdf" />
                              </div>
                        @else
                              <img src="" 
                              onerror="img_error($(this))" />
                        @endif
                  @endif
            </div>
      </div>
      {{-- <div class="col-md-6">
            <div class="input-container">
                  <span class='input-title input-title-top'>Formato LanaApp</span>
                  <input type="file" name="lanaapp_format" accept='image/jpeg' title="Buscar archivo" 
                  class="input-file"  format="jpg">
                  @if($advisers_documents->lanaapp_format != "")
                        <div class="documents-file">
                              <img src="documents/{{ $advisers_documents->lanaapp_format }}?{{ time() }}" 
                              onerror="img_error($(this))" />
                        </div>
                  @endif
            </div>
      </div> --}}
</div>